<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Produit;
use App\Models\Commande;
use Illuminate\Http\Request;

class AdminController extends Controller
{

     public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.produits', [
            'produits' => Produit::All(),
        ]);
    }

    // Fonction pour afficher le formulaire d'ajou d'un produit
    public function create()
    {
        return view('admin.produit.add');
    }


    // Fontion pour ajouter un produit
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|image',
            'nom' => 'required|string',
            'prix' => 'required|numeric',
            'description' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath; 
        }

        Produit::create($validatedData);

        return redirect('/admin/produits')->with('success', 'Le produit a été ajouté avec succès !');
    }


    // Fonction pour affichier le formulaire de modification
    public function edit($id)
    {
        $produit = Produit ::findOrFail($id);
        return view('admin.produit.edit', compact('produit'));
    }


    // Fontion pour modifier un produit
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'image' => 'image',
            'nom' => 'required|string',
            'prix' => 'required|numeric',
            'description' => 'required|string',
        ]);

        $produit = Produit::findOrFail($id);
        $produit->category_id = $validatedData['category_id'];
        $produit->nom = $validatedData['nom'];
        $produit->prix = $validatedData['prix'];
        $produit->description = $validatedData['description'];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $produit->image = $imagePath;
        }

        $produit->save();

        return redirect('/admin/produits')->with('success', 'Le produit a été modifié avec succès !');
    }

    // Fonction pour supprimer un produit
    public function delete($id)
    {
        $produit = Produit ::find($id);

        if ($produit) {
            $produit->delete();
            return redirect('/admin/produits')->with('success', 'Le produit a bien été supprimé avec succès !');
        } else {
            return redirect('/admin/produits')->with('error', 'Produit non trouvé !');
        }
    }


    // Partie dashboard
    public function commande(){
        return view('admin.index', [
            'commandes' => Commande::all() // Utilisation de 'commandes' au lieu de 'commande' pour la variable dans la vue
        ]);
    }

    // Parie Commandes
    public function order(){
        return view('admin.commandes', [
            'commandes' => Commande::all() // Utilisation de 'commandes' au lieu de 'commande' pour la variable dans la vue
        ]);
    }

}
