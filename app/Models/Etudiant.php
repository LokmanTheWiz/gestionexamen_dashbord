<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
<<<<<<< HEAD

=======
    protected $fillable = ['codeetudiant', 'nom','prenom', 'class','local_id', 'examen_id']; 

    /**
     * Get all of the comments for the Etudiant
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'foreign_key', 'local_key');
    }
>>>>>>> b79c77982e5e32facc9c428bad4bd6cd85956a26
}
