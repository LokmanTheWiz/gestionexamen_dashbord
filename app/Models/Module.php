<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $fillable = ['matiere_id', 'nom']; 
    public function matiere()
    {
        return $this->hasMany(Matiere::class);
    }
    public function semestre()
    {
        return $this->belongsTo(Semestre::class);
    }
}
