<nav class="navbar nav-underline navbar-expand-lg bg-white sticky-top z-50" style="box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.40);">
  <div class="container-fluid z-50">
    <a class="navbar-brand" style="margin-left: 70px;" href="/"><img style="max-width: 150px" src="{{ asset('img/Logo-MojoWorks.png') }}" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center pe-5" id="navbarSupportedContent">
      <ul class="navbar-nav nav-underline" style="gap: 30px">
        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
          <a class="nav-link fw-bold" style="{{ Request::is('/') ? 'font-family: Lato; font-size: 24px; font-weight: 900; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%)); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;' : 'font-size: 24px;'}}" href="/">Beranda</a>
        </li>
        <li class="nav-item {{ Request::is('workshop') ? 'active' : '' }}">
          <a class="nav-link" style="{{ Request::is('workshop') ? 'font-family: Lato; font-size: 24px; font-weight: 900; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%)); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;' : 'font-size: 24px;'}}" href="/workshop">Workshop</a>
        </li>
        <li class="nav-item {{ Request::is('umkm') ? 'active' : '' }}">
          <a class="nav-link" style="{{ Request::is('umkm') ? 'font-family: Lato; font-size: 24px; font-weight: 900; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%)); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;' : 'font-size: 24px;'}}" href="/umkm">UMKM</a>
        </li>
        <li class="nav-item {{ Request::is('profile') ? 'active' : '' }}">
          <a class="nav-link" style="{{ Request::is('profile') ? 'font-family: Lato; font-size: 24px; font-weight: 900; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%)); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;' : 'font-size: 24px;'}}" href="/profile">Profil</a>
        </li>
      </ul>
    </div>
    <a class="btn" style="padding: 10px; padding-inline: 20px; margin-right: 80px; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));" href="https://www.instagram.com/mojooworkss.id/" target="_blank">
      <span style="color: #FFFAF6; font-family: Lato; font-size: 20px; font-weight: 600;">Kontak Kami</span>
    </a>
  </div>
</nav>
