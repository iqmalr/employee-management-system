<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Dashboard
    public function index()
    {
        return view('index');
    }

    // Login
    public function login()
    {
        return view('login');
    }

    // Submit Login
    public function submit_login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credentials = [
            'username' => $request->input('username'),
            'password' => $request->input('password')
        ];

        $checkAdmin = Admin::where($credentials)->count();

        if ($checkAdmin > 0) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid credentials. Please try again.');
        }
    }
}
