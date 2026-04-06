<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    /**
     * Show login form
     */
    public function showLoginForm()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    /**
     * Handle login
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Check if user exists and is admin
        $user = User::where('email', $credentials['email'])->first();

        if (!$user || !Hash::check($credentials['password'], $user->password)) {
            return back()->withErrors(['email' => 'Email atau password salah.']);
        }

        if (!$user->isAdmin()) {
            return back()->withErrors(['email' => 'Anda tidak memiliki akses admin.']);
        }

        Auth::login($user, $request->has('remember'));
        return redirect()->route('admin.dashboard');
    }

    /**
     * Handle logout
     */
    public function logout()
    {
        Auth::logout();
        session()->flush();
        return redirect('/')->with('success', 'Anda berhasil logout.');
    }
}