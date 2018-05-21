<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Redirect;

class AutenticacionController extends Controller
{
    public function index()
    {
        // Verificamos que el usuario no esté autenticado
        if (Auth::check())
        {
            // Si está autenticado lo mandamos a la raíz donde estara el mensaje de bienvenida.
            return Redirect::to('/');
        }
        // Mostramos la vista login.blade.php (Recordemos que .blade.php se omite.)
        return view('autenticacion.login');
    }

    public function login(Request $request)
    {

        $usuario = $request->input('usuario');
        $clave = $request->input('clave');
        
        $auth = User::
            where('usuario', '=', $usuario)
            ->where('clave', '=', $clave)->first();
        
        if ($auth)
        {
            // De ser datos válidos nos mandara a la bienvenida
            Auth::login($auth);
            return Redirect::to('/');
        }
        // En caso de que la autenticación haya fallado manda un mensaje al formulario de login y también regresamos los valores enviados con withInput().
        return Redirect::to('/login')
                    ->with('mensaje_error', 'Tus datos son incorrectos')
                    ->withInput();
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to('/login')
                    ->with('mensaje_error', 'Tu sesión ha sido cerrada.');
    }

}

?>