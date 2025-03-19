<?php

namespace App\Http\Controllers\Access;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        // Verificar se o usuário existe (pelo email ou nome de usuário)
        $user = User::where('email', $request->email)
                    ->orWhere('name', $request->email)
                    ->first();

        if (!$user) {
            return back()->withErrors(['email' => 'O usuário com esse email ou nome de usuário não existe.']);
        }

        // Verificar a senha
        if (!Hash::check($request->password, $user->password)) {
            return back()->withErrors(['password' => 'Senha incorreta.']);
        }

        // Autenticar o usuário
        Auth::login($user);

        return redirect()->route('app')->with('success', 'Login realizado com sucesso!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
