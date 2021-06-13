<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtablissementEnseignant extends Model
{
    use HasFactory;
    protected $table = "etablissement_enseignants";
    protected $fillable = [
        'idE' ,'idEn'
    ];
}
