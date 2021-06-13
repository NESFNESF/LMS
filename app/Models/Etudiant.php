<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $table = "etudiants";
    protected $fillable = [
        'nom ' ,'prenom' , 'date_de_naissance' , 'tel' , 'email' , 'login' , 'password' , 'photo'
    ];

    public function Etablissements()
    {
        return $this->belongsToMany(Etablissement::class,'EtablissementEtudiant','idEd','idE');
    }

    public function Classes()
    {
        return $this->belongsToMany(Classe::class,'classe_etudiants','idEd','idC');
    }
}
