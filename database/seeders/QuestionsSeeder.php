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
            'question' => 'what is your name',
            'correct_answer' => 'Bob',
            'possible_answers' => 'Bob|Bill|Brad|Bono',
        ]);
    }
}
