@extends('layouts.main')

@section('container')
    <article class="mb-5">
        <h2>
            {{ $title }}
        </h2>
        <h5>By: {{ $author }}</h5>
        <p>{{ $body }}</p>
    </article>

    <a href="/blog">back To Posts</a>
@endsection
