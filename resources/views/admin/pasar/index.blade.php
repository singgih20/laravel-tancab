@extends('layouts.admin')
@section('title') Pasar @endsection

@section('content')

<!-- Page Heading -->
<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pasar</h1>
        <a href="{{route('pasar.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i>Tambah Pasar</a>
    </div>
</div>
<div class="row">
    <div class="card-body">
        <div class="table-responsive">
            @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
            @endif
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama Pasar</th>
                        <th>Alamat</th>
                        <th>Foto</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pasars as $pasar)
                    <tr>
                        <td>{{$pasar->nama}}</td>
                        <td>{{$pasar->lokasi}} </td>
                        <td><img src="{{asset('storage/' . $pasar->gambar)}}" width="200px;" height="100px;"></td>
                        <td>

                            <form action="{{route('pasar.destroy', [$id = $pasar->id])}}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>



                </tbody>
                @endforeach
            </table>

        </div>
    </div>

</div>
@endsection

</div>