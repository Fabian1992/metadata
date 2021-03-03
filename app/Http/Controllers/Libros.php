<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class Libros extends Controller
{
    public function index(Request $request)
    {
        $libros=Libro::all();
        $ve=$request->get('verb');
        
        if($ve=="Identify" ){
            
            return response()->view('oai', [
                'libros' => $libros,
            ])->header('Content-Type', 'text/xml');
        }
        if($ve=="ListSets"){
            return response()->view('ListSets')->header('Content-Type', 'text/xml');
        }
        return response()->view('oai', [
            'libros' => $libros,
        ])->header('Content-Type', 'text/xml');
    }

    public function style()
    {
        return response()->view('lib/oai2')->header('Content-Type', 'text/sxl');
    }
}
