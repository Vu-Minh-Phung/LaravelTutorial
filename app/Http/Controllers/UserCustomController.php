<?php

namespace App\Http\Controllers;

use App\Models\UserCustom;
use Illuminate\Http\Request;

class UserCustomController extends Controller
{
    public function index() {

        $users = UserCustom::all();

        return view('user-list', ['users' => $users]);
    }

    public function showForm() {
        return view('user-form');
    }

    public function saveForm(Request $request) {
        $validated = $request->validate(['name' => 'required|min:2']);

        UserCustom::create($validated);

        return redirect('/users/create')->with('success', 'Đăng ký thành công');
    }
}
