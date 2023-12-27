<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    public function handle(Request $request, Closure $next):Response
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            return $next($request);
            return redirect()->route('admin'); // Redirection vers la vue 'admin.index'
        }

        return redirect(RouteServiceProvider::HOME);
    }

}
