<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return response([ 'employees' => UserResource::collection($users), 'message' => 'Successful'], 200);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      $data = $request->all();
        //create new user
        $validator = Validator::make($data, [
          'username' => 'required|max:255',
          'email' => 'required|email|unique:users',
          'password' => 'required|confirmed'
      ]);

      if ($validator->fails()) {
        return response(['error' => $validator->errors(), 
        'Validation Error']);
      }

    $user = User::create($data);

    return response([ 'user' => new UserResource($user), 'message' => 'Success'], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        return response([ 'user' => new 
        EmployeeResource($employee), 'message' => 'Success'], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    /**
     * Register a new User
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|min:4',
            'email' => 'required|email|max:64|unique:users',
            'password' => 'required|string|min:8',
            // add more validation cases if needed
            // https://laravel.com/docs/8.x/validation
        ]);

        if ($validator->fails()) {
            return response(['message' => 'Validation errors', 'errors' =>  $validator->errors(), 'status' => false], 422);
        }

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);

        /**Take note of this: Your user authentication access token is generated here **/
        $data['token'] =  $user->createToken('userToken')->accessToken;
        // when we register, we also send the user data (you do not need to do this)
        $data['user_data'] = $user;

        return response(['data' => $data, 'message' => 'Account created successfully!', 'status' => true]);
    }

    /**
     * Log a User in
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function signin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|min:8',
            'email' => 'required|email|max:64|exists:users,email',
            'password' => 'required|string|min:8',
            // add more validation cases if ned
            // https://laravel.com/docs/8.x/valtion
        ]);

        if ($validator->fails()) {
            return response(['message' => 'Validation errors', 'errors' =>  $validator->errors(), 'status' => false], 422);
        }


        $credentials = $request->only('username', 'email', 'password');

        if (Auth::attempt($credentials)) {
            $authUser = Auth::user();
            $user = User::findOrFail($authUser->id);

            /**Take note of this: Your user authentication access token is generated here **/
            $data['token'] = $user->createToken('AincBootcampAPI')->accessToken;
            // since we are not registering, we do not send the user data, since we should technically already have this data
            // (but you could do this if you wanted to)
            // $data['user_data'] = $user;

            return response(['data' => $data, 'message' => 'Account Logged In successfully!', 'status' => true]);
        } else {
            return response(['message' => 'Validation errors', 'errors' =>  ['password' => 'invalid password'], 'status' => false], 422);
        }
    }
    /*
     * Get//  a Users Data
     *
     * @param  \Illuminate\Ht// tp\Request  $req// uest
     * @return \Illuminate\Http\Response
     */
    public function userData(Request $request)
    {
        // get and save the user data from the token
        $data['user_data'] = $request->user();

        // since we are getting a users info, we do not send the token, because the request can only run with a token
        // $data['token'] =  $user->createToken('AincBootcampAPI')->accessToken;

        return response(['data' => $data, 'message' => 'Retrieved user data successfully!', 'status' => true]);
    }

    /**
     * Log a User out
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        if (Auth::check()) {
            $request->user()->token()->revoke();
            return response()->json(['success' => 'logout success'], 200);
        } else {
            return response()->json(['error' => 'something went wrong'], 500);
        }
    }

    //     $quizzes = User::find(1)->quizzes;

    // foreach ($quizzes as $quiz) {
    //     //
    // };
}
