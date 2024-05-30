@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <p><a href="{{ route('comics.index')}}">Go back to Index</a></p>
        <h1>Edit</h1>
        <form action="{{ route('comics.update', $comic)}}" method="POST">
            @method('PUT')
            @csrf
            <label for="title">Title</label>
            <input class="w-100" type="text" name="title"  id="title" placeholder="Title"  value="{{ $comic->title}}">
            <br>

            <label for="description">Description</label>
            <input class="w-100" type="text" name="description"  id="description" placeholder="Description..." value="{{ $comic->description}}">
            <br>

            <label for="thumb">Thumb</label>
            <input class="w-100" type="text" name="thumb" id="thumb" value="{{ $comic->thumb}}">
            <br>

            <label for="price">Price</label>
            <input class="w-100" type="text" name="price" id="price" value="{{ $comic->price}}">
            <br>

            <label for="series">Series</label>
            <input class="w-100" type="text" name="series" id="series" value="{{ $comic->series}}">
            <br>

            <label for="sale_date">Sale Date</label>
            <input class="w-100" type="text" name="sale_date" id="sale_date" value="{{ $comic->sale_date}}">
            <br>

            <label for="type">Type</label>
            <input class="w-100" type="text" name="type" id="type" value="{{ $comic->type}}">
            <button class="btn btn-primary mt-2">INVIA</button>
        </form>
    </div>
</div>
@endsection