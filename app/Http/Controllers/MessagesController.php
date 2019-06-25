<?php

namespace App\Http\Controllers;
use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    //
    public function show(Message $message)
    {
        //Buscamos el mensaje por medio de su ID y lo cargamos en la VIEW messages.
        //$message = Message::find($id);

        return view('Messages.show', [
            'message' => $message,
        ]); 
    }
}
