<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordene extends Model
{
    use HasFactory;
    

    public function mesa(){
        return $this->belongsTo(Mesa::class);
    }
}
