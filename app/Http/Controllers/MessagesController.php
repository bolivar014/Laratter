<?php

namespace App\Http\Controllers;
use App\Message;
use App\Http\Requests\CreateMessageRequest;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    // Visualización de la vista Mensaje, cargando el ID a consultar.
    public function show(Message $message)
    {
        //Buscamos el mensaje por medio de su ID y lo cargamos en la VIEW messages.
        //$message = Message::find($id);

        return view('Messages.show', [
            'message' => $message,
        ]); 
    }

    // función para la creación de un nuevo mensaje el cual se parametriza en App\Http\Request\CreateMessageRequest
    public function create(CreateMessageRequest $request)
    {
        $message = Message::create([
            'content' => $request->input('message'),
            'image' => 'http://lorempixel.com/600/338?'.mt_rand(0, 1000)
        ]);
        return redirect('/messages/'.$message->id);
    }
}
