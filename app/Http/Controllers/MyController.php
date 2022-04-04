<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function myFunction(){
        echo "Hello, I am Sadovsky Aliaksey Anatolevich";
    }

    public function viewMessage(){
        $message = "Садовский Алексей";
        return view('my-auth.login', [
            'mymessage' => $message
        ]);
    }
}
