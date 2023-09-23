@extends('layouts_web.app')
@section('title', 'Beranda')
@section('content')

<style>
    /* Set the left container to take 70% of the width */
    .left-container {
        flex: 7;
    }
    .left-inner-container {
        padding-inline: 80px; /* Add padding as needed */
        padding-block: 40px;
    }

    /* Set the right container to take 30% of the width */
    .right-container {
        flex: 3;
        padding: 20px; /* Add padding as needed */
        position: sticky
        top: 0; /* Adjust the value as needed */
    }

    .checked {
    color: orange;
}
</style>

<div class="d-flex">
    <div class="left-container">
        <div class="left-inner-container" style="background-image: url({{ asset('img/LP-Sect-1-BG.png') }});">
            <section style="">
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
                <span style="font-size: 26px; margin-right: 5px" class="fa fa-star checked"></span>
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
        </div>
        <section style="padding-inline: 60px;">
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
        <section style="padding-inline: 60px; padding-left: 75px; margin-top: 40px">
            <h2 style="color: #141414;
            font-family: Lato;
            font-size: 32px;
            font-style: normal;
            font-weight: 800;
            line-height: normal;">Deskripsi Workshop</h2>
            <p style="color: #1E1E1E;
            text-align: justify;
            font-family: Lato;
            font-size: 20px;
            font-style: normal;
            font-weight: 400;
            line-height: 30px; /* 150% */">Pelatihan ini akan dipandu oleh para ahli dalam seni kerajinan kulit. Mereka akan berbagi pengetahuan mendalam mereka tentang pemilihan bahan kulit yang berkualitas, teknik pemotongan, penyusunan pola, jahitan tangan yang presisi, dan finishing yang sempurna. Pelatih kami tidak hanya akan mengajarkan Anda keterampilan praktis, tetapi juga akan membagikan wawasan tentang desain yang menarik dan tren terbaru dalam dunia tas dan dompet kulit. </p>
            <a style="font-family: Lato;
            font-size: 24px;
            font-style: normal;
            font-weight: 700;
            line-height: normal; background: var(--blue-black, linear-gradient(147deg, #000AFF 39.55%, #000304 118.03%));
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;" href="">Lihat Selengkapnya</a>
            <hr>
        </section>
        <section style="padding-inline: 60px; padding-left: 75px; margin-top: 20px">
            <h2 style="color: #141414;
            font-family: Lato;
            font-size: 32px;
            font-style: normal;
            font-weight: 800;
            line-height: normal; margin-bottom: 20px">Materi Workshop</h2>
            <p style="color: #1E1E1E;
            text-align: justify;
            font-family: Lato;
            font-size: 20px;
            font-style: normal;
            font-weight: 400;
            line-height: 30px; /* 150% */">Berikut ini materi lengkap yang akan anda dapatkan di workshop Kana</p>
        </section>
        <section style="padding-inline: 60px; padding-left: 75px; margin-top: 20px">
            <div class="accordion" id="accordionExample" style="margin-bottom: 60px">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Modul 1: Pengantar Umum & Pemahaman Dasar 
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Modul 2: Pengenalan Alat Pengerjaan
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Modul 3: Pengenalan Bahan
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Modul 4: Pengenalan Aksesoris
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </section>
        <section style="padding-inline: 60px; padding-left: 75px; margin-top: 20px">
            <h2 style="color: #141414;
            font-family: Lato;
            font-size: 32px;
            font-style: normal;
            font-weight: 800;
            line-height: normal; margin-bottom: 20px">Jadwal Workshop</h2>
            <p style="color: #1E1E1E;
            text-align: justify;
            font-family: Lato;
            font-size: 20px;
            font-style: normal;
            font-weight: 400;
            line-height: 30px; /* 150% */">Silahkan memilih jadwal pelatihan yang sesuai dengan waktu luang anda di bawah ini:</p>
            <div style="border-radius: 16px;
            border: 0.8px solid #BABABA;
            background: #FFF; padding: 30px; margin-bottom: 20px">
                <div class="d-flex align-items-center">
                    <h3 style="text-align: justify; margin-bottom: 0px;
                    font-family: Lato;
                    font-size: 24px;
                    font-style: normal;
                    font-weight: 900;
                    line-height: 30px; /* 125% */; background: var(--blue-black, linear-gradient(147deg, #000AFF 39.55%, #000304 118.03%));
                    background-clip: text;
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;">
                        BATCH 1
                    </h3>
                    <div style="border-radius: 6px;
                    background: rgba(62, 104, 178, 0.15); padding: 10px; margin-left: auto; padding-inline: 20px">
                        <span style="text-align: center;
                        font-family: Lato;
                        font-size: 16px;
                        font-style: normal;
                        font-weight: 900;
                        line-height: normal; background: linear-gradient(147deg, #000AFF 39.55%, #000304 118.03%);
                        background-clip: text;
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;">Sisa: 11 kursi</span>
                    </div>
                </div>
                <hr>
                <div class="d-flex align-items-center" style="margin-bottom: 10px">
                    <svg style="margin-right: 10px" xmlns="http://www.w3.org/2000/svg" width="13" height="20" viewBox="0 0 13 20" fill="none">
                        <path d="M6.5 0.899902C2.91159 0.899902 0 3.52062 0 6.7499C0 11.9499 6.5 19.0999 6.5 19.0999C6.5 19.0999 13 11.9499 13 6.7499C13 3.52062 10.0884 0.899902 6.5 0.899902ZM6.5 9.9999C5.98577 9.9999 5.48309 9.84741 5.05552 9.56172C4.62795 9.27603 4.2947 8.86997 4.09791 8.39488C3.90112 7.91979 3.84964 7.39702 3.94996 6.89267C4.05028 6.38832 4.29791 5.92504 4.66152 5.56142C5.02514 5.19781 5.48841 4.95018 5.99276 4.84986C6.49712 4.74954 7.01989 4.80103 7.49498 4.99782C7.97006 5.1946 8.37613 5.52785 8.66182 5.95542C8.94751 6.38299 9.1 6.88567 9.1 7.3999C9.09925 8.08923 8.82508 8.75012 8.33765 9.23755C7.85021 9.72498 7.18933 9.99915 6.5 9.9999Z" fill="url(#paint0_linear_658_343)"/>
                        <defs>
                          <linearGradient id="paint0_linear_658_343" x1="3.15576" y1="0.171902" x2="19.8254" y2="18.2483" gradientUnits="userSpaceOnUse">
                            <stop offset="0.291667" stop-color="#000AFF"/>
                            <stop offset="1" stop-color="#000304"/>
                          </linearGradient>
                        </defs>
                      </svg>
                    <p style="color: #000;
                    text-align: justify;
                    font-family: Lato;
                    font-size: 20px;
                    font-style: normal;
                    margin-bottom: 0;
                    font-weight: 700;
                    line-height: 30px; /* 150% */; ">Balai Kota Surabaya (cek lokasi map <a style="text-decoration: none; background: linear-gradient(147deg, #000AFF 39.55%, #000304 118.03%);
                    background-clip: text;
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    font-family: Lato;
                    font-size: 20px;
                    font-style: normal;
                    font-weight: 700;
                    line-height: 30px;" href="">klik disini</a>)</p>
                </div>
                <div class="d-flex align-items-center">
                    <svg style="margin-right: 10px" xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20" fill="none">
                        <path d="M6 9H4V11H6V9ZM10 9H8V11H10V9ZM14 9H12V11H14V9ZM16 2H15V0H13V2H5V0H3V2H2C0.89 2 0.00999999 2.9 0.00999999 4L0 18C0 18.5304 0.210714 19.0391 0.585786 19.4142C0.960859 19.7893 1.46957 20 2 20H16C17.1 20 18 19.1 18 18V4C18 2.9 17.1 2 16 2ZM16 18H2V7H16V18Z" fill="url(#paint0_linear_658_353)"/>
                        <defs>
                          <linearGradient id="paint0_linear_658_353" x1="4.36951" y1="-0.8" x2="21.8876" y2="23.1355" gradientUnits="userSpaceOnUse">
                            <stop offset="0.291667" stop-color="#000AFF"/>
                            <stop offset="1" stop-color="#000304"/>
                          </linearGradient>
                        </defs>
                      </svg>
                      <p style="color: #000;
                      text-align: justify;
                      font-family: Lato;
                      font-size: 20px;
                      font-style: normal;
                      margin-bottom: 0;
                      font-weight: 700;
                      line-height: 30px; /* 150% */; ">20 November 2023, 10.00 WIB - 13.00 WIB  ( <a style="text-decoration: none; background: linear-gradient(147deg, #000AFF 39.55%, #000304 118.03%);
                      background-clip: text;
                      -webkit-background-clip: text;
                      -webkit-text-fill-color: transparent;
                      font-family: Lato;
                      font-size: 20px;
                      font-style: normal;
                      font-weight: 700;
                      line-height: 30px;" href="">info rundown klik disini</a>)</p>
                </div>
            </div>
            <div style="border-radius: 16px;
            border: 0.8px solid #BABABA;
            background: #FFF; padding: 30px; margin-bottom: 60px">
                <div class="d-flex align-items-center">
                    <h3 style="text-align: justify; margin-bottom: 0px;
                    font-family: Lato;
                    font-size: 24px;
                    font-style: normal;
                    font-weight: 900;
                    line-height: 30px; /* 125% */; background: var(--blue-black, linear-gradient(147deg, #000AFF 39.55%, #000304 118.03%));
                    background-clip: text;
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;">
                        BATCH 1
                    </h3>
                    <div style="border-radius: 6px;
                    background: rgba(62, 104, 178, 0.15); padding: 10px; margin-left: auto; padding-inline: 20px">
                        <span style="text-align: center;
                        font-family: Lato;
                        font-size: 16px;
                        font-style: normal;
                        font-weight: 900;
                        line-height: normal; background: linear-gradient(147deg, #000AFF 39.55%, #000304 118.03%);
                        background-clip: text;
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;">Sisa: 11 kursi</span>
                    </div>
                </div>
                <hr>
                <div class="d-flex align-items-center" style="margin-bottom: 10px">
                    <svg style="margin-right: 10px" xmlns="http://www.w3.org/2000/svg" width="13" height="20" viewBox="0 0 13 20" fill="none">
                        <path d="M6.5 0.899902C2.91159 0.899902 0 3.52062 0 6.7499C0 11.9499 6.5 19.0999 6.5 19.0999C6.5 19.0999 13 11.9499 13 6.7499C13 3.52062 10.0884 0.899902 6.5 0.899902ZM6.5 9.9999C5.98577 9.9999 5.48309 9.84741 5.05552 9.56172C4.62795 9.27603 4.2947 8.86997 4.09791 8.39488C3.90112 7.91979 3.84964 7.39702 3.94996 6.89267C4.05028 6.38832 4.29791 5.92504 4.66152 5.56142C5.02514 5.19781 5.48841 4.95018 5.99276 4.84986C6.49712 4.74954 7.01989 4.80103 7.49498 4.99782C7.97006 5.1946 8.37613 5.52785 8.66182 5.95542C8.94751 6.38299 9.1 6.88567 9.1 7.3999C9.09925 8.08923 8.82508 8.75012 8.33765 9.23755C7.85021 9.72498 7.18933 9.99915 6.5 9.9999Z" fill="url(#paint0_linear_658_343)"/>
                        <defs>
                          <linearGradient id="paint0_linear_658_343" x1="3.15576" y1="0.171902" x2="19.8254" y2="18.2483" gradientUnits="userSpaceOnUse">
                            <stop offset="0.291667" stop-color="#000AFF"/>
                            <stop offset="1" stop-color="#000304"/>
                          </linearGradient>
                        </defs>
                      </svg>
                    <p style="color: #000;
                    text-align: justify;
                    font-family: Lato;
                    font-size: 20px;
                    font-style: normal;
                    margin-bottom: 0;
                    font-weight: 700;
                    line-height: 30px; /* 150% */; ">Balai Kota Surabaya (cek lokasi map <a style="text-decoration: none; background: linear-gradient(147deg, #000AFF 39.55%, #000304 118.03%);
                    background-clip: text;
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    font-family: Lato;
                    font-size: 20px;
                    font-style: normal;
                    font-weight: 700;
                    line-height: 30px;" href="">klik disini</a>)</p>
                </div>
                <div class="d-flex align-items-center">
                    <svg style="margin-right: 10px" xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20" fill="none">
                        <path d="M6 9H4V11H6V9ZM10 9H8V11H10V9ZM14 9H12V11H14V9ZM16 2H15V0H13V2H5V0H3V2H2C0.89 2 0.00999999 2.9 0.00999999 4L0 18C0 18.5304 0.210714 19.0391 0.585786 19.4142C0.960859 19.7893 1.46957 20 2 20H16C17.1 20 18 19.1 18 18V4C18 2.9 17.1 2 16 2ZM16 18H2V7H16V18Z" fill="url(#paint0_linear_658_353)"/>
                        <defs>
                          <linearGradient id="paint0_linear_658_353" x1="4.36951" y1="-0.8" x2="21.8876" y2="23.1355" gradientUnits="userSpaceOnUse">
                            <stop offset="0.291667" stop-color="#000AFF"/>
                            <stop offset="1" stop-color="#000304"/>
                          </linearGradient>
                        </defs>
                      </svg>
                      <p style="color: #000;
                      text-align: justify;
                      font-family: Lato;
                      font-size: 20px;
                      font-style: normal;
                      margin-bottom: 0;
                      font-weight: 700;
                      line-height: 30px; /* 150% */; ">20 November 2023, 10.00 WIB - 13.00 WIB  ( <a style="text-decoration: none; background: linear-gradient(147deg, #000AFF 39.55%, #000304 118.03%);
                      background-clip: text;
                      -webkit-background-clip: text;
                      -webkit-text-fill-color: transparent;
                      font-family: Lato;
                      font-size: 20px;
                      font-style: normal;
                      font-weight: 700;
                      line-height: 30px;" href="">info rundown klik disini</a>)</p>
                </div>
            </div>
            <hr>
        </section>
        <section style="padding-inline: 60px; padding-left: 75px; margin-top: 20px">
            <h2 style="color: #141414;
            font-family: Lato;
            font-size: 32px;
            font-style: normal;
            font-weight: 800;
            line-height: normal; margin-bottom: 20px">Peserta Workshop</h2>
            <p style="color: #1E1E1E;
            text-align: justify;
            font-family: Lato;
            font-size: 20px;
            font-style: normal;
            font-weight: 400; margin-bottom: 60px;
            line-height: 30px; /* 150% */">Berikut ini kriteria peserta yang dapat mengikuti kegiatan workshop Kana:</p>
            <hr>
        </section>
        <section style="padding-inline: 60px; padding-left: 75px; margin-top: 20px">
            <h2 style="color: #141414;
            font-family: Lato;
            font-size: 32px;
            font-style: normal;
            font-weight: 800;
            line-height: normal; margin-bottom: 20px">Fasilitator Pelatihan</h2>
            <p style="color: #1E1E1E;
            text-align: justify;
            font-family: Lato;
            font-size: 20px;
            font-style: normal;
            font-weight: 400; margin-bottom: 60px;
            line-height: 30px; /* 150% */">Berikut ini kriteria peserta yang dapat mengikuti kegiatan workshop Kana:</p>
            <hr>
        </section>
        <section style="padding-inline: 60px; padding-left: 75px; margin-top: 20px">
            <h2 style="color: #141414;
            font-family: Lato;
            font-size: 32px;
            font-style: normal;
            font-weight: 800;
            line-height: normal; margin-bottom: 20px">Ulasan</h2>
            <p style="color: #1E1E1E;
            text-align: justify;
            font-family: Lato;
            font-size: 20px;
            font-style: normal;
            font-weight: 400; margin-bottom: 60px;
            line-height: 30px; /* 150% */">Berikut ini kriteria peserta yang dapat mengikuti kegiatan workshop Kana:</p>
            <hr>
        </section>
    </div>
    <aside class="right-container" style="padding-right: 60px; padding-top: 50px;">
        <div class="card" style="width: 27rem; padding: 10px; border-radius: 30px; position:-webkit-sticky;position:sticky;top: 100px ;z-index:1020">
            <img src="{{ asset('img/Workshop-Banner.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <div class="card-title d-flex align-content-center" style="margin-bottom: 10px">
                    <h5 style="color: #C72727;
                    font-family: Lato;
                    font-size: 40px;
                    font-style: normal;
                    font-weight: 800;
                    line-height: normal;">Rp25.000</h5>
                    <div class="align-self-center" style="margin-left: auto">
                        <p style="color: #FF2F2F;
                        text-align: right;
                        font-size: 16px;
                        font-weight: 800; margin-bottom: 0px; line-height: 85%">Kuota Terbatas </p>
                        <p style="color: #141414;
                        font-family: Lato;
                        font-size: 16px;
                        font-weight: 600; margin-bottom: 0px">Tinggal 45 Slot lagi</p>
                    </div>
                </div>
                <button class="btn" style="border-radius: 16px; padding-block: 20px ; padding-inline: 30px; width: 100% ; margin-bottom: 20px;
                background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));">
                    <span style="color: #FFFAF6;
                    text-align: center;
                    font-family: Lato;
                    font-size: 24px;
                    font-style: normal;
                    font-weight: 700;
                    line-height: normal;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Ikut Workshop
                    </span>
                </button>
                <p class="card-text" style="color: #141414;
                font-family: Lato;
                font-size: 16px;
                font-style: normal;
                font-weight: 700;
                line-height: normal; margin-bottom: 5px">Benefit yang didapatkan:</p>
                <ul>
                    <li style="color: #313131;
                    text-align: justify;
                    font-family: Lato;
                    font-size: 16px;
                    font-style: normal;
                    font-weight: 400;
                    line-height: normal;">Sertifikat Kelulusan (bisa untuk melamar kerja di Kana)</li>
                    <li style="color: #313131;
                    text-align: justify;
                    font-family: Lato;
                    font-size: 16px;
                    font-style: normal;
                    font-weight: 400;
                    line-height: normal;">Merchandise eksklusif Kana (totebag dan stiker)</li>
                    <li style="color: #313131;
                    text-align: justify;
                    font-family: Lato;
                    font-size: 16px;
                    font-style: normal;
                    font-weight: 400;
                    line-height: normal;">Mendapatkan banyak relasi (circle pengrajin kulit)</li>
                </ul>
                
            </div>
          </div>
    </aside>
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Formulir Workshop</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="WorkshopInputName" class="form-label">Nama</label>
                <input type="text" class="form-control" id="WorkshopInputName" aria-describedby="nameHelp">
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="WorkshopKIMORNOT" id="WorkshopKIM">
                <label class="form-check-label" for="WorkshopKIM">
                    KIM
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="WorkshopKIMORNOT" id="WorkshopBukanKIM">
                <label class="form-check-label" for="WorkshopBukanKIM">
                    Bukan KIM
                </label>
            </div>
        </div>
        <div style="margin-left: 20px">Harga:
            <span id="hargaDisplay">
                25000
            </span>
        </div>
        <div class="modal-footer">
            <div style=" ;padding: 10px; border-radius: 16px; width: 230px ; margin-bottom: 20px;
            background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));">
                <li class="nav-item" style="list-style-type: none">
                    <a style="text-decoration: none; color: #FFFAF6;
                    text-align: center;
                    font-family: Lato;
                    font-size: 24px;
                    font-style: normal;
                    font-weight: 700;
                    line-height: normal;" href="https://wa.me/">Kontak Kami Disini</a>
                </li>
            </div>    
        </div>
      </div>
    </div>
  </div>
</div>

<script>
    // Get references to the radio buttons and the Harga display span
    const workshopKIMRadio = document.getElementById("WorkshopKIM");
    const workshopBukanKIMRadio = document.getElementById("WorkshopBukanKIM");
    const hargaDisplay = document.getElementById("hargaDisplay");

    // Add an event listener to both radio buttons
    workshopKIMRadio.addEventListener("change", updateHarga);
    workshopBukanKIMRadio.addEventListener("change", updateHarga);

    // Function to update the Harga based on the selected radio button
    function updateHarga() {
        if (workshopKIMRadio.checked) {
            // If WorkshopKIM is selected, set Harga to 0
            hargaDisplay.textContent = "0";
        } else {
            // If WorkshopBukanKIM is selected, set Harga to 25000
            hargaDisplay.textContent = "25000";
        }
    }
</script>


@endsection
