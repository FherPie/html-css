<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        
//         if (Auth::guard($guard)->guest()) {
//             if ($request->ajax() || $request->wantsJson()) {
//                  return response('Unauthorized.', 401);
//             } else {
//                 Session::put('oldUrl', $request->url());
//                 return redirect()->route('users.signin');
//             }
//         }

//         if (Auth::check()) {
//             error_log('CHECK!!.');
//             return route('producto.index');
//         }
        
        
        error_log('OK ok ok!!!!!!!!!!!.');
        //         if (Auth::guard($guard)->check()) {
        //             error_log('se les diio de comer!!');
        //             return redirect()->route("producto.index");
        //         }
        

        return $next($request);
    }
}
