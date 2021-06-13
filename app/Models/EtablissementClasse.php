<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtablissementClasse extends Model
{
    use HasFactory;
    protected $table = "etablissement_classes";
    protected $fillable = [
        'idE' ,'idC'
    ];
}
