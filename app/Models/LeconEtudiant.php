<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeconEtudiant extends Model
{
    use HasFactory;
    protected $table = "lecon_etudiants";

    protected $fillable = [
        'idL' ,'idEd'
    ];
}
