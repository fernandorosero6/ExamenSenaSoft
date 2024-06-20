<?php

namespace App\Http\Controllers;

use App\Models\Plato;
use Illuminate\Http\Request;
use PhpParser\Node\Name\FullyQualified;

class PlatoController extends Controller
{
    public function create(){
        return view('/Plato.createPlato');
    }

    public function store(Request $request){
        $plato = new Plato();
        $plato->nombre = $request->nombre;
        $plato->descripcion = $request ->descripcion;
        $plato->save();
        return redirect()->route('menu.index');

    } 
}
