<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          @if(auth()->user()->hak_akses == 'reporter')
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
              <span data-feather="file-text"></span>
              Postingan
            </a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
              <span data-feather="file-text"></span>
              Kategori
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
              <span data-feather="file-text"></span>
              Postingan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/register/list">
              <span data-feather="file-text"></span>
              Pengguna
            </a>
          </li>
          @endif
        </ul>
      </div>
    </nav>