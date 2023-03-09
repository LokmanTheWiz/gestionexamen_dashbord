<?php

namespace App\Http\Controllers;

use App\Models\Local;
use App\Models\Examen;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LocalController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); 
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $local = Local::all();
        return view('examen.local.index',[ 'local'=> $local]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $examen = Examen::all();
        return view('examen.local.create',['examen'=>$examen]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Local::create($request->post()); 
        
        return redirect('local');
    }

    /**
     * Display the specified resource.
     */
    public function show(Local $local)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Local $local)
    {
        $examen = Examen::all();
        return view('examen.local.edit', ['local' => $local,'examen'=>$examen]); 

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Local $local)
    {
        $local->fill($request->post())->save(); 
        return redirect('local');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Local $local)
    {
        $local->delete();
        return redirect('/local');
    }
}
