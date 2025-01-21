<?php

namespace Database\Seeders;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Question::create([
            'description' => '正の数・負の数の意味がわかる',
            'no_message' => '正負の数の意味を理解しましょう',
            'unit_id' => 1, 
            'order' => 1, 
        ]);

        Question::create([
            'description' => '正負の数の表し方(符号のルールなど)がわかる',
            'no_message' => '正負の数の書き方やルールを確認しましょう',
            'unit_id' => 1, 
            'order' => 2, 
        ]);
        Question::create([
            'description' => '正負の数を数直線上で表すことができる',
            'no_message' => '数直線を使って正負の数を表す練習をしましょう',
            'unit_id' => 1, 
            'order' => 3, 
        ]);
        Question::create([
            'description' => '数直線から数字を読み取ることができる',
            'no_message' => '・数直線から数字を読み取る練習をしましょう',
            'unit_id' => 1, 
            'order' => 4, 
        ]);
        Question::create([
            'description' => '絶対値の意味がわかる',
            'no_message' => '絶対値の意味を復習してみましょう',
            'unit_id' => 1, 
            'order' => 5, 
        ]);
        Question::create([
            'description' => '正負の数の大小を不等号(<,>など)を使って表すことができる',
            'no_message' => '不等号の意味と、数の大小を数直線で確認する練習をしましょう',
            'unit_id' => 1, 
            'order' => 6, 
        ]);
        Question::create([
            'description' => '数直線を使って足し算と引き算ができる',
            'no_message' => '数直線を使って計算する練習をしましょう',
            'unit_id' => 2, 
            'order' => 1, 
        ]);
        Question::create([
            'description' => '同符号の足し算・引き算が解ける',
            'no_message' => '同符号の計算方法と意味を確認しましょう',
            'unit_id' => 2, 
            'order' => 2, 
        ]);
        Question::create([
            'description' => '異符号の足し算・引き算が解ける',
            'no_message' => '異符号の計算方法と意味を確認しましょう',
            'unit_id' => 2, 
            'order' => 3, 
        ]);
        Question::create([
            'description' => 'かっこを外すときのルールがわかる',
            'no_message' => '正負の数のかっこの外し方を確認しましょう',
            'unit_id' => 2, 
            'order' => 4, 
        ]);
        Question::create([
            'description' => 'かっこがある足し算・引き算か解ける',
            'no_message' => 'かっこがついた計算問題を練習しましょう',
            'unit_id' => 2, 
            'order' => 5, 
        ]);
        Question::create([
            'description' => 'be動詞が主語の何を表すかわかる',
            'no_message' => 'be動詞が何を表すのか確認しましょう',
            'unit_id' => 3, 
            'order' => 1, 
        ]);
        Question::create([
            'description' => 'be動詞の短縮形がわかる(I am,You areなど)',
            'no_message' => 'be動詞の短縮形を確認しましょう',
            'unit_id' => 3, 
            'order' => 2, 
        ]);
        Question::create([
            'description' => '主語に対応したbe動詞を選べる',
            'no_message' => 'どの主語がどのbe動詞をとるか確認しましょう',
            'unit_id' => 3, 
            'order' => 3, 
        ]);
        Question::create([
            'description' => 'be動詞を置く位置がわかる',
            'no_message' => '主語、動詞の位置関係を理解しましょう',
            'unit_id' => 3, 
            'order' => 4, 
        ]);
        Question::create([
            'description' => 'be動詞の否定文の作り方がわかる',
            'no_message' => 'be動詞の否定文の作り方を確認しましょう',
            'unit_id' => 4, 
            'order' => 1, 
        ]);
        Question::create([
            'description' => 'be動詞とnotの短縮形がわかる',
            'no_message' => 'be動詞+notの短縮形を覚えましょう',
            'unit_id' => 4, 
            'order' => 2, 
        ]);
        Question::create([
            'description' => 'be動詞の疑問文の作り方がわかる',
            'no_message' => 'be動詞の疑問文の作り方を確認しましょう',
            'unit_id' => 4, 
            'order' => 3, 
        ]);
        Question::create([
            'description' => 'be動詞の疑問文の答え方がわかる',
            'no_message' => '・be動詞の疑問文の答え方を確認しましょう',
            'unit_id' => 4, 
            'order' => 4, 
        ]);
    }
}
