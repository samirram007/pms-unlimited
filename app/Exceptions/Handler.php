<?php

namespace App\Exceptions;

use Throwable;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
     /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['message' => 'Unauthenticated.'], 401);
        }

        if ($request->is('admin') || $request->is('admin/*')) {
            return redirect()->guest('/admin');
        }
        if ($request->is('employee') || $request->is('employee/*')) {
            return redirect()->guest('/employee');
        }
        if ($request->is('doctor') || $request->is('doctor/*')) {
            return redirect()->guest('/doctor');
        }
        if ($request->is('patient') || $request->is('patient/*')) {
            return redirect()->guest('/patient');
        }
        if ($request->is('associate') || $request->is('associate/*')) {
            return redirect()->guest('/associate');
        }

        return redirect()->guest(route('login'));
    }
}
