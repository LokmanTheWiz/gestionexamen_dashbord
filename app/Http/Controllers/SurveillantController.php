<?php

namespace App\Http\Controllers;

use App\Models\Surveillant;
use App\Models\Local;
use App\Models\Matiere;
use Illuminate\Http\Request;


class SurveillantController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); 
    }
    /**
     * Display a listing of the resource.
     */
    public function checkEmailExists($email)
    {
        $result = Surveillant::where('email', $email)->exists();
        return $result;
    }
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
        $request->validate([
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'telephone' => 'required',
            'email' => 'required|email',
            
        ]);
        $surveillant = new Surveillant();

        // $professeur->nom = $request->input('nom');
        // $professeur->prenom = $request->input('prenom');
        // $professeur->telephone = $request->input('telephone');
        $surveillant->email = $request->input('email'); // checkemailexists
        $checkEmailExists = $this->checkEmailExists($surveillant->email);
        
        if ($checkEmailExists) {
            
            return redirect()->back()->with('error', 'The email already exists, please choose a different email.');
        }
        
        // code to create new record in the database with the provided name
        
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
