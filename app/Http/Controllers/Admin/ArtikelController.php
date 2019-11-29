<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Artikel;
use Auth;

class ArtikelController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexx()
    {
        if (Auth::user()->roles === "USER") {
            abort(403);
        }

        $artikels = Artikel::paginate(3);
        return view('admin.artikel.index', compact('artikels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->roles === "USER") {
            abort(403);
        }
        return view('admin.artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::user()->roles === "USER") {
            abort(403);
        }
        $data = $request->all();
        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('artikel', 'public');
            $data['gambar'] = $file;
        }

        $artikel = Auth::user()->artikel()->create($data);

        return redirect('/admin/artikel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()->roles === "USER") {
            abort(403);
        }
        $artikel = Artikel::findOrFail($id);
        return view('admin.artikel.edit', compact('artikel'));
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
        if (Auth::user()->roles === "USER") {
            abort(403);
        }
        $data = $request->all();
        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('artikel', 'public');
            $data['gambar'] = $file;
        }

        $artikel = Artikel::findOrFail($id);
        $artikel->update($data);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::user()->roles === "USER") {
            abort(403);
        }
        $artikel = Artikel::findOrFail($id);
        $artikel->delete();
        return redirect('/admin/artikel');
    }
}
