<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Goods;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
        'user_id' => 1,
        'goods_name' => 'aaa',
        'price' => 1000,
        'summary'=> 'bbb',
        'detail'=> 'ccc'
        ];
        Goods::create($param);

        $param = [
        'user_id' => 2,
        'goods_name' => 'aaa',
        'price' => 2000,
        'summary'=> 'bbb',
        'detail'=> 'ccc'
        ];
        Goods::create($param);

        $param = [
        'user_id' => 3,
        'goods_name' => 'aaa',
        'price' => 3000,
        'summary'=> 'bbb',
        'detail'=> 'ccc'
        ];
        Goods::create($param);

        $param = [
        'user_id' => 4,
        'goods_name' => 'aaa',
        'price' => 4000,
        'summary'=> 'bbb',
        'detail'=> 'ccc'
        ];
        Goods::create($param);

        $param = [
        'user_id' => 5,
        'goods_name' => 'aaa',
        'price' => 5000,
        'summary'=> 'bbb',
        'detail'=> 'ccc'
        ];
        Goods::create($param);

        $param = [
        'user_id' => 6,
        'goods_name' => 'aaa',
        'price' => 6000,
        'summary'=> 'bbb',
        'detail'=> 'ccc'
        ];
        Goods::create($param);

        $param = [
        'user_id' => 7,
        'goods_name' => 'aaa',
        'price' => 7000,
        'summary'=> 'bbb',
        'detail'=> 'ccc'
        ];
        Goods::create($param);

        $param = [
        'user_id' => 8,
        'goods_name' => 'aaa',
        'price' => 8000,
        'summary'=> 'bbb',
        'detail'=> 'ccc'
        ];
        Goods::create($param);

        $param = [
        'user_id' => 9,
        'goods_name' => 'aaa',
        'price' => 9000,
        'summary'=> 'bbb',
        'detail'=> 'ccc'
        ];
        Goods::create($param);

        $param = [
        'user_id' => 10,
        'goods_name' => 'aaa',
        'price' => 10000,
        'summary'=> 'bbb',
        'detail'=> 'ccc'
        ];
        Goods::create($param);

    }
}
