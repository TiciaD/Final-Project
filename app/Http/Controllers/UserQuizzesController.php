<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUser_QuizzesRequest;
use App\Http\Requests\UpdateUser_QuizzesRequest;
use App\Models\UserQuizzes;

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
    public function store(StoreUser_QuizzesRequest $request)
    {
        //
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
        // get all orders from a specific user
        $usersQuizzes =  UserQuizzes::where('user_id', $request->user()->id)->get();
        return response(['data' => $usersQuizzes, 'message' => 'Users Quizzes found successfully!', 'status' => true]);
    }
}
