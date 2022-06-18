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
          <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/table">Table</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?= BASEURL; ?>/resume">Resume</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?= BASEURL; ?>/about">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="mt-3 mb-3 bg-light">
      <h1 class="mt-2 mb-2 p-3">Layanan Data dasar Hewan Ternak</h1>
      <div class="p-5">
        Data dasar merupakan suatu detail dari suatu objek tertentu, seperti contohnya manusia ada
        detail ukuran tinggi dan berat badan dan lain lain
      </div>
    </div>
    <!-- <div class="container-fluid pt-3 pb-3 ps-4 pe-4 mt-3 mb-3 justify-content-center bg-light">
      <div class="row">
          <a href="?= BASEURL; ?>/form/index" class="btn btn-primary">Buat Form Hewan Ternak Sapi Potong</a>
      </div><br>
      <div class="row">
          <a href="?= BASEURL; ?>/form/perah" class="btn btn-success">Buat Form Hewan Ternak Sapi Perah</a>
      </div><br>
      <div class="row">
          <a href="?= BASEURL; ?>/form/kambing_potong" class="btn btn-primary">Buat Form Hewan Ternak Kambing Potong</a>
      </div><br>
      <div class="row">
          <a href="?= BASEURL; ?>/form/kambing_perah" class="btn btn-success">Buat Form Hewan Ternak Kambing Perah</a>
      </div>
    </div>
     -->
    <div class="container-fluid pt-3 pb-3 ps-4 pe-4 mt-3 mb-3 justify-content-center bg-light text-white">
      <div class="row">
        <div class="col p-2 bg-primary m-2">
          <div>
            <h3 class="p-2 text-center">Hewan Ternak Sapi Potong</h3>
            <div>
              Masukkan Data hewan ternak anda, Terutama pada Sapi potong agar lebih baik
            </div>
            <div class="col-md-12 text-center">
              <a href="<?= BASEURL; ?>/form/index">
                <div class="btn btn-success mt-4 mb-4">Buat Form Hewan Ternak Sapi Potong</div>
              </a>
            </div>
          </div>
        </div>
        <div class="col p-2 bg-success m-2">
          <div>
            <h3 class="p-2 text-center">Hewan Ternak Sapi Perah</h3>
            <div>
              Masukkan Data hewan ternak anda, Terutama pada Sapi perah agar lebih baik
            </div>
            <div class="col-md-12 text-center">
              <a href="<?= BASEURL; ?>/form/perah">
                <div class="btn btn-primary mt-4 mb-4">Buat Form Hewan Ternak Sapi Perah</div>
              </a>
            </div>
          </div>
        </div>
      <div class="row">
        <div class="col p-2 bg-primary m-2">
          <div>
            <h3 class="p-2 text-center">Hewan Ternak Kambing Potong</h3>
            <div>
              Masukkan Data hewan ternak anda, Terutama pada Kambing potong agar lebih baik
            </div>
            <div class="col-md-12 text-center">
              <a href="<?= BASEURL; ?>/form/kambing_potong">
                <div class="btn btn-success mt-4 mb-4">Buat Form Hewan Ternak Sapi Potong</div>
              </a>
            </div>
          </div>
        </div>
        <div class="col p-2 bg-success m-2">
          <div>
            <h3 class="p-2 text-center">Hewan Ternak kambing Perah</h3>
            <div>
              Masukkan Data hewan ternak anda, Terutama pada kambing perah agar lebih baik
            </div>
            <div class="col-md-12 text-center">
              <a href="<?= BASEURL; ?>/form/kambing_perah">
                <div class="btn btn-primary mt-4 mb-4">Buat Form Hewan Ternak Kambing Perah</div>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>




    <div class="container-fluid pt-3 pb-3 ps-4 pe-4 mt-3 mb-3 justify-content-center bg-light">
      <div class="row">
        <div class="col-lg-6">
          <?php Flasher::flash(); ?>
        </div>
      </div>
        <table class="table table-striped-columns">
            <thead>
                <tr>
                <th scope="col">No.</th>
                <th scope="col">Jenis Hewan</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">umur</th>
                <th scope="col">Keadaan Sehat?</th>
                <th scope="col">Tanggal Masuk</th>
                <th scope="col">Predikat</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; ?>
                <?php foreach( $data['ternak'] as $ternak): ?>
                    <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $ternak['jenis']; ?></td>
                    <td><?= $ternak['jk']; ?></td>
                    <td><?= $ternak['umur']; ?></td>
                    <td><?= $ternak['keadaan']; ?></td>
                    <td><?= $ternak['masuk']; ?></td>
                    <td><span href="#" class="badge rounded-pill text-bg-primary"><a href="<?= BASEURL; ?>/form/ubah/<?= $ternak['id']; ?>" style="color: white">Edit</a></span>
                        <span href="#" class="badge rounded-pill text-bg-danger"><a href="<?= BASEURL; ?>/form/hapus/<?= $ternak['id']; ?>" style="color: white" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a></span></td>
                    </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>