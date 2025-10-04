<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Services\UsuarioService;

class LoginController extends Controller
{
    protected $usuarioService;

    public function __construct(UsuarioService $usuarioService)
    {
        $this->usuarioService = $usuarioService;
    }
   
    // Mostrar o formulário de registro
    public function login()
    {
        return view('login.entrar');
    }

     // Processar o registro (opcional, se quiser implementar)
    public function validar(Request $request)
    {
        $usuarioAutenticado = $this->usuarioService->autentica($request->email, $request->password);
        
        if ($usuarioAutenticado) {
            // return redirect()->route('login.entrar')->with('erro', 'Email ou senha inválidos.');
        }
        
        return redirect()->route('login.entrar')->with('erro', 'Email ou senha inválidos.');
    }
}
