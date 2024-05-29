<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function comics() {

        $comics = Comic::all();

        return view('comics', compact('comics'));
    }
}
