<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth; // Import correct de la façade Auth
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Vérifie si l'utilisateur est authentifié et est admin
        if (Auth::check() && Auth::user()->admin) {
            return $next($request); // Continue l'exécution si l'utilisateur est admin
        }

        return redirect('/'); // Redirige vers l'accueil si l'utilisateur n'est pas admin
    }
}
