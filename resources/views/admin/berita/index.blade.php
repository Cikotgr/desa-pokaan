<x-admin-layout>
    <div class="w-full max-w-full mx-auto px-12 my-8 md:my-24">
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
                        Berita
                    </a>
                </li>
                <li>
                    <a href="">{{$jenis == 'berita' ? 'Berita' : 'Pengumuman'}}</a>
                </li>
            </ul>
        </div>
        <div class="w-full flex justify-start mt-8 md:justify-end mb-8">
            <a href="{{route('admin.berita.add')}}" class="btn btn-primary btn-sm">Tambah Berita</a>
        </div>
        <div class="overflow-x-auto mt-8">
            
            <table class="table">
                <!-- head -->
                <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Gambar</th>
                    <th>Deskripsi</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>   
                </thead>
                <tbody>
                    @foreach ($berita as $item)
                        <tr>
                            <th>{{$item->number}}</th>
                            <td class="min-w-36">{{$item->judul}}</td>
                            <td>
                                <button class="btn h-24" onclick="modal_{{$item->id}}.showModal()">
                                    <div class="w-16 h-10 md:w-28 md:h-16" style="background-image: url('{{asset($item->gambar)}}'); background-size: cover; background-position: center"></div>
                                </button>
                            </td>
                            <td class="min-w-96">{{ \Illuminate\Support\Str::limit($item->deskripsi, 500) }}</td>
                            <td class="min-w-40">{{$item->tanggal}}</td>
                            <td>
                                <form action="{{route('admin.berita.show',$item->id)}}">
                                    
                                    <button class="btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        </svg>
                                        
                                    </button>       
                                </form>
                                <form action="{{ route('admin.berita.delete',$item->id) }}">
                                    @csrf
                                    <button class="btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                            </svg>
                                    </button>       
                                </form>                        
                            </td>
                        </tr>
                        <dialog id="modal_{{$item->id}}" class="modal">
                            <div class="modal-box">
                                <div class="w-full h-56" style="background-image: url('{{asset($item->gambar)}}') ; background-position: center; background-size: cover"></div>
                                <div class="modal-action">
                                <form method="dialog">
                                    <!-- if there is a button in form, it will close the modal -->
                                    <button class="btn">Tutup</button>
                                </form>
                                </div>
                            </div>
                        </dialog>
                    @endforeach
                </tbody>
            </table>
            
        </div>
        <div class="mt-12">
            {{$berita->links('vendor.pagination.tailwind')}}
        </div>
    </div>
</x-admin-layout>