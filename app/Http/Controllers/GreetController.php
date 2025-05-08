<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetController extends Controller
{
    public function index($name) {
        return view('greet', ['name' => ucfirst($name)]);
    }
}
