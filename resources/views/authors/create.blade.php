@extends('layouts.app')

@section('content')
<br>
<a  class="btn btn-primary" href="{{ route('authors.index') }}">Atgal</a>
<br>
<br>

<form method="POST" action="{{ route('authors.store')}}">
    @csrf
  <div class="mb-3">
    <label  class="form-label">Vardas</label>
    <input type="text" name="name" class="form-control"  >

  </div>
  <div class="mb-3">
    <label for="text" class="form-label">Pavardė</label>
    <input type="text" name="surname" class="form-control" >
  </div>

  <button type="submit" class="btn btn-info">Spausti čia</button>
</form>
@endsection
