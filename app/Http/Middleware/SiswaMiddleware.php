<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SiswaMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        if ($request->user()->role != 'siswa') {
            return redirect('/login');
        }

        return $next($request);
    }

}
