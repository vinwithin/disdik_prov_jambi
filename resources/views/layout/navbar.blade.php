<style>
    .navbar {
        border: 0px solid rgba(216, 216, 216, 0.00);
        background: radial-gradient(231% 135.8% at 0.9% 2.98%, rgba(255, 255, 255, 0.40) 0%, rgba(255, 255, 255, 0.00) 100%);
        backdrop-filter: blur(21px);
        padding: 5px 25px;
        margin: 0;
    }
    #spbe .dropdown-menu {
        right: 0;
        left: auto;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark ">
    <img src="/img/image_4.png" style="width: 60px; height:60px;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto fw-bold">
            <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>

            <!-- Profil Dropdown -->
            <li class="nav-item dropdown" id="profileDropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="true">
                    Profil
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/visi-misi">Visi Misi</a></li>
                    <li><a class="dropdown-item" href="/sambutan">Sambutan</a></li>
                </ul>
            </li>

            <!-- Program Dropdown -->
            <li class="nav-item dropdown" id="programDropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProgram" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Program
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownProgram">
                    <li><a class="dropdown-item" href="/sekretariat">SEKRETARIAT</a></li>
                    <li><a class="dropdown-item" href="/btikp">BTIKP</a></li>
                    <li><a class="dropdown-item" href="/smk">Badan Pembinaan SMK</a></li>
                    <li><a class="dropdown-item" href="/sma">Badan Pembinaan SMA</a></li>
                    <li><a class="dropdown-item" href="/pklk">Badan Pembinaan PKLK</a></li>
                    <li><a class="dropdown-item" href="/gtk">Badan Pembinaan GTK</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown" id="hukumDropdown"> 
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProgram" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Produk Hukum
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownProgram">
                    @foreach ($category as $item)
                        <li><a class="dropdown-item" href="/prod-hukum/{{ $item->slug }}">{{ $item->name }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li class="nav-item dropdown" id="e-layanan"> 
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProgram" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    E-layanan
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownProgram">
                    <li><a class="dropdown-item" href="https://backbone.disdik.jambiprov.go.id/ikm/">IKM & ADUAN</a></li>
                    <li><a class="dropdown-item" href="https://disdik.jambiprov.go.id/eboard/">E-BOARD</a></li>
                    <li><a class="dropdown-item" href="https://sibisma.disdik.jambiprov.go.id">PORTAL SEKOLAH</a></li>
                    <li><a class="dropdown-item" href="https://beasiswa.jambiprov.go.id/dumisake/">DUMISAKE PENDIDIKAN</a></li>
                    <li><a class="dropdown-item" href="https://siadik.disdik.jambiprov.go.id">SIADIK</a></li>
                    <li><a class="dropdown-item" href="https://backbone.disdik.jambiprov.go.id/synch/">BACKBONE</a></li>
                    <li><a class="dropdown-item" href="https://ppdb.disdik.jambiprov.go.id">PESIAR ONLINE</a></li>

                </ul>
            </li>
            <!-- Other items -->
            {{-- <li class="nav-item"><a class="nav-link" href="/prod-hukum">Produk Hukum</a></li> --}}
            <li class="nav-item"><a class="nav-link" href="#">SOP</a></li>

            <li class="nav-item dropdown" id="spbe"> 
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProgram" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    SPBE
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownProgram">
                    <li><a class="dropdown-item" href="https://dispakati.bkn.go.id">DISPAKATI</a></li>
                    <li><a class="dropdown-item" href="https://kinerja.bkn.go.id/login">E-KINERJA</a></li>
                    <li><a class="dropdown-item" href="https://srikandi.arsip.go.id">SRIKANDI</a></li>
                    <li><a class="dropdown-item" href="https://e-monev.komisiinformasi.go.id/provinsi/jambi">E-MONEY KIP</a></li>
                    <li><a class="dropdown-item" href="https://pd.data.kemdikbud.go.id/verval-lulusan/">VERVAL LULUSAN SMA/SMK/MA/ULYA</a></li>
                    <li><a class="dropdown-item" href="https://nisn.data.kemdikbud.go.id">PENCARIAN NISN</a></li>
                    <li><a class="dropdown-item" href="https://gtk.belajar.kemdikbud.go.id/akun/ptk">PENCARIAN GTK</a></li>
                    <li><a class="dropdown-item" href="https://snpmb.bppp.kemdikbud.go.id">SNPMB</a></li>
                    <li><a class="dropdown-item" href="https://ppg.kemdikbud.go.id">PPG</a></li>
                    <li><a class="dropdown-item" href="https://ult.kemdikbud.go.id">ULT KEMENDIKBUD</a></li>
                    <li><a class="dropdown-item" href="https://data.kemdikbud.go.id/publikasi">PUBLIKASI DATA</a></li>
                    <li><a class="dropdown-item" href="https://data.kemdikbud.go.id/dataset">STATISTIK DATA</a></li>
                    <li><a class="dropdown-item" href="https://disdik.jambiprov.go.id">APK APM</a></li>
                    <li><a class="dropdown-item" href="https://disdik.jambiprov.go.id">SANITASI SEKOLAH</a></li>
                </ul>
            </li>
            
            <li class="nav-item"><a class="nav-link" href="/prestasi">Prestasi</a></li>
            <li class="nav-item"><a class="nav-link" href="#">E-Buletin</a></li>
        </ul>
    </div>

</nav>
<script>
    document.getElementById('profileDropdown').addEventListener('mouseenter', function() {
        let dropdownMenu = this.querySelector('.dropdown-menu');
        dropdownMenu.classList.add('show');
    });

    document.getElementById('profileDropdown').addEventListener('mouseleave', function() {
        let dropdownMenu = this.querySelector('.dropdown-menu');
        dropdownMenu.classList.remove('show');
    });
    document.getElementById('programDropdown').addEventListener('mouseenter', function() {
        let dropdownMenu = this.querySelector('.dropdown-menu');
        dropdownMenu.classList.add('show');
    });

    document.getElementById('programDropdown').addEventListener('mouseleave', function() {
        let dropdownMenu = this.querySelector('.dropdown-menu');
        dropdownMenu.classList.remove('show');
    });
    document.getElementById('hukumDropdown').addEventListener('mouseenter', function() {
        let dropdownMenu = this.querySelector('.dropdown-menu');
        dropdownMenu.classList.add('show');
    });
    document.getElementById('hukumDropdown').addEventListener('mouseleave', function() {
        let dropdownMenu = this.querySelector('.dropdown-menu');
        dropdownMenu.classList.remove('show');
    });

    document.getElementById('e-layanan').addEventListener('mouseenter', function() {
        let dropdownMenu = this.querySelector('.dropdown-menu');
        dropdownMenu.classList.add('show');
    });
    document.getElementById('e-layanan').addEventListener('mouseleave', function() {
        let dropdownMenu = this.querySelector('.dropdown-menu');
        dropdownMenu.classList.remove('show');
    });

    document.getElementById('spbe').addEventListener('mouseenter', function() {
        let dropdownMenu = this.querySelector('.dropdown-menu');
        dropdownMenu.classList.add('show');
    });
    document.getElementById('spbe').addEventListener('mouseleave', function() {
        let dropdownMenu = this.querySelector('.dropdown-menu');
        dropdownMenu.classList.remove('show');
    });
</script>
