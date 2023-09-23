@extends('layouts_web.app')

@section('content')
    {{-- <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .filter-button {
            margin: 0 10px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        .filter-button.active {
            background-color: #007bff;
            color: #fff;
        }

        .filter-content {
            display: none;
        }

        .filter-content.active {
            display: block;
        }
    </style> --}}
    <div class="position-relative">
        <img class="position-absolute" src="{{ asset('img/LP-Sect2-Decor.png') }}" alt="" style="top: -30px">
    </div>
        <div class="container" style="margin-top:20px">
            <h1>
                
            </h1>
            <div class="container" style=" display: flex; justify-content: center; align-items: center">
                <button class="filter-button btn btn-primary" style="background-color:blue; margin:10px"
                    onclick="showAllContent()">All</button>
                <button class="filter-button active btn btn-primary" style="margin:10px"data-target="filter1"
                    onclick="showContent('filter1')">Filter 1</button>
                <button class="filter-button btn btn-primary" style="margin:10px" data-target="filter2"
                    onclick="showContent('filter2')">Filter 2</button>
                <button class="filter-button btn btn-primary" style="margin:10px" data-target="filter3"
                    onclick="showContent('filter3')">Filter 3</button>
                <button class="filter-button btn btn-primary" style="margin:10px" data-target="filter4"
                    onclick="showContent('filter4')">Filter 4</button>
            </div>

            <div class="container">
                <div id="filter1" class="filter-content active" style="margin-top:30px; margin-bottom:30px">
                    <div class="container" style="margin-bottom:20px">
                        <div class="container" style="display:flex">

                                <img src="{{ asset('img/ex-berita.jpg') }}" style="width:500px">

                            <div class="container">
                                <div class="container" style="text-align: left">
                                    <button class="disable-button btn btn-secondary" style="font-size: 14px; padding:5px; margin-bottom:10px">Filter satu</button>
                                <h2><b>Judul Konten 1</b></h2>
                            </div>
                            <div class="container" style="margin-top:15px">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="container" style="margin-bottom:20px">
                        <h2>Judul Konten 2</h2>
                        <button class="disable-button">Disable</button>
                        <p>Deskripsi singkat untuk konten 2.</p>
                    </div>
                    <div class="container" style="margin-bottom:20px">
                        <h2>Judul Konten 3</h2>
                        <button class="disable-button">Disable</button>
                        <p>Deskripsi singkat untuk konten 3.</p>
                    </div>
                </div>

                <div id="filter2" class="filter-content">
                    <h2>Judul Konten 4</h2>
                    <button class="disable-button">Disable</button>
                    <p>Deskripsi singkat untuk konten 4.</p>
                    <h2>Judul Konten 5</h2>
                    <button class="disable-button">Disable</button>
                    <p>Deskripsi singkat untuk konten 5.</p>
                    <h2>Judul Konten 6</h2>
                    <button class="disable-button">Disable</button>
                    <p>Deskripsi singkat untuk konten 6.</p>
                </div>

                <div id="filter3" class="filter-content">
                    <h2>Judul Konten 7</h2>
                    <button class="disable-button">Disable</button>
                    <p>Deskripsi singkat untuk konten 7.</p>
                    <h2>Judul Konten 8</h2>
                    <button class="disable-button">Disable</button>
                    <p>Deskripsi singkat untuk konten 8.</p>
                    <h2>Judul Konten 9</h2>
                    <button class="disable-button">Disable</button>
                    <p>Deskripsi singkat untuk konten 9.</p>
                </div>

                <div id="filter4" class="filter-content">
                    <h2>Judul Konten 10</h2>
                    <button class="disable-button">Disable</button>
                    <p>Deskripsi singkat untuk konten 10.</p>
                    <h2>Judul Konten 11</h2>
                    <button class="disable-button">Disable</button>
                    <p>Deskripsi singkat untuk konten 11.</p>
                    <h2>Judul Konten 12</h2>
                    <button class="disable-button">Disable</button>
                    <p>Deskripsi singkat untuk konten 12.</p>
                </div>
            </div>
        </div>
        <script>
            function showContent(targetFilter) {
                const filterContents = document.querySelectorAll('.filter-content');
                filterContents.forEach(content => {
                    if (content.id === targetFilter) {
                        content.style.display = 'block';
                    } else {
                        content.style.display = 'none';
                    }
                });

                const filterButtons = document.querySelectorAll('.filter-button');
                filterButtons.forEach(button => {
                    if (button.dataset.target === targetFilter) {
                        button.classList.add('active');
                    } else {
                        button.classList.remove('active');
                    }
                });
            }

            function showAllContent() {
                const filterContents = document.querySelectorAll('.filter-content');
                filterContents.forEach(content => content.style.display = 'block');

                const filterButtons = document.querySelectorAll('.filter-button');
                filterButtons.forEach(button => button.classList.remove('active'));
            }

            showAllContent();
        </script>
@endsection
