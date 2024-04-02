<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoodsController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\CodeController;
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
Route::get('/goods/getMySellList/{loginUserId}', [GoodsController::class, 'getMySellList']);
Route::get('/goods/getMyBuyList/{loginUserId}', [GoodsController::class, 'getMyBuyList']);
Route::apiResource('/goods', GoodsController::class);
Route::get('/goods/getSearchList/{searchWord}', [GoodsController::class, 'getSearchList']);

// 画像API
Route::get('/image/{id}', [ImageController::class, 'getbyGoodsId']);
Route::apiResource('/images', ImageController::class);

// お気に入りAPI
Route::get('/likes/{goods_id}/{user_id}', [LikeController::class, 'get']);
Route::apiResource('/likes', LikeController::class);
Route::delete('/likes/{goods_id}/{user_id}', [LikeController::class, 'destroy']);

// コメントAPI
Route::get('/comments/{goods_id}', [CommentController::class, 'get']);
Route::apiResource('/comments', CommentController::class);
Route::delete('/comments/{id}', [CommentController::class, 'destroy']);


// カテゴリAPI
Route::get('/categories/{goods_id}', [CategoryController::class, 'get']);
Route::apiResource('/categories', CategoryController::class);

// ユーザAPI
Route::get('/users/{uid}', [UserController::class, 'getbyUid']);
Route::apiResource('/users', UserController::class);
Route::get('/usersByid/{id}', [UserController::class, 'getbyId']);
Route::post('/users/upload', [UserController::class, 'uploadImage']);
Route::post('/users/update', [UserController::class,'update']);

// 購入API
Route::apiResource('/purchase', PurchaseController::class);

// コードAPI
Route::get('/codes/{type}', [CodeController::class, 'get']);