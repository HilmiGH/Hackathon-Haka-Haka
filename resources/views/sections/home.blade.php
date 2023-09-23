@extends('layouts_web.app')
@section('title', 'Beranda')
@section('content')
    <section style="">
        <h1 style="text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25); margin-top: 35px; font-family: Lato Black; font-size: 64px; font-weight: 900; text-align: center; background: var(--black-brown, linear-gradient(168deg, #654B36 0.97%, #000 158.49%)); background-clip: text;
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        Komunitas Informasi Masyarakat Mojo;">Komunitas Informasi Masyarakat Mojo</h1>
        <h3 style="text-shadow: 0px 2.8260304927825928px 5.6520609855651855px rgba(0, 0, 0, 0.25); font-family: Lato Black; font-size: 90.433px; font-weight: 900; text-align: center; background: var(--gradddd, linear-gradient(147deg, #0896E5 19.92%, #1E1E1E 118.03%, #000 118.03%));
        background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent; MOJOWORKS;
        background-clip: text; -webkit-background-clip: text; color: transparent">MOJOWORKS</h3>
        <div class="" style=" width: 100%; height: 110px ;background: var(--gradddd, linear-gradient(147deg, #0896E5 19.92%, #1E1E1E 118.03%, #000 118.03%));">
        </div>
    </section>
    <section style="margin-bottom: 150px">
        <div class="position-relative">
            <img class="position-absolute" src="{{asset('img/LP-Sect2-Decor.png') }}" alt="">
        </div>
        <div class="container">
            <div class="d-flex flex-column" style="align-items: center">
                <div class="position-relative">
                    <img class="position-absolute" style="left: -425px" src="{{ asset('img/LP-Section2-Title-Decor.png') }}" alt="">
                </div>
                <h1 class="" style="text-align: center;
                font-family: Lato;
                font-size: 96px;
                font-weight: 900; background-image: linear-gradient(to bottom right, var(--tw-gradient-stops)); background: var(--gradddd, linear-gradient(147deg, #4DBFFF 7.92%, #000AFF 107.06%));
                background-clip: text;
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                Liputan Kegiatan">Liputan Kegiatan</h1>
                <h3 class="" style="color: #1E1E1E;
                font-family: Lato;
                font-size: 28px;
                font-weight: 600;
                ">IKUTI PELATIHAN MOJO WORKS YANG DIBUKA HARI INI</h3>
            </div>
            <div id="carousel1" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="position-relative">
                            <div class="position-absolute" style="top: 500px">
                                <div class="" style="width: 770px; height: 95px; border-top-right-radius: 999px; border-bottom-right-radius: 999px; padding: 10px; padding-inline: 40px; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));">
                                    <h2 style="color: #FFF; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); font-size: 64px; font-weight: 800; ">Pentas Seni Keren</h2>
                                </div>
                                <div class="" style="width: 650px; height: 80px; border-bottom-right-radius: 30px; padding: 10px; padding-inline: 40px; background-color: white">
                                    <h2 style="color: #0896E5; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); font-size: 32px; font-weight: 600; ">Subtitle</h2>
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('img/LP-Sect2-Img.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <div class="position-relative">
                            <div class="position-absolute" style="top: 500px">
                                <div class="" style="width: 770px; height: 95px; border-top-right-radius: 999px; border-bottom-right-radius: 999px; padding: 10px; padding-inline: 40px; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));">
                                    <h2 style="color: #FFF; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); font-size: 64px; font-weight: 800; ">Pentas Seni Keren</h2>
                                </div>
                                <div class="" style="width: 650px; height: 80px; border-bottom-right-radius: 30px; padding: 10px; padding-inline: 40px; background-color: white">
                                    <h2 style="color: #0896E5; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); font-size: 32px; font-weight: 600; ">Subtitle</h2>
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('img/LP-Sect2-Img.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <div class="position-relative">
                            <div class="position-absolute" style="top: 500px">
                                <div class="" style="width: 770px; height: 95px; border-top-right-radius: 999px; border-bottom-right-radius: 999px; padding: 10px; padding-inline: 40px; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));">
                                    <h2 style="color: #FFF; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); font-size: 64px; font-weight: 800; ">Pentas Seni Keren</h2>
                                </div>
                                <div class="" style="width: 650px; height: 80px; border-bottom-right-radius: 30px; padding: 10px; padding-inline: 40px; background-color: white">
                                    <h2 style="color: #0896E5; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); font-size: 32px; font-weight: 600; ">Subtitle</h2>
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('img/LP-Sect2-Img.png') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <section style="margin-bottom: 50px">
        <div class="position-relative">
            <img class="position-absolute" src="{{ asset('img/LP-Section3-Decor.png') }}" alt="">
        </div>
        <div class="container" style="min-height: 1150px">
            <div class="d-flex flex-column" style="align-items: center">
                <div class="position-relative">
                    <img class="position-absolute" src="{{ asset('img/LP-Sect3-Title-Decor.png') }}" alt="" style="left: -575px; top: 25px">
                </div>
                <h1 style="text-align: center; font-size: 96px; font-weight: 900; color: transparent; margin-bottom: 0px; line-height: 90% ; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
                background-clip: text;
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;">UMKM MOJO</h1>
                <h3 class="" style="color: #1E1E1E;
                font-family: Lato;
                font-size: 28px;
                font-style: normal;
                font-weight: 600;
                line-height: normal;">Temukan Produk Terbaik Buatan UMKM Pilihan Mojo Works</h3>
            </div>
            <div id="carousel2" class="carousel slide" style="height: 600px">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carousel2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carousel2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" style="height: 1050px">
                    <div class="carousel-item active">
                        <div class="d-block w-100" style="">
                            <div class="row justify-content-center" style="margin-bottom: 70px">
                                <div class="col-sm-4" style="max-width: 400px; max-height: 450px">
                                    <a href=""; style="text-decoration: none">
                                        <div class="card" style="border-radius: 30px;
                                        background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
                                        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                            <img class="card-img-top mx-auto" src="{{ asset('img/produk.png') }}" alt="Card image"
                                                style="width:90%;margin-top:5%">
                                            <div class="card-body">
                                                <h4 class="card-title" style="color: #FFF; text-align: center; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); font-size: 44px; font-weight: 900; margin-bottom: 0px">LEDEVIAR</h4>
                                                <p style="color: #FFF; text-align: center; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); font-size: 28px; font-weight: 600;">
                                                    UMKM KERAJINAN
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-4" style="max-width: 400px; max-height: 450px">
                                    <a href=""; style="text-decoration: none">
                                        <div class="card" style="border-radius: 30px;
                                        background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
                                        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                            <img class="card-img-top mx-auto" src="{{ asset('img/produk.png') }}" alt="Card image"
                                                style="width:90%;margin-top:5%">
                                            <div class="card-body">
                                                <h4 class="card-title" style="color: #FFF; text-align: center; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); font-size: 44px; font-weight: 900; margin-bottom: 0px">LEDEVIAR</h4>
                                                <p style="color: #FFF; text-align: center; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); font-size: 28px; font-weight: 600;">
                                                    UMKM KERAJINAN
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-4" style="max-width: 400px; max-height: 450px">
                                    <a href=""; style="text-decoration: none">
                                        <div class="card" style="border-radius: 30px;
                                        background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
                                        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                            <img class="card-img-top mx-auto" src="{{ asset('img/produk.png') }}" alt="Card image"
                                                style="width:90%;margin-top:5%">
                                            <div class="card-body">
                                                <h4 class="card-title" style="color: #FFF; text-align: center; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); font-size: 44px; font-weight: 900; margin-bottom: 0px">LEDEVIAR</h4>
                                                <p style="color: #FFF; text-align: center; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); font-size: 28px; font-weight: 600;">
                                                    UMKM KERAJINAN
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-sm-4" style="max-width: 400px; max-height: 450px">
                                    <a href=""; style="text-decoration: none">
                                        <div class="card" style="border-radius: 30px;
                                        background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
                                        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                            <img class="card-img-top mx-auto" src="{{ asset('img/produk.png') }}" alt="Card image"
                                                style="width:90%;margin-top:5%">
                                            <div class="card-body">
                                                <h4 class="card-title" style="color: #FFF; text-align: center; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); font-size: 44px; font-weight: 900; margin-bottom: 0px">LEDEVIAR</h4>
                                                <p style="color: #FFF; text-align: center; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); font-size: 28px; font-weight: 600;">
                                                    UMKM KERAJINAN
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-4" style="max-width: 400px; max-height: 450px">
                                    <a href=""; style="text-decoration: none">
                                        <div class="card" style="border-radius: 30px;
                                        background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
                                        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                            <img class="card-img-top mx-auto" src="{{ asset('img/produk.png') }}" alt="Card image"
                                                style="width:90%;margin-top:5%">
                                            <div class="card-body">
                                                <h4 class="card-title" style="color: #FFF; text-align: center; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); font-size: 44px; font-weight: 900; margin-bottom: 0px">LEDEVIAR</h4>
                                                <p style="color: #FFF; text-align: center; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); font-size: 28px; font-weight: 600;">
                                                    UMKM KERAJINAN
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-4" style="max-width: 400px; max-height: 450px">
                                    <a href=""; style="text-decoration: none">
                                        <div class="card" style="border-radius: 30px;
                                        background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
                                        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                                            <img class="card-img-top mx-auto" src="{{ asset('img/produk.png') }}" alt="Card image"
                                                style="width:90%;margin-top:5%">
                                            <div class="card-body">
                                                <h4 class="card-title" style="color: #FFF; text-align: center; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); font-size: 44px; font-weight: 900; margin-bottom: 0px">LEDEVIAR</h4>
                                                <p style="color: #FFF; text-align: center; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); font-size: 28px; font-weight: 600;">
                                                    UMKM KERAJINAN
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/LP-SP-Promo.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/LP-SP-Promo.png') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <section style="margin-bottom: 50px">
        <div class="position-relative">

        </div>
        <div class="container">
            <h1 class="" style="font-size: 64px; font-weight: 800">Featured Product</h1>
            <div id="carousel3" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carousel3" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carousel3" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/LP-SP-Promo.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/LP-SP-Promo.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/LP-SP-Promo.png') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel3" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel3" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <section>
        <div class="position-relative">

        </div>
        <div class="container">
            <h1 class="" style="font-size: 64px; font-weight: 800">Newest Product</h1>
            <div id="carousel4" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel4" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carousel4" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carousel4" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/LP-SP-Promo.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/LP-SP-Promo.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/LP-SP-Promo.png') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel4" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel4" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <section style="margin-bottom: 150px">
        <div class="position-relative">
        </div>
        <div class="container">
            <h1 style="font-size: 64px; text-align: center; margin-bottom: 30px">KANA Official Store</h1>
            <div class="container" style="padding-inline: 100px">
                <div class="row" style="gap: 50px; margin-bottom: 30px">
                    <div class="col" style="border-radius: 12px; height: 200px; background-color: black">
                        Test1
                    </div>
                    <div class="col" style="border-radius: 12px; height: 200px; background-color: black">
                        Test2
                    </div>
                </div>
                <div class="row" style="gap: 50px; margin-bottom: 30px">
                    <div class="col" style="border-radius: 12px; height: 200px; background-color: black">
                        Test3
                    </div>
                    <div class="col" style="border-radius: 12px; height: 200px; background-color: black">
                        Test4
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="margin-bottom: 150px">
        <div class="position-relative">

        </div>
        <div class="container">
            <div class="d-flex flex-column" style="align-items: center">
                <img style="" src="{{ asset('img/LP-Section8-Title.png') }}" alt="">
                <h1 style="display: none">Workshop</h1>
                <h3 class="fw-semibold" style="font-size: 28px">Starting to Learn Leather Craft Through a Workshop</h3>
            </div>
            <div id="carousel5" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel5" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carousel5" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carousel5" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/LP-Workshop-Banner.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/LP-Workshop-Banner.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/LP-Workshop-Banner.png') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel5" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel5" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <section style="margin-bottom: 150px">
        <div class="position-relative">

        </div>
        <div class="container">
            <div class="d-flex flex-column" style="align-items: center; margin-bottom: 170px">
                <img style="" src="{{ asset('img/LP-Section9-Title.png') }}" alt="">
                <h1 style="display: none">Testimonial</h1>
                <h3 class="fw-semibold" style="font-size: 28px">Discover their insights and impressions of Kana</h3>
            </div>
            <div id="carousel6" class="carousel slide" style="height: 720px;">
                <div class="carousel-indicators" style="">
                    <button type="button" data-bs-target="#carousel6" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carousel6" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carousel6" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active d-flex justify-content-center" style="gap: 50px">
                        <div style="border-radius: 40px; background-color: gray; padding-inline: 44px; padding-block: 80px ; width: 590px; margin-top: 120px">
                            <div class="position-relative;" style="margin-left: 30%">
                                <div style="height: 195px ;width: 195px ;background-color: black ;border-radius: 701.298px; box-shadow: 0px 1.404px 2.808px 0px rgba(0, 0, 0, 0.25); position: absolute; top: 0px; overflow: hidden">
                                    <img src="{{asset('img/User-Profile-Photo.jpeg') }}" alt="" style="height: 195px ;width: 195px ;object-fit: cover">
                                </div>
                            </div>
                            <p style="text-align: center ; color: #FFF; text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25); font-size: 48px; font-weight: 900;">
                                Jerome Polin
                            </p>
                            <p style="text-align: center; color: #FFF; text-shadow: 0px 1px 4px rgba(0, 0, 0, 0.25); font-size: 36px; font-weight: 600;">
                                Influencer
                            </p>
                            <p style="text-align: justify; color: #FFF; text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25); font-size: 28px; font-weight: 600;">
                                “Kana's leather pieces have become an essential part of my daily style. The attention to detail and the superb quality make them a must-have for anyone who values both fashion and functionality. Kudos to Kana for redefining leather craftsmanship!”
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div style="border-radius: 40px; background-color: gray; padding-inline: 44px; padding-block: 80px ; width: 590px; margin-top: 120px">
                            <div class="position-relative;" style="margin-left: 30%">
                                <div style="height: 195px ;width: 195px ;background-color: black ;border-radius: 701.298px; box-shadow: 0px 1.404px 2.808px 0px rgba(0, 0, 0, 0.25); position: absolute; top: 0px; overflow: hidden">
                                    <img src="{{asset('img/User-Profile-Photo.jpeg') }}" alt="" style="height: 195px ;width: 195px ;object-fit: cover">
                                </div>
                            </div>
                            <p style="text-align: center ; color: #FFF; text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25); font-size: 48px; font-weight: 900;">
                                Jerome Polin
                            </p>
                            <p style="text-align: center; color: #FFF; text-shadow: 0px 1px 4px rgba(0, 0, 0, 0.25); font-size: 36px; font-weight: 600;">
                                Influencer
                            </p>
                            <p style="text-align: justify; color: #FFF; text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25); font-size: 28px; font-weight: 600;">
                                “Kana's leather pieces have become an essential part of my daily style. The attention to detail and the superb quality make them a must-have for anyone who values both fashion and functionality. Kudos to Kana for redefining leather craftsmanship!”
                            </p>
                        </div>
                    <div class="carousel-item">
                        <div style="border-radius: 40px; background-color: gray; padding-inline: 44px; padding-block: 80px ; width: 590px; margin-top: 120px">
                            <div class="position-relative;" style="margin-left: 30%">
                                <div style="height: 195px ;width: 195px ;background-color: black ;border-radius: 701.298px; box-shadow: 0px 1.404px 2.808px 0px rgba(0, 0, 0, 0.25); position: absolute; top: 0px; overflow: hidden">
                                    <img src="{{asset('img/User-Profile-Photo.jpeg') }}" alt="" style="height: 195px ;width: 195px ;object-fit: cover">
                                </div>
                            </div>
                            <p style="text-align: center ; color: #FFF; text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25); font-size: 48px; font-weight: 900;">
                                Jerome Polin
                            </p>
                            <p style="text-align: center; color: #FFF; text-shadow: 0px 1px 4px rgba(0, 0, 0, 0.25); font-size: 36px; font-weight: 600;">
                                Influencer
                            </p>
                            <p style="text-align: justify; color: #FFF; text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25); font-size: 28px; font-weight: 600;">
                                “Kana's leather pieces have become an essential part of my daily style. The attention to detail and the superb quality make them a must-have for anyone who values both fashion and functionality. Kudos to Kana for redefining leather craftsmanship!”
                            </p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel6" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel6" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <section>
        <div class="position-relative">

        </div>
        <div>
            <div class="d-flex flex-column" style="align-items: center">
                <div class="" style="background-color: gray; padding-block: 40px; padding-inline: 150px; border-top-right-radius: 99px; border-top-left-radius: 99px">
                    <img style="" src="{{ asset('img/LP-Section10-Title.png') }}" alt="">
                </div>
                <h1 style="display: none">Our Company</h1>
            </div>
            <div style="padding-bottom: 60px ;background-image: url({{ asset('img/LP-Sect10-Background.png') }})">
                <div class="container">
                    <div class="d-flex" style="padding-block-start: 100px; padding-block-end: 80px ; gap: 50px;">
                        <img src="{{ asset('img/LP-Sect10-Photo.png') }}" alt="">
                        <div style="">
                            <div class="" style="font-weight: 900; font-size: 96px; color: white; line-height: 90%; margin-bottom: 30px">Karsa Guna</div>
                            <div class="fw-medium" style="color: white; font-size: 26px; text-align: justify; margin-bottom: 30px">Lorem ipsum dulu sit amet Lorem ipsum dulu sit amet Lorem ipsum dulu sit amet Lorem ipsum dulu sit amet Lorem ipsum dulu sit amet Lorem ipsum dulu sit amet Lorem ipsum dulu sit amet Lorem ipsum dulu sit amet Lorem ipsum dulu sit amet Lorem ipsum dulu sit amet Lorem ipsum dulu sit amet Lorem ipsum dulu sit amet Lorem ipsum dulu sit amet Lorem ipsum dulu sit amet Lorem ipsum dulu sit amet Lorem ipsum dulu sit amet Lorem ipsum dulu sit amet Lorem ipsum dulu sit amet .</div>
                            <div class="d-flex" style="gap: 50px">
                                <a href="" style="text-decoration: none; background-color: gray; padding-block: 10px; padding-inline: 60px ; border-radius: 12px">
                                    <span class="fw-bold" style="font-size: 24px; color: white">Read More</span>
                                </a>
                                <a href="" style="text-decoration: none; background-color: gray; padding-block: 10px; padding-inline: 60px ; border-radius: 12px">
                                    <span class="fw-bold" style="font-size: 24px; color: white">View Catalog</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex" style="gap: 20px;">
                        <div style="background-color: gray; border-radius: 30px; width: 300px; height: 270px; padding-block-start: 60px">
                            <div style="font-size: 96px; font-weight: 900; color: white; line-height: 105%; text-align: center">99+</div>
                            <div style="font-size: 36px; font-weight: 600; color: white; text-align: center">Product</div>
                        </div>
                        <div style="background-color: gray; border-radius: 30px; width: 300px; height: 270px; padding-block-start: 60px">
                            <div style="font-size: 96px; font-weight: 900; color: white; line-height: 105%; text-align: center">99+</div>
                            <div style="font-size: 36px; font-weight: 600; color: white; text-align: center">Business Partner</div>
                        </div>
                        <div style="background-color: gray; border-radius: 30px; width: 300px; height: 270px; padding-block-start: 60px">
                            <div style="font-size: 96px; font-weight: 900; color: white; line-height: 105%; text-align: center">99+</div>
                            <div style="font-size: 36px; font-weight: 600; color: white; text-align: center">Reseller</div>
                        </div>
                        <div style="background-color: gray; border-radius: 30px; width: 300px; height: 270px; padding-block-start: 60px">
                            <div style="font-size: 96px; font-weight: 900; color: white; line-height: 105%; text-align: center">99+</div>
                            <div style="font-size: 36px; font-weight: 600; color: white; text-align: center">Transactions</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        const myCarouselElement = document.querySelector('#myCarousel')

        const carousel = new bootstrap.Carousel(myCarouselElement, {
        interval: 2000,
        touch: false
})
    </script>
@endsection
