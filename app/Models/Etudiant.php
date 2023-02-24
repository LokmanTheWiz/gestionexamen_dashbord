<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable = ['codeetudiant', 'nom','prenom', 'class','local_id', 'examen_id','semestre_id']; 
    public function local()
    {
        return $this->belongsTo(Local::class);
    }
    public function examen()
    {
        return $this->hasMany(Examen::class);
    }
    public function semestre()
    {
        return $this->belongsTo(Semestre::class);
    }

}