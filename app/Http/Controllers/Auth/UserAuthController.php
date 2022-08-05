<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    
    public function register(Request $request) {
    // ensure username, email and password are supplied
      $data = $request->validate([
        'username' => 'required|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|string|min:8'
      ]);
      
      // hash password
      $data['password'] = bcrypt($request->password);
      
      // create new User with data given
      $user = User::create($data);
      
      // create access token
      $token = $user->createToken('userToken')->accessToken;
      
      // user details and new token returned
      return response([ 'user' => $user, 'token' => $token]);
    }

    public function login(Request $request)
    {
      // ensure both email and password are supplied
        $data = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        // if failure to authorize user based on email and password data
        if (!auth()->attempt($data)) {
            return response(['error_message' => 'Incorrect Details. 
            Please try again']);
        }

        // if authorization credentials correct, create access token
        $token = auth()->user()->createToken('userToken')->accessToken;

        // user details and new token returned
        return response(['user' => auth()->user(), 'token' => $token]);

    }
}
