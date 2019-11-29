@extends('layouts.app')
@section('title') test @endsection

@section('content')
<div class="container">
    <div class="row pt-5">
        <div class="col-8">
            <div class="card main-card">
                <div class="card-body">
                    <div class="card mt-2 shadow">
                        <!-- buat postingan -->
                        <div class="card" style="background-color: #17D885; height: 30px;">
                            <div class="card-body" style="color:white; margin-top: -16px;">
                                <h5 style="font-weight: bold; font-size: 18px;">Buat Postingan</h5>
                            </div>
                        </div>

                        <!-- buat postingan #2 -->
                        <div class="card-body" style="background-color:#f3f3f3;">
                            <img src="{{asset('storage/'.Auth::user()->avatar)}}" alt="" class="rounded-circle mt-4" width="79px;" height="79px;" style="margin-top:-24px; float:left;">

                            <form action="{{route('forum.store')}}" method="POST">
                                @csrf

                                <textarea name="status" id="" cols="50" rows="10" style="margin-top:40px; margin-left: 20px;border: 0; border-radius:20px;" placeholder="  Mulai dengan kata 'hai'..."></textarea>
                                <button class="btn btn-kirim" type="submit">Kirim</button>
                            </form>
                        </div>

                    </div>


                    <hr class=" text-muted" style="padding-top: 2px;
                          border: 0;
                          clear:both;
                          display:block;
                          width: 100%;               
                          background-color:#e3e3e3;
                          height: 1px;">

                    @foreach($forums as $forum)
                    <div class="other-post" style="margin-left: 10px;">
                        <div class="post pt-3">

                            <img src="{{asset('storage/'.$forum->user->avatar)}}" alt="" class="rounded-circle mt-4" width="90px;" height="90px;" style="margin-top:-24px; float:left; margin-right: 24px; background-color:black;">

                            <div class="tulisan" style="padding-top:20px;">
                                <small style="color:black; margin-left:460px;">{{$forum->created_at->diffForHumans()}}</small>
                                <h5 style="font-weight: bold; color: #707070; ">{{$forum->user->name}}</h5>
                                <a href="{{route('forum.show', [$id = $forum->id])}}" style="text-decoration:none; color:#6e6e6e;">
                                    <p>{{$forum->status}}
                                    </p>
                                </a>


                                <a href="{{action('ForumController@like', ['id' => $forum->id  ])}}" style="margin-left:460px; text-decoration: none; color:#707070;"><i class="fas fa-thumbs-up" style="margin-right:5px;"></i>Like</a>
                                <a href="{{route('forum.show', [$id = $forum->id])}}" style="margin-left: 25px; text-decoration: none; color:#707070;"><i class="fas fa-comments" style="margin-right: 5px;"></i>Komentari</a>
                                <hr>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
                            <a href="{{route('forum.show', [$id = $r->id])}}" style="text-decoration:none; color:#6e6e6e;" <p style="color:#707070;">{{$r->status}}</p>
                            </a>

                            <a href="" style="margin-left: 175px; text-decoration: none; color:#acacac;"> <i class="fas fa-thumbs-up"> {{$r->likes}}</i></a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>


@endsection