<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Auth;
use Firebase\Auth\Token\Exception\InvalidToken;
use Firebase\Auth\Token\Exception\IssuedInTheFuture;

class AuthController extends Controller
{
    protected $firebaseAuth;

    public function __construct(Auth $firebaseAuth)
    {
        $this->firebaseAuth = $firebaseAuth;
    }

    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        try {
            $signInResult = $this->firebaseAuth->signInWithEmailAndPassword($email, $password);
            $idToken = $signInResult->idToken();
            // Puedes almacenar el token en la sesión o en una cookie para mantener al usuario autenticado.
            return redirect()->route('usuarios.index');
            // Redirige a la página de dashboard después del inicio de sesión.
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['email' => 'Las credenciales no son válidas.']);
        }
    }

    public function logout()
    {
        // Puedes personalizar esto según tus necesidades.
        $this->firebaseAuth->signOut();

        return redirect('/');
    }
}
