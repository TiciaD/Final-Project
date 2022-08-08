<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;
use App\Models\UserQuizzes;

class QuizCategories extends Model
{
    use HasFactory;
    protected $with = ['quiz', 'category'];

    public function quiz()
    {
        return $this->belongsTo(UserQuizzes::class);
    }
    public function category()
    {
        return $this->hasOne(Categories::class, 'id', 'categories_id');
    }
}
