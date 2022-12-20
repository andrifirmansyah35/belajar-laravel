@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create new Posts</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/posts">
    @csrf
        <div class="mb-3">
          <label for="title" class="form-label">title</label>
          <input type="text" class="form-control" id="title" name="title">
        </div>
        
        <div class="mb-3">
          <label for="slug" class="form-label">slug</label>
          <input type="text" class="form-control" id="slug" name="slug" disabled readonly>
      </div>
     
      <div class="mb-3">
        <label for="category" class="form-label">category</label>
        <select name="category_id" id="category" class="form-select">
          @foreach ($categories as $category)
          <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach
        </select>
    </div>

    <div class="mb-3">
      <label for="body" class="form-label">Body</label>
      <input type="hidden" id="body" name="body">
      <trix-editor input="body"></trix-editor>
    </div>
   
        <button type="submit" class="btn btn-primary">Create Post</button>
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