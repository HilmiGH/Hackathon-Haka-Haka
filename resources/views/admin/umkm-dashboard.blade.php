<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dashboard Admin') }}</title>

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
    * {
    font-family: Lato;
    }

    .dashboard-container {
      display: flex;
    }

    .navbar-side {
        flex: 1;
    }

    .navbar-top,
    .dashboard {
    flex: 5;
    }

    .dashboard {
        background-image: url('{{ asset('img/bg login.svg') }}');
        background-repeat: no-repeat;
        background-position: center;
        background-color: #FFFFFF;
        background-size: cover;
        padding: 20px;
    }
    </style>
</head>
<body style="margin: 0; padding: 0;">
    <div class="dashboard-container">
        <aside class="navbar-side" style="box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.50); position: relative; max-width: 300px">
            <nav class="nav flex-column " style="padding: 20px">
                <img src="{{ asset('img/Mojoworks-Logo.png') }}" alt="" style="width: 200px">
                <p style="color: #646464; margin-top: 30px;
                font-family: Lato;
                font-size: 16px;
                font-style: normal;
                font-weight: 600;
                line-height: normal;">FITUR DASHBOARD</p>
                <a class="nav-link {{ Request::is('dashboard') ? 'actived-flex' : '' }} d-flex align-items-center" style="
                {{ Request::is('dashboard') ? 'border-radius: 12px; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));' : ''}}" aria-current="page" href="/dashboard">
                    <svg style="margin-right: 10px" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                        <path d="M1.61111 11.6111H8.27778C8.57246 11.6111 8.85508 11.494 9.06345 11.2857C9.27183 11.0773 9.38889 10.7947 9.38889 10.5V1.61111C9.38889 1.31643 9.27183 1.03381 9.06345 0.825437C8.85508 0.617063 8.57246 0.5 8.27778 0.5H1.61111C1.31643 0.5 1.03381 0.617063 0.825437 0.825437C0.617063 1.03381 0.5 1.31643 0.5 1.61111V10.5C0.5 10.7947 0.617063 11.0773 0.825437 11.2857C1.03381 11.494 1.31643 11.6111 1.61111 11.6111ZM0.5 19.3889C0.5 19.6836 0.617063 19.9662 0.825437 20.1746C1.03381 20.3829 1.31643 20.5 1.61111 20.5H8.27778C8.57246 20.5 8.85508 20.3829 9.06345 20.1746C9.27183 19.9662 9.38889 19.6836 9.38889 19.3889V14.9444C9.38889 14.6498 9.27183 14.3671 9.06345 14.1588C8.85508 13.9504 8.57246 13.8333 8.27778 13.8333H1.61111C1.31643 13.8333 1.03381 13.9504 0.825437 14.1588C0.617063 14.3671 0.5 14.6498 0.5 14.9444V19.3889ZM11.6111 19.3889C11.6111 19.6836 11.7282 19.9662 11.9365 20.1746C12.1449 20.3829 12.4275 20.5 12.7222 20.5H19.3889C19.6836 20.5 19.9662 20.3829 20.1746 20.1746C20.3829 19.9662 20.5 19.6836 20.5 19.3889V11.6111C20.5 11.3164 20.3829 11.0338 20.1746 10.8254C19.9662 10.6171 19.6836 10.5 19.3889 10.5H12.7222C12.4275 10.5 12.1449 10.6171 11.9365 10.8254C11.7282 11.0338 11.6111 11.3164 11.6111 11.6111V19.3889ZM12.7222 8.27778H19.3889C19.6836 8.27778 19.9662 8.16071 20.1746 7.95234C20.3829 7.74397 20.5 7.46135 20.5 7.16667V1.61111C20.5 1.31643 20.3829 1.03381 20.1746 0.825437C19.9662 0.617063 19.6836 0.5 19.3889 0.5H12.7222C12.4275 0.5 12.1449 0.617063 11.9365 0.825437C11.7282 1.03381 11.6111 1.31643 11.6111 1.61111V7.16667C11.6111 7.46135 11.7282 7.74397 11.9365 7.95234C12.1449 8.16071 12.4275 8.27778 12.7222 8.27778Z" fill="white"/>
                    </svg>
                    <span style="{{ Request::is('dashboard') ? 'color: #FFF' : 'background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
                    background-clip: text;
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;' }}
                    font-family: Lato;
                    font-size: 24px;
                    font-style: normal;
                    font-weight: 600;
                    line-height: normal;">Ringkasan</span>
                </a>
                <a style="" class="nav-link {{ Request::is('dashboard') ? 'actived-flex' : '' }} d-flex align-items-center" href="#" style="
                {{ Request::is('dashboard') ? 'border-radius: 12px; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));' : ''}}">
                    <svg style="margin-right: 10px" xmlns="http://www.w3.org/2000/svg" width="23" height="25" viewBox="0 0 23 25" fill="none">
                        <path d="M21.1719 9.77778H22.55V24.75H0.5V9.77778H1.87812V7.05556C1.87812 3.2989 4.96512 0.250006 8.76875 0.250006C9.74722 0.250006 10.6843 0.454173 11.525 0.821673C12.3934 0.443456 13.3322 0.248735 14.2812 0.250006C18.0849 0.250006 21.1719 3.2989 21.1719 7.05556V9.77778ZM4.63437 7.05556V9.77778H7.39062V7.05556C7.39062 5.51751 7.92809 4.11556 8.79631 2.97223H8.76875C6.49484 2.97223 4.63437 4.80973 4.63437 7.05556ZM18.4156 9.77778V7.05556C18.4156 4.80973 16.5552 2.97223 14.2812 2.97223H14.2537C15.1599 4.14588 15.6534 5.5796 15.6594 7.05556V9.77778H18.4156ZM11.525 4.03389C10.6843 4.78251 10.1469 5.85778 10.1469 7.05556V9.77778H12.9031V7.05556C12.9031 5.85778 12.3657 4.78251 11.525 4.03389Z" fill="url(#paint0_linear_980_4649)"/>
                        <defs>
                          <linearGradient id="paint0_linear_980_4649" x1="5.85265" y1="-0.73" x2="27.3123" y2="28.591" gradientUnits="userSpaceOnUse">
                            <stop offset="0.114545" stop-color="#4DBFFF"/>
                            <stop offset="0.901042" stop-color="#000AFF"/>
                          </linearGradient>
                        </defs>
                      </svg>
                    <span style="{{ Request::is('dashboard') ? 'color: #FFF' : 'background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
                    background-clip: text;
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;' }}
                    font-family: Lato;
                    font-size: 24px;
                    font-style: normal;
                    font-weight: 600;
                    line-height: normal;">UMKM</span>
                </a>
                <a class="nav-link d-flex align-items-center" href="#">
                    <svg style="margin-right: 10px" xmlns="http://www.w3.org/2000/svg" width="23" height="19" viewBox="0 0 23 19" fill="none">
                        <path d="M12.6 11.1765C13.767 11.1765 14.8861 11.6475 15.7113 12.4859C16.5364 13.3243 17 14.4614 17 15.6471V17.3235C17 17.7682 16.8262 18.1946 16.5167 18.509C16.2073 18.8234 15.7876 19 15.35 19H2.15C1.71239 19 1.29271 18.8234 0.983274 18.509C0.673839 18.1946 0.5 17.7682 0.5 17.3235V15.6471C0.5 14.4614 0.96357 13.3243 1.78873 12.4859C2.61389 11.6475 3.73305 11.1765 4.9 11.1765H12.6ZM19.2 11.1765C20.0752 11.1765 20.9146 11.5297 21.5335 12.1585C22.1523 12.7873 22.5 13.6402 22.5 14.5294V16.2059C22.5 16.6505 22.3262 17.0769 22.0167 17.3913C21.7073 17.7057 21.2876 17.8824 20.85 17.8824H19.2V15.6471C19.2007 14.7794 19.0022 13.9235 18.6203 13.1475C18.2384 12.3714 17.6836 11.6965 17 11.1765H19.2ZM8.75 0C10.0628 0 11.3219 0.529883 12.2502 1.47308C13.1785 2.41628 13.7 3.69553 13.7 5.02941C13.7 6.36329 13.1785 7.64254 12.2502 8.58574C11.3219 9.52894 10.0628 10.0588 8.75 10.0588C7.43718 10.0588 6.17813 9.52894 5.24982 8.58574C4.32152 7.64254 3.8 6.36329 3.8 5.02941C3.8 3.69553 4.32152 2.41628 5.24982 1.47308C6.17813 0.529883 7.43718 0 8.75 0ZM18.1 3.35294C18.9752 3.35294 19.8146 3.7062 20.4335 4.33499C21.0523 4.96379 21.4 5.81663 21.4 6.70588C21.4 7.59514 21.0523 8.44797 20.4335 9.07677C19.8146 9.70557 18.9752 10.0588 18.1 10.0588C17.2248 10.0588 16.3854 9.70557 15.7665 9.07677C15.1477 8.44797 14.8 7.59514 14.8 6.70588C14.8 5.81663 15.1477 4.96379 15.7665 4.33499C16.3854 3.7062 17.2248 3.35294 18.1 3.35294Z" fill="url(#paint0_linear_980_4654)"/>
                        <defs>
                          <linearGradient id="paint0_linear_980_4654" x1="5.84052" y1="-0.76" x2="20.8482" y2="25.6214" gradientUnits="userSpaceOnUse">
                            <stop offset="0.114545" stop-color="#4DBFFF"/>
                            <stop offset="0.901042" stop-color="#000AFF"/>
                          </linearGradient>
                        </defs>
                      </svg>
                    <span style="font-family: Lato;
                    font-size: 24px;
                    font-style: normal;
                    font-weight: 600;
                    line-height: normal; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
                    background-clip: text;
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;">Pelanggan</span>
                </a>
                <a class="nav-link nav-link d-flex align-items-center" href="#">
                    <svg style="margin-right: 10px" xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
                        <path d="M1.5 1.5V19.2778C1.5 19.8671 1.73413 20.4324 2.15087 20.8491C2.56762 21.2659 3.13285 21.5 3.72222 21.5H21.5" stroke="url(#paint0_linear_980_4659)" stroke-width="2" stroke-miterlimit="5.759" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M5.94531 13.7223L10.3898 9.27789L14.8342 13.7223L21.5009 7.05566" stroke="url(#paint1_linear_980_4659)" stroke-width="2" stroke-miterlimit="5.759" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M18.166 7.05566H21.4993V10.389" stroke="url(#paint2_linear_980_4659)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <defs>
                          <linearGradient id="paint0_linear_980_4659" x1="6.35501" y1="0.7" x2="23.2404" y2="26.3345" gradientUnits="userSpaceOnUse">
                            <stop offset="0.114545" stop-color="#4DBFFF"/>
                            <stop offset="0.901042" stop-color="#000AFF"/>
                          </linearGradient>
                          <linearGradient id="paint1_linear_980_4659" x1="9.72144" y1="6.789" x2="12.9249" y2="18.1369" gradientUnits="userSpaceOnUse">
                            <stop offset="0.114545" stop-color="#4DBFFF"/>
                            <stop offset="0.901042" stop-color="#000AFF"/>
                          </linearGradient>
                          <linearGradient id="paint2_linear_980_4659" x1="18.9752" y1="6.92233" x2="21.7894" y2="11.1947" gradientUnits="userSpaceOnUse">
                            <stop offset="0.114545" stop-color="#4DBFFF"/>
                            <stop offset="0.901042" stop-color="#000AFF"/>
                          </linearGradient>
                        </defs>
                      </svg>
                    <span style="font-family: Lato;
                    font-size: 24px;
                    font-style: normal;
                    font-weight: 600;
                    line-height: normal; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
                    background-clip: text;
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;">Workshop</span>
                </a>
                <a class="nav-link nav-link d-flex align-items-center" href="#">
                    <svg style="margin-right: 10px" xmlns="http://www.w3.org/2000/svg" width="19" height="23" viewBox="0 0 19 23" fill="none">
                        <path d="M16.25 22.5C16.8467 22.5 17.419 22.2682 17.841 21.8556C18.2629 21.4431 18.5 20.8835 18.5 20.3V7.1L11.75 0.5H2.75C2.15326 0.5 1.58097 0.731785 1.15901 1.14437C0.737053 1.55694 0.5 2.11652 0.5 2.7V20.3C0.5 20.8835 0.737053 21.4431 1.15901 21.8556C1.58097 22.2682 2.15326 22.5 2.75 22.5H16.25ZM10.625 2.7L16.25 8.2H10.625V2.7ZM3.875 7.1H7.25V9.3H3.875V7.1ZM3.875 11.5H15.125V13.7H3.875V11.5ZM3.875 15.9H15.125V18.1H3.875V15.9Z" fill="url(#paint0_linear_980_4667)"/>
                        <defs>
                          <linearGradient id="paint0_linear_980_4667" x1="4.86951" y1="-0.38" x2="24.6197" y2="24.1521" gradientUnits="userSpaceOnUse">
                            <stop offset="0.114545" stop-color="#4DBFFF"/>
                            <stop offset="0.901042" stop-color="#000AFF"/>
                          </linearGradient>
                        </defs>
                      </svg>
                    <span style="font-family: Lato;
                    font-size: 24px;
                    font-style: normal;
                    font-weight: 600;
                    line-height: normal; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
                    background-clip: text;
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;">Transaksi</span>
                </a>
                <a class="nav-link nav-link d-flex align-items-center" href="#">
                    <svg style="margin-right: 10px" xmlns="http://www.w3.org/2000/svg" width="19" height="21" viewBox="0 0 19 21" fill="none">
                        <path d="M17.5 3.5C16.9 3.5 16.5 4 16.5 4.6V14.5C16.5 15.1 16.9 15.5 17.5 15.6C18.1 15.6 18.5 15.1 18.5 14.5V4.6C18.5 4 18.1 3.5 17.5 3.5ZM13.9 0.5H2.1C1.2 0.5 0.5 1.2 0.5 2.1V15.9C0.5 16.8 1.2 17.5 2.1 17.5H3.5V19.5C3.5 20.1 3.9 20.5 4.5 20.5H10.5C11.1 20.5 11.5 20.1 11.5 19.5V17.5H13.9C14.8 17.5 15.5 16.8 15.5 15.9V2.1C15.5 1.2 14.8 0.5 13.9 0.5ZM2.5 6.5H5.5V8.5H2.5V6.5ZM9.5 9.5V11.5H6.5V9.5H9.5ZM6.5 8.5V6.5H9.5V8.5H6.5ZM9.5 12.5V14.5H6.5V12.5H9.5ZM2.5 9.5H5.5V11.5H2.5V9.5ZM2.5 14.5V12.5H5.5V14.5H2.5ZM5.5 19.5H4.5V17.5H5.5V19.5ZM10.5 19.5H7.5V17.5H10.5V19.5ZM13.5 14.5H10.5V12.5H13.5V14.5ZM13.5 11.5H10.5V9.5H13.5V11.5ZM13.5 8.5H10.5V6.5H13.5V8.5ZM13.5 4.5H2.5V2.5H13.5V4.5Z" fill="url(#paint0_linear_980_4672)"/>
                        <defs>
                          <linearGradient id="paint0_linear_980_4672" x1="4.86951" y1="-0.3" x2="22.3876" y2="23.6355" gradientUnits="userSpaceOnUse">
                            <stop offset="0.114545" stop-color="#4DBFFF"/>
                            <stop offset="0.901042" stop-color="#000AFF"/>
                          </linearGradient>
                        </defs>
                      </svg>
                    <span style="font-family: Lato;
                    font-size: 24px;
                    font-style: normal;
                    font-weight: 600;
                    line-height: normal; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
                    background-clip: text;
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;">Point of Sale</span>
                </a>
                <hr>
                <p style="color: #646464;
                font-family: Lato;
                font-size: 16px;
                font-style: normal;
                font-weight: 600;
                line-height: normal;">FITUR GENERAL</p>
                <a class="nav-link d-flex align-items-center" href="#">
                    <svg style="margin-right: 10px" xmlns="http://www.w3.org/2000/svg" width="19" height="21" viewBox="0 0 19 21" fill="none">
                        <path d="M17.375 8.27778H18.5V20.5H0.5V8.27778H1.625V6.05556C1.625 2.98889 4.145 0.500005 7.25 0.500005C8.04875 0.500005 8.81375 0.666672 9.5 0.966672C10.2089 0.657923 10.9753 0.498967 11.75 0.500005C14.855 0.500005 17.375 2.98889 17.375 6.05556V8.27778ZM3.875 6.05556V8.27778H6.125V6.05556C6.125 4.8 6.56375 3.65556 7.2725 2.72223H7.25C5.39375 2.72223 3.875 4.22223 3.875 6.05556ZM15.125 8.27778V6.05556C15.125 4.22223 13.6062 2.72223 11.75 2.72223H11.7275C12.4672 3.68031 12.8702 4.85069 12.875 6.05556V8.27778H15.125ZM9.5 3.58889C8.81375 4.2 8.375 5.07778 8.375 6.05556V8.27778H10.625V6.05556C10.625 5.07778 10.1862 4.2 9.5 3.58889Z" fill="url(#paint0_linear_980_4680)"/>
                        <defs>
                          <linearGradient id="paint0_linear_980_4680" x1="4.86951" y1="-0.3" x2="22.3876" y2="23.6355" gradientUnits="userSpaceOnUse">
                            <stop offset="0.114545" stop-color="#4DBFFF"/>
                            <stop offset="0.901042" stop-color="#000AFF"/>
                          </linearGradient>
                        </defs>
                      </svg>
                    <span style="font-family: Lato;
                    font-size: 24px;
                    font-style: normal;
                    font-weight: 600;
                    line-height: normal; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
                    background-clip: text;
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;">Pengaturan</span>
                </a>
                <a class="nav-link d-flex align-items-center" href="#">
                    <svg style="margin-right: 10px" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                        <path d="M18.2134 10.5C18.2134 10.27 18.2031 10.05 18.1826 9.82L20.0955 8.41C20.5069 8.11 20.62 7.55 20.3629 7.11L18.4397 3.88C18.3164 3.66818 18.1169 3.50814 17.8796 3.43062C17.6423 3.3531 17.384 3.36356 17.1541 3.46L14.9429 4.37C14.5624 4.11 14.1613 3.88 13.7396 3.69L13.4414 1.38C13.3797 0.88 12.9374 0.5 12.4232 0.5H8.58707C8.06256 0.5 7.62032 0.88 7.55861 1.38L7.26036 3.69C6.83869 3.88 6.43759 4.11 6.05706 4.37L3.84588 3.46C3.37279 3.26 2.81742 3.44 2.56031 3.88L0.637091 7.12C0.379977 7.56 0.493107 8.11 0.90449 8.42L2.81742 9.83C2.77479 10.279 2.77479 10.731 2.81742 11.18L0.90449 12.59C0.493107 12.89 0.379977 13.45 0.637091 13.89L2.56031 17.12C2.81742 17.56 3.37279 17.74 3.84588 17.54L6.05706 16.63C6.43759 16.89 6.83869 17.12 7.26036 17.31L7.55861 19.62C7.62032 20.12 8.06256 20.5 8.57678 20.5H12.4129C12.9272 20.5 13.3694 20.12 13.4311 19.62L13.7294 17.31C14.151 17.12 14.5521 16.89 14.9327 16.63L17.1438 17.54C17.6169 17.74 18.1723 17.56 18.4294 17.12L20.3526 13.89C20.6097 13.45 20.4966 12.9 20.0852 12.59L18.1723 11.18C18.2031 10.95 18.2134 10.73 18.2134 10.5ZM10.5411 14C8.55622 14 6.94154 12.43 6.94154 10.5C6.94154 8.57 8.55622 7 10.5411 7C12.5261 7 14.1407 8.57 14.1407 10.5C14.1407 12.43 12.5261 14 10.5411 14Z" fill="url(#paint0_linear_980_4685)"/>
                        <defs>
                          <linearGradient id="paint0_linear_980_4685" x1="5.35501" y1="-0.3" x2="22.2404" y2="25.3345" gradientUnits="userSpaceOnUse">
                            <stop offset="0.114545" stop-color="#4DBFFF"/>
                            <stop offset="0.901042" stop-color="#000AFF"/>
                          </linearGradient>
                        </defs>
                      </svg>
                    <span style="font-family: Lato;
                    font-size: 24px;
                    font-style: normal;
                    font-weight: 600;
                    line-height: normal; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
                    background-clip: text;
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;">Bantuan</span>
                </a>
                <a class="nav-link d-flex align-items-center" href="#">
                    <svg style="margin-right: 10px" xmlns="http://www.w3.org/2000/svg" width="22" height="21" viewBox="0 0 22 21" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.0006 10.5001C15.0006 10.3012 14.9215 10.1104 14.7809 9.96979C14.6402 9.82914 14.4495 9.75012 14.2506 9.75012H3.27756L5.23856 8.07012C5.31341 8.00603 5.37491 7.92783 5.41954 7.83998C5.46417 7.75213 5.49106 7.65635 5.49868 7.5581C5.50629 7.45986 5.49448 7.36108 5.46392 7.2674C5.43336 7.17372 5.38464 7.08697 5.32056 7.01212C5.25647 6.93727 5.17827 6.87577 5.09042 6.83114C5.00257 6.78651 4.90678 6.75961 4.80854 6.752C4.7103 6.74439 4.61151 6.7562 4.51783 6.78676C4.42415 6.81732 4.33741 6.86603 4.26256 6.93012L0.762558 9.93012C0.680223 10.0005 0.614119 10.0879 0.568794 10.1863C0.52347 10.2847 0.5 10.3918 0.5 10.5001C0.5 10.6085 0.52347 10.7155 0.568794 10.8139C0.614119 10.9123 0.680223 10.9997 0.762558 11.0701L4.26256 14.0701C4.41373 14.1995 4.61013 14.2636 4.80854 14.2482C5.00695 14.2329 5.19113 14.1393 5.32056 13.9881C5.44998 13.8369 5.51405 13.6405 5.49868 13.4421C5.4833 13.2437 5.38973 13.0595 5.23856 12.9301L3.27856 11.2501H14.2506C14.4495 11.2501 14.6402 11.1711 14.7809 11.0304C14.9215 10.8898 15.0006 10.699 15.0006 10.5001Z" fill="url(#paint0_linear_980_4692)"/>
                        <path d="M8.25 6.5C8.25 7.202 8.25 7.553 8.419 7.806C8.49179 7.91478 8.58522 8.00821 8.694 8.081C8.947 8.25 9.298 8.25 10 8.25H14.25C14.8467 8.25 15.419 8.48705 15.841 8.90901C16.2629 9.33097 16.5 9.90326 16.5 10.5C16.5 11.0967 16.2629 11.669 15.841 12.091C15.419 12.5129 14.8467 12.75 14.25 12.75H10C9.298 12.75 8.947 12.75 8.694 12.918C8.58512 12.9911 8.49168 13.0849 8.419 13.194C8.25 13.447 8.25 13.798 8.25 14.5C8.25 17.328 8.25 18.743 9.129 19.621C10.007 20.5 11.421 20.5 14.249 20.5H15.249C18.079 20.5 19.492 20.5 20.371 19.621C21.25 18.743 21.25 17.328 21.25 14.5V6.5C21.25 3.672 21.25 2.257 20.371 1.379C19.492 0.5 18.078 0.5 15.25 0.5H14.25C11.421 0.5 10.007 0.5 9.129 1.379C8.25 2.257 8.25 3.672 8.25 6.5Z" fill="url(#paint1_linear_980_4692)"/>
                        <defs>
                          <linearGradient id="paint0_linear_980_4692" x1="4.02002" y1="6.44973" x2="8.2284" y2="18.801" gradientUnits="userSpaceOnUse">
                            <stop offset="0.114545" stop-color="#4DBFFF"/>
                            <stop offset="0.901042" stop-color="#000AFF"/>
                          </linearGradient>
                          <linearGradient id="paint1_linear_980_4692" x1="11.4058" y1="-0.3" x2="29.7825" y2="17.8341" gradientUnits="userSpaceOnUse">
                            <stop offset="0.114545" stop-color="#4DBFFF"/>
                            <stop offset="0.901042" stop-color="#000AFF"/>
                          </linearGradient>
                        </defs>
                      </svg>
                    <span style="font-family: Lato;
                    font-size: 24px;
                    font-style: normal;
                    font-weight: 600;
                    line-height: normal; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
                    background-clip: text;
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;">Keluar</span>
                </a>
            </nav>
        </aside>
        <div style="width: 100%">
            <nav class="navbar-top d-flex align-items-center" style="z-index: 50 ;box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.50); padding-block: 10px; position: relative; width: 100%;">
                <form class="d-flex" role="search" style="display: inline-block!important; margin-left: 400px; margin-right: 150px">
                    <input class="form-control me-2" type="search" placeholder="Ketikkan Pencarian Anda Disini" aria-label="Search" style="width: 300px">
                    <button class="btn btn-outline-success" type="submit" style="display: none">Search</button>
                </form>

                @php
                $user = auth()->user();
                @endphp
                <div style="display: inline-block; margin-right: 10px">
                    <p style="color: #1E1E1E; font-size: 20px; font-weight: 600; margin-bottom: 0px">{{ ($user->name) }}</p>


                    <p style="margin-bottom: 0px; font-size: 12px; font-style: normal; font-weight: 700; text-align: right">Admin Toko</p>
                </div>
                <div style="display: inline-block; margin-right: 10px">
                    <img src="{{ asset('img/dashboard-profile-logo.png') }}" alt="">
                </div style="display: inline-block;">
                <button style="display: inline-block; background-color: transparent; border: 0px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 20 22" fill="none">
                        <path d="M13.3565 19.0194C13.3566 19.5839 13.1434 20.1276 12.7596 20.5416C12.3757 20.9555 11.8496 21.209 11.2867 21.2514L11.1189 21.257H8.8813C8.31679 21.2571 7.77307 21.0439 7.35914 20.6601C6.9452 20.2763 6.69166 19.7501 6.64932 19.1872L6.64372 19.0194H13.3565ZM10.0001 1.0674e-09C12.0307 -3.35021e-05 13.9819 0.788626 15.4421 2.19962C16.9024 3.61061 17.7575 5.53362 17.8271 7.563L17.8316 7.83151V12.0426L19.87 16.1195C19.959 16.2974 20.0035 16.4942 19.9998 16.693C19.9961 16.8919 19.9442 17.0869 19.8486 17.2613C19.753 17.4357 19.6166 17.5844 19.451 17.6946C19.2854 17.8047 19.0956 17.8731 18.8978 17.8939L18.7691 17.9006H1.23103C1.03207 17.9007 0.836061 17.8525 0.659801 17.7602C0.48354 17.6679 0.332284 17.5342 0.218994 17.3707C0.105703 17.2071 0.0337566 17.0186 0.00931879 16.8211C-0.015119 16.6236 0.00868087 16.4232 0.0786789 16.237L0.130143 16.1195L2.16857 12.0426V7.83151C2.16857 5.75447 2.99368 3.76249 4.46237 2.2938C5.93107 0.825103 7.92304 1.0674e-09 10.0001 1.0674e-09Z" fill="url(#paint0_linear_1000_2284)"/>
                        <defs>
                          <linearGradient id="paint0_linear_1000_2284" x1="4.85501" y1="-0.850279" x2="23.2094" y2="25.3668" gradientUnits="userSpaceOnUse">
                            <stop offset="0.114545" stop-color="#4DBFFF"/>
                            <stop offset="0.901042" stop-color="#000AFF"/>
                          </linearGradient>
                        </defs>
                      </svg>
                </button>
            </nav>
            <div class="dashboard">
                <div class="d-flex align-items-center" style="margin-bottom: 30px">
                    <h1 style="font-weight: 900; font-size: 48px; margin-right: 30px; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
                    background-clip: text;
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;">UMKM Mojo</h1>
                </div>
                <div class="d-flex align-items-center" style="margin-bottom: 30px">
                    <form class="d-flex" role="search" style="display: inline-block!important; margin-right: 30px">
                        <input class="form-control me-2" type="search" placeholder="Ketikkan Pencarian Anda Disini" aria-label="Search" style="width: 300px">
                        <button class="btn btn-outline-success" type="submit" style="display: none">Search</button>
                    </form>
                    <button class="btn" style="border-radius: 12px;
                    background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));">Tambah UMKM Baru</button>
                </div>
                <div class="" style="">
                    <table class="table table-bordered border-dark">
                        <thead>
                            <tr>
                                <th style="font-size: 30px; font-weight: 900; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
                                background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">NO</th>
                                <th style="font-size: 30px; font-weight: 900; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
                                background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">NAMA UMKM</th>
                                <th style="font-size: 30px; font-weight: 900; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
                                background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">KATAGORI</th>
                                <th style="font-size: 30px; font-weight: 900; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
                                background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">RATING</th>
                                <th style="font-size: 30px; font-weight: 900; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
                                background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            // Ambil data UMKM dari database
                            $umkms = DB::table('umkms')->get();
                            @endphp

                            @foreach ($umkms as $umkm)
                            <tr>
                                <td>{{ $umkm->id_umkm }}</td>
                                <td>{{ $umkm->nama_usaha }}</td>
                                <td>{{ $umkm->kategori_usaha }}</td>
                                <td>{{ $umkm->rating }}</td>
                                <td>
                                    <a href="/umkms/info?id={{ $umkm->id_umkm }}" class="btn" style="background-color: deepskyblue">Button</a>
                                </td>


                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>
</html>
