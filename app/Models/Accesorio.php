<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accesorio extends Model
{
    use HasFactory;

    public function color(){
        return $this->belongsTo(Color::class);
    }

    public function expresion(){
        return $this->belongsTo(Expresion::class);
    }
    public function sombrero(){
        return $this->belongsTo(Sombrero::class);
    }

    public function gafa(){
        return $this->belongsTo(Gafa::class);
    }


    public function camiseta(){
        return $this->belongsTo(Camiseta::class);
    }

    protected $fillable = ['nombre','image'];
}
