<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClasseEnseignant extends Model
{
    use HasFactory;
    protected $table = "classe_enseignants";
    protected $fillable = [
        'idEn ' ,'idC'
    ];
}
