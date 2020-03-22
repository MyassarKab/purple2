<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle($request, Closure $next)
      {
        if (Auth::check()) {
          if(auth()->user()->isAdmin()) {
              return $next($request);
          }
          return redirect('home');
        }
            return redirect('home');
      }
}
