<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginUserRequest;
use App\Http\Services\UserLoginService;

class UserLoginController extends Controller
{
    public function login(LoginUserRequest $request, UserLoginService $userLoginService) {
        $userLoginService->loginUser($request->validated());
    }

    public function logout(Request $request) {
        auth()->user()->tokens()->delete();

        return response()->json([
            "message"=>"logged out"
        ]);
    }
}
