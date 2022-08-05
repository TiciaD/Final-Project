<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UserQuizzesController;
use App\Http\Controllers\Auth\UserAuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//Route::prefix('auth')->group(function () {
// current passport key: o8qQJZMxvG1a2n6XpFc06AeZLwlhQt8nFBhdFBuB

// Route::post('/register', [UsersController::class, 'register']);
Route::post('/register', 'App\Http\Controllers\Auth\UserAuthController@register');
Route::post('/login', 'App\Http\Controllers\Auth\UserAuthController@login');
// log in user
// Route::post('/login', [UsersController::class, 'signin']);

Route::apiResource('/user', 'UsersController')->middleware('auth:api');
Route::group(['middleware' => ['auth:api']], function () {
    // gets user with all user data
    // Route::get('/user', [UsersController::class, 'userData']);
    // log out user
    Route::get('/logout', [UsersController::class, 'logout']);
    Route::get('/quizzes', [UserQuizzesController::class, 'getUsersQuizzes']);
    Route::get('/allquizzes', [UserQuizzesController::class, 'getAllQuizzes']);
    Route::post('/quizzes', [UserQuizzesController::class, 'store']);
});
//});
