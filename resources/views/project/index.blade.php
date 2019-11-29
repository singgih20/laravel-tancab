@extends('layouts.app')
@section('tittle') Investasi @endsection

@section('content')
<div class="container">
    <div class="row pt-5">
        <div class="col text-center">
            <h2 style="color:black;">Mulai Investasi Kamu <br>
                Disini
            </h2>
            <p class="text-muted pt-2">Mari para investor bantu para petani Indonesia</p>
        </div>
    </div>
</div>

<!-- Cards -->
<div class="container">
    <div class="row">
        <div class="col">
            <a href="{{route('project.create')}}">+Buat projectmu disini</a>
        </div>
    </div>
</div>
<div class="container" style="background-color:#f3f3f3;">

    <div class="row">
        @foreach($projects as $project)
        <div class="col" style="margin-left:26px;">
            <div class="card mt-5" style="width: 18rem;">
                <img src="{{asset('storage/'.$project->gambar)}}" class="card-img-top" alt="..." style="width:100%;" height="200px;">
                <div class="card-body">
                    <h5 class="text-center" style="color:black;">{{$project->jenis_cabai}}</h5>
                    <div class="row pt-2    ">
                        <div class="col">
                            <p>Ekspektasi Profit</p>
                            <h2>{{$project->ekspektasi_profit}}</h2>
                        </div>
                        <div class="col">
                            <p>Lama Pemodalan</p>
                            <h2>{{$project->lama_pemodalan}} <span style="font-size: 20px;">hari</span></h2>
                        </div>

                        <div class="row">
                            <div class="col">
                                <a href="{{route('project.show', [$id=$project->id])}}" class="btn btn-investasi">Investasi</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        @endforeach

    </div>
</div>

@endsection