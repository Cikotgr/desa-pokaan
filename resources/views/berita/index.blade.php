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
                    {{$jenis}}
                </a>
            </li>
            </ul>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-6">
            <div class="main-news flex flex-col p-4 col-span-4">
                <h1 class="font-bold text-2xl">{{$jenis}}</h1>
                <div class="divider"></div>
                @foreach ($berita as $item)
                <div class="card card-compact md:card-side bg-base-100 shadow-xl mt-6">
                    <figure>
                        <div class="h-36 w-full md:w-96 md:h-60" style="background-image: url('{{asset($item->gambar)}}'); background-size: cover; background-position: center"></div>
                    </figure>
                    <div class="card-body md:max-w-xl">
                    <a href="{{route('berita.view', $item->id)}}" class="font-bold link link-hover text-lg md:card-title">{{$item->judul}}</a>
                    <p>{{ \Illuminate\Support\Str::limit($item->deskripsi, 500) }}</p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-primary badge-lg">
                            <span class="me-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                            </svg>
                            </span>
                            {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}</div>
                    </div>
                    </div>
                </div>
                @endforeach
                <div class="mt-6">
                    {{$berita->links('vendor.pagination.tailwind')}}
                </div>
            </div>
            <div class="side-news grid grid-cols-1 col-span-2">
                <div class="p-6 md:col-span-4">
                    <h1 class="font-bold text-2xl">{{$jenis}} terkini</h1>
                    <div class="divider"></div>
                    <div class="card bg-base-100 shadow-xl">
                        <div class="card-body">
                        <div class="grid grid-cols-1">
                            @foreach ($latest as $item)
                                <div class="flex flex-row mt-2">
                                    <figure>
                                        <div class="h-36 w-64" style="background-image: url('{{asset($item->gambar)}}'); background-size: cover; background-position: center"></div>
                                    </figure>
                                    <a href="{{route('berita.view', $item->id)}}" class="font-bold w-64 text-base mt-4 ms-2 link link-hover">{{$item->judul}}</a>
                                </div>
                            @endforeach
                        </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

    </div>
    
</x-app-layout>