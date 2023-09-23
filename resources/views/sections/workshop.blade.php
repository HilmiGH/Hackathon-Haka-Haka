@extends('layouts_web.app')
@section('title', 'Beranda')
@section('content')

<style>
    /* Set the left container to take 70% of the width */
    .left-container {
        flex: 70%;
        padding-inline: 80px; /* Add padding as needed */
        padding-block: 40px;
    }

    /* Set the right container to take 30% of the width */
    .right-container {
        flex: 30%;
        padding: 20px; /* Add padding as needed */
    }

    .checked {
    color: orange;
}
</style>

<div class="d-flex">
    <div class="left-container">
        <section style="background-image: url({{ asset('img/LP-Sect-1-BG.png') }});">
            <div class="" style="border-radius: 11.533px; width: 175px; margin-bottom: 20px;
            background: rgba(62, 104, 178, 0.15); padding: 10px; padding-inline: 30px">
                <span style="font-family: Lato;
                font-size: 24px;
                font-style: normal;
                font-weight: 900;
                line-height: normal; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
                background-clip: text;
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;">
                    Workshop
                </span>
            </div>
            <h1 style="font-family: Lato;
            font-size: 48px;
            font-style: normal;
            font-weight: 900;
            line-height: normal;
            text-transform: uppercase; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;">WORKSHOP STRATEGI JITU <br> MEMAJUKAN KIM SURABAYA</h1>
    <div style="margin-block: 20px">
        <span style="color: rgba(92, 92, 92, 0.50);
        font-family: Lato;
        font-size: 48px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        text-decoration: line-through;
        margin-right: 10px">Rp200.000</span>
        <span style="color: #C72727;
        font-family: Lato;
        font-size: 48px;
        font-style: normal;
        font-weight: 800;
        line-height: normal;">Rp25.000</span>
    </div>
    <div style="margin-top: 30px; padding-bottom: 60px" class="d-flex align-content-center">
        <span style="font-size: 26px; margin-right: 5px" class="fa fa-star checked"></span>
        <span style="font-size: 26px; margin-right: 5px" class="fa fa-star checked"></span>
        <span style="font-size: 26px; margin-right: 5px" class="fa fa-star checked"></span>
        <span style="font-size: 26px; margin-right: 5px" class="fa fa-star"></span>
        <span style="font-size: 26px; margin-right: 5px" class="fa fa-star"></span>
        <span style="margin-right: 10px; color: #141414;
        font-family: Lato;
        font-size: 24px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;">4.0</span>
        <span style="margin-right: 5px; color: #141414;
        font-family: Lato;
        font-size: 24px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;">(200 ulasan)</span>
        <span style="font-size: 40px; line-height: 60%; margin-right: 5px">|</span>
        <span><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
            <path d="M1.08301 21.6666V18.6333C1.08301 18.0194 1.24117 17.455 1.55751 16.94C1.87384 16.4251 2.29345 16.0326 2.81634 15.7624C3.93579 15.2027 5.07329 14.7828 6.22884 14.5025C7.3844 14.2223 8.55801 14.0826 9.74967 14.0833C10.9413 14.0833 12.115 14.2234 13.2705 14.5036C14.4261 14.7838 15.5636 15.2034 16.683 15.7624C17.2066 16.0333 17.6266 16.4262 17.9429 16.9411C18.2593 17.4561 18.4171 18.0201 18.4163 18.6333V21.6666H1.08301ZM20.583 21.6666V18.4166C20.583 17.6222 20.3616 16.8591 19.9189 16.1275C19.4762 15.3959 18.849 14.7687 18.0372 14.2458C18.958 14.3541 19.8247 14.5394 20.6372 14.8015C21.4497 15.0637 22.208 15.384 22.9122 15.7624C23.5622 16.1236 24.0587 16.5251 24.4018 16.9671C24.7448 17.4091 24.9163 17.8923 24.9163 18.4166V21.6666H20.583ZM9.74967 12.9999C8.55801 12.9999 7.53787 12.5756 6.68926 11.727C5.84065 10.8784 5.41634 9.85828 5.41634 8.66661C5.41634 7.47495 5.84065 6.45481 6.68926 5.6062C7.53787 4.75759 8.55801 4.33328 9.74967 4.33328C10.9413 4.33328 11.9615 4.75759 12.8101 5.6062C13.6587 6.45481 14.083 7.47495 14.083 8.66661C14.083 9.85828 13.6587 10.8784 12.8101 11.727C11.9615 12.5756 10.9413 12.9999 9.74967 12.9999ZM20.583 8.66661C20.583 9.85828 20.1587 10.8784 19.3101 11.727C18.4615 12.5756 17.4413 12.9999 16.2497 12.9999C16.0511 12.9999 15.7983 12.9772 15.4913 12.9317C15.1844 12.8862 14.9316 12.8367 14.733 12.7833C15.2205 12.2055 15.5953 11.5645 15.8575 10.8604C16.1197 10.1562 16.2504 9.42495 16.2497 8.66661C16.2497 7.90828 16.119 7.17703 15.8575 6.47286C15.5961 5.7687 15.2212 5.12772 14.733 4.54995C14.9858 4.45967 15.2386 4.40081 15.4913 4.37336C15.7441 4.34592 15.9969 4.33256 16.2497 4.33328C17.4413 4.33328 18.4615 4.75759 19.3101 5.6062C20.1587 6.45481 20.583 7.47495 20.583 8.66661Z" fill="#141414"/>
          </svg></span>
        <span style="color: #141414;
        font-family: Lato;
        font-size: 24px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;">1.200+ sudah ikutan</span>
    </div>
        </section>
        <section>
            <nav class="nav ">
                <a class="nav-link active" style=" font-family: Lato;
                font-size: 28px;
                font-style: normal;
                font-weight: 800;
                line-height: normal; ; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
                background-clip: text;
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;" href="#" aria-current="page">Deskripsi</a>
                <a class="nav-link" style="color: #2E2E2E;
                font-family: Lato;
                font-size: 28px;
                font-style: normal;
                font-weight: 800;
                line-height: normal;" href="#">Materi</a>
                <a class="nav-link" style="color: #2E2E2E;
                font-family: Lato;
                font-size: 28px;
                font-style: normal;
                font-weight: 800;
                line-height: normal;" href="#">Jadwal</a>
                <a style="color: #2E2E2E;
                font-family: Lato;
                font-size: 28px;
                font-style: normal;
                font-weight: 800;
                line-height: normal;" class="nav-link" href="#">Peserta</a>
                <a style="color: #2E2E2E;
                font-family: Lato;
                font-size: 28px;
                font-style: normal;
                font-weight: 800;
                line-height: normal;" class="nav-link" href="#">Fasilitator</a>
                <a style="color: #2E2E2E;
                font-family: Lato;
                font-size: 28px;
                font-style: normal;
                font-weight: 800;
                line-height: normal;" class="nav-link" href="#">Ulasan</a>
              </nav>
        </section>
    </div>
    <aside class="right-container">

    </aside>
</div>

@endsection
