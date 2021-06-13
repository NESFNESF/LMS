<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtablissementEtudiant extends Model
{
    use HasFactory;
    protected $table = "etablissement_etudiants";

    protected $fillable = [
        'idE ' ,'idEd'
    ];
}
