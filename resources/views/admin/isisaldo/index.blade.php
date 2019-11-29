@extends('layouts.admin')
@section('title') Isi saldo @endsection

@section('content')

<!-- Page Heading -->
<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Request Isi Saldo</h1>

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
                        <th>Nama</th>
                        <th>Jumlah Isi Saldo</th>
                        <th>Pembayaran</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                    <tr>
                        <td>{{$item->user->name}}</td>
                        <td>Rp{{$item->saldo}} </td>
                        <td>{{$item->pembayaran}}</td>
                        <td>{{$item->created_at->format('D d-M-Y')}}</td>
                        <td>
                            <form action="{{route('admin.isisaldo.update', [$id = $item->id])}}" method="post" class="d-inline">
                                @csrf
                                @method('put')
                                <input type="hidden" name="user_id" value="{{$item->user->id}}">
                                <input type="hidden" name="saldo" value={{$item->saldo}}>
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-check"></i>
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