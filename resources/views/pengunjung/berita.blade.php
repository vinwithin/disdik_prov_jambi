@extends('layout.index')
@section('content')
    <style>
        .navbar-custom {
            background-color: #002d72;
            color: #fff;
        }

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

        .news-item {
            margin-top: 10px;
            border-radius: 20px;
            background: #FFF;
            box-shadow: 0px 4px 4px 0px #0D47A1;
            padding: 20px;
            max-height: 350px;
            margin-bottom: 20px;
        }

        .news-item img {
            width: 100%;
            border-radius: 8px;
        }

        .news-item h5 {
            margin-top: 5px;
        }

        .news-item p {
            margin: 5px 0;
        }

        .news-sidebar {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .news-sidebar img {
            width: 100%;
            border-radius: 8px;
        }

        .news-sidebar .search-box {
            margin-bottom: 20px;
        }

        .news-sidebar .news-link {
            margin-bottom: 15px;
            display: block;
        }
    </style>


    <div class="social-icons">
        <a href="#" class="text-primary"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="text-danger"><i class="fab fa-instagram"></i></a>
        <a href="#" class="text-info"><i class="fab fa-twitter"></i></a>
        <a href="#" class="text-danger"><i class="fab fa-youtube"></i></a>
    </div>
    <div class="title text-center py-4">
        <h1>Berita Terkini</h1>
        <h4>Dapatkan Informasi Terkait Semua Kegiatan yang Dilakukan di Dinas Pendidikan Provinsi Jambi</h4>
    </div>

    <div class="container-fluid bg-white mt-5">
        <div class="container pb-4">
            {{-- <div class="row text-dark" style="box-shadow: 2px 4px 40px 0px #143E9A;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
        </div> --}}
            <div class="row text-dark" style="box-shadow: 2px 4px 40px 0px #143E9A;">
                <div class="col-lg-8">
                    @foreach ($berita as $item)
                        <div class="news-item">
                            <div class="row mt-2">
                                <div class="col-lg-4">
                                    <img src="/storage/berita/{{ $item->gambar }}" alt="News Image" style="height: 250px">
                                </div>
                                <div class="col-lg-8">
                                    <h5 class="fs-3">{{ $item->title }}</h5>
                                    <div>
                                        <span>Kategori Berita</span> | <span>8 Juli 2024</span> | <span>2 min</span> |
                                        <span>959
                                            Views</span>
                                    </div>
                                    <p>
                                        {{ $item->excerpt }}
                                    </p>
                                    <a href="/berita/detail/{{$item->slug}}">Baca Selengkapnya...</a>
                                </div>
                            </div>

                        </div>
                    @endforeach

                    <!-- Repeat the .news-item block for each news item -->
                </div>
                <div class="col-lg-4">
                    <div class="news-sidebar">
                        <div class="search-box">
                            <input type="text" class="form-control" placeholder="Cari Berita...">
                        </div>
                        <h5>Rilis Berita</h5>
                        @foreach ($beritaTerbaru as $item)  
           
                            <div class="news-link" style="box-shadow: 0 0 5px rgba(0, 0, 0, 0.2); padding: 0px 20px 20px 20px;">
                                <img src="/storage/berita/{{$item->gambar}}" alt="News Image">
                                <a href="/berita/detail/{{$item->slug}}" class="text-dark fs-3 fw-bold">{{$item->title}}</a>
                                <p>{{$item->created_at}}</p>
                                <p>{{$item->excerpt}}</p>
                            </div>
                        @endforeach

                        <!-- Repeat the .news-link block for each news link -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
