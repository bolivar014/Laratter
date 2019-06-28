<?php

namespace App\Http\Controllers;
use App\Message;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Controlador View Home "Welcome"
    public function home()
    {
        $messages = Message::latest()->paginate(10); // Paginación(Cantidad Datos A Mostrar)
                                                     // Propiedad Latest() es para mostrar de primero los ultimos registros ingresados...
        // dd($messages); // desbordamiento del código para verificar datos enviados

        return view('welcome',[
            'messages' => $messages,
            ]);
    }

    public function about()
    {
        return view('about');
    }

}
