@include('partials.main')
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
        table,
        th,
        td {
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
    	<table bgcolor="#F5F5F5">
      		<tr>
      			<td width="400px" height="50px"><center>Nama</center></td>
      			<td width="400px" height="50px"><center>Prodi</center></td>
      		</tr>
      		<tr>
      			<td height="400px"></td>
      			<td height="400px"></td>
      		</tr>
      	</table>
    </div>
  </div>
</div>
</body>
</html>