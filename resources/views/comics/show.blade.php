@extends('layouts.app')

@section('title')

    {{$comic->title}}

@endsection
@section('content')
    <div class="container">
        <div>
            <a href="{{route('comics.index')}}">Torna indietro &#8592;</a>
        </div>
    </div>
    <div class="container text-center">
        <h2>{{$comic->title}}</h2>    
    </div>
    <div class="container">
        <div class="my-4">
            <div class="card">
                <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">{{$comic->title}}</h5>
                    <p class="card-text">{{$comic->series}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection