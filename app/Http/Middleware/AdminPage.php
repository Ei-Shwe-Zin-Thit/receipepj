<?php

namespace App\Http\Middleware;

use Closure;

class AdminPage
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
        if ($request->rank <= admin) {
            return redirect('home');
        }
        return $next($request);
    }
}
