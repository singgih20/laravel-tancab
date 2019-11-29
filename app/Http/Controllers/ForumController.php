<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use App\Forum;
use Illuminate\Http\Request;
use App\Komentar;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        $forums = Forum::latest()->get();
        $like = Forum::max('likes');

        $rekomendasi = Forum::orderBy('likes', 'DESC')->limit(3)->get();

        return view('forum.index', [
            'forums' => $forums,
            'rekomendasis' => $rekomendasi,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'status' => 'required'
        ]);
        $post = Auth::user()->forums()->create($data);
        $post->save();
        return redirect('forum');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rekomendasis = Forum::orderBy('likes', 'DESC')->limit(3)->get();
        $forum = Forum::findOrFail($id);
        $komentars = Komentar::where('forum_id', $forum->id)->get();
        return view('forum.show', compact('forum', 'rekomendasis', 'komentars'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function like($id)
    {
        Forum::FindOrFail($id)->increment('likes');
        return redirect('forum');
    }
}
