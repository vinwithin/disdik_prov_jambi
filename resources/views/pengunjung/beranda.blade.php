@extends('layout.index')
@section('content')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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

        @media (min-width: 600px) {
            .logo {
                position: static;
                top: 0px;
                /* Removes the relative positioning */
            }

            #p {
                font-size: 10px;
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
        <h1 style="color: #E5F2FD;
            text-align: center;
            font-family: Poppins;
            font-size: 35px;
            font-style: normal;
            font-weight: 900;
            line-height: normal;"
            id="h1">
            DINAS PENDIDIKAN PROVINSI JAMBI</h1>
        <p class="w-75 mx-auto"
            style="color: #FFF;
            text-align: center;
            font-family: Poppins;
            font-size: 25px;
            font-style: normal;
            font-weight: 600;
            
            line-height: normal;"
            id="p">
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
                <div class="row m-3">
                    @foreach ($fotoTerbaru as $item)
                        <div class="col-lg-3">
                            <div class="card">
                                <img src="{{ $item->path }}" class="card-img-top img-responsive" alt="Article Image">
                            </div>
                        </div>
                    @endforeach
                </div>
                <a href="/galeri-foto" class="btn btn-primary mt-3 mb-5 ">Lihat Foto Selengkapnya </a>
            </div>
            <div id="video" class="tab-pane ">
                <div class="row m-3">
                    @foreach ($videoTerbaru as $item)
                        <div class="col-lg-4 m-3">
                            <div class="card" style="margin:20px;">

                                <iframe width="420" height="315" style="border:2px solid white;"  allowfullscreen="true"
                                    src="{{ $item->link_video }}">
                                </iframe>

                            </div>
                        </div>
                    @endforeach
                </div>
                <a href="/galeri-video" class="btn btn-primary mt-3 mb-5 ">Lihat Video Selengkapnya </a>

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
    <div class="container-fluid  bg-white text-dark ">
        <div class="container-75 ">
            <div class="row">
                <div class="col-md-6 col-lg-6 left-column mt-4 px-lg-4">
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
                <div class="col-md-6 col-lg-6  mt-3 px-lg-4">
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
            <div class="container-fluid mb-5 mt-5">
                <h2>Pengunjung Website</h2>

                <div class="row m-2 ">
                    <div class="col-lg-8 " style="margin-bottom: 20px">
                        <div class="p-3" style="box-shadow: 0px 4px 4px 0px #0D47A1;  border-radius:20px;">
                            <canvas id="dailyVisits"></canvas>
                        </div>
                        <div class="p-3" style="box-shadow: 0px 4px 4px 0px #0D47A1;  border-radius:20px;">
                            <canvas id="monthlyVisits"></canvas>
                        </div>

                    </div>
                    <div class="col-lg-4 justify-items-center">
                        <div class="p-3 text-center" style="box-shadow: 0px 4px 4px 0px #0D47A1;  border-radius:20px; height:300px;">
                            <h1 >Online</h1>
                            <h1 class="fs-1 fw-bold">{{ $onlineCount }}</h1>
                        </div>
                        <div class="p-3 text-center" style="box-shadow: 0px 4px 4px 0px #0D47A1;  border-radius:20px; height:200px;">
                            <h1>Total Pengunjung</h1>
                            <h1 class="fs-1 fw-bold">{{ $visitorCount }} Views</h1>
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
        const ctxDaily = document.getElementById('dailyVisits').getContext('2d');
        const dailyVisitsChart = new Chart(ctxDaily, {
            type: 'bar',
            data: {
                labels: ['Minggu', 'Sabtu', 'Jumat', 'Kamis', 'Rabu', 'Selasa', 'Senin'],
                datasets: [{
                    label: 'Visits by Day',
                    data: [250, 200, 150, 220, 180, 190, 230],
                    backgroundColor: 'rgba(54, 162, 235, 0.6)',
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
                    borderColor: 'rgba(54, 162, 235, 1)',
                    fill: true
                }]
            },
            options: {
                tension: 0.3
            }
        });
    </script>
@endsection
