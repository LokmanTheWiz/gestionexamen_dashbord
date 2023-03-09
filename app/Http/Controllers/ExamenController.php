<?php

namespace App\Http\Controllers;

use App\Models\Examen;
use App\Models\Matiere;
use Illuminate\Http\Request;


class ExamenController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); 
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $examen = Examen::all();
        return view('examen.examens.index',[ 'examan'=> $examen]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $matiere = Matiere::all();
        return view('examen.examens.create',['matiere'=>$matiere]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Examen::create($request->post()); 
        return redirect('examen');
    }

    /**
     * Display the specified resource.
     */
    public function show(Examen $examen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Examen $examen)
    {
        $matiere = Matiere::all();
        return view('examen.examens.edit', ['examan' => $examen,'matiere'=>$matiere]); 

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Examen $examen)
    {
        $examen->fill($request->post())->save(); 
        return redirect('/examen');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Examen $examen)
    {
        $examen->delete();
        return redirect('/examen');
    }
}
