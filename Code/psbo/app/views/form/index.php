<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bootstrap contact form with PHP example by BootstrapBay.com.">
    <meta name="author" content="BootstrapBay.com">
    <title>Data Hewan Ternak Potong</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

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
          <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?= BASEURL; ?>/table">Table</a>
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
  	<div class="container">
  		<div class="row">
  			<div class="col-md-6 col-md-offset-3">
  				<h1 class="page-header text-center">Form Data Hewan Ternak Sapi Potong</h1>
				<form class="form-horizontal" role="form" method="post" action="<?= BASEURL; ?>/form/tambah">
               
            <input type="hidden" id="jenis" name="jenis" value="sapipotong">
					<label for="jk" class="col-sm-2 control-label">Jenis Kelamin</label>
						<div class="col-sm-10">
                            <input type="radio" class="form-horizontal" id="jantan" name="jk" value="jantan">
                            <p1>Jantan</p>
                            <input type="radio" class="form-horizontal" id="betina" name="jk" value="betina">
                            <p1>Betina</p>
                        </div>
					</div>
					<div class="form-group">
						<label for="umur" class="col-sm-2 control-label">Umur</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="umur" name="umur" placeholder="Dalam Tahun" value="" autocomplete="off" required>
						</div>
					</div>
            <div class="form-group">
						<label for="keadaan" class="col-sm-2 control-label">Keadaan Hewan Sehat?</label>
						<div class="col-sm-10">
							<input type="radio" class="form-horizontal" id="ya" name="keadaan" value="ya" >
                            <p1>Ya</p>
                            <input type="radio" class="form-horizontal" id="tidak" name="keadaan" value="tidak">
                            <p1>Tidak</p>
                        </div>
					</div>
            <div class="form-group">
						<label for="masuk" class="col-sm-2 control-label">Tanggal Masuk</label>
						<div class="col-sm-10">
							<input type="date" class="form-control" id="masuk" name="masuk" placeholder="" required>
						</div>
					</div>
                    
                    <div class="form-group">
						<label for="daging" class="col-sm-2 control-label">Berat Daging yang Dihasilkan</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="daging" name="daging" placeholder="Dalam kg" value="" autocomplete="off" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
						</div>
					</div>
				</form> 
			</div>
		</div>
	</div>   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </body>
</html>