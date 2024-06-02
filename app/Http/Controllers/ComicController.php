<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    //MI LASCIO ANCHE LA VERSIONE ESTESA PER RICORDARMELA
    public function index() {

        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    public function show(Comic $comic){

        return view('comics.show', compact('comic'));

    }

    public function create(){

        return view('comics.create');
    } 

    public function store(Request $request){

        $request->validate([
            'title' => 'required|min:3|max:255',
            'thumb' => 'required|url|max:255',
            'price' => 'required|min:3|max:255',
            'series' => 'required|min:3|max:255',
            'type' => 'required|min:3|max:50',
            'artists' => 'required|min:3|max:255',
            'writers' => 'required|min:3|max:255',
        ]);

        $form_data = $request->all();

        $new_comic = Comic::create($form_data);


        // $new_comic = new Comic();

        // $new_comic->title = $form_data['title'];
        // $new_comic->description = $form_data['description'];
        // $new_comic->thumb = $form_data['thumb'];
        // $new_comic->price = $form_data['price'];
        // $new_comic->series = $form_data['series'];
        // $new_comic->sale_date = $form_data['sale_date'];
        // $new_comic->type = $form_data['type'];
        // $new_comic->artists = $form_data['artists'];
        // $new_comic->writers = $form_data['writers'];

        // $new_comic->save();

        return redirect()->route('comics.show', $new_comic);
    }

    public function edit(Comic $comic){
        return view('comics.edit', compact('comic'));
    }

    public function update(Request $request, Comic $comic){

        $request->validate([
            'title' => 'required|min:3|max:255',
            'thumb' => 'required|url|max:255',
            'price' => 'required|min:3|max:255',
            'series' => 'required|min:3|max:255',
            'type' => 'required|min:3|max:50',
            'artists' => 'required|min:3|max:255',
            'writers' => 'required|min:3|max:255',
        ]);

        $form_data = $request->all();
        $comic->update($form_data);
        return redirect()->route('comics.show', $comic);
    }

    public function destroy(Comic $comic){
        $comic->delete();
        return to_route('comics.index');
    }
}
