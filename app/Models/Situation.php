<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Situation extends Model
{
    use HasFactory;
    protected $table = "situations";
    protected $fillable = [
        'idL' ,'description'
    ];


    public function Lecons()
    {
        return $this->belongsTo(Lecon::class);
    }
}
