<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AdminUserController extends Controller
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
        return view('admin.clients', [
            'users' =>User::All(),
        ]);
    }

    public function ajouter(){
        return view('admin.client.add');
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
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nom' => ['required', 'string', 'min:2', 'max:255'],
            'prenom' => ['required', 'string', 'min:2', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        event(new Registered($user));
        
        return redirect('/admin/clients')->with('success', 'Le client à été bien ajouté avec succes !');
    }


     public function edit($id)
     {
         $user = User::findOrFail($id);
         return view('admin.client.edit', compact('user'));
     }
 
     public function update(Request $request, $id)
     {
        $user = User::findOrFail($id);
        $request->validate([
            'nom' => ['required', 'string', 'min:2', 'max:255'],
            'prenom' => ['required', 'string', 'min:2', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
        ]); 
         $user->nom = $request->nom;
         $user->prenom = $request->prenom;
         $user->email = $request->email;
 
         if ($request->filled('password')) {
             $user->password = Hash::make($request->password);
         }
 
         $user->save();
 
         return redirect('/admin/clients')->with('success', 'Le client a été bien modifié avec succès !');
     }         
    /**
     * Remove the specified resource from storage.
     */

    public function delete($id)
    {
        $user = User::find($id);
    
        if ($user) {
            $user->delete();
            return redirect('admin/clients')->with('success', 'Le client a bien été supprimé avec succès !');
        } else {
            return redirect('admin/clients')->with('error', 'Utilisateur non trouvé !');
        }
    }
    }
