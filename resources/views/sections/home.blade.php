@extends('layouts_web.app')

@section('content')
    <section>
        <img src="{{ asset('img/LP-Sect_1.png') }}" alt="" style="width: 100vw">
        <h1 style="display: none">Karsa Guna</h1>
        <h3 style="display: none"></h3>
    </section>
    <section>
        <div class="position-relative">
            <img src="" alt="">
        </div>
        <div class="container">
            <div class="d-flex flex-column" style="align-items: center">
                <img style="width: 864px" src="{{ asset('img/LP-Sect2-Title.png') }}" alt="">
                <h1 style="display: none">Special Promotion</h1>
                <h3 class="fw-semibold" style="font-size: 28px">Discover special promotions for our products and services</h3>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
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
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
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

        </div>
    </section>
    <section>

    </section>
    <section>

    </section>
    <section>

    </section>
    <section>

    </section>
    <section>

    </section>
    <section>

    </section>
    <section>

    </section>
@endsection
