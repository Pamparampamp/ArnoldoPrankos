@extends('layouts.app')
@section( 'content')


 <a  class="btn btn-primary"  href="{{ route('books.create') }}">Sukurti knygą</a>


<div class="card-body">
<form class="form-inline" action="{{ route('books.index') }}" method="GET">
<select name="author_id" id="" class="form-control">
<option value="" selected disabled>Pasirinkite knygą filtravimui:</option>
@foreach ($books as $book)
<option value="{{ $book->id }}"
@if($book->id == app('request')->input('book'))
selected="selected"
@endif>{{ $book->title }}</option>
@endforeach
</select>
<button type="submit" class="btn btn-primary">Spausti čia</button>
<a class="btn btn-success" href={{ route('books.index') }}>Rodyti visus</a>
</form>
</div>



<table class="table">
  <thead>
    <tr>

      <th scope="col">Pavadinimas</th>
      <th scope="col">Puslapiai</th>
      <th scope="col">Isbn</th>
      <th scope="col">Trumpas aprašymas</th>
      <th scope="col">Autoriaus id</th>
      <th scope="col">Veiksmai</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($books as $book)


    <tr>
        <td>{{ $book->title }}</td>
      <td>{{ $book->pages }}</td>
      <td>{{ $book->isbn }}</td>
      <td>{!! $book->short_description !!}</td>
<td>{{ $book->author_id }}</td>
       <td>
        <form action="{{ route('books.destroy', $book->id) }}" method="post">
 <a  class="btn btn-primary"  href="{{ route('books.edit', $book->id) }}">Redaguoti</a>

            @method('DELETE')
            @csrf
                <button class="btn btn-danger"  name="destroy">Trinti</button>

 <a href="{{ route('book.travel', $book->id) }}" class="btn btn-primary m-1">Peržiūrėti </a>
        </form>




       </td>
    </tr>
@endforeach
  </tbody>
</table>
@endsection
