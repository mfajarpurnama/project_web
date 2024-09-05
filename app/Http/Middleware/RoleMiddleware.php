<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (Auth::check()) {
            $userRole = Auth::user()->role;

            if ($userRole == 'admin') {
                
                return $next($request);
            } elseif ($userRole == 'pelanggan' && $role == 'pelanggan') {
               
                return $next($request);
            } else {
               
                return redirect('/index')->with('error', "Anda tidak memiliki akses ke halaman admin.");
            }
        }

        return redirect('/')->with('error', "Silakan login terlebih dahulu.");
    }
}