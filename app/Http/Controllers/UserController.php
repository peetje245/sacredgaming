<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Http\Resources\UserResource;

class UserController extends Controller
{
    public function getSignedInUser(Request $request)
    {
        return new UserResource($request->user());
    }

    public function index(){
        return UserResource::collection(User::paginate());
    }

    public function show(){

    }

    public function update(){

    }

    public function destroy(){

    }
}
