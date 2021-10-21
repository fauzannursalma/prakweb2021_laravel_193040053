@extends('layouts.main')
@section('container')
  <h2 class="mb-4">Post Category </h2>
  
  <div class="container">
    <div class="row">  
    @foreach ($categories as $category)
      <div class="col-md-4">
        <a href="/categories/{{ $category->slug }}">
        <div class="card bg-dark text-white">
          <img src="https://source.unsplash.com/600x400?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
          <div class="card-img-overlay d-flex align-items-center p-0">
            <h5 class="card-title flex-fill p-4 text-center fs-4" style="background-color: rgba(0,0,0,0.5)">{{ $category->name }}</h5>
          </div>
        </div>
        </a>
      </div>
    @endforeach
    </div>
  </div>

@endsection