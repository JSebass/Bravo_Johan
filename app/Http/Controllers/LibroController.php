<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class LibroController extends Controller
{
    //
    public function index(){
        // Consultar clientes con Eloquent
        $libros = DB::table('libro as lib')
                    ->join('editorial as edi', 'lib.editorial_fk', '=', 'edi.id')
                    ->get();
        return view('libro.listado',['libros' => $libros] );
    }
}
