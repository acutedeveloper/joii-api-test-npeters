<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserLogoutController extends Controller
{
    public function logout(Request $request): JsonResponse
    {
        auth()->user()->tokens()->delete();

        return response()->json([
            "message"=>"logged out"
        ]);
    }
}
