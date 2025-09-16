<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
     public function index()
    {
        // Ici vous récupérerez les cours depuis la base de données
        // Pour l'instant, on retourne une vue avec des données factices
        return view('home.courses');
    }

    /**
     * Affiche les résultats de recherche
     */
    public function search(Request $request)
    {
        $query = $request->input('q');
        // Logique de recherche à implémenter
        return view('home.courses', ['searchQuery' => $query]);
    }

    /**
     * Affiche les détails d'un cours
     */
    public function show($id)
    {
        // Récupérer le cours depuis la base de données
        // Pour l'instant, on retourne une vue avec des données factices
          // On récupère le cours depuis la DB
        $course = Course::findOrFail($id);

        return view('home.course-detail', ['courseId' => $id],compact('course'));
    }

    /**
     * Affiche les cours par catégorie
     */
    public function byCategory($category)
    {
        // Récupérer les cours de la catégorie spécifiée
        return view('home.courses', ['category' => $category]);
    }
}
