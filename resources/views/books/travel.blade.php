@extends('layouts.app')
@section('content')
<div class="card">
<div class="card-header">Lažybų detalės</div>
<div class="card-body">
<h5>Knygos autoriaus vardas: {{ $book->author->name }}</h5>
<h5>Knygos autoriaus pavardė:  {{ $book->author->surname }}</h5>
<h5>Knygos pavadinimas: {{ $book->title }} </h5>
<h5>Knygos puslapių skaičius: {{$book->pages}} </h5>
<h5>Knygos autoriaus ID:  {{ $book->author->id }}</h5>
<h5>Knygos Isbn: {{$book->isbn}} </h5>
<h5>Knygos ID: {{ $book->id }}</h5>
<h5>Knygos Aprašymas:  {!!$book->short_description!!} </h5>
{{-- <h5>Horse_id: {{ $better->horse_id }}</h5> --}}
{{-- <hr>
{{-- <h5>Pasirinkto arklio vardas: {{ $better->horse->name }}</h5> --}}



@endsection
