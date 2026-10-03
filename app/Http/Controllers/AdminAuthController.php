<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin_login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // Support login by email or name/username
        $field = filter_var($credentials['username'], FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
        
        $attempt = Auth::attempt([
            $field => $credentials['username'],
            'password' => $credentials['password'],
            'role' => 'admin' // Ensure the user has the admin role
        ]);

        // For demo purposes, allow a fallback hardcoded login
        if ($credentials['username'] === 'admin' && $credentials['password'] === 'admin123') {
            // Attempt to find or create demo admin
            $admin = \App\Models\User::firstOrCreate(
                ['email' => 'admin@libraz.com'],
                [
                    'name' => 'admin',
                    'password' => bcrypt('admin123'),
                    'role' => 'admin'
                ]
            );
            Auth::login($admin);
            return redirect()->route('admin')->with('success', 'Berhasil login sebagai Admin Demo.');
        }

        if ($attempt) {
            $request->session()->regenerate();
            return redirect()->route('admin');
        }

        return back()->with('error', 'Username atau password salah, atau Anda bukan admin.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }
}
