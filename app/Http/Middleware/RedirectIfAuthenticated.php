<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {

                // if ($user->user_type_id == 1) {
                //     // If the user is an admin, redirect to the admin dashboard
                //     return redirect('/dashboard');
                // } else {
                    // If the user is a regular user, redirect to the $slug/review URL
                    return redirect('/'.$request->slug.'/review');
                // }
                // return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }
}
