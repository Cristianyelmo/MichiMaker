<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expresion extends Model
{
    use HasFactory;

    public function gatos(){
        return $this->belongsToMany(Gato::class);
    }

    public function accesorio(){
        return $this->belongsTo(Accesorio::class);
    }
    protected $fillable = ['accesorio_id'];
}
