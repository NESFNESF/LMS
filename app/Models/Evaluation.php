<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;
    protected $table = "evaluations";
    protected $fillable = [
        'idL' ,'description'
    ];

    public function Lecons()
    {
        return $this->belongsTo(Lecon::class);
    }

    public function QCMs()
    {
        return $this->hasMany(QCM::class);
    }

    public function VraiFauxs()
    {
        return $this->hasMany(VraiFaux::class);
    }
}
