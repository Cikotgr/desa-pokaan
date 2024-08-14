<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;

class AdminBeritaController extends Controller
{
    public function index()
    {
        $berita = Informasi::where('jenis','=','berita')->latest()->paginate(6);
        $jenis = 'berita';

        $currentPage = $berita->currentPage();
        $perPage = $berita->perPage();
        $startNumber = ($currentPage - 1) * $perPage + 1;

        $berita->getCollection()->transform(function ($item, $key) use ($startNumber) {
            $item->number = $startNumber + $key;
            return $item;
        });

        return view('admin.berita.index',compact('berita','jenis'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required',
            'jenis' => 'required'
        ]);

        $gambar = $request->file('gambar');
        $gambar->storeAs('public/berita',$gambar->getClientOriginalName());
        $patch = 'storage/berita/'.$gambar->getClientOriginalName();
        try{
            Informasi::create([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'gambar' => $patch,
                'jenis' => $request->jenis
            ]);
        }catch(\Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
        

        return redirect()->route('admin.berita.index');
    }

    public function pengumuman()
    {
        $berita = Informasi::where('jenis','=','pengumuman')->latest()->paginate(6);
        $jenis = 'pengumuman';

        $currentPage = $berita->currentPage();
        $perPage = $berita->perPage();
        $startNumber = ($currentPage - 1) * $perPage + 1;

        $berita->getCollection()->transform(function ($item, $key) use ($startNumber) {
            $item->number = $startNumber + $key;
            return $item;
        });

        return view('admin.berita.index',compact('berita','jenis'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }


    public function delete($id)
    {
        $berita = Informasi::find($id);
        $berita->delete();
        return redirect()->route('admin.berita.index');
    }

    public function show($id)
    {
        $berita = Informasi::find($id);
        $jenis = $berita->jenis;
        $latest = Informasi::where('jenis','=',$jenis)->latest()->limit(4)->get();
        return view('berita.show',compact('berita','jenis','latest'));
    }
}
