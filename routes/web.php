<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RouteController;
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
    Route::get('/Accueil', [AccueilController::class, 'accueil'])->name('accueil');
    Route::get('/Produits', [ProduitController::class, 'index'])->name('produits');
    Route::get('/Panier', [PanierController::class, 'index'])->name('panier');

    // Ajouter au panier
    Route::post('/Panier/ajouter', [PanierController::class, 'store'])->name('panier.add');

    // supprimer du panier
    Route::delete('/Panier/{rowId}', [PanierController::class, 'destroy'])->name('panier.delete');

    // vider le panier
    Route::get('/Panier/vider', function(){
        Cart::destroy();
    });

            
    Route::get('/Propos', function () {
        return view('Propos');
    })->name('propos');
    
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


// Routes Admin
Route::get('/index', function(){
    return view('admin.index');
})->name('admin');

Route::get('/Clients', function(){
    return view('admin.clients');
})->name('client');

Route::get('/Admin-produits', function(){
    return view('admin.produits');
})->name('produit');

Route::get('/Commandes', function(){
    return view('admin.commandes');
})->name('commande');

Route::get('/Profil', function(){
    return view('admin.profil');
})->name('profil');


// Produits
Route::get('/Produits/Ajouter', function(){
    return view('admin.produit.add');
})->name('produit-add');

Route::get('/Produits/Modifier', function(){
    return view('admin.produit.edit');
})->name('produit-edit');

// client
Route::get('/Clients/Ajouter', function(){
    return view('admin.client.add');
})->name('client-add');

Route::get('/Clients/Modifier', function(){
    return view('admin.client.edit');
})->name('client-edit');
