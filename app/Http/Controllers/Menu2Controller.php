<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Mesa;
use App\Models\Plato;
use Illuminate\Http\Request;

class Menu2Controller extends Controller
{
    public function index(){
        $platos = Plato::all();
        $mesas = Mesa::all();
        $categorias = Categoria::all();
        return view('Menu2.indexMenu', compact('mesas', 'platos', 'categorias'));
    }

}
