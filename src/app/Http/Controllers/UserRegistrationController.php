<?php

namespace App\Http\Controllers;

use App\Http\Services\UserCreateService;
use App\Models\User;
use App\Http\Requests\SaveUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserRegistrationController extends Controller
{
    public function register(SaveUserRequest $request, UserCreateService $userCreateService) {

        $user = $userCreateService->create($request->validated());

        return response()->json([
            'message' => 'User Created ',
        ]);
    }

}
