<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function showForm() {
        return view('feedback-form');
    }

    public function handleForm(Request $request) {
        return view('feedback-result', ['name' => $request->name, 'email' => $request->email, 'message' => $request->message]);
    }
}
