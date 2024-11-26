<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// Importando o modelo Session

class ApiAuthController extends Controller
{
    /**
     * Realizar o login do usuário na API.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        // Validação dos dados de login
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Tentando autenticar o usuário
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Usuário autenticado com sucesso
            $user = Auth::user();

            // Criar uma nova sessão na tabela 'sessions' sem os campos de timestamp
            $session = Session::create([
                'user_id' => $user->id,
                'ip_address' => $request->ip(),
                'user_agent' => $request->header('User-Agent'),
                'payload' => json_encode(['role' => $user->users_type_id]),
                'last_activity' => now()->timestamp,
            ]);

            // Retornar a resposta com o usuário e dados da sessão
            return response()->json([
                'message' => 'Login bem-sucedido',
                'user' => $user,
                'session' => $session
            ], 200);
        }

        // Se a autenticação falhar
        return response()->json(['message' => 'Credenciais inválidas'], 401);
    }

    /**
     * Realizar o logout do usuário na API.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        // Remover a sessão do usuário
        $session = Session::where('user_id', Auth::id())->first();
        if ($session) {
            $session->delete();
        }

        // Fazer logout do usuário
        Auth::logout();

        return response()->json(['message' => 'Logout realizado com sucesso']);
    }
}