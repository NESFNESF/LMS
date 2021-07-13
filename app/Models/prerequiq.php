<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prerequiq extends Model
{
     use HasFactory;
    protected $table = "prerequiqs";
    protected $fillable = [
        'idL' ,'question' ,'qcm1' ,'qcm2' ,'qcm3','reponse'
    ];
  
}
