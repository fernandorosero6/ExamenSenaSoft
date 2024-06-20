<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Mesa;
use App\Models\Plato;
use Illuminate\Http\Request;

class MenuController extends Controller
{
   
//Disculparan mis estilos la vdd no es mi fuerte tengo que mejorarlos 


public function index(){
    $platos = Plato::all();
    $mesas = Mesa::all();
    $categorias = Categoria::all();
    return view('Menu.indexMenu', compact('mesas', 'platos', 'categorias'));
}

}
