@extends('layouts.main')

@section('container')
    <article class="mb-5">
        <h2>
            {{ $post->title }}
        </h2>
        {{-- <h5>By: {{ $author }}</h5> --}}
        <p> {!! $post->body !!} </p>
    </article>

    <a href="/blog">back To Posts</a>
@endsection


{{-- {{ App\Models\Post::create([
    'title' => 'judul kedua',
    'slug' => 'judul-kedua',
    'excerpt' =>
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores repellendus hic sed numquam placeat quibusdam minus excepturi dolorem libero voluptates?',
    'body' =>
        '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id laboriosam eius aut? Iure sunt maxime quam ab modi quaerat consequatur atque maiores recusandae magni. Voluptatem itaque praesentium sunt vero repudiandae?</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic quibusdam nemo consectetur vitae, magnam excepturi fugiat optio at tempora! Architecto, voluptatem? Expedita nemo officiis beatae quo commodi quas omnis consequatur, pariatur reiciendis incidunt aut dolores id eius saepe consectetur laudantium. Perspiciatis neque rerum repellat dolore similique eligendi modi impedit aut?</p>',
]) }} --}}
