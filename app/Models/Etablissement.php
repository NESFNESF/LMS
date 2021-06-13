<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    use HasFactory;
  //  protected $table = "etablissements";

   protected $fillable = [
    'nom','Description','infoline','ville','quartier','pays','nombre_etudiant','nombre_classe','image'
    ];

    public function Administrateurs()
    {
        return $this->hasMany(Administrateur::class);
    }

    public function Etudiants()
    {
        return $this->belongsToMany(Etudiant::class,'etablissement_etudiants','idE','idEd');
    }

    public function Matieres()
    {
        return $this->belongsToMany(Matiere::class,'etablissement_matieres','idE','idM');
    }

    public function Classes()
    {
        return $this->belongsToMany(Classe::class,'etablissement_classes','idE','idC');
    }
    public function Enseignants()
    {
        return $this->belongsToMany(Enseignant::class,'etablissement_enseignants','idE','idEn');
    }
}
