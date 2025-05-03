<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login() {
        return view('login');
    }

    public function loginProcess(Request $request) {
        $usernameInput = $request->input('username');
        $passwordInput = $request->input('password');

        $akun = [
            [
                'username' => 'Khagastara',
                'password' => 'AdminTest123',
                'nama' => 'Fadhlurrahman Aqil Supartha',
                'email' => 'aqilsupartha@gmail.com',
                'no_telpon' => '081231725591'
            ]
        ];

        foreach ($akun as $user) {
            if ($user['username'] === $usernameInput && $user['password'] === $passwordInput) {
                session(['user' => $user]);
                return redirect()->route('dashboard', ['username' => $usernameInput]);
            }
        }

        return redirect()->route('login')->with('Username atau Passowrd yang Dimasukkan Salah');
    }

    public function showProfile() {
        $user = session('user');

        return view('profile', compact('user'));
    }

    public function dashboard(Request $request) {
        $username = $request->query('username');

        return view('dashboard', compact('username'));
    }

    public function pengelolaan(Request $request) {
        $dataPasien = [
            ['nama' => 'Gusti', 'kelamin' => 'L', 'tanggal' => '2025-04-29', 'diagnosa' => 'ligma'],
            ['nama' => 'Sapta', 'kelamin' => 'L', 'tanggal' => '2025-04-29', 'diagnosa' => 'sariawan'],
            ['nama' => 'Adit', 'kelamin' => 'L', 'tanggal' => '2025-04-30', 'diagnosa' => 'diare'],
            ['nama' => 'Nur', 'kelamin' => 'P', 'tanggal' => '2025-04-30', 'diagnosa' => 'flu'],
        ];

        return view('pengelolaan', ['dataPasien' => $dataPasien]);
    }
}
