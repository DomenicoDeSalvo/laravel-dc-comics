@extends('layouts.app')

@section('title')

    {{$comic->title}}

@endsection
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between">
            <div>
                <a class='btn btn-secondary' href="{{route('comics.index')}}">Torna a index &#8592;</a>
                <a class='btn btn-secondary' href="{{route('comics.edit', $comic)}}">Modifica</a>
            </div>
            <form action="{{route ('comics.destroy', $comic)}}" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn-danger btn">Elimina</button>
            </form>
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