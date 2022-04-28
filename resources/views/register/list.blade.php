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
    <a href="/register" class="btn btn-primary mb-3">Create new User</a>
    <table class="dtables table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NRK</th>
                <th scope="col">Username</th>
                <th scope="col">Nama</th>
                <th scope="col">Hak Akses</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
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
                <td style="text-transform: capitalize;">{{ $item->status }}</td>
                <td style="text-transform: capitalize;">
                    @if($item->status == 'non-aktif' && $item->username != Auth::user()->username)
                    <form action="/register/confirm/{{ $item->username }}/aktif" method="post" class="d-inline">
                        @method('post')
                        @csrf
                        <button class="badge bg-success border-0" onclick="return confirm('Are you sure?')"><span data-feather="check-circle"></span> Aktif</button>
                    </form>
                    @elseif($item->status == 'aktif' && $item->username != Auth::user()->username)
                    <form action="/register/confirm/{{ $item->username }}/non-aktif" method="post" class="d-inline">
                        @method('post')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Non Aktif</button>
                    </form>
                    @endif

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection