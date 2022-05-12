<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\PassportController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('articles', 'ArticlesController@index');



Route::post('/login', [PassportController::class, 'login']);

Route::middleware('auth:api')->get('/all', [PassportController::class, 'users']);

Route::get('articles', [ArticlesController::class, 'index']);
Route::get('articles/{id}', [ArticlesController::class, 'show']);
Route::post('articles/add', [ArticlesController::class, 'store']);
Route::post('articles/edit', [ArticlesController::class, 'update']);
Route::get('articles/delete/{id}', [ArticlesController::class, 'destroy']);



