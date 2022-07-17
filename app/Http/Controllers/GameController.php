<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Game;

use App\Http\Resources\GameResource;

class GameController extends Controller
{
    public function search(Request $request){
        $request->validate([
            'genres'        => 'nullable | array',
            'genres.*'      => 'nullable | integer',
            'platforms'     => 'nullable | array',
            'platforms.*'   => 'nullable | integer',
            'series'        => 'nullable | array',
            'series.*'      => 'nullable | integer',
            'franchises'    => 'nullable | array',
            'franchises.*'  => 'nullable | integer',
            'search'        => 'nullable | string',
            'data'          => 'nullable | boolean'
        ]);

        $games = Game::orderBy('id')->paginate();

        if($request->search)
        {
           $games = Game::where('title', 'ILIKE', '%'.$request->search.'%')->orderBy('id')->paginate();
        }

        if($request->all)
        {
            $games = Game::with(['genres' => function ($query) use ($request) {
                $query->whereIn('id', $request->genres);
            }])
            ->with(['platforms' => function ($query) use ($request) {
                $query->whereIn('id', $request->platforms);
                $query->where('active', true);
            }])
            ->with(['serie' => function ($query) use ($request) {
                $query->whereIn('id', $request->series);
            }])
            ->with(['franchise' => function ($query) use ($request) {
                $query->whereIn('id', $request->franchises);
            }])
            ->whereHas('genres', function ($query) use ($request){
                $query->whereIn('id', $request->genres);
            })
            ->orWhereHas('platforms', function ($query) use ($request){
                $query->whereIn('id', $request->platforms);
                $query->where('active', true);
            })
            ->orWhereHas('serie', function ($query) use ($request){
                $query->whereIn('id', $request->series);
            })
            ->orWhereHas('franchise', function ($query) use ($request){
                $query->whereIn('id', $request->franchises);
            })
            ->orderBy('id')
            ->paginate();
        }

        if($request->all && $request->search)
        {
            $games = Game::where('title', 'ILIKE', '%'.$request->search.'%')
            ->with(['genres' => function ($query) use ($request) {
                $query->whereIn('id', $request->genres);
            }])
            ->with(['platforms' => function ($query) use ($request) {
                $query->whereIn('id', $request->platforms);
            }])
            ->with(['serie' => function ($query) use ($request) {
                $query->whereIn('id', $request->series);
            }])
            ->with(['franchise' => function ($query) use ($request) {
                $query->whereIn('id', $request->franchises);
            }])
            ->whereHas('genres', function ($query) use ($request){
                $query->whereIn('id', $request->genres);
            })
            ->orWhereHas('platforms', function ($query) use ($request){
                $query->whereIn('id', $request->platforms);
            })
            ->orWhereHas('serie', function ($query) use ($request){
                $query->whereIn('id', $request->series);
            })
            ->orWhereHas('franchise', function ($query) use ($request){
                $query->whereIn('id', $request->franchises);
            })
            ->orderBy('id')
            ->paginate();
        }

        return GameResource::collection($games);
    }

    public function show($id)
    {
        return new GameResource(Game::findOrFail($id));
    }
}
