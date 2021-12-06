<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->prefix('v1')->group(
//     function() {
//         Route::get('/user', function (Request $request) {
//             return $request->user;
//         })
//     }
// );

Route::prefix('auth')->group(function () {
    // current passport key: o8qQJZMxvG1a2n6XpFc06AeZLwlhQt8nFBhdFBuB

    Route::post('/register', [UserController::class, 'register']);
    // log in user
    Route::post('/login', [UserController::class, 'signin']);

    Route::group(['middleware' => ['auth:api']], function () {
        // gets user with all order data
        Route::get('/user', [UserController::class, 'userData']);
        // log out user
        Route::get('/logout', [UserController::class, 'logout']);
    });
});
