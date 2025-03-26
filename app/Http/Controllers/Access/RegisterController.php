<?php

namespace App\Http\Controllers\Access;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller {

    public function index() {
        return view('register');
    }

    public function registrer(Request $request) {
        
        $request->merge([
            'terms'   => $request->has('terms') ? '1' : '0',
            'cpfcnpj' => preg_replace('/\D/', '', $request->cpfcnpj),
        ]);

        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255|unique:users,email',
            'cpfcnpj' => 'required|unique:users,cpfcnpj',
            'password'=> 'required|string|min:4',
        ], [
            'name.required'     => 'É necessário informar o seu Nome!',
            'email.unique'      => 'Esse email já está em uso!',
            'cpfcnpj.unique'    => 'Esse CPF ou CNPJ já está em uso!',
            'password.required' => 'É necessário informar uma Senha!',
            'password.min'      => 'Sua senha deve ter no mínimo 4 caracteres!',
        ]);

        $existingUser = User::where('email', $request->email)
                            ->orWhere('cpfcnpj', $request->cpfcnpj)
                            ->first();

        if ($existingUser) {
            return back()->withErrors(['email' => 'Já existe um cadastro com este e-mail ou CPF/CNPJ.'])->withInput();
        }

        $user = new User();
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->cpfcnpj  = $request->cpfcnpj;
        $user->password = Hash::make($request->password);
        $user->type     = 1;
        if ($user->save()) {
            if (Auth::attempt($request->only(['email', 'password']))) {
                return redirect()->route('app');
            } else {
                return redirect()->route('login')->with('success', 'Bem-vindo(a)! Faça Login para acessar!');
            }
        }

        return redirect()->back()->with('error', 'Não foi possível finalizar o cadastro, verifique os dados e tente novamente!');
    }
}



