<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Difficulties;
use App\Models\UserQuizzes;

class QuizDifficulties extends Model
{
    use HasFactory;
    protected $with = ['quiz', 'difficulty'];

    public function quiz()
    {
        return $this->belongsTo(UserQuizzes::class);
    }
    public function difficulty()
    {
        return $this->hasOne(Difficulties::class, 'id', 'difficulties_id');
    }
}
