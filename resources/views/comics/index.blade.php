@extends('layouts.app')
@section('content')
<h1>Index</h1>
<ul>
    @foreach($comics as $comic)
    <li>
        <h3>{{ $comic->title }}</h3>
        <p>{{ $comic->description}}</p>
        <p>{{ $comic->thumb}}</p>
        <p>{{ $comic->price}}</p>
        <p>{{ $comic->series}}</p>
        <p>{{ $comic->sale_date}}</p>
        <p>{{ $comic->type}}</p>
    </li>
    @endforeach
</ul>
@endsection