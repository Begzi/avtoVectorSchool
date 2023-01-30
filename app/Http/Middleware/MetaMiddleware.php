<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use View;

class MetaMiddleware
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
        $metaTags = ['keywords' => 'Автошкола, Улан-Уде, Улан-уде, улан-уде','title' => 'Автошкола Вектора, Улан-Удэ',
        'description' => 'учшая автошкола в мире!'];
        View::share('metaTags', $metaTags);
        return $next($request);
    }
}
