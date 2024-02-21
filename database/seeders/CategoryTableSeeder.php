<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $param = [
        'goods_id' => 1,
        'category'=> '服'
        ];
        Category::create($param);
        $param = [
        'goods_id' => 1,
        'category'=> 'レディース'
        ];
        Category::create($param);
        $param = [
        'goods_id' => 2,
        'category'=> 'アクセサリ'
        ];
        Category::create($param);
        $param = [
        'goods_id' => 3,
        'category'=> 'アニメ'
        ];
        Category::create($param);
        $param = [
        'goods_id' => 4,
        'category'=> 'アニメ'
        ];
        Category::create($param);
        $param = [
        'goods_id' => 4,
        'category'=> '稀少'
        ];
        Category::create($param);
        $param = [
        'goods_id' => 5,
        'category'=> 'メンズ'
        ];
        Category::create($param);
        $param = [
        'goods_id' => 6,
        'category'=> 'メンズ'
        ];
        Category::create($param);
        $param = [
        'goods_id' => 7,
        'category'=> 'メンズ'
        ];
        Category::create($param);
        $param = [
        'goods_id' => 8,
        'category'=> '男女兼用'
        ];
        Category::create($param);
        $param = [
        'goods_id' => 9,
        'category'=> 'レディース'
        ];
        Category::create($param);
        $param = [
        'goods_id' => 10,
        'category'=> 'ブランド'
        ];
        Category::create($param);
        $param = [
        'goods_id' => 10,
        'category'=> '男女兼用'
        ];
        Category::create($param);
    }
}
