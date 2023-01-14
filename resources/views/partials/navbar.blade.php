<!--- CSS --->
<style type="text/css">
    hr { 
        height: 1px; 
        border: 0; 
    }

    .img-profile{
        width: 250px; height: 250px
    }

    .inline-icon {
       vertical-align: bottom;
       border: 0;
    }  

    .dropdown-menu{
        position: absolute;
    }

    .form-search{
        border: 0;
        text-align:center; 
        color: #615E5E;
    }

    .form-control::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: #615E5E;
            opacity: 1; /* Firefox */
    }

    .form-control::-ms-input-placeholder { /* Microsoft Edge */
            color: #615E5E;
    } 

</style>

<nav class="navbar navbar-expand-lg py-3" style="background-color: #F7A440;">
    <div class="container-fluid" >
        <div class="container d-flex flex-row">
            <div class="me-auto" id="logo">
                <a class="navbar-brand" href="/user">
                    <img src="/img/logo-iti.png" alt="UPBU" width="40px" class="me-2">
                </a>
            </div>

            <!--- Input Search --->
            <div class="mx-auto" style="padding-right: 16.5%; width: 50%;">
                <form class="form-group">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control form-search" value="" placeholder="Kamu Nyari ?" aria-label="search" aria-describedby="basic-addon1">
                      <span class="input-group-text inline-icon material-icons" id="basic-addon1" style="background-color: white;">search</span>
                    </div>
                </form>
            </div>

            <!--- Profile Dropdown --->
            <div id="logout">
                <div class="dropdown">
                  <!--- Profile Icon --->
                  <img class="dropdown-toggle rounded-circle"  data-bs-toggle="dropdown" aria-expanded="false" src="https://i0.wp.com/republiccode.com/wp-content/uploads/2022/08/1660224919_maxresdefault.jpg" width="40" height="40">
                  <!--- Profile Dropdown Content --->
                  <div class="dropdown-menu dropdown-menu-dark dropdown-menu-end" style="padding-right: 5%">
                    <div class="dropdown-item">
                        <table>
                            <tr>
                                <td rowspan="2">
                                <!--- Profile Icon --->
                                    <img class="dropdown-toggle rounded-circle"  data-bs-toggle="dropdown" src="https://i0.wp.com/republiccode.com/wp-content/uploads/2022/08/1660224919_maxresdefault.jpg" width="40" height="40" >  
                                </td>
                                <td style="padding-left: 4%;">
                                    <!--- Email --->
                                    <span class="inline-icon material-icons">mail</span> orenbarbar@gmail.com
                                    <tr>
                                        <td style="padding-left: 4%;">
                                            {{-- <!--- Prodi ---> --}}
                                            <span class="inline-icon material-icons">hub</span> Program Studi Informatika
                                        </td>  
                                    </tr>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <p><hr class="dropdown-divider" style="background-color: #AAAAAA"></p>
                    <!--- Profile Page --->
                    <a class="dropdown-item" href="{{url()->current().'/profile'}}"><span class="inline-icon material-icons">account_circle</span>Profile</a>
                    <!--- Logout --->
                    <a class="dropdown-item" href="{{url('/logout')}}"><span class="inline-icon material-icons">exit_to_app</span>Logout</a>
                  </div>
                </div>
            </div>
        </div>
    </div>
</nav>