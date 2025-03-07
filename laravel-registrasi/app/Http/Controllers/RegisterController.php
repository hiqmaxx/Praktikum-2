<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function submit(Request $request)
    {
        return view('result', ['data' => $request->all()]);
    }
}
