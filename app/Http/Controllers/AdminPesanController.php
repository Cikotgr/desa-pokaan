<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;

class AdminPesanController extends Controller
{
    public function index()
    {
         // Paginate the results
        $pesan = Pesan::where('status','=','unread')->latest()->paginate(6);
        
         // Calculate the starting number for the current page
        $currentPage = $pesan->currentPage();
        $perPage = $pesan->perPage();
        $startNumber = ($currentPage - 1) * $perPage + 1;

        $status = 'unread';
         // Add the number attribute to each item
        $pesan->getCollection()->transform(function ($item, $key) use ($startNumber) {
            $item->number = $startNumber + $key;
            return $item;
        });

        return view('admin.pesan.index', compact('pesan','status'));
    }

    public function read()
    {
         // Paginate the results
        $pesan = Pesan::where('status','=','read')->latest()->paginate(6);
        // dd($pesan);
         // Calculate the starting number for the current page
        $currentPage = $pesan->currentPage();
        $perPage = $pesan->perPage();
        $startNumber = ($currentPage - 1) * $perPage + 1;

        $status = 'read';
         // Add the number attribute to each item
        $pesan->getCollection()->transform(function ($item, $key) use ($startNumber) {
            $item->number = $startNumber + $key;
            return $item;
        });

        return view('admin.pesan.index', compact('pesan','status'));
    }
    


    public function update($id)
    {
        $pesan = Pesan::find($id);
        $pesan->status = 'read';
        $pesan->save();
        return redirect()->route('admin.index');
    }
    
    public function destroy($id)
    {
        $pesan = Pesan::find($id);
        $pesan->delete();
        return redirect()->route('admin.read');
    }
}
