@extends('layouts.app')
@section('title') Detail Investasi @endsection

@section('content')

<div class="ungu">
    <div class="container">
        <div class="row">
            <div class="col text-center pt-5">
                @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
                @endif

                <h1>Detail Produk</h1>
                <hr style="  border: 2;
                      clear:both;
                      display:block;
                      width: 10%;               
                      background-color:white;
                      height: 1px;">
            </div>
        </div>
        <div class="row">
            <div class="col-10 offset-1">
                <p>{{$project->jenis_cabai}}</p>
                <img src="{{asset('storage/' . $project->gambar)}}" width="100%;" height="250px;">
            </div>
        </div>

        <div class="detail-invest">
            <div class="row pt-5">
                <div class="col offset-1">
                    <p style="float: left;">Ekspektasi <br> Profit</p>
                    <h1 class="text-center">{{$project->ekspektasi_profit}}
                    </h1>
                </div>
                <div class="col offset-1">
                    <p style="float: left;">Lama <br> Pemodalan</p>
                    <h1 class="text-center">{{$project->lama_pemodalan}} <span style="font-size:20px;">hari</span></h1>
                </div>
                <div class="col offset-1">
                    <p style="float: left;">Resiko <br> Pemodalan</p>
                    <h1 class="text-center">{{$project->resiko_pemodalan}}</h1>
                </div>
            </div>
        </div>

        <div class="row pt-5">
            <div class="col offset-1">
                <img src="{{asset('storage/'.$project->user->avatar)}}" style="float:left" width="100px;" height="100px;" class="rounded-circle">
                <p class="pt-3 text-center">Proyek oleh : </p>
                <h5 class="text-center">{{$project->user->name}}</h5>
            </div>
            <div class="col offset-1">
                <p class="pt-3 text-center">Jumlah anggota : </p>
                <h5 class="text-center">{{$project->jumlah_anggota}}</h5>
            </div>
            <div class="col offset-1">
                <p class="pt-3 text-center">Proyek yang <br> telah dikerjakan : </p>
                <h5 class="text-center">{{$project->jumlah_proyek}}</h5>
            </div>
        </div>
    </div>
</div>

<div class="hitam">
    <div class="container">
        <div class="row pt-5">
            <div class="col offset-1">
                <p>
                    Pendanaan saat ini
                </p>
                <h1 style="color:#A200FF;">
                    Rp{{$project->dana_terkumpul}}
                </h1>
            </div>
            <div class="col offset-1">
                <p class="text-center">
                    Kebutuhan Dana
                </p>
                <h1 style="color:#A200FF;" class="text-center">
                    Rp{{$project->dana_target}}
                </h1>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col text-center modali">
                @if($project->dana_terkumpul >= $project->dana_target)

                @else
                <button type="button" class="btn btn-modali textcenter" data-toggle="modal" data-target="#exampleModal">
                    Modali sekarang
                </button>
                @endif

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel" style="color:#6e6e6e;">Isikan dana</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Form -->
                                <form action="{{route('project.modali', [$id = $project->id])}}" method="post">
                                    <div class="form-group">
                                        @csrf
                                        @method('put')
                                        @if(Auth::user()->saldo === 0)
                                        <label for="saldoo">Saldo anda 0</label><br>
                                        <a href="{{route('user.isisaldo', [$id = Auth::user()->id])}}">Isi disini</a>
                                        @else
                                        <label for="saldoo">Saldo anda</label>
                                        <input type="number" class="form-control" id="saldoo" value="{{Auth::user()->saldo}}" disabled>

                                        <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                                        <input type="hidden" value="{{$project->id}}" name="project_id">
                                    </div>

                                    <div class="form-group">
                                        <label for="nominal_transaksi">Jumlah saldo pendanaan</label>
                                        <input type="number" name="nominal_transaksi" class="form-control" id="nominal_transaksi" placeholder="isikan jumlah saldo pendanaan..">
                                    </div>
                                    @endif


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Modali</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="div pt-3 a">
                    <a href="#" class="pt-4" style="color:white;">*Syarat dan ketentuan berlaku</a>
                </div>
            </div>
        </div>
    </div>

    <div class="ungu">
        <div class="container">
            <div class="div">
                <div class="row pt-5">
                    <div class="col text-center">
                        <p>Lokasi:<br>
                            <span style="font-weight: bold;">{{$project->lokasi}}</span></p>

                        <p>Timeline Proyek:<br>
                            <span style="font-weight: bold;">{{date('d-m-Y', strtotime($project->start))}} s/d {{date('d-m-Y', strtotime($project->end))}}</span></p>

                        <p>Luas Lahan:<br>
                            <span style="font-weight: bold;">{{$project->luas_lahan}}</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection