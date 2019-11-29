@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Artikel</h1>

    </div>






    <div class="card shadow">
        <div class="card-body">
            <form action="{{route('artikel.update', [$id = $artikel->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" name="judul" placeholder="judul" value="{{$artikel->judul}}">
                </div>

                <div class="form-group">
                    <label for="referensi">Referensi</label>
                    <input type="text" class="form-control" name="referensi" placeholder="referensi" value="{{$artikel->referensi}}">
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="d-block w-100 form-control" rows="10" placeholder="tulis isi artikel..">{{$artikel->deskripsi}}</textarea>
                </div>

                <div class="form-group">
                    <img src="{{asset('storage/'.$artikel->gambar)}}" height="50px;" width="100px;">
                    <label for="gambar">Gambar</label>
                    <input type="file" name="gambar" class="form-control-file" id="gambar">
                </div>

                <button class="btn btn-primary btn-block">
                    Ubah
                </button>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->
@endsection