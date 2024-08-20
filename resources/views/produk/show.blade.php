<x-app-layout>
    <div class="h-screen p-6 md:p-16 mb-36">
        <div class="breadcrumbs text-sm">
            <ul>
                <li>
                <a href="{{route('landing')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                        <path fill-rule="evenodd" d="M9.293 2.293a1 1 0 0 1 1.414 0l7 7A1 1 0 0 1 17 11h-1v6a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-6H3a1 1 0 0 1-.707-1.707l7-7Z" clip-rule="evenodd" />
                    </svg>
                    Beranda
                </a>
            </li>
            <li>
                <a href="{{route('produk.index')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                        <path fill-rule="evenodd" d="M6 5v1H4.667a1.75 1.75 0 0 0-1.743 1.598l-.826 9.5A1.75 1.75 0 0 0 3.84 19H16.16a1.75 1.75 0 0 0 1.743-1.902l-.826-9.5A1.75 1.75 0 0 0 15.333 6H14V5a4 4 0 0 0-8 0Zm4-2.5A2.5 2.5 0 0 0 7.5 5v1h5V5A2.5 2.5 0 0 0 10 2.5ZM7.5 10a2.5 2.5 0 0 0 5 0V8.75a.75.75 0 0 1 1.5 0V10a4 4 0 0 1-8 0V8.75a.75.75 0 0 1 1.5 0V10Z" clip-rule="evenodd" />
                    </svg>
                    Produk
                </a>
            </li>
            <li>
                {{$produk->nama}}
            </li>
            </ul>
        </div>
        <div class="grid mt-12 grid-cols-1 md:grid-cols-5  gap-6 md:gap-12">
            <div class="md:col-span-2 h-64 md:h-80" style="background-image: url('{{asset($produk->gambar)}}'); background-size: cover; background-position: center"></div>
    
            <div class="md:col-span-3">
                <h2 class="text-2xl font-extrabold">{{$produk->nama}}</h2>
                <h2 class="text-lg font-semibold mt-2">{{$produk->jenis}}</h2>
                <h1 class="text-3xl font-extrabold mt-4">Rp{{ number_format($produk->harga, 0, ',', '.') }}</h1>
                <div class="divider font-semibold divider-start">Detail</div>
                <p>{{$produk->deskripsi}}</p>
                <div class="divider"></div>
                <h2 class="text-xl font-black">{{$produk->toko}}</h2>
                <div class="flex flex-row gap-2">
                    <svg class="stroke-red-500 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                    </svg>
                    <p>{{$produk->lokasi}}</p>
                </div>
                <a href="https://wa.me/{{$produk->no_hp}}" class="btn btn-success mt-7">
                    <span>
                        <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                        </svg>
                        
                    </span>
                    Hubungi Penjual
                </a>
            </div>
        </div>
    </div>
    
</x-app-layout>