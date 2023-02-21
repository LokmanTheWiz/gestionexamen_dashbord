<?php

namespace App\Http\Controllers;

use App\Models\Professeur;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProfesseurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Professeur $professeur): Response
    {
            $professeur = Professeur::paginate(6);
            return response()->view('examen.professeur.index', compact('professeur'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        return response()->view('examen.professeur.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
            $request->validate([
                'nom' =>'required',
                'prenom' =>'required',
                'email' =>'required',
                'telephone' =>'required',
            ]);
            Professeur::create($request->post());
            return redirect()->route('professeure.index')->with('message','ajout de professeure avec succes');
        }

    /**
     * Display the specified resource.
     */
    public function show(Professeur $professeur): Response
    {
        echo 'hii';
        exit;
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Professeur $professeur,$id): Response
    {
        $professeur = Professeur::find($id);
        return response()->view('examen.professeur.edit', compact('professeur'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Professeur $professeur): RedirectResponse
    {
        $professeur->fill($request->post())->save(); 
        return redirect()->route('professeure.index')->with('notice','The modification has been made');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Professeur $professeur): RedirectResponse
    {
        $professeur->delete(); 
        // return redirect()->route('clients.index')->withSuccess('Student data has been deleted succesfuly'); 
        return redirect()->route('professeure.index')->with('success','La suppression et affectue avec succes');     }
}
