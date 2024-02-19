<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\GoodsController;
use App\http\Controllers\ImageController;
use App\http\Controllers\LikeController;
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

//Route::apiResource('/goods', GoodsController::class);
Route::get('/goods_all', [GoodsController::class, 'get']);
Route::get('/goods/{id}', [GoodsController::class, 'getbyId']);
Route::get('/image/{id}', [ImageController::class, 'getbyGoodsId']);
Route::get('/likes/{goods_id}/{user_id}', [LikeController::class, 'get']);
Route::apiResource('/likes', LikeController::class);
Route::delete('/likes/{goods_id}/{user_id}', [LikeController::class, 'destroy']);
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
