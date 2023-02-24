<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professeur extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenom','email', 'telephone']; 
    public function matiere()
    {
        return $this->hasMany(Matiere::class);
    }
    public function surveillant()
    {
        return $this->hasMany(Surveillant::class);
    }

}
