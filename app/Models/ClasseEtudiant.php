<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClasseEtudiant extends Model
{
    use HasFactory;
    protected $table = "classe_etudiants";
    protected $fillable = [
        'idC ' ,'idEd'
    ];
}
