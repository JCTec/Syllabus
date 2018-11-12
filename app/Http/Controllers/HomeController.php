<?php

namespace App\Http\Controllers;

use App\competencias_materias;
use App\Materia;
use App\Plan_De_Estudio;
use Illuminate\Http\Request;
use Stringy\Stringy as S;

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

    public function mapaDeEstudios($id)
    {
        $plan = Plan_De_Estudio::where('_id','=',$id)->first();

        if($plan == null){
            return redirect()->back();
        }

        $toSend = [];

        $materias = Materia::select('*')->where('CARRERA','=',$plan->CODIGO_PLAN)->orderBy('SEMESTRE')->orderBy('ASIGNATURA')->get();

        foreach ($materias as $p){

            $myPlan = json_decode($p, true);

            $competence = competencias_materias::where('Materia', '=', $myPlan["_id"])->get();

            $myPlan["COMPETENCIAS"] = $competence;

            array_push($toSend, json_encode($myPlan));
        }

        $nameMapa = (string)json_decode($plan, true)["CARRERA"];

        return view('mapaDeEstudios')->with(['plan' => $plan, 'materias' => $toSend, 'nameMapa' => $nameMapa]);
    }

    public function dashboard()
    {
        $materias = Plan_De_Estudio::orderBy('DIVISION')->get();

        $bloques = [];

        $temp = [];

        $last = "$$";

        foreach ($materias as $materia){

            if($last != $materia->division){

                if($last != "$$"){
                    array_push($bloques, $temp);
                }

                $temp = [];

                $last = $materia->division;

                array_push($temp, $materia);
            }else{
                array_push($temp, $materia);
            }
        }

        array_push($bloques, $temp);

        return view('dashboard')->with(['bloques' => $bloques]);
    }

}
