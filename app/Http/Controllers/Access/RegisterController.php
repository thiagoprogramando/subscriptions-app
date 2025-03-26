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
        $request->merge([
            'terms'   => $request->has('terms') ? '1' : '0',
            'cpfcnpj' => preg_replace('/\D/', '', $request->cpfcnpj),
        ]);

        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255|unique:users,email',
            'cpfcnpj' => 'required|unique:users,cpfcnpj',
            'password'=> 'required|string|min:4',
        ]);

        $existingUser = User::where('email', $request->email)
                            ->orWhere('cpfcnpj', $request->cpfcnpj)
                            ->first();

        if ($existingUser) {
            return back()->withErrors(['email' => 'Já existe um cadastro com este e-mail ou CPF/CNPJ.'])->withInput();
        }

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'cpfcnpj'  => $request->cpfcnpj,
            'password' => Hash::make($request->password),
            'type'     => 1,
        ]);

        Auth::login($user);

        return redirect()->route('app')->with('success', 'Cadastro realizado com sucesso!');
    }
}



