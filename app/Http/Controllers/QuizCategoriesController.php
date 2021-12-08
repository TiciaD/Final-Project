<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuizCategoriesRequest;
use App\Http\Requests\UpdateQuizCategoriesRequest;
use App\Models\QuizCategories;

class QuizCategoriesController extends Controller
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
     * @param  \App\Http\Requests\StoreQuizCategoriesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuizCategoriesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuizCategories  $quizCategories
     * @return \Illuminate\Http\Response
     */
    public function show(QuizCategories $quizCategories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuizCategories  $quizCategories
     * @return \Illuminate\Http\Response
     */
    public function edit(QuizCategories $quizCategories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuizCategoriesRequest  $request
     * @param  \App\Models\QuizCategories  $quizCategories
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuizCategoriesRequest $request, QuizCategories $quizCategories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuizCategories  $quizCategories
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuizCategories $quizCategories)
    {
        //
    }
}
