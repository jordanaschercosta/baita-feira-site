<?php

namespace App\Services;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UsuarioService
{
    /**
     * Validar os dados do usuário para cadastro.
     *
     * @param array $data
     */
    public function autentica(string $email, string $senha)
    {        
        $user = User::where('email', $email)->first();

        if ($user) {
            if (Hash::check($senha, $user->password)) {
                return $user;
            }
        }

        return null;
    }

    /**
     * Validar os dados do usuário para login.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validarLogin(array $data)
    {
        return Validator::make($data, [
            'email'    => 'required|email',
            'password' => 'required|string',
        ]);
    }
}