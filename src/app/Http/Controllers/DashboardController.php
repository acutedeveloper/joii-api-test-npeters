<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class DashboardController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            'message' => 'User can access dashboard ',
        ]);
    }
}
