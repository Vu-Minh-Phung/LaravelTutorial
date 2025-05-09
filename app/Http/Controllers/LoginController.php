<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showForm() {
        return view('login-form');
    }

    public function saveForm(Request $request) {
        $validated = $request->validate([
            'name' => 'required|min:2'
        ]);

        session(['name' => $validated['name'] ]);

        return redirect('/login-success')->with('success', 'Đăng nhập thành công');
    }

    public function showName() {
        $name = session('name', 'Guest');
        return view('login-success', ['name' => $name]);
    }
}
