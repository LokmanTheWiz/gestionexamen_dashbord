<?php
namespace App\Exports;
use App\Models\Etudiant;
use Maatwebsite\Excel\Concerns\FromCollection;

use Maatwebsite\Excel\Concerns\WithHeadings;
class EtudiantExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Etudiant::select("id","codeetudiant", "nom", "prenom","class")->get();
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return ["ID", "Codeetudiant", "Nom","Prenom","Class"];
    }
}