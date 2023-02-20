<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere_professeure extends Model
{
    use HasFactory;
    protected $fillable = ['professeur_id', 'matiere_id']; 

}
