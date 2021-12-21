<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // jika belum login atau user bukan admin
        if (!auth()->check() || !auth()->user()->is_admin) {
            // maka abort ke 403
            abort(403);
        }

        return $next($request);
    }
}
