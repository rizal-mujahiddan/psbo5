<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bootstrap contact form with PHP example by BootstrapBay.com.">
    <meta name="author" content="BootstrapBay.com">
    <title>Data Hewan Ternak</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  </head>
  <body>
  	<div class="container">
  		<div class="row">
  			<div class="col-md-6 col-md-offset-3">
  				<h1 class="page-header text-center">Form Data Hewan Ternak</h1>
				<form class="form-horizontal" role="form" method="post" action="#">
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Nama</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" placeholder="Nama" value="">
						</div>
					</div>
					<div class="form-group">
						<label for="umur" class="col-sm-2 control-label">Umur</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="umur" name="umur" placeholder="Dalam Tahun" value="">
						</div>
					</div>
					<div class="form-group">
						<label for="Jenkel" class="col-sm-2 control-label">Jenis Kelamin</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="jenkel" name="jenkel" placeholder="Jenis Kelamin">
						</div>
					</div>
                    <div class="form-group">
						<label for="bobot" class="col-sm-2 control-label">Bobot</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="bobot" name="bobot" placeholder="Dalam Kg" value="">
						</div>
					</div>
                    <div class="form-group">
						<label for="pakan" class="col-sm-2 control-label">Pakan</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="pakan" name="pakan" placeholder="Jenis Pakan" value="">
						</div>
					</div>
                    <div class="form-group">
						<label for="jenis" class="col-sm-2 control-label">Jenis Hewan</label>
						<div class="col-sm-10">
							<input type="radio" class="form-horizontal" id="sapiperah" name="jenishewan" value="" >
                            <p1>Sapi Perah</p>
                            <input type="radio" class="form-horizontal" id="sapipotong" name="jenishewan" value="">
                            <p1>Sapi Potong</p>
                            <input type="radio" class="form-horizontal" id="kambingperah" name="jenishewan" value="">
                            <p1>Kambing Perah</p>
                            <input type="radio" class="form-horizontal" id="kambingpotong" name="jenishewan" value="">
                            <p1>Kambing Potong</p>
                        </div>
					</div>
                    <div class="form-group">
						<label for="jenis" class="col-sm-2 control-label">Kedaan Sehat?</label>
						<div class="col-sm-10">
							<input type="radio" class="form-horizontal" id="ya" name="keadaan" value="" >
                            <p1>Ya</p>
                            <input type="radio" class="form-horizontal" id="tidak" name="keadaan" value="">
                            <p1>Tidak</p>
                        </div>
					</div>
                    <div class="form-group">
						<label for="masuk" class="col-sm-2 control-label">Tanggal Masuk</label>
						<div class="col-sm-10">
							<input type="date" class="form-control" id="masuk" name="masuk" placeholder="">
						</div>
					</div>
                    <div class="form-group">
						<label for="keluar" class="col-sm-2 control-label">Tanggal Keluar</label>
						<div class="col-sm-10">
							<input type="date" class="form-control" id="keluar" name="keluar" placeholder="">
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