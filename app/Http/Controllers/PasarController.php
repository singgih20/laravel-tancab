<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasar;

class PasarController extends Controller
{
    public function index()
    {
        $items = Pasar::get();
        return view('pasar.index', compact('items'));
    }
}
