<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Serie;

use App\Http\Resources\SerieResource;

class SerieController extends Controller
{
    public function index()
    {
        $series = Serie::get();

        return SerieResource::collection($series);
    }
}
