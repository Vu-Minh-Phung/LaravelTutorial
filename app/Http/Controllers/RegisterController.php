<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showForm() {
        return view('register-form');
    }

    public function handleForm(Request $request) {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        return view('register-success', ['name' => $validated['name']]);
    }
}
