<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index() {
        $ten = 'Laravel học sinh chăm ngoan';
        return view('hello', ['ten' => $ten]);
    }
}
