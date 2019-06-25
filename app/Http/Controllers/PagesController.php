<?php

namespace App\Http\Controllers;
use App\Message;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Controlador View Home "Welcome"
    public function home()
    {
        $messages = Message::all();
        
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
