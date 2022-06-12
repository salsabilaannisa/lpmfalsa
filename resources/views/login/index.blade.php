@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">

        @if(session()->has('success'))
          <div class="alert alert-success  alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        @if(session()->has('loginError'))
          <div class="alert alert-danger  alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">SILAHKAN MASUK</h1>
          <form action="/login" method="post">
            @csrf    
            <div class="form-floating">
              <input type="username" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" autofocus required value=" {{ old('username') }} "> 
              <label for="username">Username</label>
              @error('username')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="password" name="password" class="form-control" id="Password" placeholder="Password" required>
              <label for="Password">Kata Sandi</label>
            </div>
        
            <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Masuk</button>
          </form>
          <!-- <small class="d-block text-center mt-3">Not Register? <a href="/register">Register Now!</a></small> -->
        </main>
    </div>
</div>



@endsection