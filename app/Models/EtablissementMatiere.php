<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtablissementMatiere extends Model
{
    use HasFactory;
    protected $table = "etablissement_matieres";
    protected $fillable = [
        'idE' ,'idM'
    ];
}
