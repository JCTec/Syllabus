<?php

namespace App\Http\Controllers;

use App\Chat;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
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

    public function addMessage(Request $request){
        $user = Auth::user();

        if($user){

            $chat = Chat::where('planDeEstudio', '=', $request->planDeEstudio)->first();

            if(!$chat){
                $chat = new Chat();
                $chat->planDeEstudio = $request->planDeEstudio;
                $chat->save();

                if(!$chat) {
                    return response()->json(['error' => 'An error ocurred'], 500);
                }
            }

            $message = new Message();

            $message->chatID = $chat->_id;
            $message->userID = $user->id;
            $message->text = $request->text;

            if(isset($request->origin)){
                $message->origin = $request->origin;
            }

            $message->save();

            if(!$message) {
                return response()->json(['error' => 'An error ocurred'], 500);
            }else{
                return response()->json(['Status' => 'Success'], 200);
            }

        }else{
            return response()->json(['error' => 'An error ocurred'], 500);
        }

    }


    public function removeMessage($id){
        $user = Auth::user();

        if($user){

            $message = Message::where('_id', '=', $id)->first();

            if(!$message){
                return response()->json(['error' => 'An error ocurred'], 500);
            }else{
                $message->forceDelete();
                return response()->json(['Status' => 'Success'], 500);
            }
        }else{
            return response()->json(['error' => 'An error ocurred'], 500);
        }

    }
}
