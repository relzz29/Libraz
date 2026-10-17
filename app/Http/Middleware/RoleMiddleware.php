<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request with role verification.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  ...$roles
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if (!Auth::check() && !session('is_admin')) {
            return redirect()->route('admin.login')->with('error', 'Sesi berakhir. Silakan login kembali.');
        }

        // Ambil peran admin aktif dari session ('admin_role') atau user->role
        $currentRole = session('admin_role');
        if (empty($currentRole) && Auth::check()) {
            $currentRole = Auth::user()->role;
        }

        $normalizedCurrentRole = strtolower(trim((string)$currentRole));
        $normalizedAllowedRoles = array_map(function ($r) {
            return strtolower(trim($r));
        }, $roles);

        // Peran 'admin it' atau 'admin' memiliki hak akses penuh (Super Admin bypass)
        if (in_array($normalizedCurrentRole, ['admin it', 'admin'])) {
            return $next($request);
        }

        // Cek apakah peran user ada di daftar peran yang diizinkan
        if (!in_array($normalizedCurrentRole, $normalizedAllowedRoles)) {
            $allowedStr = implode(', ', array_map('ucwords', $roles));
            $message = "Akses Dibatasi! Fitur ini khusus untuk peran: {$allowedStr}. Peran Anda saat ini: " . ucwords($currentRole ?: 'Tidak Dikenal') . ".";

            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => $message
                ], 403);
            }

            return redirect()->route('admin')->with('error', $message);
        }

        return $next($request);
    }
}
