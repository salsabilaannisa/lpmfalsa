@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Tambah Pengguna</h1>
</div>

<div class="col-lg-8">
  <form action="/register" method="post">
    @csrf

    <div class="form-floating">
      <input type="text" name="nrk" class="form-control rounded-top @error('nrk') is-invalid @enderror" id="nrk" placeholder="Nrk" required value="{{ old('nrk') }}">
      <label for="nrk">NRK</label>
      @error('nrk')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>


    <div class="form-floating">
      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
      <label for="name">Nama</label>
      @error('name')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="form-floating">
      <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
      <label for="username">Username</label>
      @error('username')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="form-floating">
      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
      <label for="email">Alamat Email</label>
      @error('email')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="form-floating">
      <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
      <label for="password">Kata Sandi</label>
      @error('password')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <button class="btn btn-primary mt-3" type="submit">Tambah</button>
    <button type="reset" onclick="window.history.back()" class="btn btn-warning mt-3">Kembali</button>
  </form>
</div>



@endsection