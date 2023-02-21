<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    use HasFactory;
    protected $fillable = ['anneescolaire', 'semestre','module_id']; 
    public function module()
    {
        return $this->hasMany(Module::class);
    }
    public function etudiant()
    {
        return $this->hasMany(Etudiant::class);
    }
}
