<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function paciente(){
        return $this->belongsTo(Paciente::class);
    }

    public function medico(){
        return $this->belongsTo(User::class,'medico_id','id');
    }
}
