<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Charger les prosuits
        $produits = Produit::all();
        $counter = 1;

        /* Afficher les prosuits dans index */
        return view('produits.index', compact('produits', 'counter'));
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
        // Validation
        $request->validate([
            'designation_produit' => 'required|alpha_num|',
            'description_produit' => 'alpha_num|min:2|max:100',
            'datedexpiration_produit' => 'date|after:tomorrow',
            'prix' => 'required_produit',
        ]);

        // Création d'une nouvelle instance
        $produit = Produit::create($request->all());

        // Créeer et en régister dans la DB
        
        /* Retour vers l'index */
        return redirect('produits.index')->with('success', 'Produit enrégistré !');
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
        // Validation
        $request->validate([
            'designation_produit' => 'required|alpha_num|',
            'description_produit' => 'alpha_num|min:2|max:100',
            'datedexpiration_produit' => 'date|after:tomorrow',
            'prix' => 'required_produit',
        ]);

        // Selectionner l'élément par son Id
        $produit = Produit::findOrFail($id);

        // Mettre à jour
        $produit->update($request->all()); 
        
        /* Retour vers l'index */
        return redirect('clients.index')->with('success', 'Produit Modifié !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Selectionner l'élément par son Id
        $produit = Produit::findOrFail($id);

        // Delete
        $produit->delete();

        /* Retour vers l'index */
        return redirect('clients.index')->with('success', 'Produit supprimé !');
    }
}