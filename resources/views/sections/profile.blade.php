@extends('layouts_web.app')
@section('title', 'detail-berita')
@section('content')


<section>
    <div class="position-relative">
        <img class="position-absolute" src="{{ asset('img/LP-Sect-1-BG.png') }}" alt="" style="top: -150px; z-index: -50">
        <img class="position-absolute" src="{{ asset('img/LP-Sect2-Decor.png') }}" alt="" style="top: -90px; z-index: -50">
        <img class="position-absolute" src="{{ asset('img/Profile-Sect1-Decor-2.png') }}" alt="" style="top: 580px; margin-left: 70px; width: 1300px">
        <img class="position-absolute" src="{{ asset('img/Profile-Sect1-Text-Wrapper.png') }}" alt="" style="top:780px; left: 170px">
    </div>
    <h1 style="text-align: center;
    font-family: Lato;
    font-size: 96px;
    font-style: normal; margin-top: 70px;
    font-weight: 800;
    line-height: normal; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;">Profil Mojoworks</h1>
    <div class="d-flex flex-column" style="">
        <img src="{{ asset('img/Profile-Sect1.png') }}" alt="" style="box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.50); margin-left: auto; margin-right: auto">
    </div>
    <p style="color: #1E1E1E;
    text-align: justify;
    font-family: Lato;
    font-size: 24px;
    font-style: normal;
    font-weight: 700;
    line-height: 44px; /* 183.333% */ ; margin-inline: 220px; margin-top: 60px">
        Mojoworks adalah wajah baru untuk usaha kerajinan kulit rintisan dari Bapak Sugianto, yang berlokasi di Tanggulangin, Sidoarjo. Nama Kana terbentuk dari gabungan 2 kata, yakni “karsa” yang berarti karya dan “guna” yang berarti kualitas/sifat. Harapannya, Kana dapat memberikan citra yang positif bagi usaha beliau dan membawa kemajuan yang signifikan terhadap perkembangan usahanya. Karsa Guna menawarkan produk seni yang unik, berkarakter, dan berkualitas tinggi serta berorientasi pada pengguna, serta pengalaman unik dalam membuat kerajinan kulit  yang bisa dirasakan langsung lewat Workshop Kana.
    </p>
    <div class="d-flex flex-column">
        <h2 style="text-align: center;
        font-family: Lato;
        font-size: 48px;
        font-style: normal;
        font-weight: 800;
        line-height: normal; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent; margin-bottom: 10px">
            MOTTO Mojoworks
        </h2>
        <h4 style="text-align: center; color: #363636;
        font-family: Lato;
        font-size: 40px;
        font-style: italic;
        font-weight: 500;
        line-height: normal;
        letter-spacing: 2px; margin-bottom: 10px">
            “Bringing Character to Leather Craft”
        </h4>
        <img src="{{ asset('img/Profile-Sect1-Text-Bot-Decor.png') }}" alt="" style="width: 750px; margin-left: auto; margin-right: auto; margin-bottom: 100px">
    </div>
</section>
<section>
    <div class="position-relative">
        {{-- <img class="position-absolute" src="{{ asset('img/Profile-Sect2-title-decor.png') }}" alt="" style="width: 100%; top: 50px"> --}}
    </div>
    <h1 style="
    font-size: 96px;
    text-align: center;
    font-style: normal;
    font-weight: 500;
    line-height: normal; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;">Layanan Mojoworks</h1>
    <p style="color: #1E1E1E;
    text-align: center;
    font-family: Lato;
    font-size: 32px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;">Kana menghadirkan beragam manfaat yang tak tertandingi </p>
    <div class="row justify-content-center">
        <div class="col-sm-4" style="max-width: 400px; max-height: 450px">
            <a href="{{ url('detailumkm', ['id' => $umkm->id_umkm]) }}" style="text-decoration: none">
                <div class="card" style="border-radius: 30px;
                background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
                box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                    <img class="card-img-top mx-auto" src="{{ asset('img/UMKM Image/' . $umkm->umkm_img) }}" style="height:300px; width:90%;margin-top:5%">
                    <div class="card-body">
                        <h4 class="card-title" style="color: #FFF; text-align: center; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); font-size: 44px; font-weight: 900; margin-bottom: 0px">{{ $umkm->nama_usaha }}</h4>
                        <p style="color: #FFF; text-align: center; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); font-size: 28px; font-weight: 600;">{{ $umkm->kategori_usaha }}</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
<section>
    <h1>Segenap Tim Mojoworks</h1>
    <p>Mari berkenalan dengan siapa saja sosok yang ada dibalik Mojoworks</p>
</section>


@endsection