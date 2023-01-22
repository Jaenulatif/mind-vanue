<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search</title>
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
            cursor: pointer;
        }

    </style>

</head>
@include('partials.main')
<body>
    @include('partials.navbar')
    @php
        $user = Auth::user();
    @endphp

    <div style="margin-bottom: 5%; margin-top: 50px;">
        <div class="alert alert-primary">
                Hasil pencarian dari "<strong>{{ $cari }}</strong>"
            </div>
        @forelse ($thread as $thr)
    	<!--- Thread 1 --->
        <div class="container thread-card" onclick="location.href='{{url()->current()}}/thread'">
            <div class="thread-profile">
                 <div class="row">
                     <div class="col-md-4">
                        <img class="dropdown-toggle rounded-circle" data-bs-toggle="dropdown" src="/img/{{ $thr->picture }}" width="60" height="60" >
                        <span style="font-size: 24px; padding-left: 20px;"><strong> {{ $thr->lastname }}</strong> - {{ $thr->institution }}</span> 
                     </div>
                     @if ($user->idnumber == 2)
                     <div class="col-md-4 offset-md-4" style="margin-left: : 40px">
                         <a data-bs-toggle="tooltip" href="{{route('delete-thread', [$thr->id])}}" data-bs-placement="bottom" title="Hapus">
                            <span class="inline-icon material-icons" style="color: black; font-size: 34px;">delete</span>
                         </a>
                     </div>
                     @endif
                 </div>
            </div>

            <div class="thread-content">
                <p style="font-size: 18px"><strong>{{ $thr->title }}</strong></p>
                <div class="thread-question">
                    <p>{{ $thr->body }}</p>
                </div>
            </div>
        </div>
         @empty
            <div class="alert alert-danger">
                Thread tidak ditemukan.
            </div>
        <!--- Thread 1 --->
         @endforelse

    </div>
</body>
</html>