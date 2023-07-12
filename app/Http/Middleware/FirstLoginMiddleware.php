<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class FirstLoginMiddleware
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
        $user = $request->user();

        if ($user && $user->first_login  && $request->route()->getName() !== 'users.modification') {
            return redirect()->route('users.modification', ['userId' => auth()->id()]);

        }

        return $next($request);
    }
}
