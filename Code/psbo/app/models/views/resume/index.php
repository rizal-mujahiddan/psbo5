<!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
<!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>-->
<!--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<!-- Include the above in your HEAD tag -->

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Layanan Hewan Ternak</title>
    <link rel="stylesheet" href="css/coba1.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- <link
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
      integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
      integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="bg-light text-center">
    <h1 class="p-5">
        Layanan Data Dasar Hewan Ternak untuk Laporan Produksi Hewan Ternak Lokal ke Pemerintah
        Kabupaten
      </h1>
    </div>
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= BASEURL; ?>">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link active" href="<?= BASEURL; ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?= BASEURL; ?>/table">Table</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/resume">Resume</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?= BASEURL; ?>/about">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="mt-3 mb-3 bg-light">
      <h1 class="mt-2 mb-2 p-3">Resume Hewan Ternak</h1><hr>
      <div class="p-1">
        Jumlah Sapi Potong : <?= $data['jspo']; ?>
      </div>
      <div class="p-1">
        Jumlah Sapi Perah : <?= $data['jsp']; ?>
      </div>
      <div class="p-1">
        Jumlah Kambing Potong : <?= $data['jkpo']; ?>
      </div>
      <div class="p-1">
        Jumlah Kambing Perah : <?= $data['jkp']; ?>
      </div>
      <div class="p-1">
        Jumlah Hewan Sehat : <?= $data['js']; ?>
      </div>
      <div class="p-1">
        Jumlah Hewan Sakit : <?= $data['jsk']; ?>
      </div><hr>
      <div class="p-1">
        Total Hasil Daging Sapi (kg) : <?= $data['ds']; ?>
      </div>
      <div class="p-1">
        Total Hasil Susu Sapi (L) : <?= $data['ss']; ?>
      </div>
      <div class="p-1">
        Total Hasil Daging Kambing (kg) : <?= $data['dk']; ?>
      </div>
      <div class="p-1">
        Total Hasil Susu Kambing (L) : <?= $data['sk']; ?>
      </div>
      <div class="p-1">
        Total Hasil Rambut Kambing (kg) : <?= $data['rk']; ?>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>