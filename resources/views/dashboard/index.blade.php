@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>
</div>

<div>Selamat datang di halaman {{ auth()->user()->hak_akses }} website UKM LPM Falsa Universitas Teknologi Digital Indonesia. Silahkan klik menu pilihan yang berada disebelah kiri untuk mengelola konten website.</div>
<br></br>
<div>Terima Kasih.</div>
@endsection 