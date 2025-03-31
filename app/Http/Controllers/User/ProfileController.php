<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Importação do modelo User

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        // Verifica se o usuário está autenticado
        if (!Auth::check()) {
            return response()->json(['error' => 'Usuário não autenticado'], 401);
        }

        $user = Auth::user(); // Obtém o usuário autenticado

        // Validação dos campos
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id
        ]);

        // Atualiza os dados do usuário
        $user->fill([
            'name' => $request->name,
            'status' => $request->status,
            'phone' => $request->phone,
            'email' => $request->email,
        ])->save();

        return response()->json(['success' => true, 'user' => $user]);
    }
}

