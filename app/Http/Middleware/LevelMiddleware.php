<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LevelMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response)  $next
     * @param  string  $level
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $level)
    {
        if (Auth::check()) {
            $userLevel = Auth::user()->level;

            if ($userLevel == 'admin' || ($userLevel == 'pelanggan' && $level == 'pelanggan')) {
                return $next($request);
            } else {
                return redirect('/index')->with('error', 'Anda tidak memiliki akses ke halaman ini');
            }
        }

        return redirect('/')->with('error', 'Silahkan login terlebih dahulu');
    }
}
