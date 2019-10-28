<?php

namespace App\Http\Middleware;

use Closure;

class checkdoctors
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
        if($request->session()->get('name') == null){
            return redirect('/login');
        }
        // elseif($request->session()->get('name') !== null){
        //     return redirect('/login');
        // }
        return $next($request);
    }
}
