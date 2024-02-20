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
        'goods_name' => 'ルムーア ベーシックワイドパンツ Mサイズ',
        'price' => 1000,
        'summary'=> '良好',
        'detail'=> '裾で広がるワイドシルエットが脚長効果、美脚効果抜群のワイドパンツ♡'
        ];
        Goods::create($param);

        $param = [
        'user_id' => 2,
        'goods_name' => '【数量限定】レディース　両耳用　ピアス　ゴールド　金　　高見え　上品　おしゃれ',
        'price' => 2000,
        'summary'=> '良好',
        'detail'=> 'ご覧いただきありがとうございます☆彡
＜商品説明〉
パール輝く、上品な両耳用ピアスです(^^)
特徴的なデザインなので、周りの視線も釘付け♪
ビジネスシーンやフォーマルシーンでも大活躍間違いなし◎
'
        ];
        Goods::create($param);

        $param = [
        'user_id' => 3,
        'goods_name' => '文豪ストレイドッグス　角川文庫コラボ缶バッジ　夢野久作',
        'price' => 3000,
        'summary'=> '良好',
        'detail'=> '文豪ストレイドッグス　角川文庫コラボ缶バッジ
夢野久作
即購入okです'
        ];
        Goods::create($param);

        $param = [
        'user_id' => 4,
        'goods_name' => '薬屋のひとりごと　マルイ　ポストカード　全５種',
        'price' => 4000,
        'summary'=> '良好',
        'detail'=> '『薬屋のひとりごと』
マルイポップアップショップ
お買い上げ抽選会B賞
ポストカード全5種セット
になります。'
        ];
        Goods::create($param);

        $param = [
        'user_id' => 5,
        'goods_name' => 'ホロライブ 星街すいせい Shout in Crisis ライブグッズ Tシャツ',
        'price' => 5000,
        'summary'=> '良好',
        'detail'=> 'ご覧頂きありがとうございます(◍˃ᗜ˂◍)ノ
【商品説明】
hololive 星街すいせい
Hoshimachi Suisei 2nd Solo Live
"Shout in Crisis" ライブグッズ Tシャツ
サイズ∶フリーサイズ'
        ];
        Goods::create($param);

        $param = [
        'user_id' => 6,
        'goods_name' => '『日本製』fou forétフーフォレ・セットアップスーツ グレー',
        'price' => 6000,
        'summary'=> '良好',
        'detail'=> '(日本製)fou forét
フーフォレ・セットアップスーツ 
'
        ];
        Goods::create($param);

        $param = [
        'user_id' => 7,
        'goods_name' => 'Eddie Bauer エディーバウアー ナイロンジャケット ロングコート Ｌ',
        'price' => 7000,
        'summary'=> '良好',
        'detail'=> '⭐︎本物⭐︎名作⭐︎
■ブランド：Eddie Bauer(エディーバウアー)
■アイテム：ライナー付きナイロンジャケット ロングコート
■カラー：ブラック、カーキ
■サイズ：Ｌ
■寸法：肩幅４３cm・身幅５７cm・着丈９５cm・袖丈５６cm'
        ];
        Goods::create($param);

        $param = [
        'user_id' => 8,
        'goods_name' => 'ノースフェイス　マウンテンライトジャケット',
        'price' => 8000,
        'summary'=> '良好',
        'detail'=> 'マウンテンライトジャケット
型番:NP11834
色:ブリティッシュカーキ(BK)
サイズ:S
状態:目立つ外傷無し'
        ];
        Goods::create($param);

        $param = [
        'user_id' => 9,
        'goods_name' => 'RICH NOBLE ニットジャケット【L-LL相当】カーディガン　エレガント',
        'price' => 9000,
        'summary'=> '良好',
        'detail'=> '管理番号K-711
♡即購入大歓迎 ♡
♡すぐ発送♡'
        ];
        Goods::create($param);

        $param = [
        'user_id' => 10,
        'goods_name' => '✨ほぼ新品✨ルイヴィトン アエログラム ポルトフォイユ ブラザNM 長財布',
        'price' => 10000,
        'summary'=> '良好',
        'detail'=> 'ご覧いただきありがとうございます！
⚠️万が一偽物だった場合、返金対応いたします！
'
        ];
        Goods::create($param);

    }
}
