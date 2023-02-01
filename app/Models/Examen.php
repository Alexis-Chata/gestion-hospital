<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function texamen(){
        return $this->belongsTo(Tipoexamen::class);
    }

    public function paciente(){
        return $this->belongsTo(Paciente::class);
    }

    public function medico(){
        return $this->belongsTo(User::class,'medico_id','id');
    }

    public function ecdatos(){
        return $this->hasMany(Ecdato::class);
    }
}
