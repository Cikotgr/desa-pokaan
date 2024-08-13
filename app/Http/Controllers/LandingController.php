<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $berita = Informasi::where('jenis','=','berita')->latest()->limit(3)->get();
        $pengumuman = Informasi::where('jenis','=','pengumuman')->latest()->limit(3)->get();
        $agenda = Informasi::where('jenis','=','agenda')->latest()->limit(3)->get();
        
        return view('welcome', compact('berita','pengumuman','agenda'));
    }

}
