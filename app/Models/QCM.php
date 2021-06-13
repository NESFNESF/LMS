<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QCM extends Model
{
    use HasFactory;
    protected $table = "q_c_m_s";
    protected $fillable = [
        'idEv' ,'question' ,'qcm1' ,'qcm2' ,'qcm3','reponse'
    ];


    public function evaluation()
    {
        return $this->belongsTo(Evaluation::class);
    }
}
