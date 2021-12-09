<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Questions;
use App\Models\UserQuizzes;

class QuizQuestions extends Model
{
    use HasFactory;

    protected $with = ['question'];

    public function quiz()
    {
        return $this->belongsTo(UserQuizzes::class);
    }
    public function question()
    {
        return $this->hasOne(Questions::class, 'id', 'question_id');
    }
}
