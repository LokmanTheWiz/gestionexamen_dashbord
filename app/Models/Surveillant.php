<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surveillant extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenom','email', 'telephone','local_id', 'matiere_id']; 

    function examen()
    {
        return $this->hasMany(Examen::class);
    }
}
