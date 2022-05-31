@extends('layouts.layout')

@section('content')

<div class="container text-center">
    <h1 class="text-primary text-center">Creare nuovo Fumetto</h1>

    <form action="{{ route('comics.store')}}" method="POST">

        @csrf

        <div class="form-floating mb-3 mt-5">
            <input type="text" name="title" class="form-control" id="titolo" placeholder="Titolo" required>
            <label for="titolo">Titolo</label>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" name="description" placeholder="Description" id="floatingTextarea2" style="height: 100px" required></textarea>
            <label for="floatingTextarea2">Description</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="thumb" class="form-control" id="floatingPassword" placeholder="Image" required>
            <label for="floatingPassword">Image</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" name="price" step="any"  class="form-control" id="floatingPassword" placeholder="Price" required>
            <label for="floatingPassword">Price</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="series"  class="form-control" id="floatingPassword" placeholder="Series" required>
            <label for="floatingPassword">Series</label>
        </div>
        <div class="form-floating mb-3">
            <input type="date" name="sale_date"  class="form-control" id="floatingPassword" placeholder="Sale Date YYYY-MM-DD" required>
            <label for="floatingPassword">Sale Date YYYY-MM-DD</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="type"  class="form-control" id="floatingPassword" placeholder="Type" required>
            <label for="floatingPassword">Type</label>
        </div>

        <button type="submit" class="btn btn-success">Aggiungi</button>

    </form>

</div>
    
@endsection