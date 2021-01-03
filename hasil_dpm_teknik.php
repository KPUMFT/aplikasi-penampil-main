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
    $tes = $myPDO->query("SELECT suara, jumlah FROM evote.vw_hasil_dpm;");
    $tes2 = $myPDO->query("SELECT persentase_dari_suara_sah FROM evote.vw_hasil_dpm;");
    $persentase=array();
    $jumlah=array();
    $keterangan=array();
    while ($obj = $tes -> fetch(PDO::FETCH_OBJ)) {
        $jumlah[] = $obj->jumlah;
        $keterangan[] = $obj->suara;
    }
    while ($obj = $tes2 -> fetch(PDO::FETCH_OBJ)) {
        if (is_null ($obj->persentase_dari_suara_sah)) {
            $persentase[] = 0;
        }
        else {
            $persentase[] = floatval(number_format(floatval($obj->persentase_dari_suara_sah),2));
        }
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
        <h1 style="text-align: center;">Hasil Pemungutan Suara Pemilu Raya 2021</h1>
        <h4 style="text-align: center;">Pemilihan DPM Fakultas Teknik</h4>
        <h5 style="text-align: center;">Universitas Trunojoyo Madura tahun 2020-2021</h5>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <a class="navbar-brand text-light" href="index.php">Hasil Pemungutan Suara Pemilu E-Vote FT 2021</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link text-light" href="index.php">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="hasil_gubernur_ft.php">Pemilihan Gubernur dan Wakil Gubernur</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="hasil_dpm_teknik.php">Hasil Pemilihan DPM-FT</a>
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
        Diagram ini disetujuai oleh KPUM-FT 2021
    </p>
    </figure>
    <div>
    <script>
    // Create the chart
        Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            accessibility: {
                announceNewData: {
                    enabled: true
                }
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: 'Persentase Perolehan Suara'
                }

            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:.1f}%'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> dari total<br/>'
            },

            series: [
                {
                    name: "Hasil Perhitungan DPM FH",
                    colorByPoint: true,
                    data: [
                        {
                            name: <?=json_encode($keterangan[0]);?>,
                            y: <?=json_encode($persentase[0]);?>
                        },
                        {
                            name: <?=json_encode($keterangan[1]);?>,
                            y: <?=json_encode($persentase[1]);?>
                        },
                        {
                            name: <?=json_encode($keterangan[2]);?>,
                            y: <?=json_encode($persentase[2]);?>
                        },
                        {
                            name: <?=json_encode($keterangan[3]);?>,
                            y: <?=json_encode($persentase[3]);?>
                        },
                        {
                            name: <?=json_encode($keterangan[4]);?>,
                            y: <?=json_encode($persentase[4]);?>
                        },
                        {
                            name: <?=json_encode($keterangan[5]);?>,
                            y: <?=json_encode($persentase[5]);?>
                        },
                        {
                            name: <?=json_encode($keterangan[6]);?>,
                            y: <?=json_encode($persentase[6]);?>
                        },
                        {
                            name: <?=json_encode($keterangan[7]);?>,
                            y: <?=json_encode($persentase[7]);?>
                        },
                        {
                            name: <?=json_encode($keterangan[8]);?>,
                            y: <?=json_encode($persentase[8]);?>
                        },
                        {
                            name: <?=json_encode($keterangan[9]);?>,
                            y: <?=json_encode($persentase[9]);?>
                        },
                        {
                            name: <?=json_encode($keterangan[10]);?>,
                            y: <?=json_encode($persentase[10]);?>
                        },
                        {
                            name: <?=json_encode($keterangan[11]);?>,
                            y: <?=json_encode($persentase[11]);?>
                        },
                        {
                            name: <?=json_encode($keterangan[12]);?>,
                            y: <?=json_encode($persentase[12]);?>
                        },
                        {
                            name: <?=json_encode($keterangan[13]);?>,
                            y: <?=json_encode($persentase[13]);?>
                        },
                        {
                            name: <?=json_encode($keterangan[14]);?>,
                            y: <?=json_encode($persentase[14]);?>
                        },
                        {
                            name: <?=json_encode($keterangan[15]);?>,
                            y: <?=json_encode($persentase[15]);?>
                        },
                        {
                            name: <?=json_encode($keterangan[16]);?>,
                            y: <?=json_encode($persentase[16]);?>
                        },
                        {
                            name: <?=json_encode($keterangan[17]);?>,
                            y: <?=json_encode($persentase[17]);?>
                        },
                        {
                            name: <?=json_encode($keterangan[18]);?>,
                            y: <?=json_encode($persentase[18]);?>
                        }
                    ]
                }
            ],
            drilldown: {
                series: [
                    {
                        name: "Suara Tidak Sah",
                        id: "Suara Tidak Sah",
                        data: [
                            [
                                "Verifikasi tidak Valid",
                                27.07,
                            ],
                            [
                                "Salah input Fakultas",
                                51.87,
                            ],
                            [
                                "Dll",
                                21.06,
                            ]
                        ]
                    }
                ]
            }
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
                <td>$persentase[2]</td>
                <td>$jumlah[2]</td>
                </tr>
                <tr>
                <td>$keterangan[3]</td>
                <td>$persentase[3]</td>
                <td>$jumlah[3]</td>
                </tr>
                <tr>
                <td>$keterangan[4]</td>
                <td>$persentase[4]</td>
                <td>$jumlah[4]</td>
                </tr>
                <tr>
                <td>$keterangan[5]</td>
                <td>$persentase[5]</td>
                <td>$jumlah[5]</td>
                </tr>
                <tr>
                <td>$keterangan[6]</td>
                <td>$persentase[6]</td>
                <td>$jumlah[6]</td>
                </tr>
                <tr>
                <td>$keterangan[7]</td>
                <td>$persentase[7]</td>
                <td>$jumlah[7]</td>
                </tr>
                <tr>
                <td>$keterangan[8]</td>
                <td>$persentase[8]</td>
                <td>$jumlah[8]</td>
                </tr>
                <tr>
                <td>$keterangan[9]</td>
                <td>$persentase[9]</td>
                <td>$jumlah[9]</td>
                </tr>
                <tr>
                <td>$keterangan[10]</td>
                <td>$persentase[10]</td>
                <td>$jumlah[10]</td>
                </tr>
                <tr>
                <td>$keterangan[11]</td>
                <td>$persentase[11]</td>
                <td>$jumlah[11]</td>
                </tr>
                <tr>
                <td>$keterangan[12]</td>
                <td>$persentase[12]</td>
                <td>$jumlah[12]</td>
                </tr>
                <tr>
                <td>$keterangan[13]</td>
                <td>$persentase[13]</td>
                <td>$jumlah[13]</td>
                </tr>
                <tr>
                <td>$keterangan[14]</td>
                <td>$persentase[14]</td>
                <td>$jumlah[14]</td>
                </tr>
                <tr>
                <td>$keterangan[15]</td>
                <td>$persentase[15]</td>
                <td>$jumlah[15]</td>
                </tr>
                <tr>
                <td>$keterangan[16]</td>
                <td>$persentase[16]</td>
                <td>$jumlah[16]</td>
                </tr>
                <tr>
                <td>$keterangan[17]</td>
                <td>$persentase[17]</td>
                <td>$jumlah[17]</td>
                </tr>
                <tr>
                <td>$keterangan[18]</td>
                <td>$persentase[18]</td>
                <td>$jumlah[18]</td>
                </tr>
                
            </tbody>
        </table>
    </div>"
    ?>
</body>
</html>
