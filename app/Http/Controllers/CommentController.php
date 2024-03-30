<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    // コメント登録
    public function store(Request $request)
    {
        $item = Comment::create($request->all());
        return response()->json([
            'data' => $item
            ], 201);
    }

    // コメント削除
        public function destroy($id)
    {
        // goods_idとuser_idが一致するレコードを削除する
        $deleted = Comment::where('id', $id)
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

    // コメント情報取得
    public function get($goods_id)
    {
        $Param = ['goods_id' => $goods_id ]; 
        $commentInfo =  DB::select('select a.*,b.url,b.name from comments a left outer join users b on a.user_id = b.id where goods_id = :goods_id',$Param);
        // Response
        return response()->json(['data' => $commentInfo], 200);
    }
}
