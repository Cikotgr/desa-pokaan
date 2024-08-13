<x-admin-layout>
    <div class="px-4 py-14 md:px-12 w-full grid grid-cols-1">
        <input type="file" class="file-input file-input-bordered w-full max-w-6xl" />
        <input type="text" placeholder="Nama produk" class="input mt-6 input-bordered w-full max-w-6xl" />
        <textarea placeholder="Deskripsi"
            class="textarea mt-6 textarea-bordered textarea-lg w-full max-w-6xl h-96">
        </textarea>
        <label class="input mt-6 max-w-6xl input-bordered flex items-center gap-2">
            Rp
            <input type="text" class="grow input" placeholder="harga" />
        </label>
        <label class="input mt-6 max-w-6xl input-bordered flex items-center gap-2">
            +62
            <input type="text" class="grow input" placeholder="No Hp" />
        </label>
        <input type="text" placeholder="Nama Toko" class="input mt-6 input-bordered w-full max-w-6xl" />
        <input type="text" placeholder="Jenis Produk" class="input mt-6 input-bordered w-full max-w-6xl" />
        <input type="text" placeholder="Lokasi" class="input mt-6 input-bordered w-full max-w-6xl" />

    </div>
</x-admin-layout>