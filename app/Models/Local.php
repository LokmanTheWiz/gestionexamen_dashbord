<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;
    protected $fillable = ['examen_id', 'departement','libelle']; 
    public function examen()
    {
        return $this->belongsTo(Examen::class,'examen_id');
    }
    public function etudiant()
    {
        return $this->hasMany(Etudiant::class);
    }

}
