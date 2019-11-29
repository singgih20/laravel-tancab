<?php

namespace App\Http\Controllers\Admin;

use App\Forum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class ForumController extends Controller
{
    public function indexx()
    {
        if (Auth::user()->roles === "USER") {
            abort(403);
        }
        $forums = Forum::orderBy('created_at', 'DESC')->paginate(3);
        return view('admin.forum.index', compact('forums'));
    }

    public function destroyy($id)
    {
        if (Auth::user()->roles === "USER") {
            abort(403);
        }
        $forum = Forum::findOrFail($id);

        $forum->delete();
        return redirect('/admin/forum');
    }
}
