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

    public function dashboard()
    {
        $materias = Materia::orderBy('division')->get();

        $bloques = [];

        $temp = [];

        $last = $materias[0]->division;

        foreach ($materias as $materia){
            if($last != $materia->division){
                array_push($bloques, $temp);

                $temp = [];

                $last = $materia->division;

                array_push($temp, $materia);
            }else{
                array_push($temp, $materia);
            }
        }

        return view('dashboard')->with(['bloques' => $bloques]);
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
