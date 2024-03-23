<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    // 画像一覧をidで取得
    public function getbyGoodsId(Request $request)
    {
        $item = Image::where('goods_id','=',$request->id)->get();
        if ($item) {
            // データが見つかった場合の処理
            return response()->json(['data' => $item], 200);
        } else {
            // データが見つからなかった場合の処理
            return response()->json(['message' => 'Data not found'], 405);
        }
    }

    // 画像登録
    public function store(Request $request)
    {
        $item = Image::create($request->all());
        return response()->json([
            'data' =>$item], 201);
    }
}
