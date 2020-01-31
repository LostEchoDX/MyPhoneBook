<?php

namespace App\Http\Middleware;

use App\Http\User;
use Closure;

class CheckRole
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
	if (auth()->user()->role == 'user')
	{
		return redirect()->route('home');
	}

	if ($request->route()->getName() == 'delete' && auth()->user()->role == 'gestionnaire')
	{
		return redirect()->route('home');
	}
	  return $next($request);
    }
}
