<?php

namespace App\Http\Controllers;

use App\Competencia;
use App\Materia;
use Illuminate\Http\Request;

class CompetenciasController extends Controller
{

    public function setCState(){

        if(request()->has('id') && request()->has('competencias') && request()->has('value')){

            $materia = Materia::where('id', '=', request()->get('id'))->first();

            $competencias = request()->get('competencias');

            if($competencias == 1){
                $materia->c1 = request()->get('value');
            }else if ($competencias == 2){
                $materia->c2 = request()->get('value');
            }else if ($competencias == 3){
                $materia->c3 = request()->get('value');
            }else if ($competencias == 4){
                $materia->c4 = request()->get('value');
            }else if ($competencias == 5){
                $materia->c5 = request()->get('value');
            }else if ($competencias == 6){
                $materia->c6 = request()->get('value');
            }else if ($competencias == 7){
                $materia->c7 = request()->get('value');
            }else if ($competencias == 8){
                $materia->c8 = request()->get('value');
            }else if ($competencias == 9){
                $materia->c9 = request()->get('value');
            }else if ($competencias == 10){
                $materia->c10 = request()->get('value');
            }else{
                return response()->json(['message' => 'Error'], 500);
            }

            $materia->saveOrFail();

            return response()->json(['status' => 'Success']);
        }else{
            return response()->json(['message' => 'Error'], 500);
        }
    }

    public function test(){
        return Competencia::all();
    }
}
