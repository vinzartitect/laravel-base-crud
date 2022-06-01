@extends('layouts.layout')

@section('content')

    <h1 class="text-primary text-center">DC COMICS</h1>

    {{-- pop up --}}

    @if ( session('message'))
      <div class="alert alert-success">
         {{ session('message') }}
      </div>        
    @endif

    <a href="{{ route( 'comics.create' ) }}" class="btn btn-success">Crea Fumetto</a>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">thumb</th>
      <th scope="col">title</th>
      <th scope="col">description</th>
      <th scope="col">price</th>
      <th scope="col">series</th>
      <th scope="col">sale date</th>
      <th scope="col">type</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    

    @forelse ($comics as $comic)
    <tr>
      <td>
          <img src="{{ $comic -> thumb }}" alt="" width="50px">
      </td>
      <td>{{ $comic -> title }}</td>
      <td>{{ $comic -> description }}</td>
      <td>{{ $comic -> price }}</td>
      <td>{{ $comic -> series }}</td>
      <td>{{ $comic -> sale_date }}</td>
      <td>{{ $comic -> type }}</td>
      <td class="">
          <a href="{{ route( 'comics.show', $comic->id ) }}" class="btn btn-primary">view</a>
          <a href="{{ route( 'comics.edit', $comic->id ) }}" class="btn btn-warning">modifica</a>
          <form action="{{ route( 'comics.destroy', $comic->id )  }}" method="POST">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger" type="submit">Elimina</button>
          </form>
      </td>
    </tr>
    @empty

    <h2>Il database è vuoto</h2>
        
    @endforelse
    
  </tbody>
</table>


    
@endsection
