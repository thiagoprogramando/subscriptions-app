<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class ProfileController extends Controller
{
    public function update(Request $request)
    {

        if (!Auth::check()) {
            return response()->json(['error' => 'Usuário não autenticado'], 401);
        }

        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id
        ]);

        $user->fill([
            'name' => $request->name,
            'email' => $request->email,
            'cpfcnpj' => $request->cpfcnpj,
            'password' => bcrypt($request->password),
            'type' => $request->type,
        ])->save();

        return response()->json([
            'success' => true,
            'message' => 'Informações atualizadas com sucesso!',
            'user' => $user
        ]);
    }

    public function updatePhoto(Request $request)
    {
        if (!Auth::check()) {
            return response()->json(['error' => 'Usuário não autenticado'], 401);
        }

        $user = Auth::user();

        $request->validate([
            'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($user->profile_image) {
            Storage::delete('public/' . $user->profile_image);
        }

        $imagePath = $request->file('profile_image')->store('profile_images', 'public');

        $user->profile_image = $imagePath;
        $user->save();

        return response()->json([
            'success' => true,
            'message' => 'Foto do perfil atualizada com sucesso!',
            'image_url' => asset('storage/' . $imagePath)
        ]);
    }
}


