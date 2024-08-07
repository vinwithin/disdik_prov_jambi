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
        <div class="container py-5">
            <h1 class="fw-bold  text-dark ">Produk Hukum</h1>
            <div class="input-group mt-4 mb-4">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Cari..." name="cari"
                    wire:model="cari" style="box-shadow: 2px 4px 4px 0px rgba(0, 0, 0, 0.50);">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary" style="box-shadow: 2px 4px 4px 0px rgba(0, 0, 0, 0.50);">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>

            </div>
            @foreach ($hukum as $item)
                <div class="container text-dark py-5">
                    <div class="content-box ">
                        <h2></h2>
                        <table class="table table-success table-striped">
                            <thead>
                                <tr>
                                    <th scope="col" colspan="2">{{$item->title}}</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tanggal Terbit</td>
                                    <td>{{$item->terbit}}</td>
                                </tr>
                                <tr>
                                    <td>Nomor</td>
                                    <td>{{$item->nomor}}</td>
                                </tr>
                                <tr>
                                    <td>Tentang</td>
                                    <td>{{$item->tentang}}</td>
                                </tr>
                                <tr>
                                    <td>Dokumen</td>
                                    <td>{{$item->tentang}}.pdf</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            @endforeach
        </div>
        {{ $hukum->links() }}

    </div>
    </div>
    </div>
@endsection
