<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Like;

class LikeController extends Controller
{
    // お気に入り登録
    public function store(Request $request)
    {
        $item = Like::create($request->all());
        return response()->json([
            'data' => $item
            ], 201);
    }

    // お気に入り削除
    public function destroy($goods_id, $user_id)
    {
        // goods_idとuser_idが一致するレコードを削除する
        $deleted = Like::where('goods_id', $goods_id)
                        ->where('user_id', $user_id)
                        ->delete();
        if ($deleted) {
            return response()->json([
                'message' => 'Deleted successfully',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ], 404);
        }
    }
    // お気に入り情報取得
    public function get($goods_id, $user_id)
    {
        // ログインユーザがいいねしてるか
        $userlikeParam = ['goods_id' => $goods_id , 'user_id' => $user_id];        
        $userlike =  DB::select('select count(*) as count from likes where goods_id = :goods_id and user_id =:user_id',$userlikeParam);
        $isLike = ($userlike[0]->count != 0) ? true : false ;

        // Like数
        $likeCountParam = ['goods_id' => $goods_id ]; 
        $likeCount =  DB::select('select count(*) as count from likes where goods_id = :goods_id',$likeCountParam);  

        // Response
        $item = ['isLike' => $isLike , 'likeCount' => $likeCount[0] -> count];
        return response()->json(['data' => $item], 200);
    }

}
