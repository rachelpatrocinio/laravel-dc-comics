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

    public function show($comic){
        $comic = Comic::findOrFail($comic);
        return view('comics.show', compact('comic'));
    }

    public function store(Request $request){
        $form_data = $request->all();
        $new_comic = Comic::create($form_data);
        return to_route('comics.show', $new_comic);
    }

    public function edit(Comic $comic){
        return view('comics.edit', compact('comic'));
    }

    public function update(Request $request,Comic $comic){
        $form_data = $request->all();
        $comic->update($form_data);
        return to_route('comics.show', $comic);
    }
}