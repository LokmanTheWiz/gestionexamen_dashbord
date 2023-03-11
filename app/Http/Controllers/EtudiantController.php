<?php

namespace App\Http\Controllers;
use App\Exports\EtudiantExport;
use App\Imports\EtudiantImport;
use Maatwebsite\Excel\Facades\Excel;

use App\Models\Etudiant;
use App\Models\Local;
use App\Models\Examen;
use App\Models\Semestre;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); 
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
    $etudiant = Etudiant::with('semestre')->when($request->semestre_id, 
    function ($query, $semestre_id) {
        return $query->where('semestre_id', $semestre_id);
    })->get();
    $semestres = Semestre::all();

    return view('examen.etudiant.index', compact('etudiant', 'semestres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $local =  Local::all();
        $semestre = Semestre::all();
        $examen = Examen::all();
        return view('examen.etudiant.create',['local'=>$local,'examen'=>$examen,'semestre'=>$semestre]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Etudiant::create($request->post()); 
        
        return redirect('etudiant');
    }

    /**
     * Display the specified resource.
     */
    public function show(Etudiant $etudiant)
    {
        return view('examen.etudiant.show', ['etudiant' => $etudiant]); 

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etudiant $etudiant)
    {
        $local =  Local::all();
        // $semestre = Semestre::all();
        $examen = Examen::all();
        return view('examen.etudiant.edit', ['etudiant' => $etudiant,'local'=>$local,'examen'=>$examen]); 

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        
        $etudiant->fill($request->post())->save(); 
        return redirect('/etudiant');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();
        return redirect('/etudiant');
    }
    public function export() 
    {
        return Excel::download(new EtudiantExport, 'Etudiant.xlsx');
    }
       
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new EtudiantImport,request()->file('file'));
        return back();
    }

}
