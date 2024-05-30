<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request; 

class ComicController extends Controller
{
    // CRUD
    public function index(){
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    public function create(){
        return view('comics.create');
    }

    public function show(Comic $comic){
        $comic = Comic::findOrFail($comic);
        return view('comics.show', compact('comic'));
    }

    public function store(){
        dump('metodo store');
    }
}