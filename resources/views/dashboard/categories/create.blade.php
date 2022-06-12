@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Kategori</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/categories" class="mb-5" enctype="multipart/form-data">
       @csrf 
      <div class="mb-3">
        <label for="title" class="form-label">Judul</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
        @error('name') 
          <div class="invalid-feedback">
            {{ $message }} 
          </div>
        @enderror
       </div>
      <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
        @error('slug') 
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror 
      </div>
      <button type="submit" class="btn btn-primary">Tambah</button>
      <button type="reset" onclick="window.history.back()" class="btn btn-warning">Kembali</button>
    </form>   
</div>

<script>
   const title = document.querySelector('#name');
   const slug = document.querySelector('#slug');

   title.addEventListener('change', function(){
       fetch('/dashboard/categories/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
   });

   document.addEventListener('trix-file-accept', function(e) {
     e.preventDefault();
   })
</script>
 
@endsection