@extends('layouts.app')
@section('title') Upload Investasi @endsection

@section('content')
<div class="main">
    <div class="container">
        @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
        @endif
        <div class="row pt-5">
            <div class="col-4">
                <img src="{{url('frontend/images/celebration.png')}}" alt="">
                <h1 class="text-center" style="color:#363636;">Mulai Suksesmu dengan TANCAB</h1>
                <p class="text-center" style="color:#363636; font-weight: bold; font-size: 16px;">Isi deskripsi
                    semuanya
                    dengan<br>
                    jelas dan jujur agar mempermudah<br>
                    para investor</p>
            </div>


            <div class="div" style="margin-left:180px;  border-left: 3px solid #707070;
  height: 500px;"></div>

            <div class="col kanan" style="height:500px;">
                <form method="post" action="{{route('project.store')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row" style="color: black;">
                        <label for="jenis_cabai" class="col-sm-4 col-form-label col-form-label-sm">Jenis Cabai</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-sm" id="jenis_cabai" placeholder="Jenis Cabai" name="jenis_cabai">
                        </div>
                    </div>

                    <div class="form-group row" style="color: black;">
                        <label for="lama_pemodalan" class="col-sm-4 col-form-label col-form-label-sm">Lama Pemodalan</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control form-control-sm" id="lama_pemodalan" placeholder="Masukkan lama pemodalan" name="lama_pemodalan">
                        </div>
                    </div>

                    <div class="form-group row" style="color: black;">
                        <label for="dana_target" class="col-sm-4 col-form-label col-form-label-sm">Dana Target</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control form-control-sm" id="dana_target" name="dana_target" placeholder="Masukkan modal yang dibutuhkan">
                        </div>
                    </div>

                    <div class="form-group row" style="color: black;">
                        <label for="dana_terkumpul" class="col-sm-4 col-form-label col-form-label-sm">Dana Terkumpul</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control form-control-sm" id="dana_terkumpul" name="dana_terkumpul" placeholder="Masukkan modal yang dibutuhkan">
                        </div>
                    </div>

                    <div class="form-group row" style="color: black;">
                        <label for="ekspektasi_profit" class="col-sm-4 col-form-label col-form-label-sm">Ekspektasi Profit</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-sm" id="ekspektasi_profit" placeholder="Masukkan ekspektasi profit" name="ekspektasi_profit">
                        </div>
                    </div>

                    <div class="form-group row" style="color: black;">
                        <label for="resiko_pemodalan" class="col-sm-4 col-form-label col-form-label-sm">Resiko Pemodalan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-sm" id="resiko_pemodalan" name="resiko_pemodalan" placeholder="Masukkan Resiko Pemodalan">
                        </div>
                    </div>

                    <h2 style="color: #393939;">Deskripsi</h2>


                    <div class="form-group row" style="color: black;">
                        <label for="jumlah_proyek" class="col-sm-4 col-form-label col-form-label-sm">Banyak Proyek</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control form-control-sm" id="jumlah_proyek" placeholder="Masukkan jumlah proyek" name="jumlah_proyek">
                        </div>
                    </div>

                    <div class="form-group row" style="color: black;">
                        <label for="jumlah_anggota" class="col-sm-4 col-form-label col-form-label-sm">Banyak Petani</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-sm" id="jumlah_anggota" placeholder="Masukkan jumlah petani" name="jumlah_anggota">
                        </div>
                    </div>

                    <div class="form-group row" style="color: black;">
                        <label for="luas_lahan" class="col-sm-4 col-form-label col-form-label-sm">Luas Lahan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-sm" id="luas_lahan" placeholder="Masukkan luas lahan" name="luas_lahan">
                        </div>
                    </div>

                    <div class="form-group row" style="color: black;">
                        <label for="start" class="col-sm-4 col-form-label col-form-label-sm">Proyek dimulai</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control form-control-sm" id="start" placeholder="Masukkan mulai proyek" name="start">
                        </div>
                    </div>

                    <div class="form-group row" style="color: black;">
                        <label for="end" class="col-sm-4 col-form-label col-form-label-sm">Proyek selesai</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control form-control-sm" id="end" placeholder="Masukkan luas lahan" name="end">
                        </div>
                    </div>

                    <div class="form-group row" style="color: black;">
                        <label for="lokasi" class="col-sm-4 col-form-label col-form-label-sm">Lokasi Lahan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-sm" id="lokasi" placeholder="Masukkan lokasi lahan" name="lokasi">
                        </div>
                    </div>

                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gambar" name="gambar" required>
                        <label class="custom-file-label" for="gambar">Tambahkan gambar</label>
                        <div class="invalid-feedback">Gambar tidak sesuai!</div>
                    </div>

                    <button type="submit" class="btn btn-upload mt-4">
                        Upload
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection