@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/posts/{{ $post->slug }}" enctype="multipart/form-data">
      @method('put')
    @csrf
        <div class="mb-3">
          <label for="title" class="form-label">title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title',$post->title) }}">
          @error('title')
            <div class="text-danger">
              {{ $message }}
            </div>
          @enderror
        </div>
        
        <div class="mb-3">
          <label for="slug" class="form-label">slug</label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" readonly value={{old('slug',$post->slug)}}>
          @error('slug')
            <div class="text-danger">
              {{ $message }}
            </div>
          @enderror
      </div>
     
      <div class="mb-3">
        <label for="category" class="form-label">category</label>
        @error('category')
            <div class="text-danger">
              {{ $message }}
            </div>
          @enderror
        <select name="category_id" id="category" class="form-select">
          @foreach ($categories as $category)
            @if (old('category_id',$post->category_id) == $category->id)
            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
          @endforeach   
        </select>
    </div>

    <div class="mb-3">
      <label for="image" class="form-label">gambar : {{$post->image}}</label>
      @if ($post->image)
      <img src="{{ asset('storage/'). $post->image }}" class="img-preview img-fluid mb-3 col-sm-5" alt="{{ asset('storage/'). $post->image }}">
      @else
      <img src="{{ asset('storage/'). $post->image }}" class="img-preview img-fluid mb-3 co-sm-5" alt=""> 
      @endif

      {{-- @if ($post->image)
                <img src="{{ asset('storage/'.$post->image) }}" class="img-fluid mt-5"
                alt="{{ $post->category->name }}" style="max-height:350px; overflow:hidden;">
                @else
                <img src="https://source.unsplash.com/500x400/?{{ $post->category->name }}" class="img-fluid mt-5"
                alt="{{ $post->category->name }}">
                @endif --}}
    </div>

    <div class="mb-3">
      <label for="body" class="form-label">Body</label>
      @error('body')
            <div class="text-danger">
              {{ $message }}
            </div>
          @enderror
      <input type="hidden" id="body" name="body" value="{{ old('body',$post->body) }}">
      <trix-editor input="body"></trix-editor>
    </div>
   
        <button type="submit" class="btn btn-primary">Update Post</button>
      </form>
    
</div>

<script>
  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');

  title.addEventListener('change',function(){
    fetch('/dashboard/posts/checkSlug?title=' + title.value)
    .then(response => response.json())  //kita ambil isinya |responsenya kita jalankan dimethod json| json masih (promise)
    .then(data => slug.value = data.slug)//then lagi |misal kembalian adl data | lalu data akan menganti slug value (inputan slug)
  })

  document.addEventListener('trix-file-accept',function(e){
    e.preventDefault()
  })
</script>

  @endsection