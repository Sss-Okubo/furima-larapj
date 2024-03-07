<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //uidで取得
    public function getbyUid(Request $request)
    {
        $item = User::where('uid','=',$request->uid)->get();
        if ($item) {
            // データが見つかった場合の処理
            return response()->json(['data' => $item], 200);
        } else {
            // データが見つからなかった場合の処理
            return response()->json(['message' => 'Data not found'], 405);
        }
    }
    //idで取得
    public function getbyId(Request $request)
    {
        $item = User::where('id','=',$request->id)->get();
        if ($item) {
            // データが見つかった場合の処理
            return response()->json(['data' => $item], 200);
        } else {
            // データが見つからなかった場合の処理
            return response()->json(['message' => 'Data not found'], 405);
        }
    }

    // ユーザ登録
    public function store(Request $request)
    {
        $item = User::create($request->all());
        return response()->json([
            'data' => $item
            ], 201);
    }
}
