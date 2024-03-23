<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // カテゴリ取得
    public function get($goods_id)
    {
        $Param = ['goods_id' => $goods_id, 'type' => "1" ]; 
        $categoryInfo =  DB::select('select b.value from categories a left outer join codes b  on a.category = b.code and b.type= :type where goods_id = :goods_id',$Param);  

        // Response
        return response()->json(['data' => $categoryInfo], 200);
    }

    // カテゴリ登録
    public function store(Request $request)
    {
        $item = Category::create($request->all());
        return response()->json([
            'data' =>$item], 201);
    }
}
