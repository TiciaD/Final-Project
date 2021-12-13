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
        $categories = [['General', 9], ['Books', 10], ['Films', 11], ["Music", 12], ["Television", 14], ["Video Games", 15], ["Board Games", 16], ["Science", 17], ["Computers", 18], ["Sports", 21], ["Geography", 22], ["History", 23], ["Politics", 24], ["Animals", 27], ["Vehicles", 28], ["Comics", 29], ["Anime & Manga", 31], ["Cartoons", 32]];

        for ($i = 0; $i < count($categories); $i++) {
            $category = new Categories;
            $category->type = $categories[$i][0];
            $category->value = $categories[$i][1];
            $category->save();
        }
    }
}
