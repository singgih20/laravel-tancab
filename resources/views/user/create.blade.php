@extends('layouts.app')
@section('title') Profil @endsection

@section('content')


<div class="container">
    <div class="row pt-5">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4 style="color:#6e6e6e;" class="text-center">Isi saldo</h4>
                    @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                    @endif
                    <hr>
                    <div class="row">

                        <div class="col">
                            <form action="{{route('user.store')}}" method="post">
                                @csrf
                                <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                                <div class="form-group">
                                    <label for="nama" style="color:#6e6e6e;">Nama</label>
                                    <input type="text" class="form-control" id="nama" placeholder="nama" value="{{$user->name}}" name="name" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="email" style="color:#6e6e6e;">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="email" value="{{$user->email}}" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="pembayaran" style="color:#6e6e6e;">Pembayaran melalui</label>
                                    <select class="form-control" id="pembayaran" name="pembayaran">
                                        <option value="Mandiri">Bank Mandiri</option>
                                        <option value="BCA">Bank BCA</option>
                                        <option value="BRI">Bank BRI</option>
                                        <option value="alfamart">Alfamart</option>
                                        <option value="indomart">Indomart</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="saldo" style="color:#6e6e6e;">Jumlah saldo</label>
                                    <input type="number" class="form-control" id="saldo" placeholder="saldo" name="saldo">
                                </div>

                                <button class="btn btn-upload" type="submit">Proses</button>
                        </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>


</div>
@endsection