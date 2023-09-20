@extends('layouts_web.app')

@section('content')
    <section style="margin-bottom: 50px">
        <img src="{{ asset('img/LP-Sect_1.png') }}" alt="" style="width: 100vw">
        <h1 style="display: none">Karsa Guna</h1>
        <h3 style="display: none"></h3>
    </section>
    <section style="margin-bottom: 150px">
        <div class="position-relative">
            <img src="" alt="">
        </div>
        <div class="container">
            <div class="d-flex flex-column" style="align-items: center">
                <img style="width: 864px" src="{{ asset('img/LP-Sect2-Title.png') }}" alt="">
                <h1 style="display: none">Special Promotion</h1>
                <h3 class="fw-semibold" style="font-size: 28px">Discover special promotions for our products and services</h3>
            </div>
            <div id="carousel1" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="2" aria-label="Slide 3"></button>
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

        </div>
        <div class="container">
            <div class="d-flex flex-column" style="align-items: center">
                <img style="" src="{{ asset('img/LP-Section3-Title.png') }}" alt="">
                <h1 style="display: none">Our Product</h1>
                <h3 class="fw-semibold" style="font-size: 28px">Explore our exclusive collection now at a special price</h3>
            </div>
            <div id="carousel2" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carousel2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carousel2" data-bs-slide-to="2" aria-label="Slide 3"></button>
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
            <img src="{{ asset('img/LP-Sect6-Image.png') }}" alt="" style="width: 100vw">
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
