@extends('layouts.app')

@section('title','Comics')
@section('content')
    <div class="container">
        <a class='btn btn-secondary' href="{{route('comics.index')}}">Torna indietro &#8592;</a>
    </div>
    <div class="container text-center">
        <h2>AGGIUNGI UN FUMETTO</h2>    
    </div>
    <div class="container">
        <form action="">

        </form>
    </div>

@endsection