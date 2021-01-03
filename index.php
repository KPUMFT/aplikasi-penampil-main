<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/logo kpum.png">
    <style>
      .button {
        border-radius: 8px;
        background-color: #f54242;
        border: none;
        color: #FFFFFF;
        text-align: center;
        font-size: 28px;
        padding: 20px;
        width: 25%;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
      }

      .button a {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
      }

      .button a:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
      }

      .button:hover a {
        padding-right: 20px;
      }

      .button:hover a:after {
        opacity: 1;
        right: 0;
      }
      .div{
        border-radius: 5px;
        width: 90%;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        padding: 25px;
      }
      </style>
    <title>Hasil Pemungutan Suara Pemilu Raya Fakultas Teknik 2021</title>
</head>
<body>
<script src="bootstrap-4.4.1-dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <div style="margin-left: auto; margin-right: auto;">
        <img src="img/logo kpum.png" alt="Logo KPUM-KM UTM" style="display: block; margin-left: auto; margin-right: auto; width: 7%; padding: 10px">
        <h1 style="text-align: center;">Sistem Perhitungan Suara E-Voting Pemilu Raya Fakultas Teknik 2021</h1>
        <h3 style="text-align: center;">Komisi Pemilihan Umum Mahasiswa Keluarga Mahasiswa Fakultas Teknik Universitas Trunojoyo Madura 2021</h3>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <a class="navbar-brand text-light" href="index.php">Hasil Pemungutan Suara Pemilu E-Vote Fakultas Teknik 2021</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link text-light" href="index.php">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="hasil_gubernur_ft.php">Pemilihan Gubernur dan Wakil Gubernur Mahasiswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="hasil_dpm_teknik.php">Hasil Pemilihan DPM-FT</a>
            </li>
            </ul>
        </div>
    </nav>
  <div class="div">
    <h2 class="text-center">Lihat Hasil Pemilihan</h2>
    <br>
    <button class="button"><a target="_blank" class="text-light" href="hasil_gubernur_ft.php" style="font-size: 27px">Gubernur dan Wakil Gubernur</a></button>
    <button class="button"><a class="text-light" target="_blank" href="hasil_dpm_teknik.php">DPM KM-FT UTM</a></button>
    <button class="button"><a target="_blank" class="text-light" href="hasil_himatro.php">Ketua Umum dan Wakil Ketua Umum HIMATRO</a></button>
    <button class="button"><a class="text-light" target="_blank" href="hasil_hmti.php">Ketua Umum dan Wakil Ketua Umum HMTI</a></button>
  </div>
</body>
</html>
