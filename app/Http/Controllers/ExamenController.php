<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Examen;
use App\Models\Local;
use App\Models\Module;
use App\Models\Matiere;
use App\Models\Professeur;
use App\Models\Surveillant;
use App\Models\Semestre;
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
        $names = DB::table('professeurs')
            ->select('nom as prof_name')
            ->union(DB::table('surveillants')
                    ->select('nom as surv_name'))
            ->get();
        $matiere = Matiere::all();
        $local= Local::all();
        $semestre = Semestre::all();
        $professors = Professeur::all();
        return view('examen.examens.create',compact('matiere','semestre','professors','names','local'));
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $libelle = $request->libelle;
        $dateexamen = $request->dateexamen;
        $tempexamen = $request->tempexamen;
        $semestre_id = $request->semestre_id;
        $module_id = $request->module_id;
        $matiere_id = $request->matiere_id;
        $local_id = $request->local_id;
        $surveillant_id = $request->surveillant_id;
        // for ($i=0; $i< 4; $i++) {
        //     $my_data = [
        //         'libelle' => $libelle,
        //         'dateexamen' => $dateexamen,
        //         'tempexamen' => $tempexamen,
        //         'semestre_id' => $semestre_id,
        //         'module_id' => $module_id,
        //         'matiere_id' => $matiere_id,
        //         'local_id' => $local_id,
        //         'surveillant_id' => $surveillant_id[$i]
        //     ];
        //     DB::table('examens')->insert($my_data);
        // }

            $data = [];
            foreach($surveillant_id as $surveillant_id) {
                $data[] = [
                    'libelle' => $libelle,
                    'dateexamen' => $dateexamen,
                    'tempexamen' => $tempexamen,
                    'semestre_id' => $semestre_id,
                    'module_id' => $module_id,
                    'matiere_id' => $matiere_id,
                    'local_id' => $local_id,
                    'surveillant_id' => $surveillant_id
                ];
                Examen::insert($data);
    }

        
        // You can now access the surveillant_ids using $my_data['surveillant_ids']
        
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
