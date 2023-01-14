@include('partials.main')
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
<<<<<<< HEAD
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
=======
>>>>>>> 4f559c2126530a3386fc8f763b5067d29a06b58d
	<style>
        .table-admin,
        .td-admin{
            border: 1px solid;
            border-color: gray;
            border-collapse: collapse;
        }
        .btn {
					  color: #000000;
						background-color: #FAF0E6;
						border-color: black;
			  }
  </style>
</head>
<body style="background-color:#828282;">
	@include('partials.navbar')
<br><br>
<div class="container">
  <div class="row">
    <div class="col-sm-3">
    	<div class="container rounded p-3 mb-2" style="background-color:#F5F5F5;">
	      <center>
				  <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
				  <label class="btn btn-outline-warning" for="btnradio1">Pengguna</label>
				  <br><br>	
				  <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
				  <label class="btn btn-outline-warning" for="btnradio2">Moderator</label>
				  <br><br>
				  <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
				  <label class="btn btn-outline-warning" for="btnradio3">Thread</label>
				</center>
			</div>
    </div>
    <div class="col">
    	<table class="table-admin" bgcolor="#F5F5F5">
      		<tr>
      			<td class="td-admin" width="400px" height="50px"><center>Nama</center></td>
      			<td class="td-admin" width="400px" height="50px"><center>Prodi</center></td>
      		</tr>
      		<tr>
      			<td class="td-admin" height="400px"></td>
      			<td class="td-admin" height="400px"></td>
      		</tr>
      	</table>
    </div>
  </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>