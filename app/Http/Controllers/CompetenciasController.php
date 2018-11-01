<?php

namespace App\Http\Controllers;

use App\Competencia;
use App\competencias_materias;
use App\Materia;
use Illuminate\Http\Request;

class CompetenciasController extends Controller
{

    public function setCState(){

        if(request()->has('id') && request()->has('competencia') && request()->has('value')){

            $idToLook = request()->get('id');

            $materiaX = Materia::findOrFail($idToLook);

            $competencias = request()->get('competencia');

            if($competencias == 1){
                $toLook = "C1";
            }else if ($competencias == 2){
                $toLook = "C2";
            }else if ($competencias == 3){
                $toLook = "C3";
            }else if ($competencias == 4){
                $toLook = "C4";
            }else if ($competencias == 5){
                $toLook = "C5";
            }else if ($competencias == 6){
                $toLook = "C6";
            }else if ($competencias == 7){
                $toLook = "C7";
            }else if ($competencias == 8){
                $toLook = "C8";
            }else if ($competencias == 9){
                $toLook = "C9";
            }else if ($competencias == 10){
                $toLook = "C10";
            }else{
                return response()->json(['message' => 'Number not supported'], 500);
            }

            $competence = competencias_materias::where('Materia','=', $idToLook)->where('Competencia', '=', $toLook)->first();

            if($competence){
                $competence->Value = (int) request()->get('value');

                $competence->save();
            }else{
                $c = new competencias_materias();

                $c->Materia = $idToLook;
                $c->Competencia = $toLook;
                $c->Value = (int) request()->get('value');

                $c->save();
            }

            return response()->json(['status' => 'Success']);
        }else{
            return response()->json(['message' => 'Error'], 500);
        }
    }

}
