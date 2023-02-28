<?php

namespace App\Http\Controllers;

use App\Models\Professeur;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProfesseurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function checkEmailExists($email)
{
    $result = Professeur::where('email', $email)->exists();
    return $result;
}

    public function index()
    {
    $professeur = Professeur::all();
    return view('examen.professeur.index',[ 'professeur'=> $professeur]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('examen.professeur.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 


        $request->validate([
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'telephone' => 'required',
            'email' => 'required|email',
            
        ]);
        $professeur = new Professeur();

        // $professeur->nom = $request->input('nom');
        // $professeur->prenom = $request->input('prenom');
        // $professeur->telephone = $request->input('telephone');
        $professeur->email = $request->input('email'); // checkemailexists
        $checkEmailExists = $this->checkEmailExists($professeur->email);
        
        if ($checkEmailExists) {
            
            return redirect()->back()->with('error', 'The email already exists, please choose a different email.');
        }
        
        // code to create new record in the database with the provided name
        
        Professeur::create($request->post());
        return redirect('professeur');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Professeur $professeur)
    {
        // 
    }
    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Professeur $professeur)
    {
        return view('examen.professeur.edit', ['professeur' => $professeur]); 

    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Professeur $professeur)
    {
        
        $professeur->fill($request->post())->save(); 
        return redirect('/professeur');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Professeur $professeur)
    {

        $professeur->delete();
        return redirect('/professeur');
    }



}


