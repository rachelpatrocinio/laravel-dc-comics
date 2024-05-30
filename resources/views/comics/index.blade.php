@extends('layouts.app')
@section('content')
<h1>Index</h1>
<p><a href="{{ route('comics.create')}}">Create</a></p>
<ul class="d-flex flex-wrap list-style-none">
    @foreach($comics as $comic)
    <li class="col-3 p-2">
        <div class="card p-3 h-100">
            <p><strong>{{ $comic->title }}</strong></p>
            <img src="{{$comic->thumb}}">
            <p>{{ $comic->price}}</p>
            <p>{{ $comic->series}}</p>
            <p>{{ $comic->sale_date}}</p>
            <p>{{ $comic->type}}</p>
            <a href="{{ route('comics.edit',$comic) }}">Edit</a>
            <a href="{{ route('comics.show',$comic) }}">Info</a>
            <form action="{{ route('comics.destroy',$comic) }}" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-link link-danger">Trash</button>
              </form>
        </div>
    </li>
    @endforeach
</ul>
@endsection