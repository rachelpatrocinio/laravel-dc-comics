@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <p><a href="{{ route('comics.index')}}">Go back to Index</a></p>
<form action="{{ route('comics.store')}}" method="POST">
    @csrf
    <label for="title">Title</label>
    <input class="w-100" type="text" name="title"  id="title" placeholder="Title">
    <br>

    <label for="description">Description</label>
    <input class="w-100" type="text" name="description"  id="description" placeholder="Description...">
    <br>

    <label for="thumb">Thumb</label>
    <input class="w-100" type="text" name="thumb" id="thumb">
    <br>

    <label for="price">Price</label>
    <input class="w-100" type="text" name="price" id="price">
    <br>

    <label for="series">Series</label>
    <input class="w-100" type="text" name="series" id="series">
    <br>

    <label for="sale_date">Sale Date</label>
    <input class="w-100" type="text" name="sale_date" id="sale_date">
    <br>

    <label for="type">Type</label>
    <input class="w-100" type="text" name="type" id="type">
    <button class="btn btn-primary mt-2">INVIA</button>
</form>
    </div>

</div>

@endsection