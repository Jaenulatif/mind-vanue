<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <style type="text/css">
        .thread-card{
        background-color: white;
        width: auto;
        height: auto;
        margin-right: 10%;
        margin-left: 10%;
        margin-top: 25px;
        margin-bottom: 25px;
        padding-bottom: 1%;
        box-shadow: 5px 10px #888888;
        border-radius: 6px;
        }

        .thread-profile{
            margin-right: 3%;
            margin-left: 3%;
            padding-top: 1%;
            padding-bottom: 1%;
        }

        .thread-content{
            margin-left: 10.8%;
            margin-right: 3%;   
        }

        .thread-question{
            border-width: 1px;
            border-style: solid;
            border-radius: 6px; 
            padding :2%;
        }
    	.thread-card:hover {
            background-color: grey;
            color: white;
            box-shadow: 5px 10px #A0A0A0;
        }

    </style>

</head>
<body style="background-color: #AAAAAA;">
    @include('partials.navbar')

    <div class="container" style="margin-top: 50px;">
    	<div class="row justify-content-md-center">
    		<div class="col col-lg-2" style="margin-right: 150px">
    			<a type="button" href="" class="btn btn-lg border border-secondary" style="background-color: #E1701A; color: white; border-radius: 24px;">Thread Baru</a>
    		</div>
    		<div class="col col-lg-2">
    			<a type="button" href="/user/buat" class="btn btn-lg border border-secondary" style="background-color: #F6DCBF; border-radius: 24px;">Buat Thread</a>
    		</div>
    	</div>
    </div>

    <div style="margin-bottom: 5%; margin-top: 50px;">
    	<!--- Thread 1 --->
        <div class="container thread-card" onclick="location.href='/user/thread'">
            <div class="thread-profile">
                 <img class="dropdown-toggle rounded-circle" data-bs-toggle="dropdown" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHEBrDl6QYokg4x1ZjEVNwWO_0StN1Ym2dxQ&usqp=CAU" width="60" height="60" >
                 <span style="font-size: 24px; padding-left: 20px;"><strong> Kucing Elit</strong> - Teknik Informatika</span>
            </div>

            <div class="thread-content">
                <p style="font-size: 18px"><strong>Kenapa whiskas mahal?</strong></p>
                <div class="thread-question">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        <!--- Thread 1 --->

        <!--- Thread 2 --->
        <div class="container thread-card" onclick="location.href='/user/thread'">
            <div class="thread-profile">
                 <img class="dropdown-toggle rounded-circle" data-bs-toggle="dropdown" src="https://i.ytimg.com/vi/_55Uq1N065M/maxresdefault.jpg" width="60" height="60" >
                 <span style="font-size: 24px; padding-left: 20px;"><strong> Geng Top Up Diamond</strong> - Teknik Informatika</span>
            </div>

            <div class="thread-content">
                <p style="font-size: 18px"><strong>Top Up Diamond ?</strong></p>
                <div class="thread-question">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        <!--- Thread 2 --->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>