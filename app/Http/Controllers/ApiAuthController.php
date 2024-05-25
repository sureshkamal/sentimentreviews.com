<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class ApiAuthController extends Controller
{
    use AuthenticatesUsers;

    protected function sendLoginResponse(Request $request)
    {
        $this->clearLoginAttempts($request);

        $token = Auth::user()->createToken('Sentiment')->accessToken;

        return response()->json(['token' => $token], 200);
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        return response()->json(['error' => 'Unauthorized'], 401);
    }
}


