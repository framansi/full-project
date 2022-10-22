<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {

        return view('contact');
    }

    public function send(SendRequest $request)
    {

        $data = [
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "message" => $request->message,
        ];

        return redirect()->route('contact')->with('succes', 'Email inviata correttamente');
    }
}
