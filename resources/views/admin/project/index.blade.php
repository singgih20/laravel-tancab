@extends('layouts.admin')
@section('title') Proyek @endsection

@section('content')

<!-- Page Heading -->
<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Project / Investasi</h1>

    </div>
</div>
<div class="row">
    <div class="card-body">
        @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama Pengelola</th>
                        <th>Jenis Cabai</th>
                        <th>Gambar</th>
                        <th>Lokasi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($projects as $project)
                    <tr>
                        <td>{{$project->user->name}}</td>
                        <td>{{$project->jenis_cabai}} </td>
                        <td><img src="{{asset('storage/' . $project->gambar)}}" width="100px;" height="50px;"> </td>
                        <td>{{$project->lokasi}}</td>
                        <td>
                            <form action="{{route('admin.project.destroy', [$id = $project->id])}}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="7" class="text-center">

                        </td>
                    </tr>

                </tbody>

                @endforeach

            </table>
            {{$projects->links()}}
        </div>
    </div>

</div>
@endsection

</div>