@extends('layouts.admin')
@section('title') Artikel @endsection

@section('content')

<!-- Page Heading -->

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800" style="margin-left:15px;">Forum</h1>

</div>
<div class="row">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($forums as $forum)
                    <tr>
                        <td>{{$forum->user->name}}</td>

                        <td><a href="{{route('forum.show', [$id = $forum->id])}}" style="color:#6e6e6e;"> {{$forum->status}}</a> </td>
                        <td>{{$forum->created_at->format('D d-m-Y')}} </td>
                        <td>
                            <form action="{{route('admin.forum.destroy', [$id = $forum->id])}}" method="post" class="d-inline">
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
            {{$forums->links()}}
        </div>
    </div>

</div>
@endsection

</div>