@extends('layouts.layout')

@section('content')

<div class="container text-center">
    <h1 class="text-primary text-center">Modificare il Fumetto</h1>

    {{-- errori validazione --}}
    @if ( $errors->any() )
    {{-- se sono presenti errori backend --}}
    <div class="alert alert-danger">
        <ul>
            @foreach ( $errors->all() as $error)
            <li>{{$error}}</li>                
            @endforeach
        </ul>
    </div>
        
    @endif

    <form action="{{ route('comics.update',  $comic->id )}}" method="POST">
        @method('PUT')

        @csrf

        <div class="form-floating mb-3 mt-5">
            <input type="text" name="title" class="form-control" id="titolo" placeholder="Titolo" value="{{ $comic -> title }}" required>
            <label for="titolo">Titolo</label>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" name="description" placeholder="Description" id="floatingTextarea2" style="height: 100px" required>{{ $comic -> description }}</textarea>
            <label for="floatingTextarea2">Description</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="thumb" class="form-control" id="floatingPassword" placeholder="Image" value="{{ $comic -> thumb }}" required>
            <label for="floatingPassword">Image</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" name="price" step="any"  class="form-control" id="floatingPassword" placeholder="Price" value="{{ $comic -> price }}" required>
            <label for="floatingPassword">Price</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="series"  class="form-control" id="floatingPassword" placeholder="Series" value="{{ $comic -> series }}" required>
            <label for="floatingPassword">Series</label>
        </div>
        <div class="form-floating mb-3">
            <input type="date" name="sale_date"  class="form-control" id="floatingPassword" placeholder="Sale Date YYYY-MM-DD" value="{{ $comic -> sale_date }}" required>
            <label for="floatingPassword">Sale Date YYYY-MM-DD</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="type"  class="form-control" id="floatingPassword" placeholder="Type" value="{{ $comic -> type }}" required>
            <label for="floatingPassword">Type</label>
        </div>

        <button type="submit" class="btn btn-success">Aggiungi</button>

    </form>

</div>
    
@endsection