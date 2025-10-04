<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class CadastroController extends Controller
{
    // Mostrar o formulário de registro
    public function registrar()
    {
        return view('cadastro.registrar');
    }

     // Processar o registro (opcional, se quiser implementar)
    public function salvar(Request $request)
    {
        $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',
            ]);

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'tipo' => $request->tipo
            ]);

        return redirect()->route('login.entrar');
    }
}
