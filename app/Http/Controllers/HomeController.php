<?php

namespace App\Http\Controllers;

use App\Materia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function mapaDeEstudios()
    {
        return view('mapaDeEstudios');
    }

    public function test(){
        return Materia::all();
    }

    public function crearPlanDeEstudios()
    {
        $materias = Materia::select('*')->get();


        return view('crearPlanDeEstudios')->with(['materias' => $materias]);
    }
}
