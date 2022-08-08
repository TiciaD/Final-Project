<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUser_QuizzesRequest;
use App\Http\Requests\UpdateUser_QuizzesRequest;
use App\Models\UserQuizzes;
use App\Models\QuizCategories;
use App\Models\QuizDifficulties;
use App\Models\Questions;
use App\Models\QuizQuestions;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Response;

class UserQuizzesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUser_QuizzesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // set user id by using the request and bearer token
        $id = $request->user()->id;
        $input = $request->all();
        // set the quiz header record by using UserQuizzes model
        $quiz = new UserQuizzes;
        $quiz->name = $input['name'];
        // set the id for the user quiz
        $quiz->user_id = $id;
        // save the UserQuizzes
        $quiz->save();
        //
        //
        // get the questions from the request

        $allQues = $input['questions'];
        Log::debug($allQues);

        // get difficulty from request
        $diff = $input['difficulty'];

        // get category from request
        $cat = $input['category'];

        // loop thru the questions and add a record with QuizQuestions model
        for ($i = 0; $i < count($allQues); $i++) {
            $ques = new Questions;
            $ques->question = $allQues[$i]['question'];
            $ques->correct_answer = $allQues[$i]['correct_answer'];
            $str = $allQues[$i]['possible_answer1'] . "|" . $allQues[$i]['possible_answer2'] . "|" . $allQues[$i]['possible_answer3'] . "|" . $allQues[$i]['correct_answer'];
            $ques->possible_answers = $str;
            $ques->save();
            // save the QuizQuestion, use the id from the user quiz
            $quiz_ques = new QuizQuestions;
            $quiz_ques->quiz_id = $quiz->id;
            $quiz_ques->question_id = $ques->id;
            $quiz_ques->save();
        }

        // add a record with QuizDifficulties model
        $quiz_diff = new QuizDifficulties;
        $quiz_diff->quiz_id = $quiz->id;
        $quiz_diff->difficulties_id = $diff;
        $quiz_diff->save();

        // add a record with QuizCategories model
        $quiz_cat = new QuizCategories;
        $quiz_cat->quiz_id = $quiz->id;
        $quiz_cat->categories_id = $cat;
        $quiz_cat->save();

        // return a response that has the user quiz obj and array of quiz questions

        $complete_quiz = UserQuizzes::with(['user', 'questions', 'categories', 'difficulties'])->where(
            'user_id',
            $quiz->id
        )->get();

        response()->json(['data' => $complete_quiz]);
        return response(['data' => $complete_quiz, 'message' => 'User Quiz submitted successfully!', 'status' => true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserQuizzes  $user_Quizzes
     * @return \Illuminate\Http\Response
     */
    public function show(UserQuizzes $user_Quizzes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserQuizzes  $user_Quizzes
     * @return \Illuminate\Http\Response
     */
    public function edit(UserQuizzes $user_Quizzes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUser_QuizzesRequest  $request
     * @param  \App\Models\UserQuizzes  $user_Quizzes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUser_QuizzesRequest $request, UserQuizzes $user_Quizzes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserQuizzes  $user_Quizzes
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserQuizzes $user_Quizzes)
    {
        //
    }

    public function getUsersQuizzes(Request $request)
    {
        // get all quizzes from a specific user
        $usersQuizzes =  UserQuizzes::with(['user', 'questions', 'categories', 'difficulties'])->where(
            'user_id',
            $request->user()->id
        )->get();

        return response(['data' => $usersQuizzes, 'message' => 'Users Quizzes found successfully!', 'status' => true]);
    }

    public function getAllQuizzes(Request $request)
    {
        // get all quizzes
        $qs = \App\Models\UserQuizzes::with(['user', 'questions', 'categories', 'difficulties'])->get();

        return response(['data' => $qs, 'message' => 'Users Quizzes found successfully!', 'status' => true]);
    }
}
