<x-app-layout>
    <div class="px-4 pt-14 md:px-28">
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
                        <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 0 1 3.5 2h9A1.5 1.5 0 0 1 14 3.5v11.75A2.75 2.75 0 0 0 16.75 18h-12A2.75 2.75 0 0 1 2 15.25V3.5Zm3.75 7a.75.75 0 0 0 0 1.5h4.5a.75.75 0 0 0 0-1.5h-4.5Zm0 3a.75.75 0 0 0 0 1.5h4.5a.75.75 0 0 0 0-1.5h-4.5ZM5 5.75A.75.75 0 0 1 5.75 5h4.5a.75.75 0 0 1 .75.75v2.5a.75.75 0 0 1-.75.75h-4.5A.75.75 0 0 1 5 8.25v-2.5Z" clip-rule="evenodd" />
                        <path d="M16.5 6.5h-1v8.75a1.25 1.25 0 1 0 2.5 0V8a1.5 1.5 0 0 0-1.5-1.5Z" />
                    </svg>
                    Galeri
                </a>
            </li>
            </ul>
        </div>

        
        <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-2 md:gap-6">
            @foreach ($galeri as $item)
            <div class="relative">
                <div class=" h-64 bg-no-repeat bg-center bg-cover" style="background-image: url('{{asset($item->foto)}}')"></div>
                <div class="absolute bottom-0 bg-blue-800 bg-opacity-75 w-full text-white text-lg p-2">
                    {{$item->judul}}
                </div>
            </div>
            @endforeach    
        </div>
        <div class="my-12">
            {{$galeri->links()}}
        </div>
        
    </div>
</x-app-layout>