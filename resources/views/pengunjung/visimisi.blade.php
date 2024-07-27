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
        <div class="container">
            <div class="row mt-5">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Profil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Visi Misi Jambi Mantap 2024</li>
                        </ol>
                    </nav>
                    <h1 class="header-text">Visi Misi JAMBI MANTAP 2021 - 2024</h1>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-6 text-center">
                    <img src="/img/visimisi.png" alt="Gubernur dan Wakil Gubernur Jambi" class="profile-image" style="width: 695px; height: 447px;">
                </div>
                <div class="col-md-6 content">
                    <h2 class="sub-header-text">Visi</h2>
                    <p>Terwujudnya Jambi Maju, Aman, Nyaman, Tertib, Amanah dan Profesional dibawah Ridho ALLAH SWT.</p>
                    <h2 class="sub-header-text">Misi</h2>
                    <p>﻿Memantapkan Tata Kelola Pemerintahan.
                        Memantapkan Perekonomian Masyarakat dan Daerah.
                        Memantapkan Kualitas Sumber Daya Manusia</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @endsection
