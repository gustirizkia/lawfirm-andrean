<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="/">
        <img src="{{ asset('gambar/logo.png') }}" class="img-fluid" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" aria-current="page" href="#">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ (request()->is('layanan*')) ? 'active' : '' }}" href="{{ route('page-layanan') }}">LAYANAN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ARTIKEL HUKUM</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">PKPU</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">KONTAK KAMI</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
