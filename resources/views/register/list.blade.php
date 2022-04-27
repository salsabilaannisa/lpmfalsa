@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Users</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success col-lg-12" role="alert">
  {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-12">
  <a href="/register" class="btn btn-primary mb-3">Register</a>
        <table class="dtables table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">NRK</th>
              <th scope="col">Username</th>
              <th scope="col">Nama</th>
              <th scope="col">Hak Akses</th>
              <!-- <th scope="col">Action</th> -->
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
            <tr>
              <td>{{ $loop->iteration }} </td>
              <td>{{ $item->nrk }}</td>
              <td>{{ $item->username }}</td>
              <td style="text-transform: capitalize;">{{ $item->name }}</td>
              <td style="text-transform: capitalize;">{{ $item->hak_akses }}</td>
              <!-- <td>
                  <a href="/dashboard/posts/{{ $item->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                  <form action="/dashboard/posts/{{ $item->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
                  </form>
              </td> -->
            </tr> 
            @endforeach
          </tbody>
        </table>
      </div>

@endsection 