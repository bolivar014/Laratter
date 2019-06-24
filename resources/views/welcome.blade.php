@extends('layouts.app')

@section('content')
    <div class="title m-b-md">
        Laratter
    </div>

    @if(isset($user))
        <p>Usuario: {{ $user }} </p>
    @else
        <p>Usuario Pendiente Por Definir</p>
    @endif
        
    <div class="links">
        @foreach($links as $link => $text)
            <a href="{{ $link }}"> {{ $text }} </a>
        @endforeach
    </div>
@endsection