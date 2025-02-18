<?php

namespace App\Http\Services;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

class UserLoginService {

    public function loginUser(User $user): JsonResponse
    {
        $user = User::where('email',$user['email'])->first();

        if(!$user || !Hash::check($user['password'],$user->password)){
            return response()->json([
                'message' => 'Invalid Credentials'
            ],401);
        }

        return response()->json([
            'access_token' => $this->getUserToken($user),
        ]);
    }

    protected function getUserToken(User $user): String
    {
        return $user->createToken($user->name.'-AuthToken')->plainTextToken;
    }
}
