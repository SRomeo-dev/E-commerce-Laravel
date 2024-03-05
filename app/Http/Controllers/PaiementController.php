<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use DateTime;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaiementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
 
     public function session(Request $request)
     {
         \Stripe\Stripe::setApiKey(config('stripe.sk'));
     
         $cartItems = Cart::content(); // Récupération des éléments du panier

         $lineItems = [];
     
         foreach ($cartItems as $item) {
            // Calculer le montant total incluant les taxes en CFA
            $subtotal = $item->model->prix; // Montant sans les taxes
            $taxes = $subtotal * 0.01; // Calcul des taxes (1% du montant sans les taxes)
            $totalAmountCFA = ($subtotal + $taxes); // Conversion en centimes (ou en sous-unité)
        
            $lineItem = [
                'price_data' => [
                    'currency' => 'XOF',
                    'product_data' => [
                        'name' => $item->model->nom,
                    ],
                    'unit_amount' => (int) $totalAmountCFA, // Convertir en entier le montant total en CFA (centimes)
                ],
                'quantity' => 1,
            ];
        
            // Vérifier si l'ID du taux de taxe n'est pas vide
            if (!empty($item->model->tax_rate_id)) {
                $lineItem['tax_rates'] = [$item->model->tax_rate_id];
            }
        
            $lineItems[] = $lineItem;
        }
                                             
         $session = \Stripe\Checkout\Session::create([
             'payment_method_types' => ['card'],
             'line_items' => $lineItems,
             'mode' => 'payment',
             'success_url' => route('success'),
             'cancel_url' => route('checkout'),
         ]);
     
        return redirect()->away($session->url);
     }
     
     
     public function success(Request $request)
     {
         // Récupérez les informations de la commande après le paiement réussi
         $cartItems = Cart::content(); // Récupération des éléments du panier
         $totalAmount = 0; // Initialisation du montant total de la commande
         $products = ''; // Initialisation de la liste des produits de la commande
 
         foreach ($cartItems as $item) {
             $totalAmount += $item->model->prix; // Ajouter le prix de chaque article pour obtenir le montant total
             $products .= $item->model->nom . ', '; // Concaténer les noms des produits
         }
 
         $userName = Auth::user()->nom; // Obtenez le nom de l'utilisateur connecté
         $userLastName = Auth::user()->prenom; // Obtenez le prénom de l'utilisateur connecté
     
 
         // Enregistrez les détails de la commande dans la base de données
         $commande = new Commande();
         $commande->amount = $totalAmount;
         $commande->payment_created_at = now();
         $commande->products = $products;
         $commande->user_name = $userName; // Enregistrez le nom de l'utilisateur
         $commande->user_lastname = $userLastName; // Enregistrez le prénom de l'utilisateur
         $commande->save();
      
         return "Merci pour votre commande ! Votre paiement a été traité avec succès. Le vendeur vous contactera bientôt.";
     }
        
}
