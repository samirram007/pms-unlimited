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
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {

            if ($guard == "admin" && Auth::guard($guard)->check()) {
                return redirect('/admin/dashboard');
            }
            if ($guard == "doctor" && Auth::guard($guard)->check()) {
                return redirect('/doctor/dashboard');
            }
            if ($guard == "patient" && Auth::guard($guard)->check()) {
                return redirect('/patient/dashboard');
            }
            if ($guard == "employee" && Auth::guard($guard)->check()) {
                return redirect('/employee/dashboard');
            }
            if ($guard == "associate" && Auth::guard($guard)->check()) {
                return redirect('/associate/dashboard');
            }

            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::HOME);
            }

        }

        return $next($request);
    }
}
