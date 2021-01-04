@extends('layout.app')
@section ('content')
    <div class="container">
        @foreach ($formati as $tipo => $pasta)
            <h1>{{ $tipo }}</h1>
            <div class="container-card">
                @foreach ($pasta as $indice => $formato)
                    <div class="card">
                        <img src="{{ $formato['src'] }}" alt="{{ $formato['titolo'] }}">
                        <div class="overlay">
                            <a href="#">
                                {{ $formato['titolo'] }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
