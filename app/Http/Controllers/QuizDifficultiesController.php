<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuizDifficultiesRequest;
use App\Http\Requests\UpdateQuizDifficultiesRequest;
use App\Models\QuizDifficulties;

class QuizDifficultiesController extends Controller
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
     * @param  \App\Http\Requests\StoreQuizDifficultiesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuizDifficultiesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuizDifficulties  $quizDifficulties
     * @return \Illuminate\Http\Response
     */
    public function show(QuizDifficulties $quizDifficulties)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuizDifficulties  $quizDifficulties
     * @return \Illuminate\Http\Response
     */
    public function edit(QuizDifficulties $quizDifficulties)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuizDifficultiesRequest  $request
     * @param  \App\Models\QuizDifficulties  $quizDifficulties
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuizDifficultiesRequest $request, QuizDifficulties $quizDifficulties)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuizDifficulties  $quizDifficulties
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuizDifficulties $quizDifficulties)
    {
        //
    }
}
