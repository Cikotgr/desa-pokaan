<x-admin-layout>
    <div class="px-4 py-14 md:px-12 w-full grid grid-cols-1">
        <form action="{{route('admin.galeri.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
        <input name="foto" type="file" class="file-input file-input-bordered w-full max-w-6xl" accept="image/*" />
        <input name="judul" type="text" placeholder="Judul" class="input mt-6 input-bordered w-full max-w-6xl" />
        <div class="grid grid-cols-1 max-w-80 mt-6 gap-4 md:grid-cols-2">
            <a href="{{route('admin.galeri')}}" class="btn btn-warning ">Batal</a>
            <button type="submit" class="btn btn-success">Simpan</button>
        </div>
        </form>
    </div>
</x-admin-layout>