<?php

namespace App\Http\Controllers\Access;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgotController extends Controller
{
    public function showLinkRequestForm()
    {
        return view('forgot-password');
    }

    public function sendResetLinkEmail(Request $request)
    {

        $request->validate([
            'email' => 'required|email'
        ]);

        return back()->with('status', 'Link de redefinição de senha foi solicitado!');
    }
}
