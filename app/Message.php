<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    // Definimos el modelo de la tabla Message.
    protected $guarded = [];

    // Propiedad asignada para validar el usuario que corresponde al ID en la tabla MESSAGE
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

