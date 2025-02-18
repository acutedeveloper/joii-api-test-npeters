<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserLoginController extends Controller
{
    public function login(Request $request) {
        $userLoginInfo = $request->validate([
            'email'=>'required|string|email',
            'password'=>'required|min:8'
        ]);

        $user = User::where('email',$userLoginInfo['email'])->first();

        if(!$user || !Hash::check($userLoginInfo['password'],$user->password)){
            return response()->json([
                'message' => 'Invalid Credentials'
            ],401);
        }

        $token = $user->createToken($user->name.'-AuthToken')->plainTextToken;
        return response()->json([
            'access_token' => $token,
        ]);
    }

    public function logout(Request $request) {
        auth()->user()->tokens()->delete();

        return response()->json([
            "message"=>"logged out"
        ]);
    }
}
