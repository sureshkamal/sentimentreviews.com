<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;


class OtpController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | OTP Controller
    |--------------------------------------------------------------------------
    |
    */

    public function sendOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $otp = Str::random(6); // Generate a random 6-character OTP

        // Store OTP in the database
        Otp::create([
            'email' => $request->email,
            'otp' => $otp,
            'is_used' => false
        ]);

        // Send OTP via email
        Mail::raw("Your OTP is: $otp", function ($message) use ($request) {
            $message->to($request->email)
                    ->subject('Your OTP Code');
        });

        return response()->json(['message' => 'OTP sent successfully.']);
    }   

    public function validateOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'otp' => 'required|string'
        ]);

        $otpRecord = Otp::where('email', $request->email)
                        ->where('otp', $request->otp)
                        ->where('is_used', false)
                        ->first();

        if (!$otpRecord) {
            return response()->json(['message' => 'Invalid OTP or OTP already used.'], 400);
        }

        // Mark the OTP as used
        $otpRecord->update(['is_used' => true]);

        return response()->json(['message' => 'OTP validated successfully.']);
    }

}