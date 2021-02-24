@extends('layouts.app')

@section('content')
<br>
<a  class="btn btn-primary" href="{{ route('authors.index') }}">Back</a>
<br>
<br>

<form method="POST" action="{{ route('authors.update', $author->id)}}">
    @csrf


@method('PUT')
  <div class="mb-3">
    <label  class="form-label">NAME</label>
    <input type="text" name="name" class="form-control" >

  </div>
  <div class="mb-3">
    <label for="text" class="form-label">Surname</label>
    <input type="text" name="runs" class="form-control" >
  </div>
 <div class="mb-3">
  <button type="submit" class="btn btn-info">Submit</button>
  </div>

</form>
@endsection
