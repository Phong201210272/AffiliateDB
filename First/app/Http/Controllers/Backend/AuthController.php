<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {

    }
    public function login(){
        return view('backend.auth.login');
    }
    public function index(AuthRequest $request){
        $credentials = ['email' => $request->input('email'), 'password' => $request->input('password')];
        if (Auth::attempt($credentials)) {
            // Đăng nhập thành công
            return redirect()->route('dashboard.index')->with('success', 'You have signed in');
        } else {
            // Đăng nhập thất bại
            return redirect()->route('auth.login')->with('error', 'Your email or password is incorrect');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('auth.login');
    }
}
