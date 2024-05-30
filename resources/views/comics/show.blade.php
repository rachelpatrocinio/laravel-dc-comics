@extends('layouts.app')
@section('content')
<h1>Show</h1>
<p><a href="{{ route('comics.index')}}">Go to Index</a></p>
<p><strong>{{ $comic->title }}</strong></p>
<p><strong>{{ $comic->description }}</strong></p>
<img src="{{$comic->thumb}}">
<p>{{ $comic->price}}</p>
<p>{{ $comic->series}}</p>
<p>{{ $comic->sale_date}}</p>
<p>{{ $comic->type}}</p>
@endsection