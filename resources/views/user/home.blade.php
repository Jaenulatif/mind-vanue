<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
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
    <div class="container" style="margin-top: 50px;">
    	<div class="row justify-content-md-center">
    		<div class="col col-lg-2" style="margin-right: 150px">
    			<a type="button" href="{{url('/')}}" class="btn btn-lg border border-secondary" style="background-color: #E1701A; color: white; border-radius: 24px;">Thread Baru</a>
    		</div>
    		<div class="col col-lg-2">
    			<a type="button" href="{{url()->current().'/create-thread'}}" class="btn btn-lg border border-secondary" style="background-color: #F6DCBF; border-radius: 24px;">Buat Thread</a>
    		</div>
    	</div>
    </div>

    <div style="margin-bottom: 5%; margin-top: 50px;">
        @forelse ($thread as $thr)
    	<!--- Thread 1 --->
        <div class="container thread-card" onclick="location.href='{{url()->current()}}/{{$thr->id}}/thread'">
            <div class="thread-profile">
                 <img class="dropdown-toggle rounded-circle" data-bs-toggle="dropdown" src="/img/{{ $thr->picture }}" width="60" height="60" >
                 <span style="font-size: 24px; padding-left: 20px;"><strong> {{ $thr->lastname }}</strong> - Teknik Informatika</span>
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
                Data Post belum Tersedia.
            </div>
        <!--- Thread 1 --->
         @endforelse

    </div>
</body>
</html>