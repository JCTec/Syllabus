<?php

namespace App\Http\Controllers;

use App\competencias_materias;
use App\Materia;
use App\Plan_De_Estudio;
use App\User;
use Illuminate\Http\Request;
use Stringy\Stringy as S;
use App\Chat;
use App\Message;

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

        $planDecoded = json_decode($plan, true);

        $nameMapa = (string) $planDecoded["CARRERA"];

        $chat = Chat::where('planDeEstudio', '=', $id)->first();

        if(!$chat){
            $chat = new Chat();
            $chat->planDeEstudio = $id;
            $chat->save();

            if(!$chat) {
                return response()->json(['error' => 'An error ocurred'], 500);
            }
        }

        $messages = Message::where('origin', '=',  null)->where('chatID', '=', $chat->_id)->get();

        $toSendC = [];

        foreach ($messages as $message){
            $x = json_decode($message, true);

            $userToFind = User::select('name')->where('id', '=', $x['userID'])->first();

            $subMessagesX = Message::where('origin', '=', $x["_id"])->get();

            $subMessages = [];

            foreach ($subMessagesX as $subMessage){
                $xS = json_decode($subMessage, true);

                $userToFind2 = User::select('name')->where('id', '=', $xS['userID'])->first();

                $xS["USER"] = $userToFind2->name;

                array_push($subMessages, json_encode($xS));

            }

            $x["SUB"] = $subMessages;
            $x["USER"] = $userToFind->name;

            array_push($toSendC, $x);
        }

        return view('mapaDeEstudios')->with(['plan' => $planDecoded, 'materias' => $toSend, 'nameMapa' => $nameMapa, 'messages' => $toSendC, 'chat' => $chat]);
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
