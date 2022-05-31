@extends('layouts.layout')

@section('content')

    <h1 class="text-primary text-center">DC COMICS</h1>

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
    </tr>
    @empty

    <h2>Il database è vuoto</h2>
        
    @endforelse
    
  </tbody>
</table>


    
@endsection