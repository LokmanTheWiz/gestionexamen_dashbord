<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    use HasFactory;
    protected $fillable = ['matiere_id','libelle', 'dateexamen','tempexamen','semestre_id','module_id','professeur_id','surveillant_id','local_id']; 
    protected $casts = [
        'surveillant_id' => 'array',
    ];
    public function matiere()
    {
        return $this->belongsTo(Matiere::class,'matiere_id');
    }
    public function surveillant()
    {
        return $this->hasMany(Surveillant::class);
    }
    public function etudiant()
    {
        return $this->hasMany(Etudiant::class);
    }
    public function local()
    {
        return $this->belongsToMany(Local::class);
    }
    public function semestre()
    {
        return $this->belongsTo(semestre::class);
    }
    public function professeur()
    {
        return $this->hasMany(Professeur::class);
    }

}
