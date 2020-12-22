@extends('layout.app')
@section ('content')
    <div class="container">
        @foreach ($formati as $formato)
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
@endsection
