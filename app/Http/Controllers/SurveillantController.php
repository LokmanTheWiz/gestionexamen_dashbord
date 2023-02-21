<?php

namespace App\Http\Controllers;

use App\Models\Surveillant;
use App\Models\Local;
use App\Models\Matiere;
use Illuminate\Http\Request;


class SurveillantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        $surveillant = Surveillant::all();
        return view('examen.surveillant.index',[ 'surveillant'=> $surveillant]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() 
    {
        $local =  Local::all();
        $matiere = Matiere::all();
        return view('examen.surveillant.create',['local'=>$local,'matiere'=>$matiere]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        surveillant::create($request->post()); 
        return redirect('surveillant');
    }

    /**
     * Display the specified resource.
     */
    public function show(Surveillant $surveillant) 
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Surveillant $surveillant)
    {
        $local =  Local::all();
        $matiere = Matiere::all();
        return view('examen.surveillant.edit', ['surveillant' => $surveillant,'local'=>$local,'matiere'=>$matiere]); 

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Surveillant $surveillant)
    {
        $surveillant->fill($request->post())->save(); 
        return redirect('/surveillant');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Surveillant $surveillant)
    {
        $surveillant->delete();
        return redirect('/surveillant');
    }
}
