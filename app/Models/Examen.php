<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    use HasFactory;
    protected $fillable = ['matiere_id', 'dateexamen']; 

    public function matiere()
    {
        return $this->hasMany(Matiere::class);
    }
    public function surveillent()
    {
        return $this->hasMany(Surveillent::class);
    }
    public function etudiant()
    {
        return $this->hasMany(Etudiant::class);
    }
    public function local()
    {
        return $this->belongsToMany(Local::class);
    }

}
