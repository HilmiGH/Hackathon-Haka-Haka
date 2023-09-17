<nav class="navbar navbar-expand-lg bg-body-tertiary" style="box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.40);
">
  <div class="container-fluid">
    <a class="navbar-brand ms-5" href="#"><img src="{{ asset('img/Kana-Logo.png') }}" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center pe-5" id="navbarSupportedContent">
      <ul class="navbar-nav nav-underline" style="gap: 30px">
        <li class="nav-item">
          <a class="nav-link active fw-bold" style="font-size: 24px" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle fw-bold" style="font-size: 24px" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Catalog
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fw-bold" style="font-size: 24px" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Blog
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        <li class="nav-item fw-bold" style="font-size: 24px">
            <a class="nav-link" href="#">Profile</a>
          </li>
      </ul>
    </div>
    <div class="nav-item ms-2">
      <button style="background-color: transparent;
      background-repeat: no-repeat;
      border: none;
      cursor: pointer;
      overflow: hidden;
      outline: none;">
        <img src="{{ asset('img/Search-Logo.png') }}" alt="">
      </button>
    </div>
    <div class="nav-item ms-2">
      <button style="background-color: transparent;
      background-repeat: no-repeat;
      border: none;
      cursor: pointer;
      overflow: hidden;
      outline: none;">
        <img src="{{ asset('img/Shop-Bag-Logo.png') }}" alt="">
      </button>
    </div>
  </div>
</nav>