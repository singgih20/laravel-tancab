<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Project;

class ProjectController extends Controller
{
    public function indexx()
    {
        $projects = Project::paginate(3);
        return view('admin.project.index', compact('projects'));
    }
    public function destroyy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect()->back()->with('status', 'Berhasil dihapus!');
    }
}
