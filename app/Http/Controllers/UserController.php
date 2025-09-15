<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    /**
     * Affiche le tableau de bord utilisateur
     */
    public function dashboard()
    {
        // Vérifier que l'utilisateur est connecté
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        return view('home.dashboard');
    }

    /**
     * Affiche les cours de l'utilisateur
     */
    public function myCourses()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        return view('user.my-courses');
    }

    /**
     * Affiche le profil utilisateur
     */
    public function profile()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        return view('user.profile');
    }
}
