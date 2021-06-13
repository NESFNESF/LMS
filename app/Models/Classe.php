<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    protected $table = "classes";

    protected $fillable = [
        'nom ' ,'Description' , 'nombre_etudiant' , 'nombre_classe'
    ];
    public function Etudiants()
    {
        return $this->belongsToMany(Etudiant::class,'classe_etudiants','idC','idEd');
    }

    public function Etablissements()
    {
        return $this->belongsToMany(Etablissement::class,'EtablissementClasse');
    }

    public function Matieres()
    {
        return $this->belongsToMany(Matiere::class,'classe_matieres','idC','idM');
    }

    public function Enseignants()
    {
        return $this->belongsToMany(Enseignant::class,'classe_enseignants','idC','idEn');
    }
}
