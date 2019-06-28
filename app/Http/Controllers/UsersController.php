<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    // Carga en la vista users/Show, todos los mensajes referentes a un ID
    public function show($username)
    {
        $user = User::where('username', $username)->first();
        return view('users.show', [
            'user' => $user,
        ]);
    }
}
