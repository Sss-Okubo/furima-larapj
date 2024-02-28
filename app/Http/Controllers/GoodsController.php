<?php

namespace App\Http\Controllers;

use App\Models\Goods;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GoodsController extends Controller
{
    // 商品一覧と画像を取得
    public function get()
    {
        $items = Goods::all();
        foreach ($items as $item){
            $param = ['id' => $item -> id];
            $images =  DB::select('select url from images where goods_id = :id',$param);
            $urls = array();
            foreach ($images as $image){
                $urls[] = $image -> url;
            }
            $item['urls'] =$urls;
        }
        return response()->json([
        'data' => $items,
        ], 200);
    }
    // 商品一覧と画像を取得
    public function getMylist(Request $request)
    {
        $param = ['loginUserId' => $request -> loginUserId];
        $items = DB::select('select goods.* from goods inner join likes on goods.id = likes.goods_id where likes.user_id = :loginUserId',$param);
        foreach ($items as $item){
            $param = ['id' => $item -> id];
            $images =  DB::select('select url from images where goods_id = :id',$param);
            $urls = array();
            foreach ($images as $image){
                $urls[] = $image -> url;
            }
            $item ->urls = $urls;
        }
        return response()->json([
        'data' => $items,
        ], 200);
    }

    // 商品一覧をidで取得
    public function getbyId(Request $request)
    {
        $item = Goods::where('id','=',$request->id)->get();
        if ($item) {
            // データが見つかった場合の処理
            return response()->json(['data' => $item], 200);
        } else {
            // データが見つからなかった場合の処理
            return response()->json(['message' => 'Data not found'], 405);
        }
    }
}