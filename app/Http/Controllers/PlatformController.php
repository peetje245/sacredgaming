<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Platform;

use App\Http\Resources\PlatformResource;

class PlatformController extends Controller
{
    public function index()
    {
        $platforms = Platform::get();

        return PlatformResource::collection($platforms);
    }
}
