@extends('layouts.app')
@section('title') Artikel @endsection

@section('content')
<div class="detail-artikel">
    <div class="container">


        <div class="row pt-5">
            <div class="col">
                <div id="detail-gambar" style=" background-image: url('{{asset('storage/'.$artikel->gambar)}}');">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">

                <img src="{{asset('storage/'.$artikel->user->avatar)}}" alt="" class="rounded-circle mt-4" width="50px;" height="50px;" style="margin-left: 25px; float: left; margin-right: 25px; margin-bottom: 20px;">
                <p style="color:black; margin-top: 30px;" class="text-muted">{{$artikel->user->name}}</p>
                <div class="div mt-5 ml-4">
                    <smal style="color:black; font-size: 12px;">(sumber: <a href="https://{{$artikel->referensi}}">{{$artikel->referensi}}</a>)</smal>
                </div>
            </div>
        </div>

        <hr style="padding-top: 1px;
                border: 0;
  clear:both;
  display:block;
  width: 100%;               
  background-color:grey;
  height: 1px;"">

                <div class=" row">
        <div class="col">
            <p style="color:black;">
                {{$artikel->deskripsi}}
            </p>

        </div>
    </div>
</div>
</div>

<!-- Footer -->
<div class="footer mt-5">
    <div class="container">
        <div class="row pt-5">
            <div class="col">
                <p style="color: #F8FFFB;"><b> FITUR</b></p>
                <a style="color: #F8FFFB;" href="#">Artikel Cabai</a> <br>
                <a style="color: #F8FFFB;" href="#">Cari Pasar</a> <br>
                <a style="color: #F8FFFB;" href="#">Forum Petani</a> <br>
                <a style="color: #F8FFFB;" href="#">Investasi</a> <br>
                <a style="color: #F8FFFB;" href="#">Warung</a>
            </div>
            <div class="col">
                <p style="color: #F8FFFB;"><b> CONTENT</b></p>
                <a style="color: #F8FFFB;" href="#">About Us</a> <br>
                <a style="color: #F8FFFB;" href="#">Feedback</a> <br>
            </div>
            <div class="col">
                <p style="color: #F8FFFB;"><b> HELP</b></p>
                <a style="color: #F8FFFB;" href="#">Cara Transaksi</a> <br>
                <a style="color: #F8FFFB;" href="#">Cara Berinvestasi</a> <br>
            </div>
            <div class="col">
                <p style="color: #F8FFFB;"><b> SOCIAL MEDIA</b></p>
                <a style="color: #F8FFFB;" href="#">Artikel Cabai</a> <br>
            </div>
        </div>
        <hr style="  border: 0;
          clear:both;
          display:block;
          width: 100%;               
          background-color:white;
          height: 1px;">
        <div class="row mb-5">
            <div class="col text-center pt-3">Copyright © 2019 TANCAB Company S.L. All rights reserved.</div>
        </div>

    </div>
</div>
@endsection