@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-4">
        <div class="col-lg-8">
                <h2> {{ $post->title }} </h2>

                <a href="/dashboard/posts" class="btn btn-success">Back All to My Post</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning text-decoration-none">edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                        <button class="btn btn-danger border-0" onclick="return confirm('Are You sure?')"><span class="badge badge-danger">hapus</span></button>    
                </form>     
                
                <p>category : <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        

                @if ($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid"
                                alt="{{ $post->category->name }}">
                        @else
                            <img src="https://source.unsplash.com/500x400/?{{ $post->category->name }}"
                                class="img-fluid" alt="{{ $post->category->name }}">
                        @endif

                {{-- @if ($post->image)
                <img src="{{ asset('storage/'.$post->image) }}" class="img-fluid mt-5"
                alt="{{ $post->category->name }}" style="max-height:350px; overflow:hidden;">
                @else
                <img src="https://source.unsplash.com/500x400/?{{ $post->category->name }}" class="img-fluid mt-5"
                alt="{{ $post->category->name }}">
                @endif --}}
                {{-- <h5>By: {{ $author }}</h5> --}}
            <article class="my-3 fs-5">
                {!! $post->body !!} 
            </article>
        
            <a href="/blog">back To Posts</a>
    </div>
</div>
@endsection
