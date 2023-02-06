@extends('layouts.main-layout')

@section('content')

    <h1>{{ $saint -> name }} - {{ $saint -> blessing_count }}</h1>
    <h3>Birth Place: {{ $saint -> birth_place }}</h3>
    <h3>Blessing date: {{ $saint -> blessing_date }}</h3>
@endsection