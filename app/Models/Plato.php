<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
    use HasFactory;

        public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function mesa(){
        return $this->belongsTo(Mesa::class);
    }

    public function menu2(){
        return $this->belongsTo(Menu2::class);
    }
}
