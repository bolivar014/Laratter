@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Laratter</h1>
        <nav>
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="/about" class="nav-link">Acerca</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">Pruebas</a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="row">
        @forelse($messages as $message)
            <div class="col-6">
                <img src="{{ $message->image }}" alt="" class="img-thumbnail">
                <p class="card-text">
                    {{ $message->content }}
                    <a href="/messages/{{ $message->id }}">Leer Más...</a>
                </p>
            </div>
        @empty
            <p>No Hay Mensajes Destacados...</p>
        @endforelse
    </div>
@endsection