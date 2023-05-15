
@php
    $partner = \DB::table('tims')->orderBy('title', 'desc')->get();
@endphp
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
          <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ (request()->is('layanan*')) ? 'active' : '' }}" href="{{ route('page-layanan') }}">Layanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ (request()->is('diferensiasi*')) ? 'active' : '' }}" href="{{ route('diferensiasi') }}">Diferensiasi</a>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link {{ (request()->is('partner*')) ? 'active' : '' }} dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Partner & Lawyer
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach ($partner as $itemPartner)
              <li><a class="dropdown-item" href="{{ route('partner', $itemPartner->slug) }}">{{ $itemPartner->nama }}</a></li>
            @endforeach
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ (request()->is('artikel*')) ? 'active' : '' }} {{ (request()->is('tulisan*')) ? 'active' : '' }}" href="{{ route('list-artikel') }}">Artikel Hukum</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ (request()->is('event*')) ? 'active' : '' }}" href="/event">Event</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ (request()->is('pkpu*')) ? 'active' : '' }}" href="{{ route('pkpu') }}">PKPU</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-warning  {{ (request()->is('kontak*')) ? 'active' : '' }}" href="{{ route('kontakKami') }}" style="color: black">Kontak Kami</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
