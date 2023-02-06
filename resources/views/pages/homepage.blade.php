@extends('layouts.main-layout')

@section('content')

    <h1>LISTA SANTI</h1>

    <ul>
        @foreach ($saints as $saint)
            <li>
                <a href="saint/{{ $saint -> id }}">
                    {{ $saint -> name }} - {{ $saint -> blessing_count }}
                </a>
                --
                <a href="{{ route('saint.destroy', ['id' => $saint -> id]) }}">X</a>
            </li>
                
        @endforeach
    </ul>
    
@endsection