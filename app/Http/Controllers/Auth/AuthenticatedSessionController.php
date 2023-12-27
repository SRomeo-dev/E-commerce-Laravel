<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Admin;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate(); // Cette ligne est responsable de l'authentification de l'utilisateur
    
        $request->session()->regenerate(); // Ceci régénère l'ID de session après l'authentification
    
        if (Auth::user()->isAdmin()) {
            return redirect()->route('admin')->with('success', 'Connexion réussie en tant qu\'administrateur');
        }
    
        // Redirection vers la page d'accueil après une connexion réussie pour les non-administrateurs
        return redirect('/Accueil')->with('success', 'Connexion réussie ! Bienvenue.');
    }
    
    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->flash('success', 'Vous avez été déconnecté avec succès.');
        return redirect('/');
    }
}