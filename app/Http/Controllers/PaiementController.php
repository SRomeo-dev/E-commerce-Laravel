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
        if ($request->has('paymentIntent')) {
            $this->store($request);
        }
        return "Merci pour votre commande ! Votre paiement a été traité avec succès. Le vendeur vous contactera bientôt.";
    }

    public function store(Request $request)
    {
        $data = $request->all();
    
        $commande = new Commande();
    
        // // Récupère l'ID de l'utilisateur connecté et l'assigne à la propriété 'user_id' de l'objet Commande
        // $userId = Auth::id(); // Assurez-vous que votre méthode d'authentification fonctionne correctement
        // $commande->user_id = $userId;
    
        // Affecte l'identifiant du paiement à la propriété 'payment_intent_id' de l'objet Commande
        $commande->payment_intent_id = $data['paymentIntent']['id'];
    
        // Affecte le montant du paiement à la propriété 'amount' de l'objet Commande
        $commande->amount = $data['paymentIntent']['amount'];
    
        // Convertit le timestamp du paiement en format 'Y-m-d H:i:s' et l'assigne à la propriété 'payment_created_at' de l'objet Commande
        $paymentTimestamp = $data['paymentIntent']['created'];
        $commande->payment_created_at = date('Y-m-d H:i:s', $paymentTimestamp);
    
        // Stocke les informations sur les produits dans une chaîne de caractères
        $productsString = '';
        $i = 0;
    
        foreach (Cart::content() as $produit) {
            $productsString .= "Product " . $i . ":\n";
            $productsString .= "Nom: " . $produit->model->nom . "\n";
            $productsString .= "Prix: " . $produit->model->prix . "\n";
            $productsString .= "Quantité: " . $produit->qty . "\n\n";
            $i++;
        }
    
        // Assigne la chaîne de caractères représentant les produits à la propriété 'products' de l'objet Commande
        $commande->products = $productsString;
        $commande->user_id =1;
    
        // Enregistre l'objet Commande dans la base de données
        $commande->save();
        Cart::destroy();
    }
        
}
