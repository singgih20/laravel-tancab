@extends('layouts.app')
@section('title') Profil @endsection

@section('content')

<div class="container">
    <div class="row pt-5">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4 style="color:#6e6e6e;">Profil Saya</h4>
                    @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                    @endif
                    <p class="text-muted" style="font-size:14px;z">Kelola informasi profil Anda</p>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <img src="{{asset('storage/'.$user->avatar)}}" alt="" width="250px;" height="250px;">
                            <form action="{{route('user.update', [$id = $user->id])}}" enctype="multipart/form-data" method="post" class="pt-4">
                                @csrf
                                @method('patch')
                                <label for="avatar" style="color:#6e6e6e;">Ubah Foto</label>
                                <input type="file" name="avatar" id="avatar" style="color:#6e6e6e;"><br><br>

                                <p style="color: #6e6e6e;">Saldo anda kosong? isi saldo anda <a href="{{route('user.isisaldo', [$id = $user->id])}}">disini</a></p>

                        </div>

                        <div class="col">

                            <div class="form-group">
                                <label for="nama" style="color:#6e6e6e;">Nama</label>
                                <input type="text" class="form-control" id="nama" placeholder="nama" value="{{$user->name}}" name="name">
                            </div>

                            <div class="form-group">
                                <label for="email" style="color:#6e6e6e;">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="email" value="{{$user->email}}" disabled>
                            </div>

                            <div class="form-group">
                                <label for="alamat" style="color:#6e6e6e;">Alamat</label>
                                <textarea type="text" class="form-control" id="alamat" placeholder="alamat" name="alamat">{{$user->alamat}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="saldo" style="color:#6e6e6e;">Saldo</label>
                                <input type="number" class="form-control" id="saldo" placeholder="saldo" value="{{$user->saldo}}" disabled>
                            </div>

                            <button class="btn btn-upload" type="submit">Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>


@endsection