<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Image;

class ImageTableSeeder extends Seeder
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
        'url'=> '/image/image1.jpg'
        ];
        Image::create($param);

        $param = [
        'goods_id' => 2,
        'url'=> '/image/image2.jpg'
        ];
        Image::create($param);

        $param = [
        'goods_id' => 3,
        'url'=> '/image/image3.jpg'
        ];
        Image::create($param);

        $param = [
        'goods_id' => 4,
        'url'=> '/image/image4.jpg'
        ];
        Image::create($param);

        $param = [
        'goods_id' => 5,
        'url'=> '/image/image5.jpg'
        ];
        Image::create($param);

        $param = [
        'goods_id' => 6,
        'url'=> '/image/image6.jpg'
        ];
        Image::create($param);

        $param = [
        'goods_id' => 7,
        'url'=> '/image/image7.jpg'
        ];
        Image::create($param);

        $param = [
        'goods_id' => 8,
        'url'=> '/image/image8.jpg'
        ];
        Image::create($param);

        $param = [
        'goods_id' => 9,
        'url'=> '/image/image9.jpg'
        ];
        Image::create($param);

        $param = [
        'goods_id' => 10,
        'url'=> '/image/image10.jpg'
        ];
        Image::create($param);
    }
}
