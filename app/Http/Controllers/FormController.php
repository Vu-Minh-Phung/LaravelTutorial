<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm() {
        return view('input-form');
    }

    public function handleForm(Request $request) {
        $name = $request->input('name');
        return view('hello-name', ['name' => $name]);
    }
}
