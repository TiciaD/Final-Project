<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Categories;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [['General', 9], ['Books', 10]];

        for ($i = 0; $i < count($categories); $i++) {
            $category = new Categories;
            $category->type = $categories[$i][0];
            $category->value = $categories[$i][1];
            $category->save();
        }
    }
}
