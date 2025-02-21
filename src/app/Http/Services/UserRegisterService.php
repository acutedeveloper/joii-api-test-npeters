<?php

namespace App\Http\Services;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

class UserRegisterService {
    public function createUser($validatedRequestData): User
    {
        return User::create([
            'name' => $validatedRequestData['name'],
            'email' => $validatedRequestData['email'],
            'password' => Hash::make($validatedRequestData['password']),
        ]);
    }

}
