<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Forum;
use App\Artikel;
use Auth;
use App\Project;
use App\User;
use App\Pasar;
use App\Isisaldo;

class DashboardController extends Controller
{

    public function index(Request $request)
    {
        if (Auth::user()->roles === "USER") {
            abort(403);
        }
        return view(
            'admin.index',
            [
                'forum' => Forum::count(),
                'artikel' => Artikel::count(),
                'project_progress' => Project::where('dana_terkumpul', '<', 'dana_target')->count(),
                'project_success' => Project::where('dana_terkumpul', '>=', '10000')->count(),
                'user' => User::count(),
                'pasar' => Pasar::count(),
                'isisaldo' => Isisaldo::where('status_transaksi', 'PENDING')->count()
            ]
        );
    }
}
