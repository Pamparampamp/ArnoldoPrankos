@extends('layouts.app')

@section('content')
<br>
<a  class="btn btn-primary" href="{{ route('books.index') }}">Back</a>
<br>
<br>

<form method="POST" action="{{ route('books.update', $book->id)}}">
    @csrf


@method('PUT')
  <div class="mb-3">
    <label  class="form-label">Title</label>
    <input type="text" name="name" class="form-control" >

  </div>
  <div class="mb-3">
    <label for="text" class="form-label">Pages</label>
    <input type="text" name="pages" class="form-control" >
  </div>
  <div class="mb-3 ">
      <label class="form-check-label" for="text">Isbn</label>
    <input type="text" name="isbn"   class="form-control">

  </div>
  <div class="mb-3 ">
      <label class="form-check-label" for="text">Short description</label>
    <br>
      <textarea name="short_description" id="mce" class="form-control" cols="30" rows="2"></textarea>

  </div>
    <div class="mb-3 ">
      <label class="form-check-label" for="text">Author id</label>
    <input type="text" name="author_id"   class="form-control">

  </div>

  {{-- <select name="author_id" id="" class="form-control">
<option value="" selected disabled>Pasirinkite šalį</option>
@foreach ($authors as $author)
<option value="{{ $author->id }}" @if($author->id == $book->author_id) selected="selected" @endif>{{ $author->name }}</option>
@endforeach
</select> --}}
  <button type="submit" class="btn btn-info">Submit</button>
</form>
@endsection
