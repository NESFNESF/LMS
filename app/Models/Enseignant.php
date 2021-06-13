<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    use HasFactory;
    protected $table = "enseignants";

    protected $fillable = [
        'nom ' ,'prenom' , 'date_de_naissance' , 'tel' , 'email' , 'login' , 'password' , 'photo'
    ];

    public function Matieres()
    {
        return $this->belongsToMany(Matiere::class,'matiere_enseignants','idEn','idM');
    }

    public function Classes()
    {
        return $this->belongsToMany(Classe::class,'classe_enseignants','idEn','idC');
    }
    public function Etablissements()
    {
        return $this->belongsToMany(Etablissement::class,'etablissement_enseignants','idEn','idE');
    }
}
