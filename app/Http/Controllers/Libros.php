<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class Libros extends Controller
{
    public function index()
    {
        $libros=Libro::all();
        return response()->view('oai', [
            'libros' => $libros,
        ])->header('Content-Type', 'text/xml');
    }
}
