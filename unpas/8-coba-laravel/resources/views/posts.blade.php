{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')
    @foreach ($posts as $post)
        <article class="mb-5 border-bottom">
            <h2>
                {{-- <a href="/posts/{{ $post['id'] }}">{{ $post['title'] }}</a> --}}
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
            </h2>
            {{-- <h5>By: {{ $post['author'] }}</h5> --}}
            <p>category : <a href="/categories/{{ $post->category->slug }}"
                    class="text-decoration-none">{{ $post->category->name }}</a></p>
            <p>{{ $post['body'] }}</p>

            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read More</a>
        </article>
    @endforeach
@endsection
