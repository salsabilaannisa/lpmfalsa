@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kategori Berita</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success col-lg-12" role="alert">
  {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-12">
  <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Tambah Kategori</a>
        <table class="dtables table table-striped table-sm">
          <thead>
            <tr>
              <th width="30px" scope="col">No</th>
              <th scope="col">Judul</th>
              <th width="80px" scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $item)
            <tr>
              <td>{{ $loop->iteration }} </td>
              <td>{{ $item->name }}</td>
              <td>
                  <a href="/dashboard/categories/{{ $item->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                  <form action="/dashboard/categories/{{ $item->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
                  </form>
              </td>
            </tr> 
            @endforeach
          </tbody>
        </table>
      </div>

@endsection 