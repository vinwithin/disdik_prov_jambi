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
            filter: drop-shadow(2px 4px 40px #143E9A);
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
                    <li class="breadcrumb-item active" aria-current="page">Sekretariat</li>
                </ol>
            </nav>
            <div class="content-box ">
                <h1>Sekretariat</h1>
                <p>
                    Sekretariat mempunyai tugas membantu dinas dalam rangka menyelenggarakan pelayanan dan mengkoordinasikan
                    dalam urusan ketatausahaan, kepegawaian, keuangan, organisasi, tatalaksana, hukum, hubungan masyarakat,
                    rumah tangga dinas dan barang milik daerah.
                </p>
                <h5>Sekretariat menyelenggarakan fungsi :</h5>
                <ul>
                    <li>Penyusunan rencana program dan kegiatan sekretariat;</li>
                    <li>Penyiapan rancangan keputusan kepala dinas;</li>
                    <li>Pelaksanaan tugas yang berkenaan dengan kepegawaian;</li>
                    <li>Penyusunan anggaran keuangan dan aset sesuai dengan program kerja dan penyelenggaraan kegiatan yang
                        berkenaan dengan keuangan;</li>
                    <li>Penyusunan rencana dan pelaksanaan pengadaan barang, jasa dan pendistribusian;</li>
                    <li>Pelaksanaan urusan keprotokolan, kehumasan, dan rumah tangga dinas;</li>
                    <li>Pelaksanaan urusan organisasi, ketatalaksanaan dan dokumentasi;</li>
                    <li>Pembinaan dan penilaian kinerja staf;</li>
                    <li>Pengevaluasian dan pelaporan kegiatan subbagian;</li>
                    <li>Pelaksanaan program dan kegiatan sekretariat; dan</li>
                    <li>Pelaksanaan fungsi lain yang diberikan atasan sesuai dengan bidang tugasnya</li>
                </ul>
                <div class="source-link">
                    Sumber : <a href="https://peraturan.bpk.go.id/Home/Details/108886/pergub-prov-jambi-no-35-tahun-2016"
                        target="_blank">https://peraturan.bpk.go.id/Home/Details/108886/pergub-prov-jambi-no-35-tahun-2016</a>
                </div>
            </div>
        </div>
    </div>
@endsection
