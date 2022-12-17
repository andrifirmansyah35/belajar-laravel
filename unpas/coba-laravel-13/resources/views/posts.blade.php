{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')
    @if ($posts->count())
        <h1 class="mb-5">{{ $title }}</h1>
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top"
                alt="{{ $posts[0]->category->name }}">
            <div class="card-body">
                <h5 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"
                        class="text-decoration-none">{{ $posts[0]->title }}</a></h5>
                <p><small>
                        By
                        <a href="/author/{{ $posts[0]->author->name }}">{{ $posts[0]->author->name }}</a>
                        in
                        <a href="/categories/{{ $posts[0]->category->slug }}"class="text-decoration-none">
                            {{ $posts[0]->category->name }}
                        </a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a class="text-decoration-none btn btn-primary" href="/posts/{{ $posts[0]->slug }}">read more</a>
            </div>
        </div>
    @else
        <p class="text-center fs-4">No Post Found</p>
    @endif

    <div class="container">
        <div class="row">

            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)">
                        <a href="/categories/{{ $post->category->slug }}"class="text-decoration-none text-white">
                            {{ $post->category->name }}
                        </a>
                        </div>
                    <img src="https://source.unsplash.com/500x400/?{{ $post->category->name }}" class="card-img-top"
                        alt="{{ $post->category->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p>
                            <small>
                                By 
                                <a href="/author/{{ $post->author->name }}">{{ $post->author->name }}</a> in
                                <a href="/categories/{{ $post->category->slug }}"class="text-decoration-none">
                                {{ $post->category->name }}
                            </a>
                            </small>
                        </p>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>

    {{-- {{-- @foreach ($posts as $post) --}@foreach ($posts->skip(1) as $post) --}}

@endsection
