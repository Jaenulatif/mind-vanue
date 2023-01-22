<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style>
        .table-admin,
        .td-admin{
            border: 1px solid;
            border-color: gray;
            border-collapse: collapse;
        }
        .data{
        	margin-right: 5%;
            margin-left: 5%;
        }
        .btn {
			color: #000000;
			background-color: #FAF0E6;
			border-color: black;
		}

  	</style>
  	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

	<script type="text/javascript">
		function ShowHideDiv() {
			var btnradio1 = document.getElementById("btnradio1");
			var btnradio2 = document.getElementById("btnradio2");
			var btnradio3 = document.getElementById("btnradio3");

			var user = document.getElementById("user");
			var mod = document.getElementById("moderator");
			var thr = document.getElementById("thread");

			if (btnradio1.checked == true){
				user.style.display = "block";
	        	mod.style.display = "none";
	        	thr.style.display = "none";
			}
	        else if (btnradio2.checked == true){
	        	mod.style.display = "block";
	        	user.style.display = "none";
	        	thr.style.display = "none";
	        }
	        else if (btnradio3.checked == true){
	        	thr.style.display = "block";
	        	user.style.display = "none";
	        	mod.style.display = "none";
	        }
	    };
	</script>
</head>
<body style="background-color:#828282;">
	@include('partials.navbar')
	<br><br>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="container rounded p-3 mb-2" style="background-color:#F5F5F5;">
				<center>
					<input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" onclick="ShowHideDiv()" checked>
					<label class="btn btn-outline-warning" for="btnradio1">Pengguna</label>
						<br><br>	
					<input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" onclick="ShowHideDiv()">
					<label class="btn btn-outline-warning" for="btnradio2">Moderator</label>
						<br><br>
					<input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off" onclick="ShowHideDiv()">
					<label class="btn btn-outline-warning" for="btnradio3">Thread</label>
					</center>
				</div>
			</div>
			<div class="col" id="user" style="display: block;">
				<table class="table-admin" bgcolor="#F5F5F5">
					<tr>
						<td class="td-admin" width="400px" height="50px"><center>Nama</center></td>
						<td class="td-admin" width="400px" height="50px"><center>Prodi</center></td>
					</tr>
					@forelse ($user as $usr)
					<tr>
						<td class="td-admin" height="50px">
							<div class="data">
							{{ $usr->lastname }}
							</div>
						</td>
						<td class="td-admin" height="50px">
							<div class="data">
								{{ $usr->institution }}
							</div>
						</td>
					</tr>
					@empty
		            <div class="alert alert-danger">
		                Data user belum Tersedia.
		            </div>
					@endforelse
				</table>
			</div>
			<div class="col" id="moderator" style="display: none;">
				<table class="table-admin" bgcolor="#F5F5F5">
					<tr>
						<td class="td-admin" width="400px" height="50px"><center>Nama</center></td>
						<td class="td-admin" width="400px" height="50px"><center>Prodi</center></td>
					</tr>
					@forelse ($moderator as $mod)
					<tr>
						<td class="td-admin" height="50px">
							<div class="data">
							{{ $mod->lastname }}
							</div>
						</td>
						<td class="td-admin" height="50px">
							<div class="data">
								{{ $mod->institution }}
							</div>
						</td>
					</tr>
					@empty
		            <div class="alert alert-danger">
		                Data user belum Tersedia.
		            </div>
					@endforelse
				</table>
			</div>
			<div class="col" id="thread"  style="display: none;">
				<table class="table-admin" bgcolor="#F5F5F5">
					<tr>
						<td class="td-admin" width="400px" height="50px"><center>Judul Thread</center></td>
						<td class="td-admin" width="400px" height="50px"><center>Pemilik Thread</center></td>
					</tr>
					@forelse ($thread as $thr)
					<tr>
						<td class="td-admin" height="50px">
							<div class="data">
							{{ $thr->title }}
							</div>
						</td>
						<td class="td-admin" height="50px">
							<div class="data">
								{{ $thr->lastname }}
							</div>
						</td>
					</tr>
					@empty
		            <div class="alert alert-danger">
		                Data thread belum Tersedia.
		            </div>
					@endforelse
				</table>
			</div>

		</div>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>