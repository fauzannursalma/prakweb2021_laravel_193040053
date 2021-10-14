@extends('layouts.main')
@section('container')
  <h2 class="mb-4">Post Category </h2>
  
  @foreach ($categories as $category)

    <ul>
      <li>
          <h3><a href="/categories/{{ $category->slug }}"> {{ $category->name }}</a></h3>
      {{-- <h5>By : {{ $post->author }}</h5> --}}
      </li>
    </ul>
      


  @endforeach
  
@endsection