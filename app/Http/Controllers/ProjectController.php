<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Auth;
use App\Transaksi;
use App\User;


class ProjectController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::get();
        return view('project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['users_id'] = Auth::user()->id;
        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('project', 'public');
            $data["gambar"] = $file;
        }

        $project = Project::create($data);
        return redirect()->back()->with('status', 'Berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);

        return view('project.show', compact('project'));
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

    public function modali(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $user = User::findOrFail(Auth::user()->id);
        $transaksi = new Transaksi;

        if ($user->saldo < $request->input('nominal_transaksi')) {
            echo "<script>alert('Saldo anda kurang!');
            </script>";

            die;
        }
        $transaksi->user_id = $request->input('user_id');
        $transaksi->project_id = $request->input('project_id');
        $transaksi->nominal_transaksi = $request->input('nominal_transaksi');
        $transaksi->save();

        $nominal_transaksi = $request->input('nominal_transaksi');
        if ($nominal_transaksi >= $project->dana_target) {
            $nominal_transaksi = $project->dana_target;
        }
        $project->dana_terkumpul += $nominal_transaksi - $project->dana_terkumpul;
        $project->save();

        $user->saldo = $user->saldo - $nominal_transaksi;
        $user->save();

        return redirect()->back();
    }
}
