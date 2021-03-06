<nav class="navbar navbar-expand-lg navbar-dark bg-white">
<div class="col-12">
<img src="{{ asset('logo.jpg') }}" height="130" style="display: block; margin-left: auto; margin-right: auto;" onerror="this.onerror=null;this.src='https://source.unsplash.com/1200x400?Not-Found';" alt="logo" >
</div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <div class="container">
    <!-- <a class="navbar-brand" href="/">LPM Falsa</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        @foreach($mycategory as $item)
        <li class="nav-item">
          <a class="nav-link {{ ($active === $item->slug) ? 'active' : '' }}" style="padding-right: 2.5rem;" href="/posts?category={{$item->slug}}">{{$item->name}}</a>
        </li>
        @endforeach
        <li class="nav-item">
          <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" style="padding-right: 2.5rem;" href="/categories">Lainnya</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" style="padding-right: 2.5rem;" href="/about">Tentang Kami</a>  
        </li>
      </ul>
      <div class="navbar-nav ms-auto" >
      <!-- <form class="navbar-nav ms-auto" method="get" action="/posts">
        <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success" type="submit">Search</button>
      </form> -->
        <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome back, {{ auth()->user()->name }}
            </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
                  @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Keluar</a></button>
              </form>
            </li>
          </ul>
        </li>  
          @else 
          <li class="nav-item">
            <a href="/login" class="btn btn-light" style="margin-left: 5px;"><i class="bi bi-box-arrow-right"></i> Masuk</a>
          </li>
          @endauth
        </ul>
      </div>
      
      
    </div>
  </div>
</nav>