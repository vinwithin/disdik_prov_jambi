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
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .news-item img {
            width: 100%;
            border-radius: 8px;
        }

        .news-item h5 {
            margin-top: 15px;
        }

        .news-item p {
            margin: 15px 0;
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
        <h1>Galeri Foto</h1>
    </div>

    <div class="container-fluid bg-white">
        <div class="container pb-4">
            <div class="row text-dark" style="box-shadow: 2px 4px 40px 0px #143E9A;">
                <div class="col-lg-4">
                    <div class="news-item">
                        <img src="path-to-your-image.jpg" alt="News Image">                      
                    </div>
                    <h5 class="text-center">Mahasiswa Magang</h5>
                    <!-- Repeat the .news-item block for each news item -->
                </div>
                <div class="col-lg-4">
                    <div class="news-item">
                        <img src="path-to-your-image.jpg" alt="News Image">
                        
                    </div>
                    <h5 class="text-center">Mahasiswa Magang</h5>
                    <!-- Repeat the .news-item block for each news item -->
                </div>
                <div class="col-lg-4">
                    <div class="news-sidebar">
                        <h5>Berita Baru</h5>
                            <div class="border-bottom">
                                <strong>Mahasiswa Magang</strong>
                                <p>Lorem ipsum</p>
                            </div>
                            <div class="border-bottom">
                                <strong>Mahasiswa Magang</strong>
                                <p>Lorem ipsum</p>
                            </div>
                        
                        <!-- Repeat the .news-link block for each news link -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
