<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    // public function mesa(){
    //     return $this->belongsTo(Menu::class);
    // }

    public function mesas(){
        return $this->hasMany(Mesa::class);
    }


    public function platos(){
        return $this->hasMany(Plato::class);

    }

    public function categorias(){
        return $this->hasMany(Categoria::class);
    }

}
