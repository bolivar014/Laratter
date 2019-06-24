<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // 
    public function home()
    {
        $links = [
            'https://platzi.com/laravel' => 'Curso De Laravel',
            'https://laravel.com' => 'Pagina Oficial De Laravel'
        ];
    
        return view('welcome',[
            'user' => 'Juan Camilo Valdes Bolivar',
            'links' => $links,
        ]);
    }

    public function about()
    {
        return view('about');
    }

}
