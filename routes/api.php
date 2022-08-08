<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UserQuizzesController;
use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Resources\UserResource;

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

// register new user
Route::post('/register', 'App\Http\Controllers\Auth\UserAuthController@register');
// log in user
Route::post('/login', 'App\Http\Controllers\Auth\UserAuthController@login');

Route::group(['middleware' => ['auth:api']], function() {
    // gets user with all user data
    Route::get('user', [UsersController::class, 'userData']);
    // log out user
    Route::get('logout', [UsersController::class, 'logout']);
    Route::get('quizzes', [UserQuizzesController::class, 'getUsersQuizzes']);
    Route::get('allquizzes', [UserQuizzesController::class, 'getAllQuizzes']);
    Route::post('quizzes', [UserQuizzesController::class, 'store']);
});
//});
