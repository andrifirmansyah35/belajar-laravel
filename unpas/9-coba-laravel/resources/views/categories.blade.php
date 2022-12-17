{{-- @dd($posts) --}}

@extends('layouts.main')


@section('container')
    <h1>{{ $title }}</h1>

    <ul>
        @foreach ($categories as $category)
            <li>
                <h2><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
            </li>
        @endforeach
    </ul>
@endsection
