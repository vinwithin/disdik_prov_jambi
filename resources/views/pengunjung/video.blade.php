@extends('layout.index')
@section('content')
@php use Carbon\Carbon; @endphp

    <style>
        .navbar-custom {
            background-color: #002d72;
            color: #fff;
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
            margin: 25px 0;
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


    
    <div class="title text-center py-4" style="margin-bottom: 90px;">
        <h1>Galeri Video</h1>
    </div>
    <div class="container-fluid bg-white">
        <div class="container pb-4"
            style="top:-50px; position:relative; border-radius: 20px;
            background: #FFF; ">

            <div class="row text-dark" style="box-shadow: 2px 4px 40px 0px #143E9A;">
                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb mt-2 fw-medium">
                        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Galeri Video</li>
                    </ol>
                </nav>
                <div class="col-lg-8 mx-1">
                    <div class="row">
                        @foreach ($video as $item)
                            <div class="col-lg-6">
                                <div class="news-item">
                                    <iframe  width="380" height="315" style="border:2px solid white; " src="{{$item->link_video}}">
                                    </iframe>
                                    <h5 class="text-center">{{ $item->title }}</h5>
                                    
                                </div>
                                <!-- Repeat the .news-item block for each news item -->
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-3 mx-5">
                    <div class="row">
                        <div class="news-sidebar text-start px-lg-4" style="max-width: 300px;">
                            <h5 class="fw-bold fs-3">Berita Baru</h5>
                            @foreach ($beritaTerbaru as $item)
                                <div class="col-md-6 col-lg-12 mb-3">
                                    <div class="border-bottom ">
                                        <a class="fw-bold text-dark"
                                            href="/berita/detail/{{ $item->slug }}"><strong>{{ $item->title }}</strong></a>
                                        <p>{{ Carbon::parse($item->created_at)->translatedFormat('d F Y') }}</p>
                                        <p>{{ $item->excerpt }}</p>
                                    </div>
                                </div>
                            @endforeach
                            <!-- Repeat the .news-link block for each news link -->
                        </div>
                    </div>
                </div>
            {{ $video->links() }}

            </div>
        </div>
    </div>
    </div>
@endsection
