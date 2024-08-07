@extends('layout.index')
@section('content')
    <style>
        .social-icons {
            position: fixed;
            top: 50%;
            transform: translateY(-50%);
            left: 0;
        }

        .social-icons a {
            display: block;
            padding: 10px;
            background-color: #fff;
            margin: 5px 0;
            color: #000;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            text-align: center;
            line-height: 20px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        @media (max-width: 768px) {
            #logo{
                position: static;
                top: 0;
                /* Removes the relative positioning */
            }
        }
    </style>
    <div class="social-icons">
        <a href="#" class="text-primary"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="text-danger"><i class="fab fa-instagram"></i></a>
        <a href="#" class="text-info"><i class="fab fa-twitter"></i></a>
        <a href="#" class="text-danger"><i class="fab fa-youtube"></i></a>
    </div>
    <div class="container fs-sm-6 text-center content justify-content-center my-2   vh-100">
        <h1
            style="color: #E5F2FD;
            text-align: center;
            font-family: Poppins;
            font-size: 35px;
            font-style: normal;
            font-weight: 900;
            line-height: normal;">
            DINAS PENDIDIKAN PROVINSI JAMBI</h1>
        <p class="w-75 mx-auto"
            style="color: #FFF;
            text-align: center;
            font-family: Poppins;
            font-size: 25px;
            font-style: normal;
            font-weight: 600;
            
            line-height: normal;">
            Dengan Pendidikan Mantap Terciptanya SDM yang Unggul untuk Mewujudkan Jambi Mantap 2024</p>

        <div id="carouselExampleAutoplaying" class="carousel slide w-75 mx-auto m-4" data-bs-ride="carousel"
            style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.60); margin-top:40px;">
            <div class="carousel-inner">
                @foreach ($slide as $index => $item)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">

                        <img src="{{ $item->path }}" class="d-block w-100" alt="..."
                            style="width:1200px; height:500px;">
                        {{-- <div class="carousel-caption d-none d-md-block">
                                <h5> {{ $item->title }}</h5>
                            </div> --}}
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


        <p
            style="color: #FFF;
            text-align: center;
            font-family: Poppins;
            font-size: 30px;
            font-style: normal;
            font-weight: 700;
            line-height: 120%; /* 46.8px */
            letter-spacing: -2.73px;">
            #MANTAP BEKERJA TUMBUH BERSAMA MELAYANI DENGAN PRIMA</p>

        <div class="search-bar w-75 mx-auto ">
            <input type="text" placeholder="Cari informasi...">
        </div>

    </div>
    <div class="container-fluid bg-white  ">
        <div class="container sm-top-0 "
            style="display: flex;          
                padding: 20px 20px;
                justify-content: center;
                align-items: center;
                gap: 10px; border-radius: 20px;
                background: #FFF;
                top:-80px;
                position:relative;
                box-shadow: 0px 4px 10px 0px #0D47A1;" id="logo">
            <div class="row text-center">
                <div class="col-lg-3 ">
                    <img src="/img/image 9.png" alt="" srcset="" style="width: 300px;">
                </div>
                <div class="col-lg-3 ">
                    <img src="/img/image 6.png" alt="" srcset="" style="width: 200px;">
                </div>
                <div class="col-lg-3">
                    <img src="/img/image 7.png" alt="" srcset="">
                </div>
                <div class="col-lg-3">
                    <img src="/img/image 8.png" alt="" srcset="" style="width: 200px;">
                </div>
            </div>

        </div>
        <div class="container w-100 news-container  ">
            <div class="row ">
                @foreach ($berita as $item)
                    <div class="col-md-8 news-main">
                        <div class="card mb-3" style="box-shadow: 0px 4px 4px 0px #0D47A1; border-radius:20px;">
                            <img src="/storage/berita/{{ $item->gambar }}" class="card-img-top " alt="Main News"
                                style="max-width:800px; max-height:800px">
                            <div class="card-body m-4">
                                <h5 class="card-title">{{ $item->title }}</h5>
                                <p class="card-text"><small class="text-muted">9 Juli 2024</small></p>
                                <p class="card-text">{{ $item->excerpt }}</p>
                                <a href="/berita/detail/{{ $item->slug }}" class="btn btn-primary">Baca
                                    Selengkapnya...</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-4 news-sidebar ">
                    @foreach ($beritaTerbaru as $item)
                        <div class="card news-card" style="box-shadow: 0px 4px 4px 0px #0D47A1; border-radius:20px;">
                            <img src="/storage/berita/{{ $item->gambar }}" class="card-img-top" alt="News"
                                style="height: 283px;">
                            <div class="card-body m-3">
                                <h5 class="card-title">{{ $item->title }}</h5>
                                <p class="card-text"><small class="text-muted">9 Juli 2024</small></p>
                                <p class="card-text">{{ $item->excerpt }}</p>
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
            <h2 class="text-center">Pengumuman</h2>
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
                        <div class="preview" style="box-shadow: 0px 4px 4px 0px #0D47A1;">
                            <h5>{{ $item->title }}</h5>
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
        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="foto-tab" data-toggle="tab" href="#foto" role="tab"
                    aria-controls="foto" aria-selected="true">Foto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="video-tab" data-toggle="tab" href="#video" role="tab"
                    aria-controls="video" aria-selected="false">Video</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="foto" role="tabpanel" aria-labelledby="foto-tab">

                <div class="row m-3">
                    @foreach ($fotoTerbaru as $item)
                        <div class="col-lg-3">
                            <div class="card">
                                <img src="{{ $item->path }}" class="card-img-top img-responsive" alt="Article Image">
                            </div>
                        </div>
                    @endforeach
                </div>

                <a href="/pengumuman" class="btn btn-primary mt-3 mb-5 ">Lihat Foto Selengkapnya </a>

            </div>
            <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
                <!-- Content for video tab -->
            </div>
        </div>
    </div>


    <div class="container-fluid  bg-white ">
        <div class="container d-flex mt-5 w-full">
            <div class="left-column mt-2" style="background-color: #d3d3d3; margin-left:20px;">
                <h3>GPR KEMKOMINFO</h3>
            </div>
            <div class="right-column mt-2" style="background-color: #1d3b82; margin-right:20px;">
                <div class="header">
                    Instagram
                </div>
                <div class="content">
                    <!-- Instagram content here -->
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid d-flex bg-white text-dark ">
        {{-- <div class="container-fluid"> --}}
        <div class="row">
            <div class="col-md-6 col-lg-4 left-column mt-4 px-lg-4">
                <h2>Layanan Data</h2>
                <div>
                    <img src="/img/image 15.png" alt="" class="img-fluid mb-2">
                    <img src="/img/image 16.png" alt="" class="img-fluid mb-2">
                    <img src="/img/Frame 120.png" alt="" class="img-fluid mb-2">
                    <div class="d-flex flex-wrap">
                        <img src="/img/image 18.png" alt="" class="img-fluid me-2 mb-2">
                        <img src="/img/image 19.png" alt="" class="img-fluid mb-2">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 right-column mt-3 px-lg-4">
                <h2>Lokasi Dinas Pendidikan</h2>
                <div class="card">
                    <!-- Uncomment and update the iframe to make it visible -->
                    <div class="card-body" style="box-shadow: 0px 4px 4px 0px #0D47A1;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.2187150189375!2d103.61708177465717!3d-1.6224898983624103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2588a46541bc6b%3A0x81e40c13bb6159b!2skantor%20Kelurahan%20Kebun%20Handil!5e0!3m2!1sid!2sid!4v1716393878414!5m2!1sid!2sid"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>

        {{-- </div> --}}
    </div>
@endsection
