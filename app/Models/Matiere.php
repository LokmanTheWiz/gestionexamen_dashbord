<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;
    protected $fillable = ['professeur_id', 'nom']; 

    public function professeur()
    {
        return $this->hasMany(Professeur::class);
    }
    public function examen()
    {
        return $this->belongsTo(Examen::class);
    }
    public function module()
    {
        return $this->belongsTo(Module::class);
    }

}
