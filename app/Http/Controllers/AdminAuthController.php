<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::check() && (session('is_admin') || in_array(strtolower(Auth::user()->role), ['admin', 'pustakawan', 'kepala perpus', 'admin it']))) {
            return redirect()->route('admin');
        }
        return view('admin_login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $username = trim($credentials['username']);
        $password = $credentials['password'];
        $role = $request->input('role', 'Pustakawan');
        $remember = $request->boolean('remember');

        // 1. Cek jika user ada di database (berdasarkan nis/ID, email, atau name)
        $user = \App\Models\User::where('nis', $username)
            ->orWhere('email', $username)
            ->orWhere('name', $username)
            ->first();

        if ($user && \Illuminate\Support\Facades\Hash::check($password, $user->password)) {
            if (!in_array(strtolower($user->role), ['admin', 'pustakawan', 'kepala perpus', 'admin it'])) {
                $user->update(['role' => 'admin']);
            }
            Auth::login($user, $remember);
            session(['is_admin' => true, 'admin_role' => $role]);
            return redirect()->route('admin')->with('success', 'Selamat datang di Portal Admin.');
        }

        // 2. Kredensial Khusus Tiap Peran (Pustakawan, Kepala Perpus, Admin IT)
        $staffCredentials = [
            'pustakawan' => [
                'ids' => ['PST-001', 'PUSTAKAWAN'],
                'pin' => 'pustaka123',
                'name' => 'Petugas Pustakawan',
                'email' => 'pustakawan@libraz.com',
                'role' => 'Pustakawan'
            ],
            'kepala perpus' => [
                'ids' => ['KPL-001', 'KEPALAPERPUS', 'KEPALA'],
                'pin' => 'kepala123',
                'name' => 'Farell Giekady',
                'email' => 'kepala@libraz.com',
                'role' => 'Kepala Perpus'
            ],
            'admin it' => [
                'ids' => ['ADM-001', 'ADMINIT', 'ADMIN', 'ADM-19850412'],
                'pin' => 'adminit123',
                'name' => 'Aryandi Ramadhani',
                'email' => 'adminit@libraz.com',
                'role' => 'Admin IT'
            ]
        ];

        // Normalisasi role terpilih
        $selectedRoleKey = strtolower($role);
        
        // Cari apakah cocok dengan salah satu peran
        foreach ($staffCredentials as $key => $staff) {
            $idMatched = in_array(strtoupper($username), array_map('strtoupper', $staff['ids']));
            
            // Juga izinkan jika user memasukkan sandi adminit123 / admin123 untuk ADM-001
            $pinMatched = ($password === $staff['pin']) || ($key === 'admin it' && $password === 'admin123');

            if ($idMatched && $pinMatched) {
                $admin = \App\Models\User::firstOrCreate(
                    ['email' => $staff['email']],
                    [
                        'name' => $staff['name'],
                        'nis' => $staff['ids'][0],
                        'password' => bcrypt($staff['pin']),
                        'role' => 'admin'
                    ]
                );
                $admin->update([
                    'role' => 'admin',
                    'name' => $staff['name'],
                    'nis' => $staff['ids'][0]
                ]);

                Auth::login($admin, $remember);
                session(['is_admin' => true, 'admin_role' => $staff['role']]);
                return redirect()->route('admin')->with('success', 'Berhasil login sebagai ' . $staff['role'] . '.');
            }
        }

        return back()->with('error', 'ID Pegawai atau Kata Sandi salah untuk peran ' . $role . '.')->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        session()->forget('is_admin');
        session()->forget('admin_role');
        return redirect()->route('admin.login')->with('success', 'Anda telah berhasil logout.');
    }
}
