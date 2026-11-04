<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;

class RegisteredUserController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $idKey = $request->has('nisn') ? 'nisn' : ($request->has('nis') ? 'nis' : 'email');

        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];

        if ($idKey === 'email') {
            $rules['email'] = ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class];
        } else {
            $rules[$idKey] = ['required', 'string', 'max:20', 'unique:users,nis'];
        }

        $validated = $request->validate($rules);

        $userData = [
            'name' => $validated['name'],
            'password' => Hash::make($request->string('password')),
            'role' => 'Siswa',
            'school_name' => $request->school_name ?? 'Asal Sekolah Default',
            'level' => 1,
            'xp' => 0,
        ];

        if ($idKey === 'email') {
            $userData['email'] = $validated['email'];
        } else {
            $userData['nis'] = $validated[$idKey];
        }

        $user = User::create($userData);

        event(new Registered($user));

        if ($request->wantsJson()) {
            return response()->json([
                'message' => 'Registrasi berhasil',
                'registered_nisn' => $user->nis ?? $user->email,
            ], 201);
        }

        return redirect()->route('login')->with([
            'success' => 'Registrasi berhasil! Silakan masukkan kata sandi Anda.',
            'registered_nisn' => $user->nis ?? $user->email,
            'registered_nis' => $user->nis ?? $user->email,
        ]);
    }
}
