<?php

namespace App\Http\Middleware;



use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    
     
     public function handle($request, Closure $next, ...$roles)
     {
        $roles = array_slice(func_get_args(), 2);
         $user = Auth::user();
 
         if (! $user) {
             abort(401, 'Unauthorized');
         }
         //dd($user->role);
        foreach ($roles as $role) {
            if ($user->role === $role) {
                return $next($request);
            }
        }
 
         abort(403, 'Forbidden');
     }
}
