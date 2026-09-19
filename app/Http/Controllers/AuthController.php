<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        if (Auth::check()) {
            return redirect()->route('katalog');
        }
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'nis' => ['required', 'string', 'max:10'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            
            // Buat token Sanctum
            $token = $user->createToken('auth_token')->plainTextToken;

            // Regenerate session (untuk Cookie-Based SPA) - Dihapus karena pakai token API
            // $request->session()->regenerate();

            return response()->json([
                'message' => 'Login berhasil',
                'user' => $user,
                'token' => $token,
            ]);
        }

        return response()->json([
            'message' => 'NIS atau Kata Sandi salah.'
        ], 401);
    }

    public function qrLogin(Request $request)
    {
        $qrData = trim($request->input('qr_data', ''));

        if (empty($qrData)) {
            return response()->json([
                'success' => false,
                'message' => 'Data QR / Barcode kosong.',
            ], 422);
        }

        $nis = null;

        // 1. Check if JSON
        if (str_starts_with($qrData, '{') && str_ends_with($qrData, '}')) {
            $json = json_decode($qrData, true);
            if (is_array($json)) {
                if (isset($json['nis'])) {
                    $nis = (string)$json['nis'];
                } elseif (isset($json['id'])) {
                    $nis = (string)$json['id'];
                }
            }
        }

        // 2. Check format BZ-YYYY-NIS-XX (e.g. BZ-2024-108827-01)
        if (!$nis && preg_match('/^BZ-(\d{4})-(\d+)(?:-\d+)?$/i', $qrData, $matches)) {
            $nis = $matches[1] . $matches[2];
        }

        // 3. Fallback: extract digits if length is typical NIS (e.g. 8-14 digits)
        if (!$nis) {
            if (preg_match('/\b(\d{8,14})\b/', $qrData, $matches)) {
                $nis = $matches[1];
            } else {
                $nis = preg_replace('/[^a-zA-Z0-9]/', '', $qrData);
            }
        }

        $user = \App\Models\User::where('nis', $nis)->first();

        // 4. Try exact match with raw string if not found
        if (!$user) {
            $user = \App\Models\User::where('nis', $qrData)->first();
        }

        if (!$user) {
            return response()->json([
                'success' => false,
                'nis' => $nis ?: $qrData,
                'message' => 'Kartu Pelajar tidak terdaftar (NIS: ' . ($nis ?: $qrData) . '). Silakan gunakan login manual atau daftarkan akun.',
            ], 404);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        // Auth::login($user);
        // $request->session()->regenerate();

        return response()->json([
            'success' => true,
            'message' => 'Fast Pass Berhasil! Selamat datang, ' . $user->name,
            'user' => [
                'name' => $user->name,
                'nis' => $user->nis,
                'level' => $user->level,
                'level_name' => $user->level_name,
            ],
            'token' => $token,
            'redirect' => route('katalog'),
        ]);
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'nis' => 'required|string|max:10|unique:users',
            'school_name' => 'required|string|max:255',
            'password' => 'required|string|min:6',
        ]);

        $user = \App\Models\User::create([
            'name' => $validated['name'],
            'nis' => $validated['nis'],
            'school_name' => $validated['school_name'],
            'password' => \Illuminate\Support\Facades\Hash::make($validated['password']),
            'role' => 'Siswa',
            'level' => 1,
            'level_name' => 'Pembaca Baru',
            'xp' => 0,
            'max_xp' => 500,
        ]);

        // Buat token Sanctum
        $token = $user->createToken('auth_token')->plainTextToken;

        // Login untuk Cookie-Based SPA - Dihapus karena pakai API Token
        // Auth::login($user);
        
        return response()->json([
            'message' => 'Pendaftaran berhasil',
            'user' => $user,
            'token' => $token,
        ], 201);
    }

    public function updateProfile(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'avatar' => 'nullable|string'
        ]);

        $user = $request->user();
        $user->name = $validated['name'];
        
        if (!empty($validated['avatar'])) {
            $avatarData = $validated['avatar'];
            // Check if it's a data URI
            if (preg_match('/^data:image\/(\w+);base64,/', $avatarData, $type)) {
                $avatarData = substr($avatarData, strpos($avatarData, ',') + 1);
                $type = strtolower($type[1]); // jpg, png, gif
                
                if (in_array($type, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                    $avatarData = base64_decode($avatarData);
                    $filename = 'avatar_' . $user->id . '_' . time() . '.' . $type;
                    
                    \Illuminate\Support\Facades\Storage::disk('public')->put('avatars/' . $filename, $avatarData);
                    
                    $user->avatar = 'storage/avatars/' . $filename;
                }
            } else if (strpos($avatarData, 'api.dicebear.com') !== false) {
                 // Or if they chose a dicebear avatar, save the URL
                 $user->avatar = $avatarData;
            }
        }

        $user->save();

        return response()->json([
            'message' => 'Profil berhasil diperbarui',
            'user' => $user
        ]);
    }

    public function logout(Request $request)
    {
        // Hapus token Sanctum yang sedang aktif (jika pakai token)
        if ($request->user()) {
            $request->user()->currentAccessToken()->delete();
        }

        // Logout dan hapus sesi (jika pakai Cookie-Based SPA) - Dihapus karena API
        // Auth::guard('web')->logout();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();
        
        return response()->json([
            'message' => 'Logout berhasil'
        ]);
    }
}
