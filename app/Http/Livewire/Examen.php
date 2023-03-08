<?php

namespace App\Http\Livewire;
use App\Models\Semestre;
use App\Models\Matiere;
use App\Models\Module;

use Livewire\Component;

class Examen extends Component
{
    public $semestre;
    public $module;
    public $matiere;

    public $selectedSemestre = NULL;
    public $selectedModule = NULL;
    public $selectedMatiere = null;

    public function mount($selectedMatiere = null){
        $this->semestre = Semestre::all();
        $this->module = collect();
        $this->matiere = collect();
        $this->selectedMatiere = $selectedMatiere;
        if (!is_null($selectedMatiere)) {
            $matiere = Matiere::with('semestre.module')->find($selectedMatiere);
            if ($matiere) {
                $this->matiere = Matiere::where('module_id', $matiere->module_id)->get();
                $this->module = Module::where('semestre_id', $matiere->module->semestre_id)->get();
                $this->selectedSemestre = $matiere->module->semestre_id;
                $this->selectedModule = $matiere->module_id;
            }
        }
    }

    public function render(){
        return view('livewire.examen');
    }

    public function updatedSelectedSemestre($semestre)
    {
        $this->module = Module::where('semestre_id', $semestre)->get();
        $this->selectedModule = NULL;
    }

    public function updatedSelectedModule($module)
    {
        if (!is_null($module)) {
            $this->matiere = Matiere::where('module_id', $module)->get();
        }
    }
}
