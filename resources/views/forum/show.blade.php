@extends('layouts.app')
@section('title') Detail Forum @endsection

@section('content')

<div class="row pt-5">
    <div class="col-8">
        <div class="card main-card">
            <div class="card-body">
                <div class="card mt-2 shadow">
                    <!-- detail postingan -->
                    <div class="card" style="background-color: #17D885; height: 30px;">
                        <div class="card-body" style="color:white; margin-top: -16px;">
                            <h5 style="font-weight: bold; font-size: 18px;">Detail Postingan</h5>
                        </div>
                    </div>

                    <!-- detail postingan #2 -->
                    <div class="card-body">
                        <img src="{{asset('storage/'.$forum->user->avatar)}}" alt="" class="rounded-circle mt-4" width="79px;" height="79px;" style="float:left; margin-right:20px;">
                        <small style="color:black; margin-left:500px;">{{$forum->created_at->diffForHumans()}}</small>
                        <h5 style="font-weight: bold; color: #707070; margin-top:0px;">{{$forum->user->name}}</h5>
                        < <h5 style="color:black;">{{$forum->status}}</h5>
                            <a href="{{action('ForumController@like', ['id' => $forum->id  ])}}" style="margin-left:460px; text-decoration: none; color:#707070;"><i class="fas fa-thumbs-up" style="margin-right:5px;"></i>{{$forum->likes}} Like</a>
                    </div>
                    <hr class=" text-muted" style="padding-top: 2px;
                          border: 0;
                          clear:both;
                          display:block;
                          width: 100%;               
                          background-color:#e3e3e3;
                          height: 1px;">

                    <div class="tulis-komentar" style="margin-left:50px;">
                        <img src="{{asset('storage/'.Auth::user()->avatar)}}" alt="" class="rounded-circle mt-4" width="35px;" height="35px;" style="float:left;">
                        <h5 style="font-weight: bold; color: #707070; margin-top:30px; margin-left:44px;">{{Auth::user()->name}}</h5>
                        <form action="{{route('komentar.store')}}" method="post">
                            @csrf
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <input type="hidden" name="forum_id" value="{{$forum->id}}">
                            <input type="text" placeholder="Tulis komentar.." style="margin-left:40px; border:none; width:70%;" name="comment">
                            <button type="submit" class="btn btn-secondary">Komentari</button>
                        </form>
                        <hr>
                    </div>

                    @foreach($komentars as $komentar)
                    <div class="komentar ml-5">
                        <img src="{{asset('storage/'.$komentar->user->avatar)}}" alt="" class="rounded-circle mt-4" width="35px;" height="35px;" style="float:left;">
                        <h5 style="font-weight: bold; color: #707070; margin-top:30px; margin-left:44px;">{{$komentar->user->name}}</h5>
                        <h6 style="color:black; margin-left:44px; float:left;">{{$komentar->comment}}</h6>

                    </div>
                    <small style="color:black; margin-left:590px;">{{$komentar->created_at->diffForHumans()}}</small>
                    <hr class=" text-muted" style="padding-top: 2px;
                          border: 0;
                          clear:both;
                          display:block;
                          width: 100%;               
                          background-color:#e3e3e3;
                          height: 1px;">
                    @endforeach

                </div>

            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="card" style="background-color: #F5F4F4; height: 30px;">
                    <div class="card-body" style="color:white; margin-top: -16px;">
                        <h5 style="font-weight: bold; font-size: 18px; color: #707070;">Direkomendasikan</h5>
                    </div>
                </div>

                <!-- rekomendasi -->
                @foreach($rekomendasis as $r)
                <div class="card mt-3">
                    <div class="card-body">
                        <p style="color:#707070;"><a href="{{route('forum.show', [$id = $r->id])}}" style="color: #6e6e6e;">{{$r->status}}</a></p>
                        <a href="" style="text-decoration: none; color:#acacac; margin-left: 175px; margin-right: 20px;">
                            <i class="fas fa-comments"></i></a>
                        <a href="" style="text-decoration: none; color:#acacac;"> <i class="fas fa-thumbs-up"> {{$r->likes}}</i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


    @endsection