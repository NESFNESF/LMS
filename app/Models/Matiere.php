<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;
    protected $table = "matieres";

    protected $fillable = [
        'nom ' ,'Description' , 'coef'
    ];

    public function Etablissements()
    {
        return $this->belongsToMany(Etablissement::class,'EtablissementMatiere');
    }

    public function Classes()
    {
        return $this->belongsToMany(Classe::class,'classe_matieres','idM','idC');
    }

    public function Enseignants()
    {
        return $this->belongsToMany(Enseignant::class,'MatiereEnseignat','idM','idEn');
    }

    public function Lecons()
    {
        return $this->belongsToMany(Lecon::class,'matiere_lecons','idM','idL');
    }
}
