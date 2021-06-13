<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trace extends Model
{
    use HasFactory;
    protected $table = "traces";
    protected $fillable = [
        'idL' ,'titre' , 'lien'
    ];


    public function Lecons()
    {
        return $this->belongsTo(Lecon::class);
    }
}
