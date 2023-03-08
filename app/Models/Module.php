<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $fillable = [ 'nom','semestre_id']; 
    public function matiere()
    {
        return $this->hasMany(Matiere::class,'matiere_id');
    }
    public function semestre()
    {
        return $this->belongsTo(Semestre::class);
    }
}
