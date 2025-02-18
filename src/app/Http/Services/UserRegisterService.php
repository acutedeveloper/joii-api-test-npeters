<?php

namespace App\Http\Services;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

class UserRegisterService {
    public function createUser(User $user): User
    {
        return User::create([
            'name' => $user['name'],
            'email' => $user['email'],
            'password' => Hash::make($user['password']),
        ]);
    }

}
