<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Enums\Role; 
use App\Http\Controllers\Auth\LoginController;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check()){
            if(auth()->user()->role === Role::Admin) {
                return $next($request);

            }elseif(auth()->user()->role === Role::Student) {
                return $next($request);
                
            }else{
                return redirect()->route('user.home');
            }
        }
        return redirect()->route('login'); 
    }
}
