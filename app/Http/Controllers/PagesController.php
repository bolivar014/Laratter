<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // 
    public function home()
    {
        $messages = [
            [     
                'id' => 1,
                'content' => 'Este es un mensaje de prueba',
                'image' => 'http://lorempixel.com/600/338?1',
            ],
            [     
                'id' => 2,
                'content' => 'Este es otro mensaje de prueba',
                'image' => 'http://lorempixel.com/600/338?2',
            ],
            [     
                'id' => 3,
                'content' => 'Este es un mensaje de prueba nuevo',
                'image' => 'http://lorempixel.com/600/338?3',
            ],
            [     
                'id' => 4,
                'content' => 'Este es un mensaje de prueba',
                'image' => 'http://lorempixel.com/600/338?4',
            ],
        ];

        return view('welcome',[
            'messages' => $messages,
            ]);
    }

    public function about()
    {
        return view('about');
    }

}
