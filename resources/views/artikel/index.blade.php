@extends('layouts.app')

@section('title') Artikel @endsection

@section('content')
<h2 class="text-center pt-4 text-muted">ARTIKEL CABAI</h2>


<div class="container">
    <div class="artikel">
        <div class="row pt-3">
            <div class="col-5">
                <h5 style="color:black; margin-left: 10px;">Terkini</h5>
                <a href="{{route('artikel.show', [$id = $terkini->id])}}" style="color:white;">
                    <div class="artikel-foto" style="background-image: linear-gradient(to bottom, rgba(245, 246, 252, 0.0), rgba(0, 0, 0, 1)), url('{{asset('storage/'.$terkini->gambar)}}');">
                        <h5 style="font-size: 18px; padding-top: 220px;" class="text-center">{{$terkini->judul}}</h5>
                        <img src="{{asset('storage/' . $terkini->user->avatar)}}" alt="" class="rounded-circle mt-4" width="25px;" height="25px;" style="margin-left: 25px; float: left;">
                        <p style="margin-top: 33px; margin-left: 56px;">{{$terkini->user->name}}</p>
                        <small style="margin-left:50px;">Dibuat {{$terkini->created_at->diffForHumans()}}</small>
                    </div>
                </a>
            </div>


            <div class="col offset-1 mt-3">
                @foreach($artikels as $artikel)
                <img src="{{asset('storage/'.$artikel->gambar)}}" alt="" style="float:left; margin-right: 10px;" height="100px;" width="200px;">
                <a href="{{route('artikel.show', [$id = $artikel->id])}}">
                    <h5 style="color:black; font-weight: bold;">{{$artikel->judul}}</h5>
                </a>
                <small style="color:black; ">{{$artikel->deskripsi}}</small>
                <div class="zs" style="height: 10px;">

                </div>
                <hr style=" border: 0;
                    padding-top: 3px;
                                        clear:both;
                                        display:block;
                                        width: 100%;
                                        background-color:grey;
                                        height: 1px;">
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection