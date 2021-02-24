@extends('layouts.app')

@section('content')
<br>
<a  class="btn btn-primary" href="{{ route('authors.index') }}">Atgal</a>
<br>
<br>

<form method="POST" action="{{ route('authors.update', $author->id)}}">
    @csrf


@method('PUT')
  <div class="mb-3">
    <label  class="form-label">Vardas</label>
    <input type="text" name="name" class="form-control" >

  </div>
  <div class="mb-3">
    <label for="text" class="form-label">Pavardė</label>
    <input type="text" name="runs" class="form-control" >
  </div>
 <div class="mb-3">
  <button type="submit" class="btn btn-info">Spausti čia</button>
  </div>

</form>
@endsection
