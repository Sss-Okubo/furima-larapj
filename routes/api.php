<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\GoodsController;
use App\http\Controllers\ImageController;
use App\http\Controllers\LikeController;
use App\http\Controllers\CommentController;
use App\http\Controllers\CategoryController;
use App\http\Controllers\UserController;
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
// 商品API
Route::get('/goods_all', [GoodsController::class, 'get']);
Route::get('/goods/{id}', [GoodsController::class, 'getbyId']);
Route::get('/goods/getMylist/{loginUserId}', [GoodsController::class, 'getMylist']);
// 画像API
Route::get('/image/{id}', [ImageController::class, 'getbyGoodsId']);
// お気に入りAPI
Route::get('/likes/{goods_id}/{user_id}', [LikeController::class, 'get']);
Route::apiResource('/likes', LikeController::class);
Route::delete('/likes/{goods_id}/{user_id}', [LikeController::class, 'destroy']);
// コメントAPI
Route::get('/comments/{goods_id}', [CommentController::class, 'get']);
Route::apiResource('/comments', CommentController::class);
Route::delete('/comments/{goods_id}/{user_id}', [CommentController::class, 'destroy']);
// カテゴリAPI
Route::get('/categories/{goods_id}', [CategoryController::class, 'get']);
// ユーザAPI
Route::get('/users/{uid}', [UserController::class, 'getbyUid']);
Route::apiResource('/users', UserController::class);
Route::get('/usersByid/{id}', [UserController::class, 'getbyId']);