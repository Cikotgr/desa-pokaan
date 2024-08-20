<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class AdminGaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::latest()->paginate(8);

        $currentPage = $galeri->currentPage();
        $perPage = $galeri->perPage();
        $startNumber = ($currentPage - 1) * $perPage + 1;

        $galeri->getCollection()->transform(function ($item, $key) use ($startNumber) {
            $item->number = $startNumber + $key;
            return $item;
        });
        return view('admin.galeri.index',compact('galeri'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required',
            'judul' => 'required'
        ]);

        $foto = $request->file('foto');
        $foto->storeAs('public/galeri',$foto->getClientOriginalName());
        $patch = 'storage/galeri/'.$foto->getClientOriginalName();
        try{
            Galeri::create([
                'foto' => $patch,
                'judul' => $request->judul
            ]);
        }catch(\Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
        

        return redirect()->route('admin.galeri');
    }


}
