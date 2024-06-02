@extends('layouts.app')

@section('title')

        Modifica {{$comic->title}}

@endsection
@section('content')
    <div class="container">
        <a class='btn btn-secondary' href="{{route('comics.index')}}">Torna indietro &#8592;</a>
    </div>
    <div class="container text-center">
        <h2>Modifica {{$comic->title}}</h2>    
    </div>
    <div class="container">
        <form action="{{route('comics.update',$comic)}}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" name="title" class="form-control" id="title" value="{{old('title',$comic->title)}}" placeholder="Inserisci il titolo del fumetto">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{old('description',$comic->description)}}</textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Copertina</label>
                <input type="text" name="thumb" class="form-control" id="thumb" value="{{old('thumb',$comic->thumb)}}" placeholder="URL copertina">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" name="price" class="form-control" id="price" value="{{old('price',$comic->price)}}" placeholder="Inserire il prezzo specificando la valuta Es.€10.00">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" name="series" class="form-control" id="series" value="{{old('series',$comic->series)}}" placeholder="Inserire la serie a cui appartiene il fumetto">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di acquisto</label>
                <input type="text" name="sale_date" class="form-control" id="sale_date" value="{{old('sale_date',$comic->sale_date)}}" placeholder="Formato AAAA-MM-GG">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Genere</label>
                <input type="text" name="type" class="form-control" id="type" value="{{old('type',$comic->type)}}" placeholder="Inserire il genere del fumetto">
            </div>
            <div class="mb-3">
                <label for="artists" class="form-label">Disegni</label>
                <input type="text" name="artists" class="form-control" id="artists" placeholder="Inserire i disegnatori divisi da virgole">
            </div>
            <div class="mb-3">
                <label for="writers" class="form-label">Testi</label>
                <input type="text" name="writers" class="form-control" id="writers" placeholder="Inserire gli autori dei testi divisi da virgole">
            </div>
            <div class="text-center my-4">
                <button class="btn btn-secondary">Salva</button>
            </div>
        </form>
    </div>

    <div class="container">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

@endsection