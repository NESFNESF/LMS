<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrateur extends Model
{
    use HasFactory;
    protected $table = "administrateurs"; 
    protected $fillable = [
        'nom ' ,'prenom' , 'date_de_naissance' , 'tel' , 'email' , 'login' , 'password' , 'photo','type_user','idE'
    ];




    public function etablissement()
    {
        return $this->belongsTo(Etablissement::class);
    }
}
