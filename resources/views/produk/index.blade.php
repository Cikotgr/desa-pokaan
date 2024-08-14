<x-app-layout>
    <div class="px-4 py-14 md:px-12 w-full">
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
                    <a>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                            <path fill-rule="evenodd" d="M6 5v1H4.667a1.75 1.75 0 0 0-1.743 1.598l-.826 9.5A1.75 1.75 0 0 0 3.84 19H16.16a1.75 1.75 0 0 0 1.743-1.902l-.826-9.5A1.75 1.75 0 0 0 15.333 6H14V5a4 4 0 0 0-8 0Zm4-2.5A2.5 2.5 0 0 0 7.5 5v1h5V5A2.5 2.5 0 0 0 10 2.5ZM7.5 10a2.5 2.5 0 0 0 5 0V8.75a.75.75 0 0 1 1.5 0V10a4 4 0 0 1-8 0V8.75a.75.75 0 0 1 1.5 0V10Z" clip-rule="evenodd" />
                        </svg> 
                        Produk
                    </a>
                </li>
            </ul>
        </div>
        <div class="w-full max-w-7xl mx-auto pt-6">
            <h1 class="font-bold text-2xl md:text-center">Produk Inovatif</h1>
            <div class="divider"></div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                @foreach ($produk as $item)
                <div class="card-compact bg-base-100 w-44 md:w-72  shadow-xl">
                    <figure>
                    <img
                        src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                        alt="Shoes" />
                    </figure>
                    <div class="card-body h-56">
                    <h2 class="card-title text-base md:text-xl">{{ \Illuminate\Support\Str::limit($item->nama, 50) }}</h2>
                    <p>{{$item->harga}}</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Beli Sekarang</button>
                    </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
</x-app-layout>