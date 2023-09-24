@extends('layouts_web.app')
@section('title', 'detail-berita')
@section('content')
<div class="position-relative">
    <img class="position-absolute" src="{{asset('img/LP-Sect2-Decor.png') }}" alt="" style="top: -20px">
</div>
<div class="container">
    <h1 style="color: #141414;
    text-align: center;
    font-family: Lato;
    font-size: 48px;
    font-style: normal;
    font-weight: 800;
    line-height: normal; margin-top: 160px; margin-bottom: 30px">
        KANA UMUMKAN KERJA SAMA DENGAN INSTITUT TEKNOLOGI SEPULUH NOPEMBER SURABAYA
    </h1>
    <img src="{{ asset('img/Berita-Detail-img.png') }}" alt="">
    <div class="d-flex align-items-center" style="margin-top: 10px; margin-bottom: 40px">
        <svg style="margin-right: 10px" xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20" fill="none">
            <path d="M6 9H4V11H6V9ZM10 9H8V11H10V9ZM14 9H12V11H14V9ZM16 2H15V0H13V2H5V0H3V2H2C0.89 2 0.00999999 2.9 0.00999999 4L0 18C0 18.5304 0.210714 19.0391 0.585786 19.4142C0.960859 19.7893 1.46957 20 2 20H16C17.1 20 18 19.1 18 18V4C18 2.9 17.1 2 16 2ZM16 18H2V7H16V18Z" fill="url(#paint0_linear_658_353)"/>
            <defs>
              <linearGradient id="paint0_linear_658_353" x1="4.36951" y1="-0.8" x2="21.8876" y2="23.1355" gradientUnits="userSpaceOnUse">
                <stop offset="0.291667" stop-color="#000AFF"/>
                <stop offset="1" stop-color="#000304"/>
              </linearGradient>
            </defs>
        </svg>
        <span style="color: #313131;
        font-family: Lato;
        font-size: 24px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;">12 September 2023, 10.00 WIB</span>
        <span style="font-size: 40px; line-height: 50%; margin-inline: 5px">
            |
        </span>
        <img style="margin-right: 5px" src="{{ asset('img/berita-user-logo.png') }}" alt="">
        <span style="color: #313131;
        font-family: Lato;
        font-size: 24px;
        font-style: normal;
        font-weight: 500;
        line-height: normal; margin-right: 5px;">
            Diposting oleh 
        </span>
        <span style="color: #313131;
        font-family: Lato;
        font-size: 24px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;">Admin Kana</span>
        <div class="d-flex align-items-center" style="margin-left: auto">
            <span style="color: #313131;
            font-family: Lato;
            font-size: 24px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;">Bagikan:</span>
            <button class="btn" style="padding: 5px">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                    <path d="M24 12.5743C24 5.90402 18.6248 0.5 12 0.5C5.37075 0.5 0 5.90402 0 12.5743C0 18.5994 4.38675 23.5952 10.125 24.5V16.0653H7.07775V12.5751H10.125V9.91345C10.125 6.88808 11.9138 5.21729 14.6558 5.21729C15.969 5.21729 17.3438 5.45274 17.3438 5.45274V8.42378H15.828C14.34 8.42378 13.875 9.35577 13.875 10.3104V12.5743H17.2028L16.668 16.0646H13.875V24.4992C19.6087 23.5944 24 18.5987 24 12.5736V12.5743Z" fill="url(#paint0_linear_1008_1044)"/>
                    <defs>
                      <linearGradient id="paint0_linear_1008_1044" x1="5.82602" y1="-0.46" x2="15.1867" y2="43.4126" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#D17323"/>
                        <stop offset="1"/>
                      </linearGradient>
                    </defs>
                </svg>
            </button>
            <button class="btn" style="padding: 5px">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                    <path d="M18.901 1.65283H22.581L14.541 10.8428L24 23.3458H16.594L10.794 15.7618L4.156 23.3458H0.474L9.074 13.5158L0 1.65383H7.594L12.837 8.58583L18.901 1.65283ZM17.61 21.1438H19.649L6.486 3.73983H4.298L17.61 21.1438Z" fill="url(#paint0_linear_1008_1045)"/>
                    <defs>
                      <linearGradient id="paint0_linear_1008_1045" x1="5.82602" y1="0.785112" x2="13.535" y2="40.759" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#D17323"/>
                        <stop offset="1"/>
                      </linearGradient>
                    </defs>
                </svg>
            </button>
            <button class="btn" style="padding: 5px">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                    <path d="M22.2007 6.06048C18.6162 0.497725 11.2758 -1.1505 5.59895 2.30047C0.0593087 5.75144 -1.72435 13.2715 1.86012 18.8171L2.15168 19.2635L0.951139 23.7617L5.44459 22.5599L5.89051 22.8518C7.82852 23.8991 9.93804 24.5 12.0304 24.5C14.2771 24.5 16.5239 23.8991 18.4619 22.6973C24.0015 19.0918 25.648 11.7263 22.2007 6.02615V6.06048ZM19.0622 17.6324C18.4619 18.5252 17.7073 19.1261 16.6611 19.2806C16.0608 19.2806 15.3062 19.5725 12.322 18.3878C9.78369 17.186 7.67417 15.2287 6.18207 12.9796C5.29024 11.9323 4.82717 10.5759 4.68997 9.21958C4.68997 8.01775 5.13588 6.97044 5.89051 6.21501C6.18207 5.92313 6.49078 5.76861 6.78234 5.76861H7.53696C7.82852 5.76861 8.13723 5.76861 8.29159 6.36953C8.58315 7.12496 9.33777 8.92771 9.33777 9.08223C9.49213 9.23675 9.42352 10.3871 8.7375 11.0395C8.36019 11.4687 8.29159 11.4859 8.44594 11.7949C9.04621 12.6877 9.80084 13.5977 10.5383 14.3531C11.4301 15.1086 12.3391 15.7095 13.3853 16.1559C13.6769 16.3104 13.9856 16.3104 14.1399 16.0013C14.2943 15.7095 15.0318 14.954 15.3405 14.645C15.632 14.3531 15.7864 14.3531 16.0951 14.4905L18.4962 15.6923C18.7877 15.8468 19.0965 15.9842 19.2508 16.1387C19.4052 16.5851 19.4052 17.186 19.0965 17.6324H19.0622Z" fill="url(#paint0_linear_1008_1047)"/>
                    <defs>
                      <linearGradient id="paint0_linear_1008_1047" x1="5.82602" y1="-0.46" x2="15.1867" y2="43.4126" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#D17323"/>
                        <stop offset="1"/>
                      </linearGradient>
                    </defs>
                </svg>
            </button>
            <button class="btn" style="padding: 5px">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                    <path d="M3.42857 0.5C1.5375 0.5 0 2.0375 0 3.92857V21.0714C0 22.9625 1.5375 24.5 3.42857 24.5H20.5714C22.4625 24.5 24 22.9625 24 21.0714V3.92857C24 2.0375 22.4625 0.5 20.5714 0.5H3.42857ZM15.7607 11.8732C16.8054 12.3714 17.5661 13.1321 17.9679 14.0643C18.525 15.3661 18.5786 17.4875 16.8857 19.175C15.5893 20.4661 14.0196 21.05 11.7911 21.0661H11.7804C9.27321 21.05 7.34464 20.2036 6.05357 18.5589C4.90179 17.0964 4.30714 15.0554 4.28571 12.5V12.4893C4.30714 9.93393 4.90179 7.89821 6.05357 6.43036C7.35 4.78571 9.27857 3.93929 11.7804 3.92321H11.7911C14.3036 3.93929 16.2536 4.78036 17.5875 6.41964C18.2464 7.22857 18.7286 8.20357 19.0339 9.33393L17.5929 9.71964C17.3411 8.79821 16.9554 8.01071 16.4464 7.38393C15.4071 6.10357 13.8375 5.45 11.7857 5.43393C9.75 5.45 8.20714 6.10357 7.20536 7.37321C6.26786 8.56786 5.78036 10.2875 5.76429 12.4893C5.78036 14.6911 6.26786 16.4161 7.20536 17.6054C8.20714 18.8804 9.74464 19.5339 11.7857 19.5446C13.6232 19.5286 14.8339 19.0946 15.8464 18.0821C16.9982 16.9304 16.9768 15.5161 16.6071 14.6536C16.3929 14.15 15.9964 13.7268 15.4661 13.4054C15.3375 14.3696 15.0429 15.1304 14.5821 15.7196C13.9714 16.4964 13.0982 16.9196 11.9893 16.9786C11.1482 17.0268 10.3393 16.8232 9.70714 16.4054C8.9625 15.9125 8.52857 15.1625 8.48036 14.2893C8.38929 12.5643 9.75536 11.3268 11.8821 11.2036C12.6375 11.1607 13.3446 11.1929 13.9982 11.3054C13.9125 10.775 13.7357 10.3571 13.4732 10.0518C13.1143 9.63393 12.5571 9.41964 11.8232 9.41429H11.8018C11.2125 9.41429 10.4089 9.58036 9.89464 10.3571L8.6625 9.51071C9.34821 8.47143 10.4625 7.89821 11.7964 7.89821H11.8286C14.0679 7.91429 15.3964 9.30714 15.5304 11.7446C15.6054 11.7768 15.6804 11.8089 15.7554 11.8464L15.7607 11.8732ZM11.9143 15.4893C12.825 15.4411 13.8643 15.0821 14.0411 12.875C13.5696 12.7732 13.0446 12.7196 12.4875 12.7196C12.3161 12.7196 12.1446 12.725 11.9732 12.7357C10.4411 12.8214 9.93214 13.5661 9.96964 14.2304C10.0179 15.125 10.9875 15.5429 11.9196 15.4946L11.9143 15.4893Z" fill="url(#paint0_linear_1008_1048)"/>
                    <defs>
                      <linearGradient id="paint0_linear_1008_1048" x1="5.82602" y1="-0.46" x2="15.1867" y2="43.4126" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#D17323"/>
                        <stop offset="1"/>
                      </linearGradient>
                    </defs>
                </svg>    
            </button>
        </div>
    </div>
    <p style="color: #1E1E1E;
    font-family: Lato;
    font-size: 20px;
    font-style: normal;
    font-weight: 400;
    line-height: 30px;
    letter-spacing: 1px; margin-bottom: 40px">
        <span style="color: #1E1E1E;
        text-align: justify;
        font-family: Lato;
        font-size: 20px;
        font-style: normal;
        font-weight: 700;
        line-height: 30px; /* 150% */
        letter-spacing: 1px;">Karsaguna.com</span> - Kami dengan gembira mengumumkan kolaborasi yang sangat dinantikan antara Karsa Guna, brand kerajinan kulit yang berbasis di Tanggulangin, Sidoarjo, dan himpunan mahasiswa Departemen Desain Komunikasi Visual (DKV) Institut Teknologi Sepuluh Nopember (ITS). Kolaborasi ini merupakan langkah penting dalam mendukung pertumbuhan industri kerajinan kulit lokal sambil memberikan kesempatan berharga bagi generasi muda untuk mengasah keterampilan mereka. Dalam rangka kerjasama ini, kami akan memberikan pelatihan mendalam kepada mahasiswa DKV ITS, mencakup teknik-teknik produksi, desain inovatif, serta strategi pemasaran yang efektif dalam konteks produk kulit. Kami yakin kolaborasi ini akan menjadi landasan kokoh untuk kreativitas yang tak terbatas dan pertumbuhan bisnis yang berkelanjutan.
    </p>
    <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
    <hr>
    <h3 style="font-family: Lato;
    font-size: 40px;
    font-style: normal; margin-bottom: 40px;
    font-weight: 800;
    line-height: normal; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;">Rekomendasi Artikel Lainnya</h3>
    <div class="justify-content-center d-flex" style="margin-bottom: 350px; gap: 20px">
        <div class="col-sm-4" style="max-height: 450px">
            <a href=""; style="text-decoration: none">
                <div class="d-flex flex-column">
                    <img src="{{ asset('img/berita-1-img.png') }}" alt="">
                    <div class="d-flex align-items-center" style="margin-top: 10px; margin-bottom: 20px">
                        <svg style="margin-right: 10px" xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20" fill="none">
                            <path d="M6 9H4V11H6V9ZM10 9H8V11H10V9ZM14 9H12V11H14V9ZM16 2H15V0H13V2H5V0H3V2H2C0.89 2 0.00999999 2.9 0.00999999 4L0 18C0 18.5304 0.210714 19.0391 0.585786 19.4142C0.960859 19.7893 1.46957 20 2 20H16C17.1 20 18 19.1 18 18V4C18 2.9 17.1 2 16 2ZM16 18H2V7H16V18Z" fill="url(#paint0_linear_658_353)"/>
                            <defs>
                              <linearGradient id="paint0_linear_658_353" x1="4.36951" y1="-0.8" x2="21.8876" y2="23.1355" gradientUnits="userSpaceOnUse">
                                <stop offset="0.291667" stop-color="#000AFF"/>
                                <stop offset="1" stop-color="#000304"/>
                              </linearGradient>
                            </defs>
                        </svg>
                        <span style="color: #313131;
                        font-family: Lato;
                        font-size: 16px;
                        font-style: normal;
                        font-weight: 700;
                        line-height: normal;">12 September 2023</span>
                        <div style="margin-left: auto">
                            <img style="margin-right: 5px" src="{{ asset('img/berita-user-logo.png') }}" alt="">
                            <span style="color: #313131;
                            font-family: Lato;
                            font-size: 16px;
                            font-style: normal;
                            font-weight: 700;
                            line-height: normal;">Admin Kana</span>
                        </div>
                    </div>
                    <h5 style="color: #141414;
                    font-family: Lato;
                    font-size: 28px;
                    font-style: normal;
                    font-weight: 900;
                    line-height: normal;">KANA RESMI GELAR WORKS...</h5>
                    <p style="color: #141414;
                    text-align: justify;
                    font-family: Lato;
                    font-size: 24px;
                    font-style: normal;
                    font-weight: 500;
                    line-height: normal;">Kana, brand terkemuka dalam industri fashion lokal, hari ini merayakan kesuksesan workshop eksklusif yang ...</p>
                </div>
            </a>
        </div>
        <div class="col-sm-4" style="max-height: 450px">
            <a href=""; style="text-decoration: none">
                <div class="d-flex flex-column">
                    <img src="{{ asset('img/berita-2-img.png') }}" alt="">
                    <div class="d-flex align-items-center" style="margin-top: 10px; margin-bottom: 20px">
                        <svg style="margin-right: 10px" xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20" fill="none">
                            <path d="M6 9H4V11H6V9ZM10 9H8V11H10V9ZM14 9H12V11H14V9ZM16 2H15V0H13V2H5V0H3V2H2C0.89 2 0.00999999 2.9 0.00999999 4L0 18C0 18.5304 0.210714 19.0391 0.585786 19.4142C0.960859 19.7893 1.46957 20 2 20H16C17.1 20 18 19.1 18 18V4C18 2.9 17.1 2 16 2ZM16 18H2V7H16V18Z" fill="url(#paint0_linear_658_353)"/>
                            <defs>
                              <linearGradient id="paint0_linear_658_353" x1="4.36951" y1="-0.8" x2="21.8876" y2="23.1355" gradientUnits="userSpaceOnUse">
                                <stop offset="0.291667" stop-color="#000AFF"/>
                                <stop offset="1" stop-color="#000304"/>
                              </linearGradient>
                            </defs>
                        </svg>
                        <span style="color: #313131;
                        font-family: Lato;
                        font-size: 16px;
                        font-style: normal;
                        font-weight: 700;
                        line-height: normal;">12 September 2023</span>
                        <div style="margin-left: auto">
                            <img style="margin-right: 5px" src="{{ asset('img/berita-user-logo.png') }}" alt="">
                            <span style="color: #313131;
                            font-family: Lato;
                            font-size: 16px;
                            font-style: normal;
                            font-weight: 700;
                            line-height: normal;">Admin Kana</span>
                        </div>
                    </div>
                    <h5 style="color: #141414;
                    font-family: Lato;
                    font-size: 28px;
                    font-style: normal;
                    font-weight: 900;
                    line-height: normal;">KANA LUNCURKAN 3 MODEL..</h5>
                    <p style="color: #141414;
                    text-align: justify;
                    font-family: Lato;
                    font-size: 24px;
                    font-style: normal;
                    font-weight: 500;
                    line-height: normal;">CEO Kana, Sugianto mengumumkan kerjasama dengan salah satu universitas ternama di Surabaya yakn...</p>
                </div>
            </a>
        </div>
        <div class="col-sm-4" style="max-height: 450px">
            <a href=""; style="text-decoration: none">
                <div class="d-flex flex-column">
                    <img src="{{ asset('img/berita-3-img.png') }}" alt="">
                    <div class="d-flex align-items-center" style="margin-top: 10px; margin-bottom: 20px">
                        <svg style="margin-right: 10px" xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20" fill="none">
                            <path d="M6 9H4V11H6V9ZM10 9H8V11H10V9ZM14 9H12V11H14V9ZM16 2H15V0H13V2H5V0H3V2H2C0.89 2 0.00999999 2.9 0.00999999 4L0 18C0 18.5304 0.210714 19.0391 0.585786 19.4142C0.960859 19.7893 1.46957 20 2 20H16C17.1 20 18 19.1 18 18V4C18 2.9 17.1 2 16 2ZM16 18H2V7H16V18Z" fill="url(#paint0_linear_658_353)"/>
                            <defs>
                              <linearGradient id="paint0_linear_658_353" x1="4.36951" y1="-0.8" x2="21.8876" y2="23.1355" gradientUnits="userSpaceOnUse">
                                <stop offset="0.291667" stop-color="#000AFF"/>
                                <stop offset="1" stop-color="#000304"/>
                              </linearGradient>
                            </defs>
                        </svg>
                        <span style="color: #313131;
                        font-family: Lato;
                        font-size: 16px;
                        font-style: normal;
                        font-weight: 700;
                        line-height: normal;">12 September 2023</span>
                        <div style="margin-left: auto">
                            <img style="margin-right: 5px" src="{{ asset('img/berita-user-logo.png') }}" alt="">
                            <span style="color: #313131;
                            font-family: Lato;
                            font-size: 16px;
                            font-style: normal;
                            font-weight: 700;
                            line-height: normal;">Admin Kana</span>
                        </div>
                    </div>
                    <h5 style="color: #141414;
                    font-family: Lato;
                    font-size: 28px;
                    font-style: normal;
                    font-weight: 900;
                    line-height: normal;">DOMPET KANA HADIR DI AC...</h5>
                    <p style="color: #141414;
                    text-align: justify;
                    font-family: Lato;
                    font-size: 24px;
                    font-style: normal;
                    font-weight: 500;
                    line-height: normal;">Kana, dengan bangga mengumumkan partisipasinya dalam acara pameran yang sangat dinantikan di Alun-Alun ...</p>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Coming Soon</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h1>Fitur ini memudahkan user dalam mengubah konten agar menjadi lebih baik</h1>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Saya Mengerti</button>
        </div>
      </div>
    </div>
  </div>
<div class="position-relative">
    <img style="bottom: -35px" class="position-absolute" src="{{ asset('img/Detail-Berita-Bottom.png') }}" alt="">
</div>

@endsection

