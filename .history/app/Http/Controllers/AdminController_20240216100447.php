<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //Dashboard
    public function index()
    {
        return view('index');
    }
    // Login
    public function login()
    {
        return view('login');
    }
    // Submit
    public function submit_login(Request $request)
    {
        $request->validate([
            'username' => 'requires',
            'password' => 'required'
        ]);
        $checkAdmin = Admin::where(['username' => $request->username, 'password' => $request->password])->count();
        if ($checkAdmin > 0) {
            return redirect('admin');
        }
    }
}
