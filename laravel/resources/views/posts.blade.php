{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')

{{-- <h1>Halaman Posts</h1> --}}

    @foreach ($posts as $post)
        <article class="mb-5">
            <h2>
                <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
            </h2>

       <p>By. Nur Ihsan Dwi <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
 
            <p>{{ $post["body"] }}</p>
        </article>
    @endforeach

@endsection