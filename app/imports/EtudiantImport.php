<?php
namespace App\Imports;
use App\Models\Etudiant;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Hash;
class EtudiantImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'codeetudiant'     => $row['codeetudiant'],
            'nom'     => $row['nom'],
            'prenom'     => $row['prenom'],
            'class'     => $row['class'],
            'semestre_id'     => $row['semestre_id'],
            'examen_id'     => $row['examen_id'],
            'local_id'     => $row['local_id'],
            'module_no_valider'     => $row['module_no_valider'],
        
        ]);
    }
}