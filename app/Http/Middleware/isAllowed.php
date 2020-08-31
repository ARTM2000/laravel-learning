<?php

namespace App\Http\Middleware;

use Closure;

class isAllowed
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
        if($request->has("key") && !empty($request->key)) {
            return $next($request);
        } else {
            return response()->json([
                "error" => "some"
            ]);
        }
    }
}
