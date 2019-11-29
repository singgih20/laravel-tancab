@extends('layouts.admin')
@section('title') Artikel @endsection

@section('content')

<!-- Page Heading -->
<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Artikel</h1>
        <a href="{{route('artikel.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i>Tulis Artikel</a>
    </div>
</div>
<div class="row">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($artikels as $artikel)
                    <tr>
                        <td><a href="{{route('artikel.show', [$id = $artikel->id])}}" style="color:#6e6e6e;">{{$artikel->judul}}</a></td>
                        <td>{{$artikel->user->name}} </td>
                        <td>{{$artikel->created_at->format('D d-M-Y')}}</td>
                        <td>
                            <a href="{{route('artikel.edit', [$id = $artikel->id])}}" class="btn btn-info">
                                <i class="fa fa-pencil-alt"></i>
                            </a>
                            <form action="{{route('artikel.destroy', [$id = $artikel->id])}}" method="post" class="d-inline">
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
            {{$artikels->links()}}
        </div>
    </div>

</div>
@endsection

</div>