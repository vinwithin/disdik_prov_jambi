@extends('layout.index')
@section('content')
    <div class="container text-center content justify-content-center my-2 ">
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

        <div id="carouselExampleAutoplaying" class="carousel slide w-75 mx-auto" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($slide as $item)
                    <div class="carousel-item active">
                        <img src="/storage/berita/{{$item->gambar}}" class="d-block w-100" alt="..."
                            style="width:1200px; height:450px;">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
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

        <div class="search-bar w-75 mx-auto">
            <input type="text" placeholder="Cari informasi...">
        </div>
        <div class="container w-100 my-5"
            style="display: flex;
        width: 1392px;
        padding: 20px 20px;
        justify-content: center;
        align-items: center;
        gap: 10px; border-radius: 20px;
        background: #FFF;
        box-shadow: 0px 4px 10px 0px #0D47A1;">
            <img src="/img/image 9.png" alt="" srcset="" style="width: 350px;">
            <img src="/img/image 6.png" alt="" srcset="" style="width: 200px;">
            <img src="/img/image 7.png" alt="" srcset="">
            <img src="/img/image 8.png" alt="" srcset="" style="width: 200px;">

        </div>
    </div>
    <div class="container-fluid bg-white ">


        <div class="social-icons">
            <a href="#" class="text-primary"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-danger"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-info"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-danger"><i class="fab fa-youtube"></i></a>
        </div>

        <div class="container w-100 news-container ">
            <div class="row ">
                @foreach ($berita as $item)
                    
                <div class="col-md-8 news-main">
                    <div class="card mb-3 mt-5">
                        <img src="/storage/berita/{{$item->gambar}}" class="card-img-top" alt="Main News" style="max-width:800px">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->title}}</h5>
                            <p class="card-text"><small class="text-muted">9 Juli 2024</small></p>
                            <p class="card-text">{{$item->excerpt}}</p>
                            <a href="#" class="btn btn-primary">Baca Selengkapnya...</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 news-sidebar mt-5">
                    <div class="card news-card">
                        <img src="/storage/berita/{{$item->gambar}}" class="card-img-top" alt="News">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->title}}</h5>
                            <p class="card-text"><small class="text-muted">9 Juli 2024</small></p>
                            <p class="card-text">{{$item->excerpt}}</p>
                            <a href="#" class="btn btn-primary">Baca Selengkapnya...</a>
                        </div>
                    </div>
                    <div class="card news-card">
                        <img src="/storage/berita/{{$item->gambar}}" class="card-img-top" alt="News">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->title}}</h5>
                            <p class="card-text"><small class="text-muted">9 Juli 2024</small></p>
                            <p class="card-text">{{$item->excerpt}}</p>
                            <a href="#" class="btn btn-primary">Baca Selengkapnya...</a>
                        </div>
                    </div>
                @endforeach

                    <a href="#" class="d-block mt-3 text-center ">Lihat Berita Selengkapnya <i
                            class="fas fa-external-link-alt"></i></a>
                </div>
            </div>
        </div>
        <div class="container mt-5 text-dark centered">
            <h2 class="text-center">Pengumuman</h2>
            <div class="row w-100">
                @foreach ($pengumuman as $item)
                
                <div class="col-md-8">
                    <div class="announcement">
                        <h5>{{$item->title}}</h5>
                        <div class="date-time">
                            <i class="far fa-calendar-alt"></i> 9 Juli 2024 | <i class="far fa-clock ml-2"></i>
                            13:14:14
                        </div>
                    </div>
                    
                    <a href="#" class="btn btn-primary mt-3 mb-5">Lihat Pengumuman Selengkapnya </a>
                </div>
                @endforeach

                <div class="col-md-4">
                    <div class="preview">
                        <h5>Kesepakatan Rakor BTIKP Tahun 2024</h5>
                        <img src="path/to/your/image.jpg" alt="Pratinjau Dokumen">
                    </div>
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
                <div class="row mt-3">
                    <!-- Photo Card -->
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="path/to/image1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Nama album</h5>
                                <p class="card-text">
                                    <span><i class="far fa-calendar-alt"></i> 9 Juli 2024</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Repeat Photo Card for other images -->
                    <!-- Photo Card -->
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="path/to/image2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Nama album</h5>
                                <p class="card-text">
                                    <span><i class="far fa-calendar-alt"></i> 9 Juli 2024</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Add more photo cards as needed -->
                </div>
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
        {{-- <div class="container"> --}}
        <div class="left-column mt-4" style="margin-left:20px;">
            <h2>Layanan Data</h2>
            <div>
                <img src="/img/image 15.png" alt="" srcset="">
                <img class="mb-2" src="/img/image 16.png" alt="">
                <img src="/img/Frame 120.png" alt="">
                <div class="d-flex">
                    <img src="/img/image 18.png" alt="">
                    <img src="/img/image 19.png" alt="">
                </div>
            </div>
        </div>
        <div class="right-column mt-3" style="margin-right:20px;">
            <h2>Lokasi Dinas Pendidikan</h2>
            <div class="card ">
                <div class="card-body">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.2187150189375!2d103.61708177465717!3d-1.6224898983624103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2588a46541bc6b%3A0x81e40c13bb6159b!2skantor%20Kelurahan%20Kebun%20Handil!5e0!3m2!1sid!2sid!4v1716393878414!5m2!1sid!2sid"
                        width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        {{-- </div> --}}
    </div>
@endsection
