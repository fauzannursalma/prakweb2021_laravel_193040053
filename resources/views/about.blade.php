@extends('layouts/main')

@section('container')
  <h2 class="mb-3">Halaman About</h2>
  <h4>{{ $name }}</h4>
  <p>{{ $email }}</p>
  
  <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">    
@endsection
    
  
