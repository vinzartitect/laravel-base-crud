@extends('layouts.layout')

@section('content')

<div class="container text-center">
    {{-- pop up --}}
    @if ( session('message'))
      <div class="alert alert-success">
         {{ session('message') }}
      </div>        
    @endif

    <h1 class="text-primary text-center">{{ $comic->title }}</h1>
    <img src="{{ $comic -> thumb }}" alt="">
    <h3>Price: {{ $comic -> price }}</h3>
    <h3>Series: {{ $comic -> series }}</h3>
    <h3>Type: {{ $comic -> type }}</h3>
</div>
    
@endsection