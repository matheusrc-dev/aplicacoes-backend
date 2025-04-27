<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        if (strlen($request->get('email')) == 0) {
            return redirect()->back()->with('error', 'Você precisa informar seu endereço de e-mail');
        }

        if (strlen($request->get('password')) < 6 ) {
            return redirect()->back()->with('error', 'Sua senha precisa ter no mínimo 6 caracteres');
        }

        return redirect()->route('admin.subjects.index')->with('success', 'Você está logado!');
    }
}
