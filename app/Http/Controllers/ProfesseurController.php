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