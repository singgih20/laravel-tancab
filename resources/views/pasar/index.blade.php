@extends('layouts.app')
@section('title') Cari Pasar @endsection

@section('content')
<div class="container">
    <div class="row pt-5">
        <div class="col">
            <div id="map" style="height:500px;"></div>

        </div>
    </div>
    <div class="market">
        <div class="container">
            <div class="row pt-5">
                <div class="col">
                    <h2 class="text-muted">Pasar Terdekat</h2>
                </div>
            </div>
            
            <div class="row">
                @foreach($items as $item)
                <div class="col-4 pt-5">
                    <div class="div" style="float: left; height:200px;">
                        <img src="{{asset('storage/' . $item->gambar)}}" width="169px;" height="112px;" style="display:inline-block;">
                    </div>
                    <div class="text-center" style="margin-top:-22px;">
                        <h4 class="text-muted pt-3">{{$item->nama}}</h4>
                        <p class="text-center text-muted">{{$item->lokasi}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<script>
    var map;

    function initMap() {
        var telkom = {
            lat: -6.974028,
            lng: 107.630531
        }

        var pasar1 = {
            lat: -6.964744,
            lng: 107.609810
        }

        var pasar2 = {
            lat: -6.999999,
            lng: 107.629810
        }

        var pasar3 = {
            lat: -6.958744,
            lng: 107.629810
        }

        var pasar4 = {
            lat: -6.948744,
            lng: 107.619810
        }

        map = new google.maps.Map(document.getElementById('map'), {
            center: telkom,
            zoom: 13.3
        });

        marker = new google.maps.Marker({
            position: telkom,
            map: map
        })
        marker = new google.maps.Marker({
            position: pasar1,
            map: map
        })
        marker = new google.maps.Marker({
            position: pasar2,
            map: map
        })
        marker = new google.maps.Marker({
            position: pasar3,
            map: map
        })
        marker = new google.maps.Marker({
            position: pasar4,
            map: map
        })
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAc7qg-92HdT13QuIE87OaMFWg3nJAWwKU&callback=initMap" async defer></script>


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