<?php

namespace App\Http\Controllers\Access;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function store(Request $request)
{
    dd($request->all());

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'cpfcnpj' => 'required|string|max:14|unique:users',
            'password' => 'required|string|min:4|confirmed',
            'terms' => 'required|accepted', 
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'cpfcnpj' => $request->cpfcnpj,
            'password' => Hash::make($request->password),
            'type' => 1,
        ]);

        Auth::login($user);

        return redirect()->route('home')->with('success', 'Cadastro realizado com sucesso!');
    }
}


