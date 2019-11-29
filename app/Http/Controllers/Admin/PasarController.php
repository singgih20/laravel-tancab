<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pasar;
use Auth;

class PasarController extends Controller
{
    public function indexx()
    {
        if (Auth::user()->roles ==  "USER") {
            abort(403);
        }
        $pasars = Pasar::get();

        return view('admin.pasar.index', compact('pasars'));
    }

    public function create()
    {
        if (Auth::user()->id === "USER") {
            abort(403);
        }

        return view('admin.pasar.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('pasar', 'public');
            $data['gambar'] = $file;
        }

        $pasar = Pasar::create($data);
        return redirect()->back()->with('status', 'Berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        if (Auth::user()->roles === "USER") {
            abort(403);
        }
        $artikel = Pasar::findOrFail($id);
        $artikel->delete();
        return redirect('/admin/pasar')->with('status', 'Berhasil dihapus!');
    }
}
