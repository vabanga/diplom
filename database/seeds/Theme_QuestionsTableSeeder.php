<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Theme_QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('theme_questions')->insert([
            'theme_id' => '1',
            'question_id' => '1',
        ]);
        DB::table('theme_questions')->insert([
            'theme_id' => '1',
            'question_id' => '2',
        ]);
        DB::table('theme_questions')->insert([
            'theme_id' => '1',
            'question_id' => '3',
        ]);
        DB::table('theme_questions')->insert([
            'theme_id' => '1',
            'question_id' => '4',
        ]);
        DB::table('theme_questions')->insert([
            'theme_id' => '2',
            'question_id' => '5',
        ]);
        DB::table('theme_questions')->insert([
            'theme_id' => '2',
            'question_id' => '6',
        ]);
        DB::table('theme_questions')->insert([
            'theme_id' => '2',
            'question_id' => '7',
        ]);
        DB::table('theme_questions')->insert([
            'theme_id' => '3',
            'question_id' => '8',
        ]);
        DB::table('theme_questions')->insert([
            'theme_id' => '3',
            'question_id' => '9',
        ]);
        DB::table('theme_questions')->insert([
            'theme_id' => '3',
            'question_id' => '10',
        ]);
        DB::table('theme_questions')->insert([
            'theme_id' => '3',
            'question_id' => '11',
        ]);
        DB::table('theme_questions')->insert([
            'theme_id' => '4',
            'question_id' => '12',
        ]);
        DB::table('theme_questions')->insert([
            'theme_id' => '4',
            'question_id' => '13',
        ]);
        DB::table('theme_questions')->insert([
            'theme_id' => '4',
            'question_id' => '14',
        ]);
        DB::table('theme_questions')->insert([
            'theme_id' => '5',
            'question_id' => '15',
        ]);
        DB::table('theme_questions')->insert([
            'theme_id' => '5',
            'question_id' => '16',
        ]);
        DB::table('theme_questions')->insert([
            'theme_id' => '5',
            'question_id' => '17',
        ]);
        DB::table('theme_questions')->insert([
            'theme_id' => '5',
            'question_id' => '18',
        ]);
        DB::table('theme_questions')->insert([
            'theme_id' => '6',
            'question_id' => '19',
        ]);
        DB::table('theme_questions')->insert([
            'theme_id' => '6',
            'question_id' => '20',
        ]);
        DB::table('theme_questions')->insert([
            'theme_id' => '6',
            'question_id' => '21',
        ]);
        DB::table('theme_questions')->insert([
            'theme_id' => '6',
            'question_id' => '22',
        ]);
        DB::table('theme_questions')->insert([
            'theme_id' => '6',
            'question_id' => '23',
        ]);
        DB::table('theme_questions')->insert([
            'theme_id' => '6',
            'question_id' => '24',
        ]);
        DB::table('theme_questions')->insert([
            'theme_id' => '6',
            'question_id' => '25',
        ]);
        DB::table('theme_questions')->insert([
            'theme_id' => '6',
            'question_id' => '26',
        ]);
        DB::table('theme_questions')->insert([
            'theme_id' => '6',
            'question_id' => '27',
        ]);
    }
}
