<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $latest = Informasi::where('jenis','=','berita')->latest()->limit(4)->get();
        $berita = Informasi::where('jenis','=','berita')->latest()->paginate(6);
        $jenis = 'Berita';

        return view('berita.index', compact('berita','latest','jenis'));
    }

    public function pengumuman(){
        $latest = Informasi::where('jenis','=','pengumuman')->latest()->limit(4)->get();
        $berita = Informasi::where('jenis','=','pengumuman')->latest()->paginate(6);
        $jenis = 'Pengumuman';

        return view('berita.index', compact('berita','latest','jenis'));
    } 


    public function agenda(){
        $latest = Informasi::where('jenis','=','agenda')->latest()->limit(4)->get();
        $berita = Informasi::where('jenis','=','agenda')->latest()->paginate(6);
        $jenis = 'Agenda';

        return view('agenda.index', compact('berita','latest','jenis'));
    }

    public function show($id) {
        $berita = Informasi::find($id);
        $latest = Informasi::where('jenis','=','agenda')->latest()->limit(4)->get();
        $jenis = $berita->jenis;
        return view('berita.show', compact('berita','jenis','latest'));
    }

}
