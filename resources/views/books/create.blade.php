@extends('layouts.app')

@section('content')
<br>
<a  class="btn btn-primary" href="{{ route('books.index') }}">Back</a>
<br>
<br>

<form method="POST" action="{{ route('books.store')}}">
    @csrf
  <div class="mb-3">
    <label  class="form-label">Title</label>
    <input type="text" name="title" class="form-control" >

  </div>
  <div class="mb-3">
    <label for="text" class="form-label">Pages</label>
    <input type="text" name="pages" class="form-control">
  </div>
  <div class="mb-3 ">
      <label class="form-check-label" for="text">Isbn</label>
    <input type="text" name="isbn"  class="form-control">

  </div>
  <div class="mb-3 ">
      <label class="form-check-label" for="text">Short description</label>
      <br>
      <textarea id="mce" name="short_description" class="form-control" cols="30" rows="2"></textarea>
    {{-- <input type="text" name="short_description" class="form-control"> --}}

  </div>

  {{-- <select name="author_id" id="" class="form-control">
<option value="" selected disabled>Pasirinkite autoriu</option>
@foreach ($books as $book)
<option value="{{ $book->id}}" {{ $book->author->id }}></option>
@endforeach
</select> --}}

<div class="mb-3 ">
      <label class="form-check-label" for="text">Author id</label>
    <input type="text" name="author_id"  class="form-control">
<br>
  <button type="submit" class="btn btn-warning">Submit</button>
</form>
@endsection
