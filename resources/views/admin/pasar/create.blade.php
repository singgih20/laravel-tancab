@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Pasar</h1>

    </div>





    @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif
    <div class="card shadow">
        <div class="card-body">
            <form action="{{route('pasar.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="nama">Nama Pasar</label>
                    <input type="text" class="form-control" name="nama" placeholder="nama">
                </div>

                <div class="form-group">
                    <label for="lokasi">Lokasi</label>
                    <input type="text" class="form-control" name="lokasi" placeholder="lokasi">
                </div>

                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" name="gambar" class="form-control-file" id="gambar">
                </div>

                <button class="btn btn-primary btn-block">
                    Tambah
                </button>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->
@endsection