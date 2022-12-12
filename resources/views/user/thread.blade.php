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
        .thread-comment{
            width: auto;
            height: auto;
            background-color: white;
            margin-right: 10%;
            margin-left: 10%;
            box-shadow: 5px 10px #888888;
            border-radius: 6px;
        }

        .thread-profile-comment{
            margin-right: 3%;
            margin-left: 3%;
            padding-top: 1%;
            padding-bottom: 1%;
        }

        .comment-input{
            margin-top: 10px;
            border-style: solid; 
            border-width: 1px; 
            border-color: black; 
            padding-left: 20px;
        }

        .comment-button{
            margin-top: 10px;
            border-style: solid; 
            border-width: 1px; 
            border-color: black; 
            border-radius: 16px;
        }

        .comment-button:hover{
            background-color: #AAAAAA;
            color: white;
            border-color: white; 
        }

        .material-icons {
            font-family: 'Material Icons';
            font-weight: normal;
            font-style: normal;
            display: inline-block;
            line-height: 1;
            text-transform: none;
            letter-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            direction: ltr;
        }



        .content{
            height: auto;
        }
        
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

        .panel {
            width: 100%;
            height: 100px;
            display: none;
        }

        .reply-input{
            margin-top: 10px;
            border-style: solid; 
            border-width: 1px; 
            border-color: black; 
            padding-left: 20px;
        }


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
    </style>

</head>
<body style="background-color: #AAAAAA;">
    @include('partials.navbar')

    <div class="container-fluid" style="margin-bottom: 5%; margin-top: 50px;">
        <!--- Thread --->
    	<div class="container thread-card" onclick="location.href='/user/thread'">
            <div class="thread-profile">
                 <img class="dropdown-toggle rounded-circle"  data-bs-toggle="dropdown" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHEBrDl6QYokg4x1ZjEVNwWO_0StN1Ym2dxQ&usqp=CAU" width="60" height="60" >
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
        <!--- Thread --->

        <!--- Kotak Komentar--->
        <div class="container-fluid thread-comment">
            <div class="thread-profile-comment">
                 <form class="form-group">
                    <div class="row">
                        <!--- Profile--->
                        <div class="col-sm-1">
                            <img class="dropdown-toggle rounded-circle"  data-bs-toggle="dropdown" src="https://images.pexels.com/photos/127028/pexels-photo-127028.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" width="60" height="60" >  
                        </div>
                        <!--- Input Komentar--->
                        <div class="col" >
                            <input type="text" name="comment" class="form-control comment-input">
                        </div>
                        <!--- Button Kementar--->
                        <div class="col-2">
                            <input type="submit" name="send" class="form-control comment-button" value="Komentar">
                        </div>
                    </div>
                 </form>
            </div>
        </div>
        <!--- Input Koemntar--->

        <!--- Komentar --->
        <div class="content">
            <div class="container thread-card">
                <!--- Komentar 1 --->

                <!--- Profile --->
                <div class="thread-profile">
                     <img class="dropdown-toggle rounded-circle"  data-bs-toggle="dropdown" src="https://images.pexels.com/photos/127028/pexels-photo-127028.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" width="60" height="60" >
                     <span style="font-size: 24px; padding-left: 20px;"><strong> Sumbul</strong> - Teknik Elektro</span>
                </div>
                <!--- Isi Komentar --->
                <div class="thread-content">
                    <div class="thread-question">
                        <p>Royal Canin aja enak</p>
                    </div>
                    <div class="d-flex justify-content-end" style="margin-top: 10px">
                        <!--- Button Komentar --->
                        <a href="#reply1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Balas" onclick="show1()">
                            <span class="inline-icon material-icons" style="margin-right: 40px; width: 20px; height: 40px; color: black; font-size: 34px;">reply</span>
                        </a>
                    </div>
                    <!--- Balas Komentar 1 --->
                    <div class="panel" id="reply1">
                        <form class="form-group">
                            <div class="row">
                                <!--- Profile --->
                                <div class="col-sm-1" style="margin-top: 10px;">
                                    <div class="thread-profile">
                                         <img class="dropdown-toggle rounded-circle"  data-bs-toggle="dropdown" src="https://images.pexels.com/photos/1576193/pexels-photo-1576193.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" width="60" height="60" >
                                    </div>
                                </div>
                                <!--- Input Komentar --->
                                <div class="col">
                                    <textarea rows="auto" name="reply" class="form-control reply-input" placeholder="Balas Komentar"></textarea>    
                                </div>
                                <!--- Button Komentar Kirim dan batal --->
                                <div class="col-sm-1" style="margin-top: 10px">
                                    <a href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Kirim" onclick="hide1()">
                                        <span class="inline-icon material-icons" style="color: black;">send</span>
                                    </a><br>
                                    <a href="#reply1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Cancel" onclick="hide1()">
                                        <span class="inline-icon material-icons" style="margin-top: 10px; color: black;">cancel</span>
                                    </a>    
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--- Komentar 1 --->

                    <!--- Sub Komentar 1 --->
                    <div class="thread-profile" style="padding-left: 55px; padding-right: 30px;">
                        <!--- Profile --->
                         <img class="dropdown-toggle rounded-circle"  data-bs-toggle="dropdown" src="https://images.pexels.com/photos/127028/pexels-photo-127028.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" width="60" height="60" >
                         <span style="font-size: 24px; padding-left: 20px;"><strong> Sumbul</strong> - Teknik Elektro</span>
                         <!--- Isi Komentar --->
                         <div class="thread-content">
                            <div class="thread-question">
                                <p>atau ga Friskies</p>
                            </div>
                            <!--- Button Balasan --->
                            <div class="d-flex justify-content-end" style="margin-top: 10px">
                                <a href="#reply1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Balas" onclick="subshow1()">
                                    <span class="inline-icon material-icons" style="margin-right: 40px; width: 20px; height: 40px; color: black; font-size: 34px;">reply</span>
                                </a>
                            </div>
                            <!--- Balas Sub Komentar --->
                            <div class="panel" id="subreply1">
                                <form class="form-group">
                                    <div class="row">
                                        <!--- Profile --->
                                        <div class="col-sm-1" style="margin-top: 10px; padding-left: 5px;">
                                            <div class="thread-profile">
                                                 <img class="dropdown-toggle rounded-circle"  data-bs-toggle="dropdown" src="https://images.pexels.com/photos/1576193/pexels-photo-1576193.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" width="60" height="60" >
                                            </div>
                                        </div>
                                        <!--- Input Balasan --->
                                        <div class="col" style="padding-left: 20px;">
                                            <textarea rows="auto" name="subreply" class="form-control reply-input" placeholder="Balas Komentar"></textarea> 
                                        </div>
                                        <!--- Button Komentar Kirim dan batal --->
                                        <div class="col-sm-1" style="margin-top: 10px; padding-right: 65px;">
                                            <a href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Kirim" onclick="subhide1()">
                                                <span class="inline-icon material-icons" style="color: black;">send</span>
                                            </a><br>
                                            <a href="#reply1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Cancel" onclick="subhide1()">
                                                <span class="inline-icon material-icons" style="margin-top: 10px; color: black;">cancel</span>
                                            </a>    
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--- Sub Komentar 1 --->
                </div>

                <!--- Komentar 2 --->

                <!--- Profile --->
                <div class="thread-profile">
                     <img class="dropdown-toggle rounded-circle"  data-bs-toggle="dropdown" src="https://i0.wp.com/republiccode.com/wp-content/uploads/2022/08/1660224919_maxresdefault.jpg" width="60" height="60" >
                     <span style="font-size: 24px; padding-left: 20px;"><strong> Oren</strong> - Teknik Informatika</span>
                </div>

                <!--- Isi Komentar --->
                <div class="thread-content">
                    <div class="thread-question">
                        <p>Ngapain beli ?</p>
                    </div>
                    <!--- Button balas dan hapus --->
                    <div class="d-flex justify-content-end" style="margin-top: 10px">
                        <a href="#reply2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Balas" onclick="show2()">
                            <span class="inline-icon material-icons" style="margin-right: 40px; width: 20px; height: 40px; color: black; font-size: 34px;">reply</span>
                        </a>
                        <a data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hapus">
                            <span class="inline-icon material-icons" style="color: black; font-size: 34px;">delete</span>
                        </a>
                    </div>
                    <!--- Balas Komentar 2 --->
                    <div class="panel" id="reply2">
                        <form class="form-group">
                            <div class="row">
                                <!--- Profile--->
                                <div class="col-sm-1" style="margin-top: 10px;">
                                    <div class="thread-profile">
                                         <img class="dropdown-toggle rounded-circle"  data-bs-toggle="dropdown" src="https://i.pinimg.com/236x/8e/5a/3f/8e5a3f393451a0385a2845a32d279c24.jpg" width="60" height="60" >
                                    </div>
                                </div>
                                <!--- Input Komentar --->
                                <div class="col">
                                    <textarea rows="auto" name="reply" class="form-control reply-input" placeholder="Balas Komentar"></textarea>    
                                </div>
                                <!--- Button Kirim Komentar dan cancel --->
                                <div class="col-sm-1" style="margin-top: 10px; padding-right: 65px">
                                    <a href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Kirim" onclick="hide2()">
                                        <span class="inline-icon material-icons" style="color: black">send</span>
                                    </a><br>
                                    <a href="#repl2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Cancel" onclick="hide2()">
                                        <span class="inline-icon material-icons" style="color: black; margin-top: 10px">cancel</span>
                                    </a>    
                                </div>
                            </div>
                        </form>
                    </div>

                    <!--- Sub Komentar 2 --->
                    <div class="thread-profile" style="padding-left: 55px; padding-right: 30px;">
                        <!--- Profile --->
                         <img class="dropdown-toggle rounded-circle"  data-bs-toggle="dropdown" src="https://i.pinimg.com/236x/8e/5a/3f/8e5a3f393451a0385a2845a32d279c24.jpg" width="60" height="60" >
                         <span style="font-size: 24px; padding-left: 20px;"><strong> Martin</strong> - Teknik Informatika</span>
                         <!--- Isi Komentar --->
                         <div class="thread-content">
                            <div class="thread-question">
                                <p>Hi bang oren</p>
                            </div>
                            <!--- Button Balasan --->
                            <div class="d-flex justify-content-end" style="margin-top: 10px">
                                <a href="#reply1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Balas" onclick="subshow2()">
                                    <span class="inline-icon material-icons" style="margin-right: 40px; width: 20px; height: 40px; color: black; font-size: 34px;">reply</span>
                                </a>
                            </div>
                            <!--- Balas Sub Komentar --->
                            <div class="panel" id="subreply2">
                                <form class="form-group">
                                    <div class="row">
                                        <!--- Profile --->
                                        <div class="col-sm-1" style="margin-top: 10px; padding-left: 5px;">
                                            <div class="thread-profile">
                                                 <img class="dropdown-toggle rounded-circle"  data-bs-toggle="dropdown" src="https://id-static.z-dn.net/files/d79/c4e7bf0528c7c9c07dc58de708ed58a0.png" width="60" height="60" >
                                            </div>
                                        </div>
                                        <!--- Input Balasan --->
                                        <div class="col" style="padding-left: 20px;">
                                            <textarea rows="auto" name="subreply" class="form-control reply-input" placeholder="Balas Komentar"></textarea> 
                                        </div>
                                        <!--- Button Komentar Kirim dan batal --->
                                        <div class="col-sm-1" style="margin-top: 10px; padding-right: 65px">
                                            <a href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Kirim" onclick="subhide2()">
                                                <span class="inline-icon material-icons" style="color: black;">send</span>
                                            </a><br>
                                            <a href="#reply1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Cancel" onclick="subhide2()">
                                                <span class="inline-icon material-icons" style="margin-top: 10px; color: black;">cancel</span>
                                            </a>    
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--- Sub Komentar 2 --->

                    <!--- Balasan Sub Komentar 2 --->
                    <div class="thread-profile" style="padding-left: 55px; padding-right: 30px;">
                        <!--- Profile --->
                         <img class="dropdown-toggle rounded-circle"  data-bs-toggle="dropdown" src="https://id-static.z-dn.net/files/d79/c4e7bf0528c7c9c07dc58de708ed58a0.png" width="60" height="60" >
                         <span style="font-size: 24px; padding-left: 20px;"><strong> Tutu</strong> - Teknik Informatika - <i>@Martin</i></span>
                         <!--- Isi Balasan Sub Komentar --->
                         <div class="thread-content">
                            <div class="thread-question">
                                <p>Woy martin pinjam senjata aku mau rampok bang</p>
                            </div>
                            <!--- Button Balasan --->
                            <div class="d-flex justify-content-end" style="margin-top: 10px">
                                <a href="#reply1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Balas" onclick="subshow3()">
                                    <span class="inline-icon material-icons" style="margin-right: 40px; width: 20px; height: 40px; color: black; font-size: 34px;">reply</span>
                                </a>
                            </div>
                            <!--- Balas Sub Komentar --->
                            <div class="panel" id="subreply3">
                                <form class="form-group">
                                    <div class="row">
                                        <!--- Profile --->
                                        <div class="col-sm-1" style="margin-top: 10px; padding-left: 5px;">
                                            <div class="thread-profile">
                                                 <img class="dropdown-toggle rounded-circle"  data-bs-toggle="dropdown" src="https://id-static.z-dn.net/files/d79/c4e7bf0528c7c9c07dc58de708ed58a0.png" width="60" height="60" >
                                            </div>
                                        </div>
                                        <!--- Input Balasan --->
                                        <div class="col" style="padding-left: 20px;">
                                            <textarea rows="auto" name="subreply" class="form-control reply-input" placeholder="Balas Komentar"></textarea> 
                                        </div>
                                        <!--- Button Komentar Kirim dan batal --->
                                        <div class="col-sm-1" style="margin-top: 10px; padding-right: 65px">
                                            <a href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Kirim" onclick="subhide3()">
                                                <span class="inline-icon material-icons" style="color: black;">send</span>
                                            </a><br>
                                            <a href="#reply1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Cancel" onclick="subhide3()">
                                                <span class="inline-icon material-icons" style="margin-top: 10px; color: black;">cancel</span>
                                            </a>    
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--- Balasan Sub Komentar 2 --->
                </div>
            </div>
        </div>
        <!--- Komentar --->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function show1() {
          document.getElementById("reply1").style.display = "block";
        }

        function hide1() {
          document.getElementById("reply1").style.display = "none";
        }



        function subshow1() {
          document.getElementById("subreply1").style.display = "block";
        }

        function subhide1() {
          document.getElementById("subreply1").style.display = "none";
        }


        function show2() {
          document.getElementById("reply2").style.display = "block";
        }

        function hide2() {
          document.getElementById("reply2").style.display = "none";
        }

        function subshow2() {
          document.getElementById("subreply2").style.display = "block";
        }

        function subhide2() {
          document.getElementById("subreply2").style.display = "none";
        }

        function subshow3() {
          document.getElementById("subreply3").style.display = "block";
        }

        function subhide3() {
          document.getElementById("subreply3").style.display = "none";
        }
    </script>
</body>
</html>