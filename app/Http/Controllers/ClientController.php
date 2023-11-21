<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Cherger les donner 
        $clients = Client::all();

        $counter = 1;
        
        return view('clients.index', compact('clients', 'counter'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Appell du formuaire d'ajout
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation

        $request->validate([
            'nom_client' => 'required',
            'prenom_client' => 'required',
            'telephone_client' => 'unique:clients,telephone_client|max:13',
            'email_client' => 'unique:clients,telephone_client|max:50|email',
            'adresse_client' => 'required',
        ]);

        $client = new Client;

        $client->nom_client = $request->nom_client;
        $client->prenom_client = $request->prenom_client;
        $client->telephone_client = $request->telephone_client;
        $client->email_client = $request->email_client;
        $client->adresse_client = $request->adresse_client;

        $client->save();

        return redirect(route('clients'));
        
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
        // et by Id
        $client = Client::findOrfail($id);        
        // Applem du formulaire
        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validation

        $request->validate([
            'nom_client' => 'required',
            'prenom_client' => 'required',
            'telephone_client' => 'unique:clients,telephone_client|max:13',
            'email_client' => 'unique:clients,telephone_client|max:50|email',
            'adresse_client' => 'required',
        ]);

        $client = Client::findOrfail($id); 

        $client->nom_client = $request->get('nom_client');
        $client->prenom_client = $request->get('prenom_client');
        $client->telephone_client = $request->get('telephone_client');
        $client->email_client = $request->get('email_client');
        $client->adresse_client = $request->get('adresse_client');

        $client->save();

        return redirect()->route('clients.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Localiser Id
        $client = Client::find($id);
        $client->delete();
        return redirect()->route('produits.index')->with('success', 'Produit supprimé avec succès.');
    }
}