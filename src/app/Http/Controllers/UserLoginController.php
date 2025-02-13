<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserLoginController extends Controller
{
    public function register(Request $request) {
        $userInfo = $request->validate([
            'name'=>'required|string',
            'email'=>'required|string|email|unique:users',
            'password'=>'required|min:8'
        ]);

        User::create([
            'name' => $userInfo['name'],
            'email' => $userInfo['email'],
            'password' => Hash::make($userInfo['password']),
        ]);
        return response()->json([
            'message' => 'User Created ',
        ]);
    }

    public function login(Request $request) {
        return response()->json([
            'message' => 'User logged in',
        ]);
    }

    public function logout(Request $request) {
        return response()->json([
            'message' => 'User logged out ',
        ]);
    }
}
