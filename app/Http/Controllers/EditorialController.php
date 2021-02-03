<?php

namespace App\Http\Controllers;
use App\Models\Editorial;

use Illuminate\Http\Request;

class EditorialController extends Controller
{
    //
    public function index(){    

        // Consulta a traves de Modelos
        $editorial = Editorial::all();
        return view('editorial.listadoeditorial', ['editorial' => $editorial]);   
    }
    public function form_registro()  {
        return view('editorial.form_registro');
    }
    public function registrar(Request $request) {
        $edi = new Editorial();
        $edi->nombre = $request->input('nombre');
        $edi->direccion = $request->input('direccion');
        $edi->telefono = $request->input('telefono');
        $edi->ciudad = $request->input('ciudad');
        $edi->save();
        return redirect()->route('listado_editorial');
    }

}
