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


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        if ($user->user_type_id == 1) {
            // If the user is an admin, redirect to the admin dashboard
            return redirect('/dashboard');
        } else {
            // If the user is a regular user, redirect to the $slug/review URL
            return redirect('/'.$request->slug.'/review');
        }
    }

    public function signin(Request $request)
    {
        print("in signin api");
        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'slug' => 'required',
        ]);

        $email = $request->input('email');
        $password = $request->input('password');
        $slug = $request->input('slug');

        // Check if the user exists
        $user = User::where('email', $email)->first();

        if ($user) {
            // Check if the password matches
            if (Hash::check($password, $user->password)) {
                // Log the user in
                Auth::login($user);
                if($user->user_type_id == 1)
                    return redirect()->intended('/dashboard'); // or any route you want to redirect to
                else
                    return redirect()->intended("/$slug/nps");// or any route you want to redirect to

            } else {
                // Password does not match
                return back()->withErrors(['password' => 'Invalid credentials.']);
            }
        } else {
            $currTime = Carbon::now()->format('Y-m-d H:i:s');
            // Create a new user
            $newUser = User::create([
                'email' => $email,
                'password' => Hash::make($password),
                'temp_password' => $password,
                'user_type_id' => 4, //customer
                'no_of_logins' => 1,
                'last_login' => $currTime,
                'created_at' => $currTime,
                'updated_at' => $currTime,

            ]);

            // Log the new user in
            Auth::login($newUser);
            return redirect()->intended("/$slug/review"); // or any route you want to redirect to

            // return redirect()->intended('/yamamori'); // or any route you want to redirect to
        }
    }
}
