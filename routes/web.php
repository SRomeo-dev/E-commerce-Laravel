<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\Admin;
use Gloudemans\Shoppingcart\Facades\Cart;
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
    Route::get('/accueil', [AccueilController::class, 'accueil'])->name('accueil');
    Route::get('/produits', [ProduitController::class, 'index'])->name('produits');
    Route::get('/panier', [PanierController::class, 'index'])->name('panier');
    Route::get('/propos', function () {
        return view('Propos');
    })->name('propos');


    // Ajouter au panier
    Route::post('/panier/ajouter', [PanierController::class, 'store'])->name('panier.add');

    // supprimer du panier
    Route::delete('/panier/{rowId}', [PanierController::class, 'destroy'])->name('panier.delete');

    // vider le panier
    Route::get('/panier/vider', function(){
        Cart::destroy();
    });

    // Route de payement
    Route::get('/checkout', 'App\Http\Controllers\PaiementController@checkout')->name('checkout');
    Route::post('/session', 'App\Http\Controllers\PaiementController@session')->name('session');
    Route::get('/success', 'App\Http\Controllers\PaiementController@success')->name('success');
    Route::post('/commandes', [PaiementController::class, 'store']);

    //Route pour la barre de recherche
    Route::get('/recherche', [ProduitController::class, 'search'])->name('recherche');



    Route::get('/produits/telephone', function(){
        return view('Produits#Telephone');
    })->name('telephone');

    Route::get('/produits/electromenager', function(){
        return view('Produits#Electromenager');
    })->name('electromenager');

    Route::get('/produits/informatique', function(){
        return view('Produits#Informatique');
    })->name('informatique');

    Route::get('/produits/mode', function(){
        return view('Produits#Mode');
    })->name('mode');

    Route::get('/produits/cosmetique', function(){
        return view('Produits#Cosmetique');
    })->name('cosmetique');

    Route::get('/produits/electronique', function(){
        return view('Produits#Electronique');
    })->name('electronique');
});


// Routes accessibles uniquement à l'administrateur
Route::middleware(['auth', Admin::class])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'commande'])->name('admin');

    // Produits
    Route::get('/admin/produits', [AdminController::class, 'index'])->name('produit');

    Route::get('/admin/produits/supprimer', [AdminController::class, 'destroy'])->name('supprimer.produit');

    Route::get('/admin/produits/ajouter', [AdminController::class, 'create'])->name('produit-add');
    Route::post('/admin/produits/ajouter', [AdminController::class, 'store'])->name('produit-ajouter');

    Route::get('/admin/produits/modifier/{id}', [AdminController::class, 'edit'])->name('produit-edit');
    Route::put('/admin/produits/update/{id}', [AdminController::class, 'update'])->name('produit.update');

    Route::delete('/admin/produit/delete/{id}', [AdminController::class, 'delete'])->name('client.delete');


    // client
    Route::get('/admin/clients', [AdminUserController::class, 'index'])->name('client');

    Route::get('/admin/clients/ajouter', [AdminUserController::class, 'ajouter'])->name('client-add');
    Route::post('/admin/clients/ajouter', [AdminUserController::class, 'store'])->name('client-ajouter');

    Route::get('/admin/clients/edit/{id}', [AdminUserController::class, 'edit'])->name('client.edit');
    Route::put('/admin/clients/update/{id}', [AdminUserController::class, 'update'])->name('client.update');

    Route::delete('/admin/clients/delete/{id}', [AdminUserController::class, 'delete'])->name('client.delete');

    // Commandes
    Route::get('/admin/commandes', [AdminController::class, 'order'])->name('commande');

    // Profil
    Route::get('/admin/profil', function(){
        return view('admin.profil');
    })->name('profil');

    });
