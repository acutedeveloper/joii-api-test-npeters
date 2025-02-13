<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLoginController extends Controller
{
    public function register(Request $request) {
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
