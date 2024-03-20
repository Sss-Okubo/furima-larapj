<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Code;

class CodeController extends Controller
{
    //
        // コメント情報取得
    public function get($type)
    {
        $Param = ['type' => $type ]; 
        $CodeInfo =  DB::select('select code,value  from codes where type = :type',$Param);  
        
        // Response
        return response()->json(['data' => $CodeInfo], 200);
    }

}
