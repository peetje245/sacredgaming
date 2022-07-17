<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Genre;

use App\Http\Resources\GenreResource;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::get();

        return GenreResource::collection($genres);
    }
}
