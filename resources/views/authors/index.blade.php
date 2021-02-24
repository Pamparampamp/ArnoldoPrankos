@extends('layouts.app')
@section( 'content')

@if($errors->any())
<h4 style="color: red">{{$errors->first()}}</h4>
@endif
 <a  class="btn btn-primary"  href="{{ route('authors.create') }}">Create Authors</a>

<table class="table">
  <thead>
    <tr>
        <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Actions</th>
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

 <a  class="btn btn-primary"  href="{{ route('authors.edit', $author->id) }}">Edit</a>
            @method('DELETE')
            @csrf
                <button class="btn btn-danger"  name="destroy">DELETE</button>


        </form>




       </td>
    </tr>
@endforeach
  </tbody>
</table>
@endsection
