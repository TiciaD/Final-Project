<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Difficulties;

class DifficultiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $difficulties = ['easy', 'medium', 'hard'];

        for ($i = 0; $i < count($difficulties); $i++) {
            $difficulty = new Difficulties;
            $difficulty->level = $difficulties[$i];
            $difficulty->save();
        }
    }
}
