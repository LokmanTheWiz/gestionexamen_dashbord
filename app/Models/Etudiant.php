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
        return $this->belongsTo(Local::class,'local_id');
    }
    #khassni nteakkd b hadii wach hassmny wala belongsTo
    public function examen()#hasMany
    {
        return $this->belongsTo(Examen::class,'examen_id');
    }
    public function semestre()
    {
        return $this->belongsTo(Semestre::class,'semestre_id');
    }

}