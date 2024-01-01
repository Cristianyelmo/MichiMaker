<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,...$roles): Response
    {
        $user = Auth::user();

        // Verificar si el usuario tiene el rol adecuado
        if ($user && in_array($user->rol_id, $roles)) {
            return $next($request);
        }

        // Redirigir o responder según sea necesario si el usuario no tiene el rol adecuado
        return redirect()->route('login')->with('error', 'No tienes permisos para acceder a esta página.');
    }
}




