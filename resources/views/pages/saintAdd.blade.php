@extends('layouts.main-layout')

@section('content')

    AGGIUNGI LE INFORMAZIONI SUL SANTO:

    <form action="{{ route('saint.store') }}" method="POST">
        @csrf

        <input type="text" name="name" placeholder="nome"> <br>
        
        <input type="text" name="birth_place" placeholder="Luogo di Nascita"> <br>
        
        <input type="date" name="blessing_date" placeholder="Data di Nascita"> <br>
        
        <input type="number" name="blessing_count" placeholder="Quantità di miracoli"> <br>

        <input type="submit" value="ADD SAINT"> <br>

    </form>
    
@endsection