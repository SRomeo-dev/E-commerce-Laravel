<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class AccueilController extends Controller
{

    public function accueil(){
        return view('Accueil');
    }

}
