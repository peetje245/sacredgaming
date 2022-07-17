<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Franchise;

use App\Http\Resources\FranchiseResource;

class FranchiseController extends Controller
{
    public function index()
    {
        $franchises = Franchise::get();

        return FranchiseResource::collection($franchises);
    }
}
