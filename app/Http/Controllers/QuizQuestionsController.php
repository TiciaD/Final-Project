<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuizQuestionsRequest;
use App\Http\Requests\UpdateQuizQuestionsRequest;
use App\Models\QuizQuestions;

class QuizQuestionsController extends Controller
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
     * @param  \App\Http\Requests\StoreQuizQuestionsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuizQuestionsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuizQuestions  $quizQuestions
     * @return \Illuminate\Http\Response
     */
    public function show(QuizQuestions $quizQuestions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuizQuestions  $quizQuestions
     * @return \Illuminate\Http\Response
     */
    public function edit(QuizQuestions $quizQuestions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuizQuestionsRequest  $request
     * @param  \App\Models\QuizQuestions  $quizQuestions
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuizQuestionsRequest $request, QuizQuestions $quizQuestions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuizQuestions  $quizQuestions
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuizQuestions $quizQuestions)
    {
        //
    }
}
