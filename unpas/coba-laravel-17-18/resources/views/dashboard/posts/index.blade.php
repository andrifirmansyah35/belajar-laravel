@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Posts</h1>
    </div>

    <div class="table-responsive col-lg-8">
        <a href="/dashboard/posts/create" class="btn btn-primary mb-3">create new posts</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th> 
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $post->name }}</td>
                    <td>{{ $post->category->name }}</td>
                    <td>
                        <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info text-decoration-none">lihat</a>
                        <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-warning text-decoration-none">edit</a>
                        <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-danger text-decoration-none">hapus</a>                    
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
