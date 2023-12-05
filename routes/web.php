<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('auth.login');
    })->name('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Mes propre routes

Route::middleware('auth')->group(function () {
    Route::get('/Accueil', function () {
        return view('Accueil');
    })->name('accueil');

    Route::get('/Produits', function () {
        return view('Produits');
    })->name('produits');

    Route::get('/Propos', function () {
        return view('Propos');
    })->name('propos');

    Route::get('/Panier', function () {
        return view('Panier');
    })->name('panier');

    
    Route::get('/Produits#Telephone', function(){
        return view('Produits#Telephone');
    })->name('telephone');
    
    Route::get('/Produits#Electromenager', function(){
        return view('Produits#Electromenager');
    })->name('electromenager');
    
    Route::get('/Produits#Informatique', function(){
        return view('Produits#Informatique');
    })->name('informatique');
    
    Route::get('/Produits#Mode', function(){
        return view('Produits#Mode');
    })->name('mode');
    
    Route::get('/Produits#Cosmetique', function(){
        return view('Produits#Cosmetique');
    })->name('cosmetique');
    
    Route::get('/Produits#Electronique', function(){
        return view('Produits#Electronique');
    })->name('electronique');
});
