<?php

namespace App\Http\Controllers;

use App\Models\Ordene;
use Illuminate\Http\Request;

class OrdeneController extends Controller
{
    public function index(){
        return view('/Ordenes.crearOrdenes');
    }

    public function store(Request $request){
        // $ordenes = new Ordene();
        // $ordenes->mesa_id = $request->mesa_id;
        // $ordenes->plato_id = $request->plato_id;
        // $ordenes->categoria_id = $request->categoria_id;
        // $ordenes->save();
        return "hasta aqui llegue ;)";
    }
}
