@extends('layout.index')
@section('content')
    <style>
        .content-box {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            background-color: #f8f9fa;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            fill: #FFF;
            filter: drop-shadow(2px 4px 10px #143E9A);

        }

        .content-box h1 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .content-box ul {
            list-style-type: none;
            padding-left: 0;
        }

        .content-box ul li {
            padding-left: 1em;
            text-indent: -1em;
        }

        .content-box ul li::before {
            content: "• ";
            color: #007bff;
        }

        .source-link {
            margin-top: 20px;
        }
    </style>
    <div class="container-fluid bg-white">
        <div class="container text-dark py-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Profil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">GTK</li>
                </ol>
            </nav>
         
                <div class="content-box ">
                    <h1>{{ $gtk[0]->title }}</h1>
                    <p>{!! $gtk[0]->body !!}</p>
                   
        

        </div>
    </div>
    </div>
@endsection
