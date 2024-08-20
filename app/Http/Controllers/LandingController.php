<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Informasi;
use App\Models\Perangkat;
use App\Models\Produk;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $berita = Informasi::where('jenis','=','berita')->latest()->limit(3)->get();
        $pengumuman = Informasi::where('jenis','=','pengumuman')->latest()->limit(3)->get();
        $agenda = Informasi::where('jenis','=','agenda')->latest()->limit(3)->get();
        $produk = Produk::latest()->limit(10)->get();
        $galeri = Galeri::latest()->limit(6)->get();
        $perangkat = Perangkat::inRandomOrder()->limit(6)->get();
        
        return view('welcome', compact('berita','pengumuman','agenda','produk','galeri','perangkat'));
    }

}
