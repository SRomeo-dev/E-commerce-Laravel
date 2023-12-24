<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class PanierController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Panier');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $duplicata = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->produit_id;
        });

        if($duplicata->isNotEmpty()){
            return redirect()->route('produits')->with('success', 'Le produit a été déjà ajouté !');
        }

        $produit = Produit::find($request->produit_id);

        Cart::add($produit->id, $produit->nom, 1, $produit->prix)
        ->associate('App\Models\Produit'); // Assurez-vous d'utiliser le chemin complet du modèle Produit
    
        return redirect()->route('produits')->with('success', 'Le produit a bien été ajouté !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($rowId)
    {

        Cart::remove($rowId);
        return back()->with('success', 'Le produit a été supprimé !');
    }
}
