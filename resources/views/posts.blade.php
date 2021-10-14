@extends('layouts.main')
@section('container')
  <h2 class="mb-3">Halaman Blog Posts</h2>
  @foreach ($posts as $post)
    <article class="mb-3">
      <h4>
        <a href="/posts/{{ $post->slug }}"> {{ $post->title }}</a>
      </h4>
      {{-- <h5>By : {{ $post->author }}</h5> --}}
      <p>{{ $post->excerpt }}</p>
    </article>
  @endforeach
  
@endsection