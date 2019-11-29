@extends('layouts.admin')
@section('title') Transaksi @endsection

@section('content')

<!-- Page Heading -->
<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>

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
                        <th>ID Project</th>
                        <th>Nama Pengelola</th>
                        <th>Nama Investor</th>
                        <th>Saldo ditransfer</th>
                        <th>Dana Terkumpul</th>
                        <th>Dana Target</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($transaksis as $transaksi)
                    <tr>
                        <td>{{$transaksi->project->id}}</td>
                        <td>{{$transaksi->project->user->name}}</td>
                        <td>{{$transaksi->user->name}}</td>
                        <td>Rp{{$transaksi->nominal_transaksi}}</td>
                        <td>Rp{{$transaksi->project->dana_terkumpul}}</td>
                        <td>Rp{{$transaksi->project->dana_target}}</td>

                    </tr>

                    <tr>
                        <td colspan="7" class="text-center">

                        </td>
                    </tr>

                </tbody>

                @endforeach

            </table>

        </div>
    </div>
</div>
{{$transaksis->links()}}
@endsection

</div>