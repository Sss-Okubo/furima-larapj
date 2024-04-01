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
    // お気に入りの商品一覧と画像を取得
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

    // 出品商品一覧と画像を取得
    public function getMySellList(Request $request)
    {
        $param = ['loginUserId' => $request -> loginUserId];
        $items = DB::select('select * from goods where user_id = :loginUserId',$param);
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

    // 購入商品一覧と画像を取得
    public function getMyBuyList(Request $request)
    {
        $param = ['loginUserId' => $request -> loginUserId];
        $items = DB::select('select goods.* from goods inner join purchases on goods.id = purchases.goods_id where purchases.user_id = :loginUserId',$param);
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
        $param = ['id' => $request->id ,'type' => "2" ];
        $item = DB::select('select
                            a.id,user_id,goods_name,price,b.value,detail 
                            from goods a left outer join codes b  on a.condition = b.code and b.type= :type 
                            where a.id = :id'
                            ,$param);
        if ($item) {
            // データが見つかった場合の処理
            return response()->json
            (['data' => $item], 200);
        } else {
            // データが見つからなかった場合の処理
            return response()->json(['message' => 'Data not found'], 405);
        }
    }

    // 商品登録
    public function store(Request $request)
    {
        $item = Goods::create($request->all());
        return response()->json([
            'id' =>$item->id], 201);
    }

        // 検索ワードから商品一覧と画像を取得
    public function getSearchList(Request $request)
    {
        $searchWord = '%' . $request->searchWord . '%';
        $items = DB::select('select * from goods where goods_name like ? or detail like ?', [$searchWord,$searchWord]);
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


}