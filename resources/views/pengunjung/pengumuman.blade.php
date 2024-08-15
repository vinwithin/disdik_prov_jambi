@extends('layout.index')
@section('content')
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


   
    <div class="title text-center py-4" style="margin-bottom: 80px;">
        <h1 >Pengumuman</h1>
    </div>

    <div class="container-fluid bg-white">
        
        <div class="container pb-4" style="top:-50px; position:relative; border-radius: 20px;
            background: #FFF; ">
            <div class="row text-dark" style="box-shadow: 2px 4px 40px 0px #143E9A;">
                {{-- <p>Beranda > Pengumuman</p> --}}
                <div class="input-group mt-4 mb-4">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Cari..."
                        name="cari" wire:model="cari">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary" >
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
            
                </div>
                @foreach ($pengumuman as $item)
                    <div class="col-lg-6" style="border-radius: 20px;">
                        <h5 class="fs-3">{{$item->title}}</h5>
                        <div>
                            <span>{{$item->created_at}}</span>  
                        </div>
                        <a href="/storage/pengumuman/{{$item->dokumen}}">Pratinjau Dokumen |</a>
                        <a href="/storage/pengumuman/{{$item->dokumen}}" download>Download Dokumen</a>
                        
                        <div class="news-item">
                            {{-- <img src="/storage/pengumuman/{{ $item->gambar_pengumuman }}" alt="News Image"> --}}
                            <iframe src="/storage/pengumuman/{{$item->dokumen}}" width="100%" height="500px"></iframe>

                        </div>
                        <!-- Repeat the .news-item block for each news item -->
                    </div>
                @endforeach

                {{ $pengumuman->links() }}

            </div>

        </div>
        
    </div>
@endsection
