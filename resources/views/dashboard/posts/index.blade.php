@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Posts</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success col-lg-12" role="alert">
  {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-12">
  @if(Auth::user()->hak_akses == 'reporter')
  <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create new post</a>
  @endif
  <table class="dtables table table-striped table-sm">
    <thead>
      <tr>
        <th width="30px" scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Category</th>
        @if(Auth::user()->hak_akses == 'reporter')
        <th scope="col">Status</th>
        @endif
        <th width="180px" scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
      <tr>
        <td>{{ $loop->iteration }} </td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->category->name }}</td>
        @if(Auth::user()->hak_akses == 'reporter')
        <td style="text-transform: capitalize;">{{ $post->status }}</td>
        @endif
        <td>
          <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
          @if(Auth::user()->hak_akses == 'reporter')
          <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
          <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="trash"></span></button>
          </form>
          @if($post->status == 'accepted' || $post->status == 'unpublished')
          <form action="/dashboard/posts/confirm/{{ $post->slug }}/2" method="post" class="d-inline">
            @method('post')
            @csrf
            <button class="badge bg-success border-0" onclick="return confirm('Are you sure?')"><span data-feather="monitor"></span> Publish</button>
          </form>
          @elseif($post->status == 'published')
          <form action="/dashboard/posts/confirm/{{ $post->slug }}/3" method="post" class="d-inline">
            @method('post')
            @csrf
            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Unpublish</button>
          </form>
          @endif
          @endif
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection