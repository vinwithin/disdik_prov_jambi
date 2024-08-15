<style>
    .footer {
            background-color: #0D47A1;
            color: white;
            padding: 20px 0;
        }

        .footer h5 {
            font-weight: bold;
            margin-bottom: 15px;
        }

        .footer a {
            color: white;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .footer .qr-code img {
            max-width: 100%;
            height: auto;
        }

        .footer .social-media i {
            font-size: 1.5em;
            margin-right: 10px;
        }
</style>
<footer class="footer">
    <div class="container-fluid">
        <div class="row w-full mx-5">
            <!-- Logo and Contact Info -->
            <div class="col-md-3 ml-5">
                <img src="/img/disdik_new.png" alt="Logo" class="mb-3 w-3"
                    style="width: 187px; height: 122px;">
                <p>Jl. Jend. A. Yani No. 06 36122</p>
                <p><a href="mailto:disdik@jambiprov.go.id">disdik@jambiprov.go.id</a></p>
                <p>(0741) - 63197</p>
                <p><a href="#">Helpdesk</a></p>
                <div class="qr-code">
                    <img src="/img/Frame 130.png" alt="QR Code">
                </div>
            </div>
            <!-- Tautan -->
            <div class="col-md-2 ">
                <h5>Tautan</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Kemendikbudristek</a></li>
                    <li><a href="#">Pusdatin</a></li>
                    <li><a href="#">Pemprov Jambi</a></li>
                    <li><a href="#">Merdeka Belajar</a></li>
                    <li><a href="#">Disdik Kota Jambi</a></li>
                    <li><a href="#">PPID Prov. Jambi</a></li>
                    <li><a href="#">Diskominfo Prov. Jambi</a></li>
                    <li><a href="#">GTK Kemdikbud</a></li>
                </ul>
            </div>
            <!-- Social Media -->
            <div class="col-md-2">
                <h5>Social Media</h5>
                <ul class="list-unstyled social-media">
                    <li><a href="https://id-id.facebook.com/people/Disdik-Jambi/pfbid0cYCjc6KPjaGmLUZZeL59qdZHNiLqRpLKj5xuWQbc7vZMipDkNENg8yW7RJGWJybCl/"><i class="fab fa-facebook"></i> Facebook</a></li>
                    <li><a href="https://www.instagram.com/disdikjambi/"><i class="fab fa-instagram"></i> Instagram</a></li>
                    <li><a href="https://www.youtube.com/@DisdikJambi/videos"><i class="fab fa-youtube"></i> Youtube</a></li>
                </ul>
            </div>
            <!-- Visitor Stats -->
            <div class="col-md-2">
                <h5>Total Pengunjung</h5>
                <ul class="list-unstyled">
                    <li>>>  {{ $onlineCount }} Online</li>
                    <li>>> Hari {{ $dayVisitors }} Views</li>
                    <li>>> Minggu {{ $weeklyVisitors }} Views</li>
                    <li>>> Bulan {{ $monthlyVisitors }} Views</li>
                    <li>>> Total {{ $visitorCount }} Views</li>
                </ul>
            </div>
            <div class="col-md-2">
                <img src="/img/Frame 151.png" alt="QR Code" style="width: 300px">
            </div>
        </div>

    </div>
</footer>