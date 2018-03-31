<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Task;

class UsersController extends Controller
{

    /*
     * Author:			Daiber Gonzalez.
     * Description:		This method is used for obtain a user according the login form.
     */
    public function login(Request $request)
    {
    	$email = $request->input('email');
    	$password = $request->input('password');

    	$user = User::where('email', '=', $email)->first();

    	if ($user)
    	{
    		if ($password == $user->password)
    		{
    			return response()->json(
    			[
    				'user' => $user,
    				'status' => 200
    			], 200);
    		}

    		return response()->json(['status' => 204]);
    	}

    	return response()->json(['status' => 204]);
    }

    /*
     * Author:			Daiber Gonzalez.
     * Description:		This method is used for save a user into the database.
     */
    public function store(Request $request)
    {
    	$exists = User::where('email', '=', $request->input('email'))->first();

    	if ($exists)
    	{
    		return response()->json(['status' => 204]);
    	}

    	$user = User::create($request->all());
    	return response()->json(
    	[
    		'user' => $user,
    		'status' => 201
    	], 201);
    }
}
