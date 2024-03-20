<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Code;

class CodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $param = [
        'type' => '1',
        'code'=> '001',
        'value'=>'服'
        ];
        Code::create($param);
    $param = [
        'type' => '1',
        'code'=> '002',
        'value'=>'アクセサリ'
        ];
        Code::create($param);
    $param = [
        'type' => '1',
        'code'=> '003',
        'value'=>'グッズ'
        ];
        Code::create($param);        
    $param = [
        'type' => '1',
        'code'=> '004',
        'value'=>'レディース'
        ];
        Code::create($param);        
    $param = [
        'type' => '1',
        'code'=> '005',
        'value'=>'メンズ'
        ];
        Code::create($param);        
    $param = [
        'type' => '1',
        'code'=> '006',
        'value'=>'男女兼用'
        ];
        Code::create($param);
    $param = [
        'type' => '1',
        'code'=> '007',
        'value'=>'ブランド'
        ];
        Code::create($param);
    $param = [
        'type' => '1',
        'code'=> '008',
        'value'=>'アニメ'
        ];
        Code::create($param);        
    $param = [
        'type' => '2',
        'code'=> '001',
        'value'=>'良好'
        ];
        Code::create($param);        
    $param = [
        'type' => '2',
        'code'=> '002',
        'value'=>'普通'
        ];
        Code::create($param);        
    $param = [
        'type' => '2',
        'code'=> '003',
        'value'=>'キズあり'
        ];
        Code::create($param);        
        
    }    
}
