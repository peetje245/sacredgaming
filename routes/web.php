<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GameController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\PlatformController;
use App\Http\Controllers\SerieController;
use App\Http\Controllers\FranchiseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('games/search', [GameController::class, 'search']);
Route::get('game/{id}', [GameController::class, 'show']);

Route::get('genres', [GenreController::class, 'index']);
Route::get('platforms', [PlatformController::class, 'index']);
Route::get('series', [SerieController::class, 'index']);
Route::get('franchises', [FranchiseController::class, 'index']);

Route::middleware('auth:sanctum')->get('user', [UserController::class, 'getSignedInUser']);
Route::middleware('auth:sanctum')->get('users', [UserController::class, 'index']);
Route::middleware('auth:sanctum')->get('user/{id}', [UserController::class, 'show']);
Route::middleware('auth:sanctum')->post('user/{id}', [UserController::class, 'update']);
Route::middleware('auth:sanctum')->delete('user/{id}', [UserController::class, 'delete']);

Route::middleware('auth:sanctum')->get('roles', [RoleController::class, 'index']);
