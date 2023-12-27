<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\AdminController;
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
    Route::get('/admin/dasboard', function(){
        return view('admin.index');
    })->name('admin');

    Route::get('/admin/clients', function(){
        return view('admin.clients');
    })->name('client');

    // Produits
    Route::get('/admin/produits', [AdminController::class, 'index'])->name('produit');

    Route::get('/admin/produits/supprimer', [AdminController::class, 'destroy'])->name('supprimer.produit');

    Route::get('/admin/produits/Ajouter', function(){
        return view('admin.produit.add');
    })->name('produit-add');

    Route::get('/admin/produits/modifier', function(){
        return view('admin.produit.edit');
    })->name('produit-edit');


    Route::get('/admin/Commandes', function(){
        return view('admin.commandes');
    })->name('commande');

    Route::get('/admin/Profil', function(){
        return view('admin.profil');
    })->name('profil');


    // client
    Route::get('/Clients/Ajouter', function(){
        return view('admin.client.add');
    })->name('client-add');

    Route::get('/Clients/Modifier', function(){
        return view('admin.client.edit');
    })->name('client-edit');
});