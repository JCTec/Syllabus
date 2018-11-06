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

        $materias = Materia::select('*')->where(chr(239) . chr(187) . chr(191) .'CARRERA','=',$plan->codigo_plan)->orderBy('SEMESTRE')->orderBy('ASIGNATURA')->get();

        foreach ($materias as $p){

            $myPlan = json_decode($p, true);

            $competence = competencias_materias::where('Materia', '=', $myPlan["_id"])->get();

            $myPlan["COMPETENCIAS"] = $competence;

            array_push($toSend, json_encode($myPlan));
        }

        $nameMapa = S::create((string)json_decode($plan, true)["carrera"])->toTitleCase();

        return view('mapaDeEstudios')->with(['plan' => $plan, 'materias' => $toSend, 'nameMapa' => $nameMapa]);
    }

    public function dashboard()
    {
        $materias = Plan_De_Estudio::orderBy('division')->get();

        foreach ($materias as $materia) {
            $materia->carrera = ((string) S::create((string) $materia->carrera)->toTitleCase());
        }

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
