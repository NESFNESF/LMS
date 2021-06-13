<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatiereEnseignant extends Model
{
    use HasFactory;
    protected $table = "matiere_enseignants";
    protected $fillable = [
        'idEn ' ,'idM'
    ];
}
