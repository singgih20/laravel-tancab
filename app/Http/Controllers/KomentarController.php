<?php

namespace App\Http\Controllers;

use App\Komentar;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    public function store(Request $request)
    {
        $komentar = new Komentar;
        $komentar->comment = $request->input('comment');
        $komentar->user_id = $request->input('user_id');
        $komentar->forum_id = $request->input('forum_id');
        $komentar->save();

        return redirect()->back();
    }
}
