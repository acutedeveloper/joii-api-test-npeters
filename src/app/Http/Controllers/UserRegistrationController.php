<?php

namespace App\Http\Controllers;

use App\Http\Services\UserRegisterService;
use App\Http\Requests\RegisterUserRequest;

class UserRegistrationController extends Controller
{
    public function register(RegisterUserRequest $request, UserRegisterService $userCreateService) {

        $userCreateService->createUser($request->validated());

        return response()->json([
            'message' => 'User Created ',
        ]);
    }

}
