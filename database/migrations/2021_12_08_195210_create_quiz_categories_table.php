<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('quiz_id');
            $table->foreign('quiz_id')
                ->references('id')
                ->on('user_quizzes')
                ->cascade('delete');
            $table->unsignedBigInteger('categories_id');
            $table->foreign('categories_id')
                ->references('id')
                ->on('categories')
                ->cascade('delete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quiz_categories');
    }
}
