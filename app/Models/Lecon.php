<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecon extends Model
{
    use HasFactory;
    protected $table = "lecons";
    protected $fillable = [
        'titre'
    ];


    public function Objectifs()
    {
        return $this->hasMany(Objectif::class);
    }

    public function Indicateurs()
    {
        return $this->hasMany(Indicateur::class);
    }

    public function Situations()
    {
        return $this->hasMany(Situation::class);
    }

    public function Consignes()
    {
        return $this->hasMany(Consigne::class);
    }

    public function Traces()
    {
        return $this->hasMany(Trace::class);
    }

    public function Evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }

    public function Matieres()
    {
        return $this->belongsToMany(Matiere::class,'matiere_lecons','idL','idM');
    }
}
