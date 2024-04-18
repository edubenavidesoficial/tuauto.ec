<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universidad;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }
    
    public function showUniversidades()
   {
        $universidades = Universidad::all(); // Recupera todos los registros de la tabla universidades

        return view('web.programas_a', ['universidades' => $universidades]); // Pasa los datos a la vista
    }
}
