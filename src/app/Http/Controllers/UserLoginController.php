<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Http\Requests\LoginUserRequest;
use App\Http\Services\UserLoginService;

class UserLoginController extends Controller
{
    public function login(LoginUserRequest $request, UserLoginService $userLoginService): JsonResponse
    {
        $loginResponse = $userLoginService->loginUser($request->validated());

        if(!$loginResponse['success']) {
            return response()->json([
                'message' => $loginResponse['message'],
            ], $loginResponse['status_code']);
        }

        return response()->json([
            'access_token' => $loginResponse['data']['access_token']
        ]);
    }

}
