<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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

    // プロフィール画像をアップロード
    public function uploadImage(Request $request)
    {
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imageName = time().'.'.$image->getClientOriginalExtension();

            // S3に画像を保存
            $path = Storage::disk('s3')->putFileAs('images', $image, $imageName);

            // 保存された画像のURLを取得
            $url = Storage::disk('s3')->url($path);

            return response()->json(['url' => $url], 200);
        }

        return response()->json(['error' => 'Image not found.'], 400);
    }

    public function update(Request $request)
    {
        $update = [
            'name' => $request->name,
            'postno' => $request->postno,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'url' => $request->url,
        ];
        $item = User::where('id', $request->id)->update($update);
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
}
