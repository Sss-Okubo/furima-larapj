<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;

class PurchaseController extends Controller
{
    // 
    // 購入データ登録
    public function store(Request $request)
    {
        $item = Purchase::create($request->all());
        return response()->json([
            'data' => $item
            ], 201);
    }
}
