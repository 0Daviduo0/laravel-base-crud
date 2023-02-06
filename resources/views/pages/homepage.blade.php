@extends('layouts.main-layout')

@section('content')

    <h1>LISTA SANTI</h1>

    <ul>
        @foreach ($saints as $saint)
            <li>{{ $saint -> name }} - {{ $saint -> blessing_count }}</li>
        @endforeach
    </ul>
    
@endsection