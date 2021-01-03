<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css"  crossorigin="anonymous">
    <link rel="shortcut icon" href="img/logo kpum.png">
    <title>Hasil Pemungutan Suara Pemilu Raya Fakultas Teknik 2021</title>
</head>
<?php

try {
    $myPDO = new PDO ("pgsql:host=localhost; dbname=coba","kpumft","22121998");
    #echo "Berhasil masuk Database <br>";
    $tes = $myPDO->query("SELECT suara, jumlah FROM evote.vw_hasil_hmp WHERE dapil = 'TEKNIK ELEKTRO';");
    $tes2 = $myPDO->query("SELECT persentase_dari_suara_sah_dalam_dapil FROM evote.vw_hasil_hmp WHERE dapil = 'TEKNIK ELEKTRO';");
    $persentase=array();
    $jumlah=array();
    $keterangan=array();
    while ($obj = $tes -> fetch(PDO::FETCH_OBJ)) {
        $jumlah[] = $obj->jumlah;
        $keterangan[] = $obj->suara;
    }
    while ($obj = $tes2 -> fetch(PDO::FETCH_OBJ)) {
        $persentase[] = floatval(number_format(floatval($obj->persentase_dari_suara_sah_dalam_dapil),2));
    }
    /*echo var_dump($persentase);
    echo "<br>";
    echo var_dump($jumlah);
    echo "<br>";
    print_r(json_encode($jumlah));
    echo "<br>";
    echo var_dump($keterangan);
    echo "<br>";
    echo var_dump($persentase);*/
} catch (PDOException $e) {

    echo $e->getMessage();
}
?>
<body class="bg-light">
    <div style="margin-left: auto; margin-right: auto;">
        <img src="img/logo kpum.png" alt="Logo KPUM KM-FT UTM" style="display: block; margin-left: auto; margin-right: auto; width: 7%; padding: 10px">
        <h1 style="text-align: center;">Hasil Pemungutan Suara Pemilu Raya FT 2021</h1>
        <h4 style="text-align: center;">Pemilihan Gubernur Mahasiswa dan Wakil Gubernur Mahasiswa Fakultas Teknik </h4>
        <h5 style="text-align: center;">Universitas Trunojoyo Madura tahun 2020-2021</h5>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <a class="navbar-brand text-light" href="index.php">Hasil Pemungutan Suara Pemilu E-Vote 2020</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link text-light" href="index.php">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="hasil_gubernur_ft.php">Pemilihan Gubernur dan Wakil Gubernur Fakultas Teknik</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="hasil_dpm_teknik.php">Hasil Pemilihan DPM KM-FT UTM</a>
            </li>
            </ul>
        </div>
    </nav>
    <script src="asset/charts.js"></script>
    <script src="asset/data.js"></script>
    <script src="asset/drilldown.js"></script>
        <figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description" style="text-align: center;">
        Diagram ini dibuat atas persetujuan KPUM-FT UTM 2020
    </p>
    </figure>
    <div>
    <script>
    // Create the chart
    Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Hasil Perhitungan'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Persentase suara',
        colorByPoint: true,
        data: [{
            name: <?=json_encode($keterangan[0]);?>,
            y: <?=json_encode($persentase[0]);?>
        }, {
            name: <?=json_encode($keterangan[1]);?>,
            y: <?=json_encode($persentase[1]);?>
        }]
    }]
});
    </script>
    </div>
    <?php
    echo"
    <div>
        <table class=\"table table-hover table-bordered rounded border-dark\" style=\"border-width: 2px;\">
            <thead>
                <tr>
                <th class=\"border-dark\" scope=\"col\">Keterangan</th>
                <th scope=\"col\" class=\"border-dark\">Persentase dari suara sah</th>
                <th scope=\"col\" class=\"border-dark\">Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>$keterangan[0]</td>
                <td>$persentase[0]</td>
                <td>$jumlah[0]</td>
                </tr>
                <tr>
                <td>$keterangan[1]</td>
                <td>$persentase[1]</td>
                <td>$jumlah[1]</td>
                </tr>
                <tr>
                <td>$keterangan[2]</td>
                <td></td>
                <td>$jumlah[2]</td>
                </tr>
                <tr>
                <td>$keterangan[3]</td>
                <td></td>
                <td>$jumlah[3]</td>
                </tr>
            </tbody>
        </table>
    </div>"
    ?>
</body>
</html>