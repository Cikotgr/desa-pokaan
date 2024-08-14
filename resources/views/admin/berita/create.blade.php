<x-admin-layout>
    <div class="px-4 py-14 md:px-12 w-full grid grid-cols-1">
        <form action="{{route('admin.berita.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
        <input name="gambar" type="file" class="file-input file-input-bordered w-full max-w-6xl" accept="image/*" />
        <input name="judul" type="text" placeholder="Judul" class="input mt-6 input-bordered w-full max-w-6xl" />
        <textarea name="deskripsi" placeholder="Deskripsi" class="textarea mt-6 textarea-bordered textarea-lg w-full max-w-6xl h-96"></textarea>
        <select name="jenis" class="select mt-6 select-bordered w-full max-w-6xl">
            <option disabled selected class="text-2xl">Pilih Jenis</option>
            <option value="pengumuman">Pengumuman</option>
            <option value="berita">Berita</option> 
        </select>
        <input type="date" name="tanggal" placeholder="Judul" class="input mt-6 input-bordered w-full max-w-6xl" />
        
        <div class="grid grid-cols-1 max-w-80 mt-6 gap-4 md:grid-cols-2">
            <button class="btn btn-warning ">Batal</button>
            <button type="submit" class="btn btn-success">Simpan</button>
        </div>
        </form>
    </div>
</x-admin-layout>