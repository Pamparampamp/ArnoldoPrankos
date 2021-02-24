@extends('layouts.app')
@section( 'content')


 <a  class="btn btn-primary"  href="{{ route('authors.create') }}">Sukurti autorių</a>

<table class="table">
  <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Vardas</th>
        <th scope="col">Pavardė</th>
        <th scope="col">Veiksmai</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($authors as $author)


    <tr>
        <td>{{ $author->id }}</td>
        <td>{{ $author->name }}</td>
        <td>{{ $author->surname }}</td>

       <td>
        <form action="{{ route('authors.destroy', $author->id) }}" method="post">

 <a  class="btn btn-primary"  href="{{ route('authors.edit', $author->id) }}">Redaguoti</a>
            @method('DELETE')
            @csrf
         <button class="btn btn-danger"  name="destroy">Trinti</button>


        </form>




       </td>
    </tr>
@endforeach
  </tbody>
</table>
@endsection
