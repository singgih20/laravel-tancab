@extends('layouts.app')
@section('title') Home @endsection

@section('content')

<main>
    <div class="senyum" id="senyum" style="background-image:linear-gradient(to bottom, rgba(245, 246, 252, 0.0), rgba(0, 0, 0, 1)), url('{{url('frontend/images/senyum.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-6" style="padding-top: 70px;">
                    <h1 class="display-4" style="font-size: 130px;">TANCAB</h1>
                    <p class="lead" style="font-size: 22px;">Mensejaterahkan para petani cabai <br> dan kebutuhan
                        cabai
                        yang
                        tinggi <br> di Indonesia
                    </p>
                    <a href="{{route('login')}}" class="btn pelajari">Mulai Sekarang</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Akhir -->
    <div class="tancab-mobile">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="{{url('frontend/images/mobile.png')}}" alt="" class="pt-5">
                </div>
                <div class="col-7 ml-auto ">
                    <h1 class="text-center" style="font-size: 45px; padding-top: 100px;">TANCAB MOBILE
                    </h1>
                    <p class="text-center" style="font-size: 22px;">Sekarang segala pembelian dan investasi anda<br>
                        berada dalam genggaman anda</p>
                    <p class="pt-4 text-center">Dapatkan sekarang</p>
                    <div class="logo text-center">
                        <a href="#"><img src="{{url('frontend/images/Group 690.png')}}" alt=""></a>
                        <a href="#"><img src="{{url('frontend/images/Group 1206.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pemisah" style="height: 85px; background-color: white;"></div>

    <!-- About us -->
    <div class="about-us pt-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="text-center" style="font-size: 45px;">ABOUT US</h1>
                    <p class="text-center pt-3" style="font-size: 22px;">TANCAB merupakan startup yang dikelola oleh
                        mahasiswa Telkom University
                        sebagai tugas
                        Perancangan Interaksi. Aplikasi
                        ini memberikan kemudahan mulai dari petani sampai investor, aplikasi ini juga menghubungkan
                        antara mereka untuk mencapai
                        tujuan bersama.</p>
                </div>
            </div>

            <div class="row pt-5">
                <div class="col-4">
                    <h1 class="text-center pt-5">FIND US</h1>
                    <p class="text-center">Telkom University<br>Jl.Telekomunikasi<br>Gedung B</p>
                </div>
                <div class="col-4 text-center">
                    <img src="{{url('frontend/images/undraw_team_spirit_hrr4.png')}}" width="290px;" height="250px;" alt="" style="margin-top: -30px;">
                </div>
                <div class="col-4 text-center pt-5">
                    <h1 class="text-center">CONTACT</h1>
                    <p class="text-center">+628 1318 4848</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Services -->
    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col pt-5">
                    <h1 class="text-center" style="color:#17D885;">Services</h1>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col text-center">
                    <img src="{{url('frontend/images/Group 1209.png')}} " width="200px" height="180px" alt="" class="text-center">
                    <h1 class="text-center" style="color:#17D885;">Bersahabat</h1>
                    <p style="color: #616161;">Aplikasi TANCAB dapat digunakan oileh seluruh kalangan</p>
                </div>
                <div class="col text-center">
                    <img src="{{url('frontend/images/Group 1211.png')}}" width="200px" height="180px" alt="" class="text-center">
                    <h1 class="text-center" style="color:#17D885;">Terpercaya</h1>
                    <p style="color: #616161;">Aplikasi TANCAB hanya mencari penjual dan pembeli yang terverifikasi
                        sumbernya</p>
                </div>
                <div class="col text-center">
                    <img src="{{url('frontend/images/Group 1210.png')}}" width="200px" height="180px" alt="" class="text-center">
                    <h1 class="text-center" style="color:#17D885;">Harga Termurah</h1>
                    <p style="color: #616161;">Aplikasi TANCAB menyediakan harga terbaik dibanding aplikasi lainnya
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

</main>

@endsection