<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObjectifEvaluation extends Model
{
    use HasFactory;
    protected $table = "objectif_evaluations";
    protected $fillable = [
        'idL' ,'description'
    ];
}
