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
        
        return view('clients.index', compact('clients'));
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

        /* $this->validate([
            'nom_client' => 'max:50|required',
        ]); */

        $client = new Client;

        $client->nom_client = $request->nom_client;
        $client->prenom_client = $request->prenom_client;
        $client->telephone_client = $request->telephone_client;
        $client->email_client = $request->email_client;
        $client->adresse_client = $request->adresse_client;

        $client->save();

        return redirect('clients');
        
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
    public function destroy(string $id)
    {
        // Localiser Id
        $client = Client::find($id);
        $client->delete();
    }
}