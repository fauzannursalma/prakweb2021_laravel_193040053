@extends('layouts.main')
@section('container')
  <h2 class="mb-4">Post Category : {{ $category }}</h2>
  
  @foreach ($posts as $post)
    <article class="class="mb-5 border-bottom pb-4"">
      <h4><a href="/posts/{{ $post->slug }}" class="text-decoration-none"> {{ $post->title }}</a></h4>
      {{-- <h5>By : {{ $post->author }}</h5> --}}
      <p>{{ $post->excerpt }}</p>
    </article>
  @endforeach
  
@endsection