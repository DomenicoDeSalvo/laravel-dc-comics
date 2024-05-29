@extends('layouts.app')

@section('title','Comics')
@section('content')
    <div class="container text-center">
        <h1>COMICS</h1>    
    </div>
    <div class="container">
            <div class="row row-cols-6">
                @foreach ($comics as $comic)
                <div class="col  my-4 d-flex align-items-stretch">
                    <div class="card flex-fill">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a class="link-dark link-underline link-underline-opacity-0" href="{{route('comics.show', $comic)}}">
                                <h5 class="card-title text-center">{{$comic->title}}</h5>
                            </a>
                            <p class="card-text">{{$comic->series}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
@endsection