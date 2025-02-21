<?php

namespace App\Http\Services;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

class UserLoginService {

    public function loginUser($formData): array
    {
        $user = User::where('email',$formData['email'])->first();

        if(!$user || !Hash::check($formData['password'],$user->password)){
            return [
                'success' => false,
                'message' => 'Invalid Credentials',
                'status' => 401
            ];
        }

        return [
            'success' => true,
            'data' => [
                'access_token' => $this->getUserToken($user),
            ],
            'status' => 200
        ];
    }

    protected function getUserToken(User $user): String
    {
        return $user->createToken($user->name.'-AuthToken')->plainTextToken;
    }
}
