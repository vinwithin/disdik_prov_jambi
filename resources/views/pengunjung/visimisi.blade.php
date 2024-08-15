@extends('layout.index')
@section('content')
    <style>
        body {
            background-color: #0D47A1;
            color: black;
            margin: auto;
        }

        .header-text {
            font-size: 24px;
            font-weight: bold;
        }

        .sub-header-text {
            font-size: 22px;
            font-weight: bold;
        }

        .content {
            margin-top: 20px;
        }

        .content p {
            margin-bottom: 1rem;
        }

        .profile-image {
            max-width: 100%;
            height: auto;
        }

        .blue-box {
            /* background-color: #003366; */
            color: white;
            padding: 10px;
            text-align: center;
            border-radius: 15px;
            background: #143E9A;

            /* Shadow */
            box-shadow: 2px 4px 40px 0px #143E9A;
        }
    </style>
    <div class="container-fluid bg-white m-0">
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb fw-medium">
                            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Visi Misi Jambi Mantap 2024</li>
                        </ol>
                    </nav>
                    <h1 class="header-text">{{$visimisi[0]->title}}</h1>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-6 text-center">
                    <img src="/storage/profil/{{$visimisi[0]->image}}" alt="Gubernur dan Wakil Gubernur Jambi" class="profile-image" style="width: 695px; height: 447px;">
                </div>
                <div class="col-md-6 content fs-5">
                    {!! $visimisi[0]->body !!}
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @endsection
