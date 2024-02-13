<?php

namespace App\Http\Controllers;

use App\Models\Goods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GoodsController extends Controller
{
    public function index()
    {
        $items = Goods::all();
        return response()->json([
        'data' => $items
        ], 200);
    }
    public function store(Request $request)
    {
        $item = Goods::create($request->all());
        return response()->json([
        'data' => $item
        ], 201);
    }
    public function show(Contact $goods)
    {
        $item = Goods::find($goods);
        if ($item) {
            return response()->json([
            'data' => $item
            ], 200);
        } else {
            return response()->json([
            'message' => 'Not found',
            ], 404);
        }
    }
    public function update(Request $request, Goods $goods)
    {
        $update = [
        'name' => $request->name,
        'email' => $request->email
        ];
        $item = Goods::where('id', $goods->id)->update($update);
        if ($item) {
            return response()->json([
            'message' => 'Updated successfully',
            ], 200);
        } else {
            return response()->json([
            'message' => 'Not found',
            ], 404);
        }
    }
    public function destroy(Goods $goods)
    {
        $item = Goods::where('id', $goods->id)->delete();
        if ($item) {
            return response()->json([
            'message' => 'Deleted successfully',
            ], 200);
        } else {
            return response()->json([
            'message' => 'Not found',
            ], 404);
        }
    }
    // 商品一覧と画像URLを結合して取得
    public function get()
    {
        $items = DB::table('goods')
            ->join('images', 'images.goods_id', '=', 'goods.id')
            ->get();
        return response()->json([
        'data' => $items
        ], 200);
    }
}