{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Post Category : {{ $category }}</h1>

    @foreach ($posts as $post)
        <article class="mb-5">
            <h2>
                <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            </h2>
            <p>By <a href="/author/{{ $post->user->name }}">{{ $post->user->name }}</a> in
                <a href="/categories/{{ $post->category->slug }}"class="text-decoration-none">
                    {{ $post->category->name }}
                </a>
            </p>
            <p>{{ $post['body'] }}</p>
        </article>
    @endforeach
@endsection
