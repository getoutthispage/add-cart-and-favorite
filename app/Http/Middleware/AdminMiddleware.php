<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
            Log::info('Текущий пользователь: ', ['user' => $user]);

        } else {
            Log::info('Пользователь не аутентифицирован');
        }


        return $next($request);
    }
}
