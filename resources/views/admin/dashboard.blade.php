@extends('layout/admin/index')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="card mt-4 p-3 shadow">
    <h3 class="pb-3">Grafik Pengunjung</h3>
    <div class="row m-2 ">
        <div class="col-lg-5" style="margin-bottom: 20px">
            <div class="p-3"
                style="box-shadow: 0px 4px 4px 0px #0D47A1; border-radius:20px; width: 100%; max-width: 900px; height: auto;">
                <canvas id="dailyVisits" width="900" height="400"></canvas>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="p-3"
                style="box-shadow: 0px 4px 4px 0px #0D47A1; border-radius:20px; width: 100%; max-width: 800px; height: auto;">
                <canvas id="monthlyVisits" width="800" height="400"></canvas>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        let januari = <?php echo json_encode($januari); ?>;
        let februari = <?php echo json_encode($februari); ?>;
        let maret = <?php echo json_encode($maret); ?>;
        let april = <?php echo json_encode($april); ?>;
        let mei = <?php echo json_encode($mei); ?>;
        let juni = <?php echo json_encode($juni); ?>;
        let juli = <?php echo json_encode($juli); ?>;
        let agustus = <?php echo json_encode($agustus); ?>;
        let september = <?php echo json_encode($september); ?>;
        let oktober = <?php echo json_encode($oktober); ?>;
        let november = <?php echo json_encode($november); ?>;
        let desember = <?php echo json_encode($desember); ?>;
        let harian = <?php echo json_encode($harian); ?>;
        const ctxDaily = document.getElementById('dailyVisits').getContext('2d');
        const dailyVisitsChart = new Chart(ctxDaily, {
            type: 'bar',
            data: {
                // labels: ['Minggu', 'Sabtu', 'Jumat', 'Kamis', 'Rabu', 'Selasa', 'Senin'],
                datasets: [{
                    label: 'Visits by Day',
                    data: harian,
                    backgroundColor: 'rgba(13, 71, 161, 1)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        const ctxMonthly = document.getElementById('monthlyVisits').getContext('2d');
        const monthlyVisitsChart = new Chart(ctxMonthly, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
                datasets: [{
                    label: 'Berdasarkan Bulan',
                    data: [januari, februari, maret, april, mei, juni, juli, agustus, september, oktober,
                        november, desember
                    ],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(13, 71, 161, 1)',
                    fill: true
                }]
            },
            options: {
                tension: 0.3
            }
        });

        var myCarousel = document.getElementById('carouselInsta');
        myCarousel.addEventListener('slide.bs.carousel', function() {
            window.instgrm.Embeds.process();
        });
    </script>
@endsection