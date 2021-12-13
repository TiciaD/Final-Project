<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'question' => 'According to Olympic rules, what number of feathers must a badminton bird (shuttlecock) have?',
            'correct_answer' => '14',
            'possible_answers' => '10|15|8|14',
        ]);
    }
}
