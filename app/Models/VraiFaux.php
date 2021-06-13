<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VraiFaux extends Model
{
    use HasFactory;
    protected $table = "vrai_fauxes";
    protected $fillable = [
        'idEv' ,'question','reponse'
    ];


    public function evaluation()
    {
        return $this->belongsTo(Evaluation::class);
    }
}
