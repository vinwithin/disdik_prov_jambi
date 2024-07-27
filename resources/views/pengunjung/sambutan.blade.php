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
            font-size: 18px;
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
                            <li class="breadcrumb-item active" aria-current="page">Struktur Organisasi</li>
                        </ol>
                    </nav>
                    <h1 class="header-text">Sambutan Kepala Dinas</h1>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-3 text-center">
                    <img src="/img/Frame 58.png" alt="Kepala Dinas" class="profile-image">
                    <div class="blue-box mt-2">
                        <strong>H. SYAMSURIZAL, SE., M.Si</strong><br>
                        KEPALA DINAS
                    </div>
                </div>
                <div class="col-md-9 content">
                    <h2 class="sub-header-text">Selamat Datang di Website Dinas Pendidikan Provinsi Jambi</h2>
                    <p>Bismillahirrahmanirrahim</p>
                    <p>Assalamualaikum, Wr. Wb</p>
                    <p>Pertama dan utama sekali, marilah kita panjatkan puji syukur ke hadirat Allah SWT, Tuhan Yang
                        Maha Kuasa, karena berkat rahmat dan nikmat-Nya, Dinas Pendidikan, sebagai salah satu Perangkat
                        Daerah di Provinsi Jambi, masih bisa dan terus berupaya untuk eksis dalam mendukung terwujudnya
                        visi Provinsi Jambi, yakni, “TERWUJUDNYA JAMBI MANTAP (MAJU, AMAN, NYAMAN, TERTIB, AMANAH DAN
                        PROFESIONAL) DI BAWAH RIDHO ALLAH SWT”, khususnya melalui transparansi dan keterbukaan informasi
                        publik.</p>
                    <p>Kehadiran website ini dimaksudkan sebagai sarana publikasi untuk memberikan informasi dan
                        gambaran, bukan saja tentang Dinas Pendidikan, tetapi juga mengenai kebijakan, program, dan
                        kegiatan Pemerintah Provinsi Jambi. Tentunya, informasi yang disajikan tidak bertentangan dengan
                        ketentuan peraturan perundang-undangan.</p>
                    <p>“Beri kami data dan seuntai kata, akan kami tulis dan kabarkan jadi berita”. Itulah harapan dan
                        tekad seluruh pegawai di Dinas Pendidikan, khususnya rekan sejawat yang mengelola website ini,
                        untuk tetap memberikan pelayanan terbaik dalam memenuhi hak-hak masyarakat akan informasi
                        publik, siang atau malam, pagi atau petang.</p>
                    <p>“Tak ada gading yang tak retak, tak ada tebu yang tak beruas”, begitu kata sebuah ungkapan bijak.
                        Oleh karena itu, kritik dan saran terhadap berbagai kekurangan yang ada sangat kami harapkan
                        guna perbaikan yang lebih baik lagi, sehingga bukan hanya kuantitas tetapi juga kualitasnya
                        dapat kami tingkatkan.</p>
                    <p>Terima kasih atas kunjungannya ke laman online Dinas Pendidikan Provinsi Jambi ini. Semoga
                        website ini memberikan manfaat bagi kita semua. Amin ya Rabbal Alamin.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @endsection
