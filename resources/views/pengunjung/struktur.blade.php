@extends('layout.index')
@section('content')
    <div class="container-fluid bg-white m-0">
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb fw-medium">
                            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Struktur Organisasi</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="text-start d-flex justify-content-center align-items-center">
                <img  src="/storage/profil/{{$struktur[0]->image}}" alt="Struktur Organisasi" srcset="">
            </div>
        </div>
    </div>
@endsection
