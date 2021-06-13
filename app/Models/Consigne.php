<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consigne extends Model
{
    use HasFactory;
    protected $table = "consignes";
    protected $fillable = [
        'idL' ,'question' ,'qcm1' ,'qcm2' ,'qcm3','reponse'
    ];


    public function Lecons()
    {
        return $this->belongsTo(Lecon::class);
    }
}
