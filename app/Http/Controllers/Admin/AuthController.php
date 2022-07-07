<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('admin.login');
    }

    public function authenticate(LoginRequest $request)
    {
        $validated = $request->safe();

        if (Auth::attempt(['user_name' => $validated['user'], 'password' => $validated['password']])) {
            $request->session()->regenerate();
            
            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'user' => 'Las credenciales no son las correctas!'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout(); 
        $request->session()->invalidate();    
        $request->session()->regenerateToken();    
        return redirect()->route('login');
    }
}
