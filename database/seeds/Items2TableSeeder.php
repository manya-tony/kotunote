<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Items2TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 変数
        $up2018_1 = '2018-01-01 00:00:00';
        $up2018_2 = '2018-02-01 00:00:00';
        $up2018_3 = '2018-03-01 00:00:00';
        $up2018_4 = '2018-04-01 00:00:00';
        $up2018_5 = '2018-05-01 00:00:00';
        $up2018_6 = '2018-06-01 00:00:00';
        $up2018_7 = '2018-07-01 00:00:00';
        $up2018_8 = '2018-08-01 00:00:00';
        $up2018_9 = '2018-09-01 00:00:00';
        $up2018_10 = '2018-10-01 00:00:00';
        $up2018_11 = '2018-11-01 00:00:00';
        $up2018_12 = '2018-12-01 00:00:00';

        $up2019_1 = '2019-01-01 00:00:00';
        $up2019_2 = '2019-02-01 00:00:00';
        $up2019_3 = '2019-03-01 00:00:00';
        $up2019_4 = '2019-04-01 00:00:00';
        $up2019_5 = '2019-05-01 00:00:00';
        $up2019_6 = '2019-06-01 00:00:00';
        $up2019_7 = '2019-07-01 00:00:00';
        $up2019_8 = '2019-08-01 00:00:00';
        $up2019_9 = '2019-09-01 00:00:00';
        $up2019_10 = '2019-10-01 00:00:00';
        $up2019_11 = '2019-11-01 00:00:00';
        $up2019_12 = '2019-12-01 00:00:00';

        $up2020_1 = '2020-01-01 00:00:00';
        $up2020_2 = '2020-02-01 00:00:00';
        $up2020_3 = '2020-03-01 00:00:00';
        $up2020_4 = '2020-04-01 00:00:00';
        $up2020_5 = '2020-05-01 00:00:00';
        $up2020_6 = '2020-06-01 00:00:00';
        $up2020_7 = '2020-07-01 00:00:00';

        // とにぃ映画のきろく 2018
        DB::table('items')->insert([
            'text' => 'スターウォーズ 最後のジェダイ',
            'record_id' => 2,
            'created_at' => $up2018_1,
            'updated_at' => $up2018_1,
        ]);
        DB::table('items')->insert([
            'text' => 'Mr.ホームズ',
            'record_id' => 2,
            'created_at' => $up2018_1,
            'updated_at' => $up2018_1,
        ]);
        DB::table('items')->insert([
            'text' => 'トロピックサンダー',
            'record_id' => 2,
            'created_at' => $up2018_1,
            'updated_at' => $up2018_1,
        ]);
        DB::table('items')->insert([
            'text' => 'スタンドバイミー',
            'record_id' => 2,
            'created_at' => $up2018_1,
            'updated_at' => $up2018_1,
        ]);
        DB::table('items')->insert([
            'text' => 'ミッドナイトインパリ',
            'record_id' => 2,
            'created_at' => $up2018_1,
            'updated_at' => $up2018_1,
        ]);
        DB::table('items')->insert([
            'text' => 'ジェーンエア',
            'record_id' => 2,
            'created_at' => $up2018_1,
            'updated_at' => $up2018_1,
        ]);
        DB::table('items')->insert([
            'text' => 'パディントン',
            'record_id' => 2,
            'created_at' => $up2018_1,
            'updated_at' => $up2018_1,
        ]);
        DB::table('items')->insert([
            'text' => 'ヤングアダルトニューヨーク',
            'record_id' => 2,
            'created_at' => $up2018_1,
            'updated_at' => $up2018_1,
        ]);
        DB::table('items')->insert([
            'text' => 'マリアンヌ',
            'record_id' => 2,
            'created_at' => $up2018_1,
            'updated_at' => $up2018_1,
        ]);
        DB::table('items')->insert([
            'text' => 'キャロル',
            'record_id' => 2,
            'created_at' => $up2018_1,
            'updated_at' => $up2018_1,
        ]);
        DB::table('items')->insert([
            'text' => '追憶の森',
            'record_id' => 2,
            'created_at' => $up2018_2,
            'updated_at' => $up2018_2,
        ]);
        DB::table('items')->insert([
            'text' => '500日のサマー',
            'record_id' => 2,
            'created_at' => $up2018_2,
            'updated_at' => $up2018_2,
        ]);
        DB::table('items')->insert([
            'text' => 'ものすごくうるさくて、ありえないほど近い',
            'record_id' => 2,
            'created_at' => $up2018_2,
            'updated_at' => $up2018_2,
        ]);
        DB::table('items')->insert([
            'text' => 'トライアングル',
            'record_id' => 2,
            'created_at' => $up2018_2,
            'updated_at' => $up2018_2,
        ]);
        DB::table('items')->insert([
            'text' => 'マンチェスターバイザシー',
            'record_id' => 2,
            'created_at' => $up2018_2,
            'updated_at' => $up2018_2,
        ]);
        DB::table('items')->insert([
            'text' => '白い沈黙',
            'record_id' => 2,
            'created_at' => $up2018_2,
            'updated_at' => $up2018_2,
        ]);
        DB::table('items')->insert([
            'text' => '砂の器',
            'record_id' => 2,
            'created_at' => $up2018_2,
            'updated_at' => $up2018_2,
        ]);
        DB::table('items')->insert([
            'text' => 'ヴァージニア',
            'record_id' => 2,
            'created_at' => $up2018_2,
            'updated_at' => $up2018_2,
        ]);
        DB::table('items')->insert([
            'text' => 'コンテイジョン',
            'record_id' => 2,
            'created_at' => $up2018_2,
            'updated_at' => $up2018_2,
        ]);
        DB::table('items')->insert([
            'text' => 'グラントリノ',
            'record_id' => 2,
            'created_at' => $up2018_2,
            'updated_at' => $up2018_2,
        ]);
        DB::table('items')->insert([
            'text' => 'タッカーとデイル',
            'record_id' => 2,
            'created_at' => $up2018_3,
            'updated_at' => $up2018_3,
        ]);
        DB::table('items')->insert([
            'text' => 'フローズンタイム',
            'record_id' => 2,
            'created_at' => $up2018_3,
            'updated_at' => $up2018_3,
        ]);
        DB::table('items')->insert([
            'text' => 'スポットライト 世紀のスクープ',
            'record_id' => 2,
            'created_at' => $up2018_3,
            'updated_at' => $up2018_3,
        ]);
        DB::table('items')->insert([
            'text' => 'ハウンター',
            'record_id' => 2,
            'created_at' => $up2018_3,
            'updated_at' => $up2018_3,
        ]);
        DB::table('items')->insert([
            'text' => '顔のないスパイ',
            'record_id' => 2,
            'created_at' => $up2018_3,
            'updated_at' => $up2018_3,
        ]);
        DB::table('items')->insert([
            'text' => 'モールス',
            'record_id' => 2,
            'created_at' => $up2018_3,
            'updated_at' => $up2018_3,
        ]);
        DB::table('items')->insert([
            'text' => 'リピーテッド',
            'record_id' => 2,
            'created_at' => $up2018_3,
            'updated_at' => $up2018_3,
        ]);
        DB::table('items')->insert([
            'text' => '人生スイッチ',
            'record_id' => 2,
            'created_at' => $up2018_3,
            'updated_at' => $up2018_3,
        ]);
        DB::table('items')->insert([
            'text' => 'リメンバーミー',
            'record_id' => 2,
            'created_at' => $up2018_3,
            'updated_at' => $up2018_3,
        ]);
        DB::table('items')->insert([
            'text' => 'クリムゾンピーク',
            'record_id' => 2,
            'created_at' => $up2018_3,
            'updated_at' => $up2018_3,
        ]);
        DB::table('items')->insert([
            'text' => 'ライチ光クラブ',
            'record_id' => 2,
            'created_at' => $up2018_4,
            'updated_at' => $up2018_4,
        ]);
        DB::table('items')->insert([
            'text' => 'グエムル',
            'record_id' => 2,
            'created_at' => $up2018_4,
            'updated_at' => $up2018_4,
        ]);
        DB::table('items')->insert([
            'text' => 'パージ',
            'record_id' => 2,
            'created_at' => $up2018_4,
            'updated_at' => $up2018_4,
        ]);
        DB::table('items')->insert([
            'text' => 'ウーマンインブラック',
            'record_id' => 2,
            'created_at' => $up2018_4,
            'updated_at' => $up2018_4,
        ]);
        DB::table('items')->insert([
            'text' => 'ある優しき殺人者の記録',
            'record_id' => 2,
            'created_at' => $up2018_4,
            'updated_at' => $up2018_4,
        ]);
        DB::table('items')->insert([
            'text' => 'マジックマイク',
            'record_id' => 2,
            'created_at' => $up2018_4,
            'updated_at' => $up2018_4,
        ]);
        DB::table('items')->insert([
            'text' => 'ハドソン川の奇跡',
            'record_id' => 2,
            'created_at' => $up2018_4,
            'updated_at' => $up2018_4,
        ]);
        DB::table('items')->insert([
            'text' => 'アメリカンスリープオーバー',
            'record_id' => 2,
            'created_at' => $up2018_4,
            'updated_at' => $up2018_4,
        ]);
        DB::table('items')->insert([
            'text' => 'ブレックファストクラブ',
            'record_id' => 2,
            'created_at' => $up2018_4,
            'updated_at' => $up2018_4,
        ]);
        DB::table('items')->insert([
            'text' => 'ホリデーズ',
            'record_id' => 2,
            'created_at' => $up2018_4,
            'updated_at' => $up2018_4,
        ]);
        DB::table('items')->insert([
            'text' => 'ゲットアウト',
            'record_id' => 2,
            'created_at' => $up2018_5,
            'updated_at' => $up2018_5,
        ]);
        DB::table('items')->insert([
            'text' => 'グレイヴエンカウンターズ',
            'record_id' => 2,
            'created_at' => $up2018_5,
            'updated_at' => $up2018_5,
        ]);
        DB::table('items')->insert([
            'text' => '今日も僕は殺される',
            'record_id' => 2,
            'created_at' => $up2018_5,
            'updated_at' => $up2018_5,
        ]);
        DB::table('items')->insert([
            'text' => 'マギー',
            'record_id' => 2,
            'created_at' => $up2018_5,
            'updated_at' => $up2018_5,
        ]);
        DB::table('items')->insert([
            'text' => 'ローマ法王の休日',
            'record_id' => 2,
            'created_at' => $up2018_5,
            'updated_at' => $up2018_5,
        ]);
        DB::table('items')->insert([
            'text' => '劇場霊',
            'record_id' => 2,
            'created_at' => $up2018_5,
            'updated_at' => $up2018_5,
        ]);
        DB::table('items')->insert([
            'text' => '帰ってきたヒトラー',
            'record_id' => 2,
            'created_at' => $up2018_5,
            'updated_at' => $up2018_5,
        ]);
        DB::table('items')->insert([
            'text' => 'グレイヴエンカウンターズ2',
            'record_id' => 2,
            'created_at' => $up2018_5,
            'updated_at' => $up2018_5,
        ]);
        DB::table('items')->insert([
            'text' => 'スパイダーマン ホームカミング',
            'record_id' => 2,
            'created_at' => $up2018_5,
            'updated_at' => $up2018_5,
        ]);
        DB::table('items')->insert([
            'text' => 'ヒューマンレース',
            'record_id' => 2,
            'created_at' => $up2018_5,
            'updated_at' => $up2018_5,
        ]);
        DB::table('items')->insert([
            'text' => 'クラウン',
            'record_id' => 2,
            'created_at' => $up2018_6,
            'updated_at' => $up2018_6,
        ]);
        DB::table('items')->insert([
            'text' => 'サクラメント 死の楽園',
            'record_id' => 2,
            'created_at' => $up2018_6,
            'updated_at' => $up2018_6,
        ]);
        DB::table('items')->insert([
            'text' => 'スラムドッグミリオネア',
            'record_id' => 2,
            'created_at' => $up2018_6,
            'updated_at' => $up2018_6,
        ]);
        DB::table('items')->insert([
            'text' => 'マイティーソー バトルロイヤル',
            'record_id' => 2,
            'created_at' => $up2018_6,
            'updated_at' => $up2018_6,
        ]);
        DB::table('items')->insert([
            'text' => 'アデル、ブルーは熱い色',
            'record_id' => 2,
            'created_at' => $up2018_6,
            'updated_at' => $up2018_6,
        ]);
        DB::table('items')->insert([
            'text' => 'プラン6チャンネル9',
            'record_id' => 2,
            'created_at' => $up2018_6,
            'updated_at' => $up2018_6,
        ]);
        DB::table('items')->insert([
            'text' => 'ホールディングザマン',
            'record_id' => 2,
            'created_at' => $up2018_6,
            'updated_at' => $up2018_6,
        ]);
        DB::table('items')->insert([
            'text' => 'どうしても触れたくない',
            'record_id' => 2,
            'created_at' => $up2018_6,
            'updated_at' => $up2018_6,
        ]);
        DB::table('items')->insert([
            'text' => '皇帝ペンギン',
            'record_id' => 2,
            'created_at' => $up2018_6,
            'updated_at' => $up2018_6,
        ]);
        DB::table('items')->insert([
            'text' => 'グットウィルハンティング',
            'record_id' => 2,
            'created_at' => $up2018_6,
            'updated_at' => $up2018_6,
        ]);
        DB::table('items')->insert([
            'text' => 'パリ、夜は眠らない',
            'record_id' => 2,
            'created_at' => $up2018_7,
            'updated_at' => $up2018_7,
        ]);
        DB::table('items')->insert([
            'text' => 'アベンジャーズ インフィニティウォー',
            'record_id' => 2,
            'created_at' => $up2018_7,
            'updated_at' => $up2018_7,
        ]);
        DB::table('items')->insert([
            'text' => 'ファンタスティックビーストと魔法使いの旅',
            'record_id' => 2,
            'created_at' => $up2018_7,
            'updated_at' => $up2018_7,
        ]);
        DB::table('items')->insert([
            'text' => 'アナイアレイション',
            'record_id' => 2,
            'created_at' => $up2018_7,
            'updated_at' => $up2018_7,
        ]);
        DB::table('items')->insert([
            'text' => '記憶の夜',
            'record_id' => 2,
            'created_at' => $up2018_7,
            'updated_at' => $up2018_7,
        ]);
        DB::table('items')->insert([
            'text' => 'ザ・リチュアル',
            'record_id' => 2,
            'created_at' => $up2018_7,
            'updated_at' => $up2018_7,
        ]);
        DB::table('items')->insert([
            'text' => 'we go on 死霊の証明',
            'record_id' => 2,
            'created_at' => $up2018_7,
            'updated_at' => $up2018_7,
        ]);
        DB::table('items')->insert([
            'text' => 'キャビンフィーバー ペイシェントゼロ',
            'record_id' => 2,
            'created_at' => $up2018_7,
            'updated_at' => $up2018_7,
        ]);
        DB::table('items')->insert([
            'text' => '永遠の子どもたち',
            'record_id' => 2,
            'created_at' => $up2018_7,
            'updated_at' => $up2018_7,
        ]);
        DB::table('items')->insert([
            'text' => 'グーニーズ',
            'record_id' => 2,
            'created_at' => $up2018_7,
            'updated_at' => $up2018_7,
        ]);
        DB::table('items')->insert([
            'text' => 'インポッシブル',
            'record_id' => 2,
            'created_at' => $up2018_8,
            'updated_at' => $up2018_8,
        ]);
        DB::table('items')->insert([
            'text' => 'わたしは生きていける',
            'record_id' => 2,
            'created_at' => $up2018_8,
            'updated_at' => $up2018_8,
        ]);
        DB::table('items')->insert([
            'text' => 'オクジャ',
            'record_id' => 2,
            'created_at' => $up2018_8,
            'updated_at' => $up2018_8,
        ]);
        DB::table('items')->insert([
            'text' => '白鯨との戦い',
            'record_id' => 2,
            'created_at' => $up2018_8,
            'updated_at' => $up2018_8,
        ]);
        DB::table('items')->insert([
            'text' => 'ウィンターストーム 雪山の悪夢',
            'record_id' => 2,
            'created_at' => $up2018_8,
            'updated_at' => $up2018_8,
        ]);
        DB::table('items')->insert([
            'text' => 'オン・ザ・ハイウェイ その夜、86分',
            'record_id' => 2,
            'created_at' => $up2018_8,
            'updated_at' => $up2018_8,
        ]);
        DB::table('items')->insert([
            'text' => 'ロストシティZ',
            'record_id' => 2,
            'created_at' => $up2018_8,
            'updated_at' => $up2018_8,
        ]);
        DB::table('items')->insert([
            'text' => 'レジェンダリー',
            'record_id' => 2,
            'created_at' => $up2018_8,
            'updated_at' => $up2018_8,
        ]);
        DB::table('items')->insert([
            'text' => 'コップカー',
            'record_id' => 2,
            'created_at' => $up2018_8,
            'updated_at' => $up2018_8,
        ]);
        DB::table('items')->insert([
            'text' => 'アレックスストレンジラブ',
            'record_id' => 2,
            'created_at' => $up2018_8,
            'updated_at' => $up2018_8,
        ]);
        DB::table('items')->insert([
            'text' => '10年越しの約束',
            'record_id' => 2,
            'created_at' => $up2018_9,
            'updated_at' => $up2018_9,
        ]);
        DB::table('items')->insert([
            'text' => '僕たちのチーム',
            'record_id' => 2,
            'created_at' => $up2018_9,
            'updated_at' => $up2018_9,
        ]);
        DB::table('items')->insert([
            'text' => '軽い男じゃないのよ',
            'record_id' => 2,
            'created_at' => $up2018_9,
            'updated_at' => $up2018_9,
        ]);
        DB::table('items')->insert([
            'text' => 'トム・アット・ザ・ファーム',
            'record_id' => 2,
            'created_at' => $up2018_9,
            'updated_at' => $up2018_9,
        ]);
        DB::table('items')->insert([
            'text' => '市民ケーン',
            'record_id' => 2,
            'created_at' => $up2018_9,
            'updated_at' => $up2018_9,
        ]);
        DB::table('items')->insert([
            'text' => 'ジョン・ウィック',
            'record_id' => 2,
            'created_at' => $up2018_9,
            'updated_at' => $up2018_9,
        ]);
        DB::table('items')->insert([
            'text' => 'ハン・ソロ',
            'record_id' => 2,
            'created_at' => $up2018_9,
            'updated_at' => $up2018_9,
        ]);
        DB::table('items')->insert([
            'text' => '親友のカミングアウト',
            'record_id' => 2,
            'created_at' => $up2018_9,
            'updated_at' => $up2018_9,
        ]);
        DB::table('items')->insert([
            'text' => 'ダンケルク',
            'record_id' => 2,
            'created_at' => $up2018_9,
            'updated_at' => $up2018_9,
        ]);
        DB::table('items')->insert([
            'text' => 'ワンダーウーマン',
            'record_id' => 2,
            'created_at' => $up2018_9,
            'updated_at' => $up2018_9,
        ]);
        DB::table('items')->insert([
            'text' => 'シングルマン',
            'record_id' => 2,
            'created_at' => $up2018_10,
            'updated_at' => $up2018_10,
        ]);
        DB::table('items')->insert([
            'text' => 'サウスパウンド',
            'record_id' => 2,
            'created_at' => $up2018_10,
            'updated_at' => $up2018_10,
        ]);
        DB::table('items')->insert([
            'text' => '胸騒ぎの恋人',
            'record_id' => 2,
            'created_at' => $up2018_10,
            'updated_at' => $up2018_10,
        ]);
        DB::table('items')->insert([
            'text' => 'マイマザー',
            'record_id' => 2,
            'created_at' => $up2018_10,
            'updated_at' => $up2018_10,
        ]);
        DB::table('items')->insert([
            'text' => 'ウォールフラワー',
            'record_id' => 2,
            'created_at' => $up2018_10,
            'updated_at' => $up2018_10,
        ]);
        DB::table('items')->insert([
            'text' => 'キングコブラ',
            'record_id' => 2,
            'created_at' => $up2018_10,
            'updated_at' => $up2018_10,
        ]);
        DB::table('items')->insert([
            'text' => '帝一の國',
            'record_id' => 2,
            'created_at' => $up2018_10,
            'updated_at' => $up2018_10,
        ]);
        DB::table('items')->insert([
            'text' => '殿、利息でござる！',
            'record_id' => 2,
            'created_at' => $up2018_10,
            'updated_at' => $up2018_10,
        ]);
        DB::table('items')->insert([
            'text' => 'アイ・イン・ザ・スカイ',
            'record_id' => 2,
            'created_at' => $up2018_10,
            'updated_at' => $up2018_10,
        ]);
        DB::table('items')->insert([
            'text' => 'カメラを止めるな',
            'record_id' => 2,
            'created_at' => $up2018_10,
            'updated_at' => $up2018_10,
        ]);
        DB::table('items')->insert([
            'text' => 'ホーンテッドサイト',
            'record_id' => 2,
            'created_at' => $up2018_11,
            'updated_at' => $up2018_11,
        ]);
        DB::table('items')->insert([
            'text' => 'レディプレイヤー1',
            'record_id' => 2,
            'created_at' => $up2018_11,
            'updated_at' => $up2018_11,
        ]);
        DB::table('items')->insert([
            'text' => 'アントマン・アンド・ワスプ',
            'record_id' => 2,
            'created_at' => $up2018_11,
            'updated_at' => $up2018_11,
        ]);
        DB::table('items')->insert([
            'text' => 'アンダー・ザ・シルバーレイク',
            'record_id' => 2,
            'created_at' => $up2018_11,
            'updated_at' => $up2018_11,
        ]);
        DB::table('items')->insert([
            'text' => 'search',
            'record_id' => 2,
            'created_at' => $up2018_11,
            'updated_at' => $up2018_11,
        ]);
        DB::table('items')->insert([
            'text' => 'ナイスガイズ',
            'record_id' => 2,
            'created_at' => $up2018_11,
            'updated_at' => $up2018_11,
        ]);
        DB::table('items')->insert([
            'text' => 'ジョン・ウィック',
            'record_id' => 2,
            'created_at' => $up2018_11,
            'updated_at' => $up2018_11,
        ]);
        DB::table('items')->insert([
            'text' => 'コクソン',
            'record_id' => 2,
            'created_at' => $up2018_11,
            'updated_at' => $up2018_11,
        ]);
        DB::table('items')->insert([
            'text' => 'バイバイマン',
            'record_id' => 2,
            'created_at' => $up2018_11,
            'updated_at' => $up2018_11,
        ]);
        DB::table('items')->insert([
            'text' => 'ビートルジュース',
            'record_id' => 2,
            'created_at' => $up2018_11,
            'updated_at' => $up2018_11,
        ]);
        DB::table('items')->insert([
            'text' => 'ラッシュ',
            'record_id' => 2,
            'created_at' => $up2018_12,
            'updated_at' => $up2018_12,
        ]);
        DB::table('items')->insert([
            'text' => 'スリービルボード',
            'record_id' => 2,
            'created_at' => $up2018_12,
            'updated_at' => $up2018_12,
        ]);
        DB::table('items')->insert([
            'text' => 'エヴォリューション',
            'record_id' => 2,
            'created_at' => $up2018_12,
            'updated_at' => $up2018_12,
        ]);
        DB::table('items')->insert([
            'text' => 'マルホランドドライブ',
            'record_id' => 2,
            'created_at' => $up2018_12,
            'updated_at' => $up2018_12,
        ]);
        DB::table('items')->insert([
            'text' => 'リリーのすべて',
            'record_id' => 2,
            'created_at' => $up2018_12,
            'updated_at' => $up2018_12,
        ]);
        DB::table('items')->insert([
            'text' => 'ヘレディタリー',
            'record_id' => 2,
            'created_at' => $up2018_12,
            'updated_at' => $up2018_12,
        ]);
        DB::table('items')->insert([
            'text' => 'ゾディアック',
            'record_id' => 2,
            'created_at' => $up2018_12,
            'updated_at' => $up2018_12,
        ]);
        DB::table('items')->insert([
            'text' => 'ハードキャンディー',
            'record_id' => 2,
            'created_at' => $up2018_12,
            'updated_at' => $up2018_12,
        ]);
        DB::table('items')->insert([
            'text' => '15時17分、パリ行き',
            'record_id' => 2,
            'created_at' => $up2018_12,
            'updated_at' => $up2018_12,
        ]);
        DB::table('items')->insert([
            'text' => 'ババドック',
            'record_id' => 2,
            'created_at' => $up2018_12,
            'updated_at' => $up2018_12,
        ]);
        DB::table('items')->insert([
            'text' => 'グットナイトマミー',
            'record_id' => 2,
            'created_at' => $up2018_12,
            'updated_at' => $up2018_12,
        ]);

        // とにぃ映画のきろく 2019
        DB::table('items')->insert([
            'text' => 'マイレージマイライフ',
            'record_id' => 2,
            'created_at' => $up2019_1,
            'updated_at' => $up2019_1,
        ]);
        DB::table('items')->insert([
            'text' => 'タンジェリン',
            'record_id' => 2,
            'created_at' => $up2019_1,
            'updated_at' => $up2019_1,
        ]);
        DB::table('items')->insert([
            'text' => 'ジョン・ウィック(2回目)',
            'record_id' => 2,
            'created_at' => $up2019_2,
            'updated_at' => $up2019_2,
        ]);
        DB::table('items')->insert([
            'text' => '新感染',
            'record_id' => 2,
            'created_at' => $up2019_2,
            'updated_at' => $up2019_2,
        ]);
        DB::table('items')->insert([
            'text' => 'パワーレンジャー',
            'record_id' => 2,
            'created_at' => $up2019_3,
            'updated_at' => $up2019_3,
        ]);
        DB::table('items')->insert([
            'text' => 'ブラックミラー 宇宙船カリスター号',
            'record_id' => 2,
            'created_at' => $up2019_3,
            'updated_at' => $up2019_3,
        ]);
        DB::table('items')->insert([
            'text' => 'サスペリア',
            'record_id' => 2,
            'created_at' => $up2019_4,
            'updated_at' => $up2019_4,
        ]);
        DB::table('items')->insert([
            'text' => 'パシフィックリム アップライジング',
            'record_id' => 2,
            'created_at' => $up2019_4,
            'updated_at' => $up2019_4,
        ]);
        DB::table('items')->insert([
            'text' => 'ランペイジ',
            'record_id' => 2,
            'created_at' => $up2019_5,
            'updated_at' => $up2019_5,
        ]);
        DB::table('items')->insert([
            'text' => '海底47m',
            'record_id' => 2,
            'created_at' => $up2019_5,
            'updated_at' => $up2019_5,
        ]);
        DB::table('items')->insert([
            'text' => 'キャプテンマーベル',
            'record_id' => 2,
            'created_at' => $up2019_6,
            'updated_at' => $up2019_6,
        ]);
        DB::table('items')->insert([
            'text' => 'グレイテストショーマン',
            'record_id' => 2,
            'created_at' => $up2019_6,
            'updated_at' => $up2019_6,
        ]);
        DB::table('items')->insert([
            'text' => 'ジュラシックワールド 炎の王国',
            'record_id' => 2,
            'created_at' => $up2019_6,
            'updated_at' => $up2019_6,
        ]);
        DB::table('items')->insert([
            'text' => 'ワールドエンド 酔っ払いが世界を救う',
            'record_id' => 2,
            'created_at' => $up2019_7,
            'updated_at' => $up2019_7,
        ]);
        DB::table('items')->insert([
            'text' => 'アベンジャーズ エンドゲーム',
            'record_id' => 2,
            'created_at' => $up2019_7,
            'updated_at' => $up2019_7,
        ]);
        DB::table('items')->insert([
            'text' => 'ある少年の告白',
            'record_id' => 2,
            'created_at' => $up2019_7,
            'updated_at' => $up2019_7,
        ]);
        DB::table('items')->insert([
            'text' => 'スパイダーマン ファーフロムホーム',
            'record_id' => 2,
            'created_at' => $up2019_8,
            'updated_at' => $up2019_8,
        ]);
        DB::table('items')->insert([
            'text' => 'メグ・ザ・モンスター',
            'record_id' => 2,
            'created_at' => $up2019_8,
            'updated_at' => $up2019_8,
        ]);
        DB::table('items')->insert([
            'text' => 'ナイト・オブ・ザ・リビングデッド リメイク',
            'record_id' => 2,
            'created_at' => $up2019_9,
            'updated_at' => $up2019_9,
        ]);
        DB::table('items')->insert([
            'text' => 'ゾンビワールドへようこそ',
            'record_id' => 2,
            'created_at' => $up2019_9,
            'updated_at' => $up2019_9,
        ]);
        DB::table('items')->insert([
            'text' => 'ワンス・アポン・ア・タイム・イン・ハリウッド',
            'record_id' => 2,
            'created_at' => $up2019_10,
            'updated_at' => $up2019_10,
        ]);
        DB::table('items')->insert([
            'text' => 'バードボックス',
            'record_id' => 2,
            'created_at' => $up2019_10,
            'updated_at' => $up2019_10,
        ]);
        DB::table('items')->insert([
            'text' => 'ゾンビガール',
            'record_id' => 2,
            'created_at' => $up2019_11,
            'updated_at' => $up2019_11,
        ]);
        DB::table('items')->insert([
            'text' => 'アンフレンデット ダークウェブ',
            'record_id' => 2,
            'created_at' => $up2019_11,
            'updated_at' => $up2019_11,
        ]);
        DB::table('items')->insert([
            'text' => 'スターウォーズ スカイウォーカーの夜明け',
            'record_id' => 2,
            'created_at' => $up2019_12,
            'updated_at' => $up2019_12,
        ]);
        DB::table('items')->insert([
            'text' => 'シュガーラッシュ オンライン',
            'record_id' => 2,
            'created_at' => $up2019_12,
            'updated_at' => $up2019_12,
        ]);

        // とにぃ映画のきろく 2020
        DB::table('items')->insert([
            'text' => 'マンダロリアン シーズン1',
            'record_id' => 2,
            'created_at' => $up2020_1,
            'updated_at' => $up2020_1,
        ]);
        DB::table('items')->insert([
            'text' => 'バンブルビー',
            'record_id' => 2,
            'created_at' => $up2020_1,
            'updated_at' => $up2020_1,
        ]);
        DB::table('items')->insert([
            'text' => 'リチャード・ジョエル',
            'record_id' => 2,
            'created_at' => $up2020_2,
            'updated_at' => $up2020_2,
        ]);
        DB::table('items')->insert([
            'text' => 'ベイマックス',
            'record_id' => 2,
            'created_at' => $up2020_2,
            'updated_at' => $up2020_2,
        ]);
        DB::table('items')->insert([
            'text' => 'カーゴ',
            'record_id' => 2,
            'created_at' => $up2020_2,
            'updated_at' => $up2020_2,
        ]);
        DB::table('items')->insert([
            'text' => 'ハッピー・デス・デイ',
            'record_id' => 2,
            'created_at' => $up2020_3,
            'updated_at' => $up2020_3,
        ]);
        DB::table('items')->insert([
            'text' => 'ピラニア',
            'record_id' => 2,
            'created_at' => $up2020_3,
            'updated_at' => $up2020_3,
        ]);
        DB::table('items')->insert([
            'text' => 'ハッピー・デス・デイ2',
            'record_id' => 2,
            'created_at' => $up2020_3,
            'updated_at' => $up2020_3,
        ]);
        DB::table('items')->insert([
            'text' => 'スクリーム ドラマ',
            'record_id' => 2,
            'created_at' => $up2020_4,
            'updated_at' => $up2020_4,
        ]);
        DB::table('items')->insert([
            'text' => 'ウインドリバー',
            'record_id' => 2,
            'created_at' => $up2020_4,
            'updated_at' => $up2020_4,
        ]);
        DB::table('items')->insert([
            'text' => 'カムガール',
            'record_id' => 2,
            'created_at' => $up2020_4,
            'updated_at' => $up2020_4,
        ]);
        DB::table('items')->insert([
            'text' => 'ドリームハウス',
            'record_id' => 2,
            'created_at' => $up2020_5,
            'updated_at' => $up2020_5,
        ]);
        DB::table('items')->insert([
            'text' => 'ライト/オフ',
            'record_id' => 2,
            'created_at' => $up2020_5,
            'updated_at' => $up2020_5,
        ]);
        DB::table('items')->insert([
            'text' => 'エクリプス',
            'record_id' => 2,
            'created_at' => $up2020_5,
            'updated_at' => $up2020_5,
        ]);
        DB::table('items')->insert([
            'text' => 'ランボー ラストブラッド',
            'record_id' => 2,
            'created_at' => $up2020_6,
            'updated_at' => $up2020_6,
        ]);
        DB::table('items')->insert([
            'text' => 'アス',
            'record_id' => 2,
            'created_at' => $up2020_6,
            'updated_at' => $up2020_6,
        ]);
        DB::table('items')->insert([
            'text' => 'カリガリ博士',
            'record_id' => 2,
            'created_at' => $up2020_7,
            'updated_at' => $up2020_7,
        ]);
        DB::table('items')->insert([
            'text' => '呪怨 呪いの家',
            'record_id' => 2,
            'created_at' => $up2020_7,
            'updated_at' => $up2020_7,
        ]);
    }
}
