<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;

class AuthController extends Controller
{

    public function register(Request $request) {

        $request->validate([
            'name'     => 'required|string',
            'email'    => 'required|string|unique:users',
            'password' => 'required|string'
        ]);

        $user = new User([
            'name'     => $request['name'],
            'email'    => $request['email'],
            'password' => Hash::make($request['password'])
        ]);

        $user->save();

        return response(['status' => 1 , 'msg' => 'new user added' ]);
    }

    public function login(Request $request) {

        $request->validate([
            'email'    => 'required',
            'password' => 'required'
        ]);

        $credentials = request(['email' , 'password']);

        if(!Auth::attempt($credentials)) {
            return response()->json(['status' => 0 , 'msg' => 'cannot find user'] , 400);
        }

        $user = $request->user();
        $result = $user->createToken('Personal Access Token');
        //$Token =  $result->token;
        //$Token->save();

        $response = response()->json([
            'status'        => 1 , 
            'user'          => Auth::user(),
            'access_token'  => $result->token,
            'token_type'    => 'Bearer',
            'expires_at'    => Carbon::parse($result->accessToken->expires_at)->toDateTimeString()
        ]);

        return $response;
    }
}
