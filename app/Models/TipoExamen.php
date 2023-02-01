<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoExamen extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function campos(){
        return $this->hasMany(Campo::class);
    }
}
