<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Items1TableSeeder extends Seeder
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


        // とにぃ読書のきろく 2018 
        DB::table('items')->insert([
            'text' => 'ペスト',
            'record_id' => 1,
            'created_at' => $up2018_1,
            'updated_at' => $up2018_1,
        ]);
        DB::table('items')->insert([
            'text' => '映画と本の意外な関係',
            'record_id' => 1,
            'created_at' => $up2018_1,
            'updated_at' => $up2018_1,
        ]);
        DB::table('items')->insert([
            'text' => '最前線の映画を読む',
            'record_id' => 1,
            'created_at' => $up2018_1,
            'updated_at' => $up2018_1,
        ]);
        DB::table('items')->insert([
            'text' => '恐い間取り',
            'record_id' => 1,
            'created_at' => $up2018_1,
            'updated_at' => $up2018_1,
        ]);
        DB::table('items')->insert([
            'text' => '百年泥',
            'record_id' => 1,
            'created_at' => $up2018_1,
            'updated_at' => $up2018_1,
        ]);
        DB::table('items')->insert([
            'text' => '異邦人',
            'record_id' => 1,
            'created_at' => $up2018_1,
            'updated_at' => $up2018_1,
        ]);
        DB::table('items')->insert([
            'text' => 'ワンダー',
            'record_id' => 1,
            'created_at' => $up2018_1,
            'updated_at' => $up2018_1,
        ]);
        DB::table('items')->insert([
            'text' => 'ブロークバックマウンテン',
            'record_id' => 1,
            'created_at' => $up2018_1,
            'updated_at' => $up2018_1,
        ]);
        DB::table('items')->insert([
            'text' => 'もうひとつのワンダー',
            'record_id' => 1,
            'created_at' => $up2018_1,
            'updated_at' => $up2018_1,
        ]);
        DB::table('items')->insert([
            'text' => 'ブルーオーシャンシフト',
            'record_id' => 1,
            'created_at' => $up2018_1,
            'updated_at' => $up2018_1,
        ]);
        DB::table('items')->insert([
            'text' => '365日のワンダー',
            'record_id' => 1,
            'created_at' => $up2018_2,
            'updated_at' => $up2018_2,
        ]);
        DB::table('items')->insert([
            'text' => '君の名前で僕を呼んで',
            'record_id' => 1,
            'created_at' => $up2018_2,
            'updated_at' => $up2018_2,
        ]);
        DB::table('items')->insert([
            'text' => '子どもの才能を伸ばす最高の方法 モンテッソーリメソッド',
            'record_id' => 1,
            'created_at' => $up2018_2,
            'updated_at' => $up2018_2,
        ]);
        DB::table('items')->insert([
            'text' => 'モンテッソーリ教育で子どもの本当の力を引き出す',
            'record_id' => 1,
            'created_at' => $up2018_2,
            'updated_at' => $up2018_2,
        ]);
        DB::table('items')->insert([
            'text' => '父親が子どもの未来を輝かせる',
            'record_id' => 1,
            'created_at' => $up2018_2,
            'updated_at' => $up2018_2,
        ]);
        DB::table('items')->insert([
            'text' => '帝一の國',
            'record_id' => 1,
            'created_at' => $up2018_2,
            'updated_at' => $up2018_2,
        ]);
        DB::table('items')->insert([
            'text' => '二人で一人の天才',
            'record_id' => 1,
            'created_at' => $up2018_2,
            'updated_at' => $up2018_2,
        ]);
        DB::table('items')->insert([
            'text' => '史上最強の哲学入門',
            'record_id' => 1,
            'created_at' => $up2018_2,
            'updated_at' => $up2018_2,
        ]);
        DB::table('items')->insert([
            'text' => '進歩 人類の未来が明るい10の理由',
            'record_id' => 1,
            'created_at' => $up2018_2,
            'updated_at' => $up2018_2,
        ]);
        DB::table('items')->insert([
            'text' => '史上最強の哲学入門東洋編',
            'record_id' => 1,
            'created_at' => $up2018_3,
            'updated_at' => $up2018_3,
        ]);
        DB::table('items')->insert([
            'text' => '大論争！哲学バトル',
            'record_id' => 1,
            'created_at' => $up2018_3,
            'updated_at' => $up2018_3,
        ]);
        DB::table('items')->insert([
            'text' => '古代ギリシャのリアル',
            'record_id' => 1,
            'created_at' => $up2018_3,
            'updated_at' => $up2018_3,
        ]);
        DB::table('items')->insert([
            'text' => 'その悩み、哲学者がすでに答えを出しています',
            'record_id' => 1,
            'created_at' => $up2018_3,
            'updated_at' => $up2018_3,
        ]);
        DB::table('items')->insert([
            'text' => '飲茶の最強のニーチェ',
            'record_id' => 1,
            'created_at' => $up2018_3,
            'updated_at' => $up2018_3,
        ]);
        DB::table('items')->insert([
            'text' => 'てつがくフレンズ',
            'record_id' => 1,
            'created_at' => $up2018_3,
            'updated_at' => $up2018_3,
        ]);
        DB::table('items')->insert([
            'text' => '14歳からの哲学入門',
            'record_id' => 1,
            'created_at' => $up2018_3,
            'updated_at' => $up2018_3,
        ]);
        DB::table('items')->insert([
            'text' => '365日のワンダー',
            'record_id' => 1,
            'created_at' => $up2018_3,
            'updated_at' => $up2018_3,
        ]);
        DB::table('items')->insert([
            'text' => 'ホモ・デウス上下',
            'record_id' => 1,
            'created_at' => $up2018_3,
            'updated_at' => $up2018_3,
        ]);
        DB::table('items')->insert([
            'text' => '1日1ページ、読むだけで身につく世界の教養365',
            'record_id' => 1,
            'created_at' => $up2018_4,
            'updated_at' => $up2018_4,
        ]);
        DB::table('items')->insert([
            'text' => '哲学的な何か、あと科学とか',
            'record_id' => 1,
            'created_at' => $up2018_4,
            'updated_at' => $up2018_4,
        ]);
        DB::table('items')->insert([
            'text' => '哲学的な関係、あと数学とか',
            'record_id' => 1,
            'created_at' => $up2018_4,
            'updated_at' => $up2018_4,
        ]);
        DB::table('items')->insert([
            'text' => '哲学ガールズ',
            'record_id' => 1,
            'created_at' => $up2018_4,
            'updated_at' => $up2018_4,
        ]);
        DB::table('items')->insert([
            'text' => '成功ではなく、幸福について語ろう',
            'record_id' => 1,
            'created_at' => $up2018_4,
            'updated_at' => $up2018_4,
        ]);
        DB::table('items')->insert([
            'text' => '反応しない練習',
            'record_id' => 1,
            'created_at' => $up2018_4,
            'updated_at' => $up2018_4,
        ]);
        DB::table('items')->insert([
            'text' => 'ニーチェが京都にやってきて、17歳のわたしに哲学のことをおしえてくれた',
            'record_id' => 1,
            'created_at' => $up2018_4,
            'updated_at' => $up2018_4,
        ]);
        DB::table('items')->insert([
            'text' => '働き方の哲学',
            'record_id' => 1,
            'created_at' => $up2018_4,
            'updated_at' => $up2018_4,
        ]);
        DB::table('items')->insert([
            'text' => '14歳からの哲学',
            'record_id' => 1,
            'created_at' => $up2018_4,
            'updated_at' => $up2018_4,
        ]);
        DB::table('items')->insert([
            'text' => '超図解！21世紀の哲学がわかる本',
            'record_id' => 1,
            'created_at' => $up2018_5,
            'updated_at' => $up2018_5,
        ]);
        DB::table('items')->insert([
            'text' => '幸福とは何か',
            'record_id' => 1,
            'created_at' => $up2018_5,
            'updated_at' => $up2018_5,
        ]);
        DB::table('items')->insert([
            'text' => '暇と退屈の倫理学',
            'record_id' => 1,
            'created_at' => $up2018_5,
            'updated_at' => $up2018_5,
        ]);
        DB::table('items')->insert([
            'text' => 'わけあって絶滅しました',
            'record_id' => 1,
            'created_at' => $up2018_5,
            'updated_at' => $up2018_5,
        ]);
        DB::table('items')->insert([
            'text' => '封印されたアダルトビデオ',
            'record_id' => 1,
            'created_at' => $up2018_5,
            'updated_at' => $up2018_5,
        ]);
        DB::table('items')->insert([
            'text' => 'リーダーの教養書',
            'record_id' => 1,
            'created_at' => $up2018_5,
            'updated_at' => $up2018_5,
        ]);
        DB::table('items')->insert([
            'text' => 'アルフレッド・アドラー 人生に革命が起きる100の言葉',
            'record_id' => 1,
            'created_at' => $up2018_5,
            'updated_at' => $up2018_5,
        ]);
        DB::table('items')->insert([
            'text' => 'あなたが世界のためにできるたったひとつのこと',
            'record_id' => 1,
            'created_at' => $up2018_5,
            'updated_at' => $up2018_5,
        ]);
        DB::table('items')->insert([
            'text' => 'シャーデンフロイデ 他人を引きずり落とす快感',
            'record_id' => 1,
            'created_at' => $up2018_5,
            'updated_at' => $up2018_5,
        ]);
        DB::table('items')->insert([
            'text' => '効果的な利他主義宣言！',
            'record_id' => 1,
            'created_at' => $up2018_5,
            'updated_at' => $up2018_5,
        ]);
        DB::table('items')->insert([
            'text' => 'ゼロトゥワン',
            'record_id' => 1,
            'created_at' => $up2018_6,
            'updated_at' => $up2018_6,
        ]);
        DB::table('items')->insert([
            'text' => 'サタニック人生相談',
            'record_id' => 1,
            'created_at' => $up2018_6,
            'updated_at' => $up2018_6,
        ]);
        DB::table('items')->insert([
            'text' => '最前線の映画を読む',
            'record_id' => 1,
            'created_at' => $up2018_6,
            'updated_at' => $up2018_6,
        ]);
        DB::table('items')->insert([
            'text' => '恐い間取り',
            'record_id' => 1,
            'created_at' => $up2018_6,
            'updated_at' => $up2018_6,
        ]);
        DB::table('items')->insert([
            'text' => 'ワンダー(2回目)',
            'record_id' => 1,
            'created_at' => $up2018_6,
            'updated_at' => $up2018_6,
        ]);
        DB::table('items')->insert([
            'text' => 'ユーチューバーが消滅する未来',
            'record_id' => 1,
            'created_at' => $up2018_6,
            'updated_at' => $up2018_6,
        ]);
        DB::table('items')->insert([
            'text' => 'てつがくフレンズ(2回目)',
            'record_id' => 1,
            'created_at' => $up2018_6,
            'updated_at' => $up2018_6,
        ]);
        DB::table('items')->insert([
            'text' => 'その悩み、哲学者がすでに答えを出しています',
            'record_id' => 1,
            'created_at' => $up2018_6,
            'updated_at' => $up2018_6,
        ]);
        DB::table('items')->insert([
            'text' => '反応しない練習(2回目)',
            'record_id' => 1,
            'created_at' => $up2018_6,
            'updated_at' => $up2018_6,
        ]);
        DB::table('items')->insert([
            'text' => '飲茶の最強のニーチェ',
            'record_id' => 1,
            'created_at' => $up2018_6,
            'updated_at' => $up2018_6,
        ]);
        DB::table('items')->insert([
            'text' => '宇宙からいかにヒトは生まれたか',
            'record_id' => 1,
            'created_at' => $up2018_7,
            'updated_at' => $up2018_7,
        ]);
        DB::table('items')->insert([
            'text' => '進化の教科書123',
            'record_id' => 1,
            'created_at' => $up2018_8,
            'updated_at' => $up2018_8,
        ]);
        DB::table('items')->insert([
            'text' => '自分の中に毒を持て',
            'record_id' => 1,
            'created_at' => $up2018_8,
            'updated_at' => $up2018_8,
        ]);
        DB::table('items')->insert([
            'text' => '自分の中に孤独を抱け',
            'record_id' => 1,
            'created_at' => $up2018_8,
            'updated_at' => $up2018_8,
        ]);
        DB::table('items')->insert([
            'text' => '自分の運命に楯を付け',
            'record_id' => 1,
            'created_at' => $up2018_8,
            'updated_at' => $up2018_8,
        ]);

        // とにぃ読書のきろく 2019
        DB::table('items')->insert([
            'text' => 'ブロークバックマウンテン',
            'record_id' => 1,
            'created_at' => $up2019_1,
            'updated_at' => $up2019_1,
        ]);
        DB::table('items')->insert([
            'text' => '異邦人(2回目)',
            'record_id' => 1,
            'created_at' => $up2019_1,
            'updated_at' => $up2019_1,
        ]);
        DB::table('items')->insert([
            'text' => '今日の芸術',
            'record_id' => 1,
            'created_at' => $up2019_1,
            'updated_at' => $up2019_1,
        ]);
        DB::table('items')->insert([
            'text' => '美の呪力',
            'record_id' => 1,
            'created_at' => $up2019_1,
            'updated_at' => $up2019_1,
        ]);
        DB::table('items')->insert([
            'text' => '脳釘怪談',
            'record_id' => 1,
            'created_at' => $up2019_1,
            'updated_at' => $up2019_1,
        ]);
        DB::table('items')->insert([
            'text' => '青春ピカソ',
            'record_id' => 1,
            'created_at' => $up2019_2,
            'updated_at' => $up2019_2,
        ]);
        DB::table('items')->insert([
            'text' => '青春ピカソ',
            'record_id' => 1,
            'created_at' => $up2019_2,
            'updated_at' => $up2019_2,
        ]);
        DB::table('items')->insert([
            'text' => 'うつヌケ',
            'record_id' => 1,
            'created_at' => $up2019_2,
            'updated_at' => $up2019_2,
        ]);
        DB::table('items')->insert([
            'text' => '経済学者、待機児童ゼロに挑む',
            'record_id' => 1,
            'created_at' => $up2019_2,
            'updated_at' => $up2019_2,
        ]);
        DB::table('items')->insert([
            'text' => '中動態の世界',
            'record_id' => 1,
            'created_at' => $up2019_2,
            'updated_at' => $up2019_2,
        ]);
        DB::table('items')->insert([
            'text' => 'ヘンテコノミクス',
            'record_id' => 1,
            'created_at' => $up2019_2,
            'updated_at' => $up2019_2,
        ]);
        DB::table('items')->insert([
            'text' => '経済学者、日本の最貧困地域に挑む',
            'record_id' => 1,
            'created_at' => $up2019_3,
            'updated_at' => $up2019_3,
        ]);
        DB::table('items')->insert([
            'text' => '縄文探検隊の記録',
            'record_id' => 1,
            'created_at' => $up2019_3,
            'updated_at' => $up2019_3,
        ]);
        DB::table('items')->insert([
            'text' => 'バカと付き合うな',
            'record_id' => 1,
            'created_at' => $up2019_3,
            'updated_at' => $up2019_3,
        ]);
        DB::table('items')->insert([
            'text' => 'いつも時間がないあなたに',
            'record_id' => 1,
            'created_at' => $up2019_3,
            'updated_at' => $up2019_3,
        ]);
        DB::table('items')->insert([
            'text' => '僕たちはもう働かなくていい',
            'record_id' => 1,
            'created_at' => $up2019_3,
            'updated_at' => $up2019_3,
        ]);
        DB::table('items')->insert([
            'text' => '健康の結論',
            'record_id' => 1,
            'created_at' => $up2019_3,
            'updated_at' => $up2019_3,
        ]);
        DB::table('items')->insert([
            'text' => '0才から100才まで学び続けなくてはならない時代を生きる学ぶ人と育てる人のための教科書',
            'record_id' => 1,
            'created_at' => $up2019_4,
            'updated_at' => $up2019_4,
        ]);
        DB::table('items')->insert([
            'text' => '英語の多動力',
            'record_id' => 1,
            'created_at' => $up2019_4,
            'updated_at' => $up2019_4,
        ]);
        DB::table('items')->insert([
            'text' => '科学的に正しい英語勉強法',
            'record_id' => 1,
            'created_at' => $up2019_4,
            'updated_at' => $up2019_4,
        ]);
        DB::table('items')->insert([
            'text' => 'もっと言ってはいけない',
            'record_id' => 1,
            'created_at' => $up2019_4,
            'updated_at' => $up2019_4,
        ]);
        DB::table('items')->insert([
            'text' => 'ハーディング家の子育て',
            'record_id' => 1,
            'created_at' => $up2019_4,
            'updated_at' => $up2019_4,
        ]);
        DB::table('items')->insert([
            'text' => '小さな天才の育て方・育ち方',
            'record_id' => 1,
            'created_at' => $up2019_4,
            'updated_at' => $up2019_4,
        ]);
        DB::table('items')->insert([
            'text' => '死に山',
            'record_id' => 1,
            'created_at' => $up2019_4,
            'updated_at' => $up2019_4,
        ]);
        DB::table('items')->insert([
            'text' => 'その問題、経済学で解決できます',
            'record_id' => 1,
            'created_at' => $up2019_4,
            'updated_at' => $up2019_4,
        ]);
        DB::table('items')->insert([
            'text' => '触れることの科学',
            'record_id' => 1,
            'created_at' => $up2019_5,
            'updated_at' => $up2019_5,
        ]);
        DB::table('items')->insert([
            'text' => '日本人の勝算',
            'record_id' => 1,
            'created_at' => $up2019_5,
            'updated_at' => $up2019_5,
        ]);
        DB::table('items')->insert([
            'text' => 'GAFA',
            'record_id' => 1,
            'created_at' => $up2019_5,
            'updated_at' => $up2019_5,
        ]);
        DB::table('items')->insert([
            'text' => '超効率勉強法',
            'record_id' => 1,
            'created_at' => $up2019_5,
            'updated_at' => $up2019_5,
        ]);
        DB::table('items')->insert([
            'text' => '進化する勉強法',
            'record_id' => 1,
            'created_at' => $up2019_5,
            'updated_at' => $up2019_5,
        ]);
        DB::table('items')->insert([
            'text' => '快楽回路',
            'record_id' => 1,
            'created_at' => $up2019_5,
            'updated_at' => $up2019_5,
        ]);
        DB::table('items')->insert([
            'text' => '樹海考',
            'record_id' => 1,
            'created_at' => $up2019_6,
            'updated_at' => $up2019_6,
        ]);
        DB::table('items')->insert([
            'text' => '自分を生きる学校',
            'record_id' => 1,
            'created_at' => $up2019_6,
            'updated_at' => $up2019_6,
        ]);
        DB::table('items')->insert([
            'text' => '経済学なんて教科書だけでわかるか！ボケ！',
            'record_id' => 1,
            'created_at' => $up2019_6,
            'updated_at' => $up2019_6,
        ]);
        DB::table('items')->insert([
            'text' => 'EQ2.0',
            'record_id' => 1,
            'created_at' => $up2019_6,
            'updated_at' => $up2019_6,
        ]);
        DB::table('items')->insert([
            'text' => '父が娘に語る美しく、深く、壮大で、とんでもなくわかりやすい経済の話',
            'record_id' => 1,
            'created_at' => $up2019_6,
            'updated_at' => $up2019_6,
        ]);
        DB::table('items')->insert([
            'text' => '1日3時間だけ働いておだやかに暮らす思考',
            'record_id' => 1,
            'created_at' => $up2019_6,
            'updated_at' => $up2019_6,
        ]);
        DB::table('items')->insert([
            'text' => 'そろそろ会社辞めようかな',
            'record_id' => 1,
            'created_at' => $up2019_7,
            'updated_at' => $up2019_7,
        ]);
        DB::table('items')->insert([
            'text' => '知の整理術',
            'record_id' => 1,
            'created_at' => $up2019_7,
            'updated_at' => $up2019_7,
        ]);
        DB::table('items')->insert([
            'text' => '持たない幸福論',
            'record_id' => 1,
            'created_at' => $up2019_7,
            'updated_at' => $up2019_7,
        ]);
        DB::table('items')->insert([
            'text' => '情報だけ武器にしろ',
            'record_id' => 1,
            'created_at' => $up2019_7,
            'updated_at' => $up2019_7,
        ]);
        DB::table('items')->insert([
            'text' => '0円で生きる',
            'record_id' => 1,
            'created_at' => $up2019_7,
            'updated_at' => $up2019_7,
        ]);
        DB::table('items')->insert([
            'text' => '超人脈術',
            'record_id' => 1,
            'created_at' => $up2019_7,
            'updated_at' => $up2019_7,
        ]);
        DB::table('items')->insert([
            'text' => '強いチームはオフィスを捨てる',
            'record_id' => 1,
            'created_at' => $up2019_7,
            'updated_at' => $up2019_7,
        ]);
        DB::table('items')->insert([
            'text' => '日本人がグローバル資本主義は生き抜くための経済学入門：もう代案はありません',
            'record_id' => 1,
            'created_at' => $up2019_8,
            'updated_at' => $up2019_8,
        ]);
        DB::table('items')->insert([
            'text' => '不自由な男たち',
            'record_id' => 1,
            'created_at' => $up2019_8,
            'updated_at' => $up2019_8,
        ]);
        DB::table('items')->insert([
            'text' => '恥さらし',
            'record_id' => 1,
            'created_at' => $up2019_8,
            'updated_at' => $up2019_8,
        ]);
        DB::table('items')->insert([
            'text' => '日本で一番悪い奴ら',
            'record_id' => 1,
            'created_at' => $up2019_8,
            'updated_at' => $up2019_8,
        ]);
        DB::table('items')->insert([
            'text' => '世界一素朴な疑問、宇宙一美しい答え',
            'record_id' => 1,
            'created_at' => $up2019_8,
            'updated_at' => $up2019_8,
        ]);
        DB::table('items')->insert([
            'text' => 'ザ・コピーライティング',
            'record_id' => 1,
            'created_at' => $up2019_8,
            'updated_at' => $up2019_8,
        ]);
        DB::table('items')->insert([
            'text' => 'オリジナルズ 誰もが人と違うことができる時代',
            'record_id' => 1,
            'created_at' => $up2019_8,
            'updated_at' => $up2019_8,
        ]);
        DB::table('items')->insert([
            'text' => '資本家マインドセット',
            'record_id' => 1,
            'created_at' => $up2019_9,
            'updated_at' => $up2019_9,
        ]);
        DB::table('items')->insert([
            'text' => '会計の世界史',
            'record_id' => 1,
            'created_at' => $up2019_9,
            'updated_at' => $up2019_9,
        ]);
        DB::table('items')->insert([
            'text' => 'サラリーマンは300万円で小さな会社を買いなさい',
            'record_id' => 1,
            'created_at' => $up2019_9,
            'updated_at' => $up2019_9,
        ]);
        DB::table('items')->insert([
            'text' => '日本進化論',
            'record_id' => 1,
            'created_at' => $up2019_9,
            'updated_at' => $up2019_9,
        ]);
        DB::table('items')->insert([
            'text' => '新・悪魔が憐れむ歌',
            'record_id' => 1,
            'created_at' => $up2019_9,
            'updated_at' => $up2019_9,
        ]);
        DB::table('items')->insert([
            'text' => 'サラリーマンは300万円で小さな会社を買いなさい 会計編',
            'record_id' => 1,
            'created_at' => $up2019_9,
            'updated_at' => $up2019_9,
        ]);
        DB::table('items')->insert([
            'text' => 'デジタルネイチャー',
            'record_id' => 1,
            'created_at' => $up2019_9,
            'updated_at' => $up2019_9,
        ]);
        DB::table('items')->insert([
            'text' => 'ムダ家事が消える生活',
            'record_id' => 1,
            'created_at' => $up2019_9,
            'updated_at' => $up2019_9,
        ]);
        DB::table('items')->insert([
            'text' => '手ぶらで生きる',
            'record_id' => 1,
            'created_at' => $up2019_9,
            'updated_at' => $up2019_9,
        ]);
        DB::table('items')->insert([
            'text' => '40代から食べるなら、どっち？',
            'record_id' => 1,
            'created_at' => $up2019_9,
            'updated_at' => $up2019_9,
        ]);
        DB::table('items')->insert([
            'text' => '14歳からの哲学入門',
            'record_id' => 1,
            'created_at' => $up2019_10,
            'updated_at' => $up2019_10,
        ]);
        DB::table('items')->insert([
            'text' => 'ビッグクエスチョン',
            'record_id' => 1,
            'created_at' => $up2019_10,
            'updated_at' => $up2019_10,
        ]);
        DB::table('items')->insert([
            'text' => '50 今の経済をつくったモノ',
            'record_id' => 1,
            'created_at' => $up2019_10,
            'updated_at' => $up2019_10,
        ]);
        DB::table('items')->insert([
            'text' => '正義の教室',
            'record_id' => 1,
            'created_at' => $up2019_10,
            'updated_at' => $up2019_10,
        ]);
        DB::table('items')->insert([
            'text' => 'ひとの気持ちが聴こえたら',
            'record_id' => 1,
            'created_at' => $up2019_10,
            'updated_at' => $up2019_10,
        ]);
        DB::table('items')->insert([
            'text' => '恐い旅',
            'record_id' => 1,
            'created_at' => $up2019_10,
            'updated_at' => $up2019_10,
        ]);
        DB::table('items')->insert([
            'text' => '日本史で学ぶ経済学',
            'record_id' => 1,
            'created_at' => $up2019_11,
            'updated_at' => $up2019_11,
        ]);
        DB::table('items')->insert([
            'text' => '死ぬんじゃねーぞ',
            'record_id' => 1,
            'created_at' => $up2019_11,
            'updated_at' => $up2019_11,
        ]);
        DB::table('items')->insert([
            'text' => '続・怪談和尚の京都怪奇譚',
            'record_id' => 1,
            'created_at' => $up2019_11,
            'updated_at' => $up2019_11,
        ]);
        DB::table('items')->insert([
            'text' => '夜しか開かない精神科診療所',
            'record_id' => 1,
            'created_at' => $up2019_11,
            'updated_at' => $up2019_11,
        ]);
        DB::table('items')->insert([
            'text' => 'これが日本の民主主義',
            'record_id' => 1,
            'created_at' => $up2019_11,
            'updated_at' => $up2019_11,
        ]);
        DB::table('items')->insert([
            'text' => '知りたくなる韓国',
            'record_id' => 1,
            'created_at' => $up2019_11,
            'updated_at' => $up2019_11,
        ]);
        DB::table('items')->insert([
            'text' => 'WEBサービスのつくり方',
            'record_id' => 1,
            'created_at' => $up2019_11,
            'updated_at' => $up2019_11,
        ]);
        DB::table('items')->insert([
            'text' => '食えなんだら食うな',
            'record_id' => 1,
            'created_at' => $up2019_11,
            'updated_at' => $up2019_11,
        ]);
        DB::table('items')->insert([
            'text' => 'こんなに危ない消費増税',
            'record_id' => 1,
            'created_at' => $up2019_11,
            'updated_at' => $up2019_11,
        ]);
        DB::table('items')->insert([
            'text' => '国会という茶番劇',
            'record_id' => 1,
            'created_at' => $up2019_11,
            'updated_at' => $up2019_11,
        ]);
        DB::table('items')->insert([
            'text' => 'キャラ絵で学ぶ！仏教図鑑',
            'record_id' => 1,
            'created_at' => $up2019_11,
            'updated_at' => $up2019_11,
        ]);
        DB::table('items')->insert([
            'text' => '僕は君たちに武器を配りたい',
            'record_id' => 1,
            'created_at' => $up2019_11,
            'updated_at' => $up2019_11,
        ]);
        DB::table('items')->insert([
            'text' => '私たちは子どもに何ができるのか',
            'record_id' => 1,
            'created_at' => $up2019_12,
            'updated_at' => $up2019_12,
        ]);
        DB::table('items')->insert([
            'text' => '年収90万円でハッピーライフ',
            'record_id' => 1,
            'created_at' => $up2019_12,
            'updated_at' => $up2019_12,
        ]);
        DB::table('items')->insert([
            'text' => 'なるべく働きたくない人のお金の話',
            'record_id' => 1,
            'created_at' => $up2019_12,
            'updated_at' => $up2019_12,
        ]);
        DB::table('items')->insert([
            'text' => '実行力',
            'record_id' => 1,
            'created_at' => $up2019_12,
            'updated_at' => $up2019_12,
        ]);
        DB::table('items')->insert([
            'text' => '誰でもすぐに戦力になれる未来食堂で働きませんか',
            'record_id' => 1,
            'created_at' => $up2019_12,
            'updated_at' => $up2019_12,
        ]);
        DB::table('items')->insert([
            'text' => '税金のこもわからないままフリーランスに',
            'record_id' => 1,
            'created_at' => $up2019_12,
            'updated_at' => $up2019_12,
        ]);
        DB::table('items')->insert([
            'text' => '群集心理',
            'record_id' => 1,
            'created_at' => $up2019_12,
            'updated_at' => $up2019_12,
        ]);
        DB::table('items')->insert([
            'text' => '非認知能力の育て方',
            'record_id' => 1,
            'created_at' => $up2019_12,
            'updated_at' => $up2019_12,
        ]);
        DB::table('items')->insert([
            'text' => '政治を選ぶ力',
            'record_id' => 1,
            'created_at' => $up2019_12,
            'updated_at' => $up2019_12,
        ]);
        DB::table('items')->insert([
            'text' => '中国とアラブがわかる世界史',
            'record_id' => 1,
            'created_at' => $up2019_12,
            'updated_at' => $up2019_12,
        ]);
        DB::table('items')->insert([
            'text' => '憲法問答',
            'record_id' => 1,
            'created_at' => $up2019_12,
            'updated_at' => $up2019_12,
        ]);
        DB::table('items')->insert([
            'text' => 'ゆげ塾の構造がわかる世界史',
            'record_id' => 1,
            'created_at' => $up2019_12,
            'updated_at' => $up2019_12,
        ]);
        DB::table('items')->insert([
            'text' => 'アルケミスト 夢を旅した少年',
            'record_id' => 1,
            'created_at' => $up2019_12,
            'updated_at' => $up2019_12,
        ]);
        DB::table('items')->insert([
            'text' => '痛快！コンピュータ学',
            'record_id' => 1,
            'created_at' => $up2019_12,
            'updated_at' => $up2019_12,
        ]);

        // とにぃ読書のきろく 2020
        DB::table('items')->insert([
            'text' => 'インベスターZ 全21巻',
            'record_id' => 1,
            'created_at' => $up2020_1,
            'updated_at' => $up2020_1,
        ]);
        DB::table('items')->insert([
            'text' => 'スターウォーズ禁断の真実',
            'record_id' => 1,
            'created_at' => $up2020_1,
            'updated_at' => $up2020_1,
        ]);
        DB::table('items')->insert([
            'text' => '人生は運よりも実力よりも勘違いさせる力で決まっている',
            'record_id' => 1,
            'created_at' => $up2020_1,
            'updated_at' => $up2020_1,
        ]);
        DB::table('items')->insert([
            'text' => '1本3000円のガトーショコラが飛ぶように売れるわけ',
            'record_id' => 1,
            'created_at' => $up2020_1,
            'updated_at' => $up2020_1,
        ]);
        DB::table('items')->insert([
            'text' => '400円のマグカップで4000万のモノを売る方法',
            'record_id' => 1,
            'created_at' => $up2020_1,
            'updated_at' => $up2020_1,
        ]);
        DB::table('items')->insert([
            'text' => 'ぶっ壊す力',
            'record_id' => 1,
            'created_at' => $up2020_1,
            'updated_at' => $up2020_1,
        ]);
        DB::table('items')->insert([
            'text' => 'ファクトフルネス',
            'record_id' => 1,
            'created_at' => $up2020_1,
            'updated_at' => $up2020_1,
        ]);
        DB::table('items')->insert([
            'text' => '1分間バフェット',
            'record_id' => 1,
            'created_at' => $up2020_1,
            'updated_at' => $up2020_1,
        ]);
        DB::table('items')->insert([
            'text' => 'ビジネスが変わるコグニティブサイエンス',
            'record_id' => 1,
            'created_at' => $up2020_1,
            'updated_at' => $up2020_1,
        ]);
        DB::table('items')->insert([
            'text' => '瞑想と認知科学の教室',
            'record_id' => 1,
            'created_at' => $up2020_1,
            'updated_at' => $up2020_1,
        ]);
        DB::table('items')->insert([
            'text' => 'DR苫米地式資産運用法なら誰もが絶対にrichになれる',
            'record_id' => 1,
            'created_at' => $up2020_2,
            'updated_at' => $up2020_2,
        ]);
        DB::table('items')->insert([
            'text' => 'だからテレビに嫌われる',
            'record_id' => 1,
            'created_at' => $up2020_2,
            'updated_at' => $up2020_2,
        ]);
        DB::table('items')->insert([
            'text' => '思考停止という病',
            'record_id' => 1,
            'created_at' => $up2020_2,
            'updated_at' => $up2020_2,
        ]);
        DB::table('items')->insert([
            'text' => 'なぜ、たった一回リツイートが名誉毀損になるのか',
            'record_id' => 1,
            'created_at' => $up2020_2,
            'updated_at' => $up2020_2,
        ]);
        DB::table('items')->insert([
            'text' => '国家の恥 一億総洗脳化の真実',
            'record_id' => 1,
            'created_at' => $up2020_2,
            'updated_at' => $up2020_2,
        ]);
        DB::table('items')->insert([
            'text' => '現代洗脳のカラクリ',
            'record_id' => 1,
            'created_at' => $up2020_2,
            'updated_at' => $up2020_2,
        ]);
        DB::table('items')->insert([
            'text' => '国策不捜査',
            'record_id' => 1,
            'created_at' => $up2020_2,
            'updated_at' => $up2020_2,
        ]);
        DB::table('items')->insert([
            'text' => '淳と隆のニュースの裏側',
            'record_id' => 1,
            'created_at' => $up2020_2,
            'updated_at' => $up2020_2,
        ]);
        DB::table('items')->insert([
            'text' => '図太くなれる禅思考',
            'record_id' => 1,
            'created_at' => $up2020_2,
            'updated_at' => $up2020_2,
        ]);
        DB::table('items')->insert([
            'text' => 'オプエド',
            'record_id' => 1,
            'created_at' => $up2020_2,
            'updated_at' => $up2020_2,
        ]);
        DB::table('items')->insert([
            'text' => '私は負けない',
            'record_id' => 1,
            'created_at' => $up2020_3,
            'updated_at' => $up2020_3,
        ]);
        DB::table('items')->insert([
            'text' => '安倍官邸vsNHK',
            'record_id' => 1,
            'created_at' => $up2020_3,
            'updated_at' => $up2020_3,
        ]);
        DB::table('items')->insert([
            'text' => '許せないを許してみる',
            'record_id' => 1,
            'created_at' => $up2020_3,
            'updated_at' => $up2020_3,
        ]);
        DB::table('items')->insert([
            'text' => '拘留120日',
            'record_id' => 1,
            'created_at' => $up2020_3,
            'updated_at' => $up2020_3,
        ]);
        DB::table('items')->insert([
            'text' => '悪いのは誰だ！新国立競技場',
            'record_id' => 1,
            'created_at' => $up2020_3,
            'updated_at' => $up2020_3,
        ]);
        DB::table('items')->insert([
            'text' => '暴走検察',
            'record_id' => 1,
            'created_at' => $up2020_3,
            'updated_at' => $up2020_3,
        ]);
        DB::table('items')->insert([
            'text' => '青年市長は司法の闇と戦った',
            'record_id' => 1,
            'created_at' => $up2020_3,
            'updated_at' => $up2020_3,
        ]);
        DB::table('items')->insert([
            'text' => '言霊',
            'record_id' => 1,
            'created_at' => $up2020_3,
            'updated_at' => $up2020_3,
        ]);
        DB::table('items')->insert([
            'text' => '立花孝志かく闘えり',
            'record_id' => 1,
            'created_at' => $up2020_3,
            'updated_at' => $up2020_3,
        ]);
        DB::table('items')->insert([
            'text' => '新型コロナウイルスの真実',
            'record_id' => 1,
            'created_at' => $up2020_3,
            'updated_at' => $up2020_3,
        ]);
        DB::table('items')->insert([
            'text' => '逆説の日本史 戦国三英傑編',
            'record_id' => 1,
            'created_at' => $up2020_4,
            'updated_at' => $up2020_4,
        ]);
        DB::table('items')->insert([
            'text' => '人生から失敗はゼロになる',
            'record_id' => 1,
            'created_at' => $up2020_4,
            'updated_at' => $up2020_4,
        ]);
        DB::table('items')->insert([
            'text' => '1%の努力',
            'record_id' => 1,
            'created_at' => $up2020_4,
            'updated_at' => $up2020_4,
        ]);
        DB::table('items')->insert([
            'text' => '深層 カルロス・ゴーンとの対話',
            'record_id' => 1,
            'created_at' => $up2020_4,
            'updated_at' => $up2020_4,
        ]);
        DB::table('items')->insert([
            'text' => '電通巨大利権',
            'record_id' => 1,
            'created_at' => $up2020_4,
            'updated_at' => $up2020_4,
        ]);
        DB::table('items')->insert([
            'text' => '教養としての世界宗教史',
            'record_id' => 1,
            'created_at' => $up2020_4,
            'updated_at' => $up2020_4,
        ]);
        DB::table('items')->insert([
            'text' => 'ぼくが見つけたいじめを克服する方法',
            'record_id' => 1,
            'created_at' => $up2020_4,
            'updated_at' => $up2020_4,
        ]);
        DB::table('items')->insert([
            'text' => '日本史真髄',
            'record_id' => 1,
            'created_at' => $up2020_4,
            'updated_at' => $up2020_4,
        ]);
        DB::table('items')->insert([
            'text' => 'なまけもの時間術',
            'record_id' => 1,
            'created_at' => $up2020_4,
            'updated_at' => $up2020_4,
        ]);
        DB::table('items')->insert([
            'text' => '東京改造計画',
            'record_id' => 1,
            'created_at' => $up2020_4,
            'updated_at' => $up2020_4,
        ]);
        DB::table('items')->insert([
            'text' => 'コロナの時代の僕ら',
            'record_id' => 1,
            'created_at' => $up2020_5,
            'updated_at' => $up2020_5,
        ]);
        DB::table('items')->insert([
            'text' => 'この素晴らしき世界',
            'record_id' => 1,
            'created_at' => $up2020_5,
            'updated_at' => $up2020_5,
        ]);
        DB::table('items')->insert([
            'text' => '哲学人生問答',
            'record_id' => 1,
            'created_at' => $up2020_5,
            'updated_at' => $up2020_5,
        ]);
        DB::table('items')->insert([
            'text' => '実話怪談 でる場所',
            'record_id' => 1,
            'created_at' => $up2020_5,
            'updated_at' => $up2020_5,
        ]);
        DB::table('items')->insert([
            'text' => '金持ちだけが持つ超発想',
            'record_id' => 1,
            'created_at' => $up2020_5,
            'updated_at' => $up2020_5,
        ]);
        DB::table('items')->insert([
            'text' => '資本主義ハック',
            'record_id' => 1,
            'created_at' => $up2020_6,
            'updated_at' => $up2020_6,
        ]);
        DB::table('items')->insert([
            'text' => '勝てば官軍',
            'record_id' => 1,
            'created_at' => $up2020_6,
            'updated_at' => $up2020_6,
        ]);
        DB::table('items')->insert([
            'text' => '経済学という人類を不幸にした学問',
            'record_id' => 1,
            'created_at' => $up2020_6,
            'updated_at' => $up2020_6,
        ]);
        DB::table('items')->insert([
            'text' => 'ユダヤの商法',
            'record_id' => 1,
            'created_at' => $up2020_6,
            'updated_at' => $up2020_6,
        ]);
        DB::table('items')->insert([
            'text' => '奇跡の経済教室 基礎知識編',
            'record_id' => 1,
            'created_at' => $up2020_7,
            'updated_at' => $up2020_7,
        ]);
        DB::table('items')->insert([
            'text' => '怖い映画',
            'record_id' => 1,
            'created_at' => $up2020_7,
            'updated_at' => $up2020_7,
        ]);
        DB::table('items')->insert([
            'text' => '怪談びたり',
            'record_id' => 1,
            'created_at' => $up2020_7,
            'updated_at' => $up2020_7,
        ]);
        DB::table('items')->insert([
            'text' => '世界史とつなげて学べ超日本史',
            'record_id' => 1,
            'created_at' => $up2020_7,
            'updated_at' => $up2020_7,
        ]);
        DB::table('items')->insert([
            'text' => '映画には「動機」がある',
            'record_id' => 1,
            'created_at' => $up2020_7,
            'updated_at' => $up2020_7,
        ]);
    }
}
