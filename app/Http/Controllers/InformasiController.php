<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function berita()
    {
        $latest = Informasi::where('jenis','=','berita')->latest()->limit(4)->get();
        $berita = Informasi::where('jenis','=','berita')->latest()->paginate(6);

        return view('berita.index', compact('berita','latest'));
    }
}
