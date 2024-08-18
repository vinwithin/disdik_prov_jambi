@extends('layout.index')
@section('content')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: #000;
            /* Add background color to the icons if needed */
            border-radius: 50%;
            padding: 10px;
        }

        @media (max-width: 720px) {
            .logo {
                position: static;
                top: 0px;
                /* Removes the relative positioning */
            }
            #carouselExampleAutoplaying{
                height: 400px;
                object-fit: cover;
            }
            #judul {
                font-size: 20px !important;
            }
            #video {
                width: 300px;
            
            }
        }
    </style>

    <div class="container text-center content justify-content-center my-2 vh-100">
        <h1 style="color: #E5F2FD;
            text-align: center;
            font-family: Poppins;
            font-size: 35px;
            font-style: normal;
            font-weight: 900;
            line-height: normal;"
            id="judul">
            DINAS PENDIDIKAN PROVINSI JAMBI</h1>
        <p class="w-75 mx-auto"
            style="color: #FFF;
            text-align: center;
            font-family: Poppins;
            font-size: 25px;
            font-style: normal;
            font-weight: 600;
            
            line-height: normal;"
            id="judul">
            Dengan Pendidikan Mantap Terciptanya SDM yang Unggul untuk Mewujudkan Jambi Mantap 2024</p>

        <div id="carouselExampleAutoplaying" class="carousel slide w-75 mx-auto m-4" data-bs-ride="carousel"
            style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.60); margin-top:40px;">
            <div class="carousel-inner">
                @foreach ($slide as $index => $item)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">

                        <img src="{{ $item->path }}" class="d-block w-100" alt="..."
                            style="width:1200px; height:500px;">

                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        {{-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner-wrapper position-relative">
                <div class="carousel-inner">
                    @foreach ($slide as $index => $item)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}" style="width: 33.33%;">
                        <img src="{{ $item->path }}" class="d-block w-100" alt="Slide Image"
                             style="height:500px; object-fit:cover;">
                    </div>
                    @endforeach
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> --}}





        <p
            style="color: #FFF;
            text-align: center;
            font-family: Poppins;
            font-size: 30px;
            font-style: normal;
            font-weight: 700;
            line-height: 120%; /* 46.8px */
            letter-spacing: -2.73px;"
            id="judul">
            #MANTAP BEKERJA TUMBUH BERSAMA MELAYANI DENGAN PRIMA</p>

        <div class="search-bar w-75 mx-auto ">
            <input type="text" placeholder="Cari informasi...">
        </div>

    </div>
    <div class="container-fluid bg-white  ">
        <div class="logo container sm-top-0 "
            style="display: flex;          
                padding: 20px 20px;
                justify-content: center;
                align-items: center;
                gap: 10px; border-radius: 20px;
                background: #FFF;
                top:-80px;
                position:relative;
                box-shadow: 0px 4px 10px 0px #0D47A1;"
            id="logo">
            <div class="row text-center">
                <div class="col-lg-3 mt-1">
                    <img src="/img/image 9.png" alt="" srcset="" style="width: 300px;">
                </div>
                <div class="col-lg-3 ">
                    <img src="/img/image 6.png" alt="" srcset="" style="width: 200px;">
                </div>
                <div class="col-lg-3 mb-1">
                    <img src="/img/image 7.png" alt="" srcset="">
                </div>
                <div class="col-lg-3 mt-4">
                    <img src="/img/image 8.png" alt="" srcset="" style="width: 200px;">
                </div>
            </div>

        </div>
        <div class="container w-100 news-container  ">
            <h2 class="text-center fw-bold pb-2" style="border-bottom: 2px #0D47A1; color: #0D47A1;">Berita Terkini</h2>

            <div class="row ">
                @foreach ($berita as $item)
                    <div class="col-md-9 news-main">
                        <div class="card mb-3" style="box-shadow: 0px 4px 4px 0px #0D47A1; border-radius:20px;">
                            <img src="/storage/berita/{{ $item->gambar }}" class="card-img-top " alt="Main News"
                                style="max-width:960px; max-height:800px">
                            <div class="card-body m-1">
                                <h5 class="card-title">{{ $item->title }}</h5>
                                <p class="card-text"><small class="text-muted">{{ $item->created_at }}</small></p>
                                <p class="card-text">{{ $item->excerpt }}</p>
                                <a href="/berita/detail/{{ $item->slug }}" class="btn btn-primary">Baca
                                    Selengkapnya...</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-3 news-sidebar ">
                    @foreach ($beritaTerbaru as $item)
                        <div class="card news-card" style="box-shadow: 0px 4px 4px 0px #0D47A1; border-radius:20px;">
                            <img src="/storage/berita/{{ $item->gambar }}" class="card-img-top" alt="News"
                                style="height: 253px; object-fit:cover;">
                            <div class="card-body m-3">
                                <h5 class="card-title">{{ $item->title }}</h5>
                                <p class="card-text"><small class="text-muted">{{ $item->created_at }}</small></p>
                                {{-- <p class="card-text">{{ $item->excerpt }}</p> --}}
                                <a href="/berita/detail/{{ $item->slug }}" class="btn btn-primary">Baca
                                    Selengkapnya...</a>
                            </div>
                        </div>
                    @endforeach
                    <a href="/berita" class="d-block mt-3 text-center ">Lihat Berita Selengkapnya <i
                            class="fas fa-external-link-alt"></i></a>
                </div>
            </div>
        </div>
        <div class="container mt-5 text-dark centered">
            <h2 class="text-center fw-bold" style="border-bottom: 2px #0D47A1; color: #0D47A1;">Pengumuman</h2>
            <div class="row ">
                <div class="col-md-8">
                    @foreach ($pengumuman as $item)
                        <div class="announcement">
                            <h5>{{ $item->title }}</h5>
                            <div class="date-time">
                                <i class="far fa-calendar-alt"></i> {{ $item->created_at }}
                                13:14:14
                            </div>
                        </div>
                    @endforeach
                    <a href="/pengumuman" class="btn btn-primary mt-3 mb-5">Lihat Pengumuman Selengkapnya </a>

                </div>
                <div class="col-md-4 mb-5 ">
                    @foreach ($pengumumanTerbaru as $item)
                        <div class="text-end">
                            <h5>{{ $item->title }}</h5>

                        </div>

                        <div class="preview" style="box-shadow: 0px 4px 4px 0px #0D47A1;">
                            {{-- <img src="/storage/pengumuman/{{ $item->gambar_pengumuman }}"> --}}
                            <iframe src="/storage/pengumuman/{{ $item->dokumen }}" width="100%"
                                height="500px"></iframe>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <h2 class="gallery-title text-center">GALERI</h2>
        <ul class="nav nav-pills justify-content-center">
            <li class="active">
                <a class="nav-link active" data-toggle="pill" href="#foto">Foto</a>
            </li>
            <li>
                <a class="nav-link" data-toggle="pill" href="#video">Video</a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="foto" class="tab-pane fade show in active ">
                <div class="row mt-3 text-center">
                    @foreach ($foto as $item)
                        <div class="col-lg-7">
                            <div class="card">
                                <a href="/galeri-foto/{{ $item->slug }}">
                                    <img src="{{ $item->path }}" class="card-img-top img-responsive"
                                        alt="Article Image" style="max-height: 400px; max-width:800px; object-fit:cover;">
                                </a>
                            </div>
                        </div>
                    @endforeach

                    <div class="col-lg-5">
                        <div class="row">
                            @foreach ($fotoTerbaru as $item)
                                <div class="col-lg-6 g-1">
                                    <a href="/galeri-foto/{{ $item->slug }}">
                                        <img src="{{ $item->path }}" class="card-img-top" alt="Article Image"
                                            style="max-width:280px; height:190px; object-fit:cover; margin-bottom:5px; margin-right:5px;">
                                    </a>

                                </div>
                            @endforeach

                        </div>

                    </div>

                </div>

                <a href="/galeri-foto" class="btn btn-primary mt-3 mb-5 ">Lihat Foto Selengkapnya </a>
            </div>
            <div id="video" class="tab-pane ">
                <div class="row mt-3 text-center">
                    <div class="col-lg-9">
                        @foreach ($videoTeratas as $item)
                            <iframe id="video" width="930" height="560" style="border:2px solid white;" allowfullscreen="true"
                                src="{{ $item->link_video }}" title="{{ $item->title }}">
                            </iframe>
                        @endforeach


                    </div>
                    <div class="col-lg-2">
                        @foreach ($videoTerbaru as $item)
                            <iframe width="300" height="181" style="border:2px solid white;" allowfullscreen="true"
                                src="{{ $item->link_video }}" title="{{ $item->title }}"></iframe>
                        @endforeach

                    </div>
                </div>
                <a href="/galeri-video" class="btn btn-primary mt-3 mb-5 ">Lihat Video Selengkapnya </a>

            </div>
        </div>
    </div>



    <div class="container-fluid pb-5 bg-white ">
        <div class="container pt-3 mt-5 w-full ">
            <div class="row mt-5" style="gap: 20px;">
                <div class="col-lg-5 " style="background-color: #d3d3d3; ">
                    <div class="w-50 mt-2 border-bottom">
                        <h3 style="border-bottom:solid 2px #0D47A1; color: #0D47A1;">GPR KEMKOMINFO</h3>
                    </div>
                    <div class="content">
                        <blockquote class="instagram-media" data-instgrm-captioned
                            data-instgrm-permalink="https://www.instagram.com/reel/C-ZyQOtSa8q/?utm_source=ig_embed&amp;utm_campaign=loading"
                            data-instgrm-version="14"
                            style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                            <div style="padding:16px;"> <a
                                    href="https://www.instagram.com/reel/C-ZyQOtSa8q/?utm_source=ig_embed&amp;utm_campaign=loading"
                                    style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                                    target="_blank">
                                    <div style=" display: flex; flex-direction: row; align-items: center;">
                                        <div
                                            style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;">
                                        </div>
                                        <div
                                            style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                            <div
                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;">
                                            </div>
                                            <div
                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding: 19% 0;"></div>
                                    <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg
                                            width="50px" height="50px" viewBox="0 0 60 60" version="1.1"
                                            xmlns="https://www.w3.org/2000/svg"
                                            xmlns:xlink="https://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                                    <g>
                                                        <path
                                                            d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                                                        </path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg></div>
                                    <div style="padding-top: 8px;">
                                        <div
                                            style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                            View this post on Instagram</div>
                                    </div>
                                    <div style="padding: 12.5% 0;"></div>
                                    <div
                                        style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                        <div>
                                            <div
                                                style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);">
                                            </div>
                                            <div
                                                style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;">
                                            </div>
                                            <div
                                                style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);">
                                            </div>
                                        </div>
                                        <div style="margin-left: 8px;">
                                            <div
                                                style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;">
                                            </div>
                                            <div
                                                style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">
                                            </div>
                                        </div>
                                        <div style="margin-left: auto;">
                                            <div
                                                style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);">
                                            </div>
                                            <div
                                                style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);">
                                            </div>
                                            <div
                                                style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);">
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                        <div
                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;">
                                        </div>
                                        <div
                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;">
                                        </div>
                                    </div>
                                </a>
                                <p
                                    style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                    <a href="https://www.instagram.com/reel/C-ZyQOtSa8q/?utm_source=ig_embed&amp;utm_campaign=loading"
                                        style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                        target="_blank">A post shared by Dinas Pendidikan Provinsi Jambi (@disdikjambi)</a>
                                </p>
                            </div>
                        </blockquote>
                        <script async src="//www.instagram.com/embed.js"></script>
                    </div>
                </div>
                <div class="col-lg-6 "
                    style="background-color: #1d3b82; box-shadow: 2px 4px 40px 0px #143E9A; border-radius: 20px; ">
                    <div class="header">
                        <div class="w-25 border-bottom">
                            <h3 class="ml-3 mt-2 ">Instagram</h3>

                        </div>
                    </div>
                    <div class="content d-flex justify-content-center align-items-center">
                        <blockquote class="instagram-media " data-instgrm-captioned
                            data-instgrm-permalink="{{ $instagram[0]->link_instagram }}" data-instgrm-version="14"
                            style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                            <div style="padding:16px;"> <a href="{{ $instagram[0]->link_instagram }}"
                                    style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                                    target="_blank">
                                    <div style=" display: flex; flex-direction: row; align-items: center;">
                                        <div
                                            style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;">
                                        </div>
                                        <div
                                            style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                            <div
                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;">
                                            </div>
                                            <div
                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding: 19% 0;"></div>
                                    <div style="display:block; height:50px; margin:0 auto 12px; width:50px;">
                                        <svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1"
                                            xmlns="https://www.w3.org/2000/svg"
                                            xmlns:xlink="https://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                                    <g>
                                                        <path
                                                            d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                                                        </path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div style="padding-top: 8px;">
                                        <div
                                            style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                            View this post on Instagram</div>
                                    </div>
                                    <div style="padding: 12.5% 0;"></div>
                                    <div
                                        style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                        <div>
                                            <div
                                                style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);">
                                            </div>
                                            <div
                                                style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;">
                                            </div>
                                            <div
                                                style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);">
                                            </div>
                                        </div>
                                        <div style="margin-left: 8px;">
                                            <div
                                                style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;">
                                            </div>
                                            <div
                                                style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">
                                            </div>
                                        </div>
                                        <div style="margin-left: auto;">
                                            <div
                                                style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);">
                                            </div>
                                            <div
                                                style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);">
                                            </div>
                                            <div
                                                style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);">
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                        <div
                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;">
                                        </div>
                                        <div
                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;">
                                        </div>
                                    </div>
                                </a>
                                <p
                                    style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                    <a href="{{ $instagram[0]->link_instagram }}"
                                        style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                        target="_blank">A post shared by Dinas Pendidikan Provinsi Jambi
                                        (@disdikjambi)</a>
                                </p>
                            </div>
                        </blockquote>
                        <script async src="//www.instagram.com/embed.js"></script>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid  bg-white text-dark ">
        <div class="container-100 ">
            <div class="row">
                <div class="col-md-6 col-lg-6 left-column mt-4 px-lg-4">
                    <div class="w-50">
                        <h2 style="border-bottom:solid 2px #0D47A1; color: #0D47A1;">Layanan Data</h2>

                    </div>
                    <div>
                        <a href="https://data.kemdikbud.go.id">
                            <img src="/img/image 15.png" alt="" class="img-fluid mb-2">
                        </a>
                        <a href="https://p3ke.kemenkopmk.go.id/beranda">
                            <img src="/img/image 16.png" alt="" class="img-fluid mb-2">
                        </a>
                        <img src="/img/Frame 120.png" alt="" class="img-fluid mb-2">
                        <div class="d-flex flex-wrap">
                            <img src="/img/image 18.png" alt="" class="img-fluid me-2 mb-2">
                            <img src="/img/image 19.png" alt="" class="img-fluid mb-2">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6  mt-3 px-lg-4">
                    <div class="w-50">
                        <h2 style="border-bottom:solid 2px #0D47A1; color: #0D47A1;">Lokasi Dinas Pendidikan</h2>
                    </div>
                    <div class="card">
                        <!-- Uncomment and update the iframe to make it visible -->
                        <div class="card-body" style="box-shadow: 0px 4px 4px 0px #0D47A1;">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.249260437416!2d103.5803437746572!3d-1.6069229983781055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e25885c16755cc1%3A0xd15d9615e3d9626!2sDinas%20Pendidikan%20Provinsi%20Jambi!5e0!3m2!1sid!2sid!4v1723644574432!5m2!1sid!2sid"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                            {{-- <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.2187150189375!2d103.61708177465717!3d-1.6224898983624103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2588a46541bc6b%3A0x81e40c13bb6159b!2skantor%20Kelurahan%20Kebun%20Handil!5e0!3m2!1sid!2sid!4v1716393878414!5m2!1sid!2sid"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                        </div>
                    </div>
                </div>
            </div>

            {{-- </div> --}}
            <div class="container-fluid mb-5 mt-5">
                <div class="w-25">
                    <h2 style="border-bottom:solid 2px #0D47A1; color: #0D47A1;">Pengunjung Website</h2>

                </div>

                <div class="row m-2 ">
                    <div class="col-lg-5" style="margin-bottom: 20px">
                        <div class="p-3"
                            style="box-shadow: 0px 4px 4px 0px #0D47A1; border-radius:20px; width: 100%; max-width: 900px; height: auto;">
                            <canvas id="dailyVisits" width="900" height="400"></canvas>
                        </div>
                        <div class="p-3"
                            style="box-shadow: 0px 4px 4px 0px #0D47A1; border-radius:20px; width: 100%; max-width: 800px; height: auto;">
                            <canvas id="monthlyVisits" width="800" height="400"></canvas>
                        </div>
                    </div>


                    <div class="col-lg-5 justify-items-center">
                        <div class="p-3 text-center d-flex align-items-center justify-content-center"
                            style="border-radius: 15px; background: #FFF; box-shadow: 0px 4px 4px 0px #0D47A1; height:200px; width:200px;">
                            <div>
                                <h1 class="fs-2">Online</h1>
                                <h1 class="fs-2 fw-bold">{{ $onlineCount }}</h1>
                            </div>
                        </div>

                        <div class="mt-3 d-flex align-items-center justify-content-center"
                            style="border-radius: 15px; background: #FFF; box-shadow: 0px 4px 4px 0px #0D47A1; height: 180px; max-width: 400px;">
                            <div class="text-center">
                                <h1 class="fs-2">Total Pengunjung</h1>
                                <h1 class="fs-2 fw-bold">{{ $visitorCount }} Views</h1>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        let januari = <?php echo json_encode($januari); ?>;
        let februari = <?php echo json_encode($februari); ?>;
        let maret = <?php echo json_encode($maret); ?>;
        let april = <?php echo json_encode($april); ?>;
        let mei = <?php echo json_encode($mei); ?>;
        let juni = <?php echo json_encode($juni); ?>;
        let juli = <?php echo json_encode($juli); ?>;
        let agustus = <?php echo json_encode($agustus); ?>;
        let september = <?php echo json_encode($september); ?>;
        let oktober = <?php echo json_encode($oktober); ?>;
        let november = <?php echo json_encode($november); ?>;
        let desember = <?php echo json_encode($desember); ?>;
        let harian = <?php echo json_encode($harian); ?>;
        const ctxDaily = document.getElementById('dailyVisits').getContext('2d');
        const dailyVisitsChart = new Chart(ctxDaily, {
            type: 'bar',
            data: {
                // labels: ['Minggu', 'Sabtu', 'Jumat', 'Kamis', 'Rabu', 'Selasa', 'Senin'],
                datasets: [{
                    label: 'Visits by Day',
                    data: harian,
                    backgroundColor: 'rgba(13, 71, 161, 1)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        const ctxMonthly = document.getElementById('monthlyVisits').getContext('2d');
        const monthlyVisitsChart = new Chart(ctxMonthly, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
                datasets: [{
                    label: 'Berdasarkan Bulan',
                    data: [januari, februari, maret, april, mei, juni, juli, agustus, september, oktober,
                        november, desember
                    ],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(13, 71, 161, 1)',
                    fill: true
                }]
            },
            options: {
                tension: 0.3
            }
        });

        var myCarousel = document.getElementById('carouselInsta');
        myCarousel.addEventListener('slide.bs.carousel', function() {
            window.instgrm.Embeds.process();
        });
    </script>
@endsection
