@extends('dashboard.layouts.main')

@section('container')
<div class="container">
        <div class="row my-3">
          <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }} </h1>

            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Kembali ke Postingan</a>
            @if(Auth::user()->hak_akses == 'reporter')
            <a href="/dashboard/posts/{{ $post->slug}}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="trash"></span> Delete</button>
            </form>
            @if($post->status == 'accepted' || $post->status == 'unpublished')
                  <form action="/dashboard/posts/confirm/{{ $post->slug }}/2" method="post" class="d-inline">
                    @method('post')
                    @csrf
                    <button class="btn btn-success" onclick="return confirm('Are you sure?')"><span data-feather="monitor"></span> Publish</button>
            </form>
            @elseif($post->status == 'published')
            <form action="/dashboard/posts/confirm/{{ $post->slug }}/3" method="post" class="d-inline">
                    @method('post')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Unpublish</button>
            </form>
            @endif
            @else
            
            <form action="/dashboard/posts/confirm/{{ $post->slug }}/0" method="post" class="d-inline">
                    @method('post')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Tolak</button>
            </form>
            <form action="/dashboard/posts/confirm/{{ $post->slug }}/1" method="post" class="d-inline">
                    @method('post')
                    @csrf
                    <button class="btn btn-success" onclick="return confirm('Are you sure?')"><span data-feather="check-circle"></span> Setuju</button>
            </form>
            @endif
            
            <br>
            <br> Oleh : {{ $post->author->name }} </br>


            @if($post->image)
              <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/public/'.$post->image) }}" onerror="this.onerror=null;this.src='https://source.unsplash.com/1200x400?{{ $post->category->name }}';"  alt="{{ $post->category->name }}" class="img-fluid mt-3">
              </div>
            @else
              <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
            @endif
            

            <article class="my-3 fs-5">
                {!! $post->body !!} 
            </article> 

          </div>  
        </div>
    </div>

@endsection  