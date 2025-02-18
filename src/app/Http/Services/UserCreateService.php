<?php

namespace App\Http\Services;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserCreateService {
    public function create(User $user): User
    {
        return User::create([
            'name' => $user['name'],
            'email' => $user['email'],
            'password' => Hash::make($user['password']),
        ]);
    }
}
