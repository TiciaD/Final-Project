<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\QuizDifficulties;
use App\Models\QuizCategories;
use App\Models\QuizQuestions;

class UserQuizzes extends Model
{
    use HasFactory;

    //protected $with = ['user', 'questions', 'difficulties', 'categories'];
    /**
     * Get the user that owns the quizzes.
     */
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function questions()
    {
        return $this->hasOne(QuizQuestions::class, 'quiz_id');
    }
    public function categories()
    {
        return $this->hasOne(QuizCategories::class, 'quiz_id');
    }
    public function difficulties()
    {
        return $this->hasOne(QuizDifficulties::class, 'quiz_id');
    }
}
