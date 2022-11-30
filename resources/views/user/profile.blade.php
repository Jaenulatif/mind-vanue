<!DOCTYPE html>
<html>
<head>
	<title>Profil</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background-color: #AAAAAA;">
	@include('partials.navbar')
	<div class="container-fluid" style="margin-top: 7%;">
		<div class="row">
			<div class="col-4" style="padding-left: 15%;">
				<div style="border: 4px solid white;
					border-radius: 250px;
   					-webkit-border-radius: 250px;
   					-moz-border-radius: 250px;
   					display: inline-block; ">
					<img src="https://mdbcdn.b-cdn.net/img/new/avatars/14.webp" class="rounded-circle" style="width: 250px; height: 250px" alt="Avatar" />
				</div>
			</div>
			<div class="col-5" style="margin-left: 5%;">
				<div class="form-floating mb-3 mt-3">
				  <input type="text" class="form-control" id="nama" readonly="readonly" name="nama" value="Joko Agus Budi Santoso">
				  <label for="email">Nama</label>
				</div>
				<div class="form-floating mb-3 mt-3">
				  <input type="text" class="form-control" id="nrp" readonly="readonly" name="nrp" value="1151800000">
				  <label for="nrp">NRP</label>
				</div>
				<div class="form-floating mb-3 mt-3">
				  <input type="text" class="form-control" id="prodi" readonly="readonly" name="prodi" value="Informatika">
				  <label for="prodi">Prodi</label>
				</div>
				<div class="form-floating mb-3 mt-3">
				  <input type="text" class="form-control" id="status" readonly="readonly" name="status" value="Mahasiswa">
				  <label for="mahasiswa">Status</label>
				</div>
				<div class="form-floating mb-3 mt-3">
				  <input type="text" class="form-control" id="role" readonly="readonly" name="role" value="Participant">
				  <label for="role">Role</label>
				</div>
			</div>
		</div>
	</div>

</body>
</html>