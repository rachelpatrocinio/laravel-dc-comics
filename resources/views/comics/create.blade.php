@extends('layouts.app')
@section('content')
<form action="{{ route('comics.store')}}" method="POST">
    @csrf
    <input type="text" placeholder="Scrivi qualcosa">
    <button>INVIA</button>
</form>
@endsection