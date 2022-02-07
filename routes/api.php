<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//以下追加
use App\Http\Controllers\UserController;
use App\Http\Controllers\MainCommentController;
use App\Http\Controllers\GoodController;
use App\Http\Controllers\ReCommentController;
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
//以下追加
Route::apiResource('/user', UserController::class);
Route::apiResource('/mainComment', MainCommentController::class);
Route::apiResource('/good', GoodController::class)->only([
  'update'
]);
Route::apiResource('/reComment', ReCommentController::class);