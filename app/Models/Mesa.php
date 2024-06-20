<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    use HasFactory;

    public function menu(){
        return $this->belongsTo(Menu::class);
    }

    public function ordenes(){
        return $this->hasMany(Ordene::class);
    }

    public function menu2(){
        return $this->belongsTo(Menu::class);
    }
}
