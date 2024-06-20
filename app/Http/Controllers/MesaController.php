<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use Illuminate\Http\Request;

use function Pest\version;

class MesaController extends Controller
{
    public function index(){

    }

    public function create(){
        return view('/Mesa.createMesa');
    }

    public function store(Request $request){
        $mesa = new Mesa();
        $mesa->numPersonas = $request->numPersonas;
        $mesa->save();
        return redirect()->route('menu2.index');
    }
}
