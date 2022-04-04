<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        $message = "Садовский Алексей";
        return view('my-auth.login', [
            'mymessage' => $message
        ]);
    }

    public function auth( Request $request){
        Auth::attempt($request->only('email', 'password'));
    }

    public function logout( Request $request){
        Auth::logout();
    }
}
