<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\PublisherResource;
use App\Http\Resources\DeveloperResource;
use App\Http\Resources\SerieResource;
use App\Http\Resources\FranchiseResource;
use App\Http\Resources\GenreResource;
use App\Http\Resources\ImageResource;
use App\Http\Resources\VideoResource;

class GameResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'ean' => $this->ean,
            'active' => $this->active,
            'tba' => $this->tba,
            'tbd' => $this->tbd,
            'q1' => $this->q1,
            'q2' => $this->q2,
            'q3' => $this->q3,
            'q4' => $this->q4,
            'release_day' => $this->release_day,
            'release_month' => $this->release_month,
            'release_year' => $this->release_year,
            'created_at' => $this->created_at,

            // 'publisher' => new PublisherResource($this->when($request->has('inlcudes.publisher'), $this->publisher)),
            'publisher' => new PublisherResource($this->publisher),
            'developer' => new DeveloperResource($this->developer),
            'serie' => new SerieResource($this->serie),
            'franchise' => new FranchiseResource($this->franchise),
            'image' => new ImageResource($this->image),

            'genres' => GenreResource::collection($this->genres),
            'platform' => PlatformResource::collection($this->platforms),

            'images' => ImageResource::collection($this->images),
            'videos' => VideoResource::collection($this->videos),
        ];
    }
}
