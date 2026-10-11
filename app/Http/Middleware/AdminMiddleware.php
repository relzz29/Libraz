<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check session or Auth user
        if (!Auth::check() && !session('is_admin')) {
            return redirect()->route('admin.login')->with('error', 'Silakan login terlebih dahulu untuk mengakses portal admin.');
        }

        $user = Auth::user();
        if ($user) {
            $allowedRoles = ['admin', 'pustakawan', 'kepala perpus', 'admin it'];
            if (!in_array(strtolower($user->role), $allowedRoles) && !session('is_admin')) {
                return redirect()->route('admin.login')->with('error', 'Akses ditolak. Akun Anda tidak memiliki hak akses admin.');
            }
        }

        return $next($request);
    }
}
