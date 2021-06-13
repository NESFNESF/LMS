<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objectif extends Model
{
    use HasFactory;
    protected $table = "objectifs";
    protected $fillable = [
        'idL' ,'description'
    ];



    public function Lecons()
    {
        return $this->belongsTo(Lecon::class);
    }
}
