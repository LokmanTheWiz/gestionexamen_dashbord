<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Semestre;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ModuleController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); 
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $module = Module::all();
        return view('examen.module.index',[ 'module'=> $module]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $semestre = Semestre::all();
        return view('examen.module.create',['semestre'=>$semestre]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Module::create($request->post()); 
        return redirect('module');
    }

    /**
     * Display the specified resource.
     */
    public function show(Module $module)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Module $module)
    {
        $semestre = Semestre::all();
        return view('examen.module.edit', ['module' => $module,'semestre'=>$semestre]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Module $module)
    {
        $module->fill($request->post())->save(); 
        return redirect('/module');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Module $module)
    {
        $module->delete();
        return redirect('/module');
    }
}
