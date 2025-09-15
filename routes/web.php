<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Page d'accueil
Route::get('/', [HomeController::class, 'index'])->name('home');

// Routes pour les cours
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/search', [CourseController::class, 'search'])->name('courses.search');
Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');
Route::get('/courses/category/{category}', [CourseController::class, 'byCategory'])->name('courses.byCategory');

// Route pour le tableau de bord (nécessite une connexion)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/my-courses', [UserController::class, 'myCourses'])->name('my-courses');
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
});

// Routes d'authentification (déjà incluses par défaut avec Laravel)
Auth::routes();

// Route de fallback pour les pages non trouvées
Route::fallback(function () {
    return view('errors.404');
});

Route::get('/test', function () {
    return response()->json([
        'message' => 'Test réussi',
        'status' => 'OK',
        'timestamp' => now()
    ]);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
