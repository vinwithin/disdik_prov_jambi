<style>
    .navbar {
        border: 0px solid rgba(216, 216, 216, 0.00);
        background: radial-gradient(231% 135.8% at 0.9% 2.98%, rgba(255, 255, 255, 0.40) 0%, rgba(255, 255, 255, 0.00) 100%);
        backdrop-filter: blur(21px);
        padding: 5px 25px;
        margin: 0;
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
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                  Profil
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/visi-misi">Visi Misi</a></li>
                  <li><a class="dropdown-item" href="/sambutan">Sambutan</a></li>
                </ul>
              </li>
      
            <!-- Program Dropdown -->
            <li class="nav-item dropdown">
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

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProgram" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Produk Hukum
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownProgram">
                    @foreach ($category as $item)
                        <li><a class="dropdown-item" href="/prod-hukum/{{$item->slug}}">{{$item->name}}</a></li>
                    @endforeach         
                </ul>
            </li>
            <!-- Other items -->
            {{-- <li class="nav-item"><a class="nav-link" href="/prod-hukum">Produk Hukum</a></li> --}}
            <li class="nav-item"><a class="nav-link" href="#">SOP</a></li>
            <li class="nav-item"><a class="nav-link" href="#">E-Layanan</a></li>
            <li class="nav-item"><a class="nav-link" href="#">SPBE</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Prestasi</a></li>
            <li class="nav-item"><a class="nav-link" href="#">E-Buletin</a></li>
        </ul>
    </div>

</nav>
