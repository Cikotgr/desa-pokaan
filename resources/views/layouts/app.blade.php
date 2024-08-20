<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'POK-DC') }}</title>
        <link rel="icon" href="{{asset('images/logo-situbondo.png')}}" type="image/icon type">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
          <div class="drawer">
            <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content flex flex-col">
              <!-- Navbar -->
              <div class="navbar bg-base-300 w-full">
                <div class="flex-none lg:hidden">
                  <label for="my-drawer-3" aria-label="open sidebar" class="btn btn-square btn-ghost">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      class="inline-block h-6 w-6 stroke-current">
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                  </label>
                </div>
                <div class="mx-2 flex-1 px-4">
                  <img class="max-w-10" src="{{asset('images/logo-situbondo.png')}}" alt="">
                  <div class="name ms-4">
                      <h1 class="text-2xl font-bold">Desa Pokaan</h1>
                      <p class="text-sm">Kabupaten Situbondo</p>
                  </div>
                </div>
                <div class="hidden flex-none lg:block">
                  <ul class="menu menu-horizontal">
                    <!-- Navbar menu content here -->
                    <li><a class="font-bold text-lg {{Route::is('landing') ? 'active' : ''}}" href="{{route('landing')}}">Beranda</a></li>
                    <li><a class="font-bold text-lg">Profil Desa</a></li>
                    <li>
                      <details>
                        <summary class="font-bold text-lg">Informasi</summary>
                        <ul class="bg-base-100 rounded-t-none p-2">
                          <li><a href="{{route('berita.index')}}" class="{{Route::is('berita.index') ? 'active' : ''}}">Berita</a></li>
                          <li><a href="{{route('berita.pengumuman')}}" class="{{Route::is('berita.pengumuman') ? 'active' : ''}}">Pengumuman</a></li>
                          <li><a href="{{route('berita.agenda')}}" class="{{Route::is('berita.agenda') ? 'active' : ''}}">Agenda</a></li>
                          
                        </ul>
                      </details>
                    </li>
                  <li><a href="{{route('produk.index')}}" class="font-bold text-lg {{Route::is('produk.index') ? 'active' : ''}}">Produk</a></li>
                  </ul>
                </div>
              </div>
              <!-- Page content here -->
              {{ $slot }}
            </div>
            <div class="drawer-side">
              <label for="my-drawer-3" aria-label="close sidebar" class="drawer-overlay"></label>
              <ul class="menu bg-base-200 min-h-full w-80 p-4">
                <!-- Sidebar content here -->
                <li><a class="font-bold text-lg" href="{{route('landing')}}">Beranda</a></li>
                <li><a class="font-bold text-lg">Profil Desa</a></li>
                <li>
                  <details>
                    <summary class="font-bold text-lg">Informasi</summary>
                        <ul class="bg-base-100 rounded-t-none p-2">
                          <li><a href="{{route('berita.index')}}">Berita</a></li>
                          <li><a href="{{route('berita.pengumuman')}}" class="{{Route::is('berita.pengumuman') ? 'active' : ''}}">Pengumuman</a></li>
                          <li><a href="{{route('berita.agenda')}}" class="{{Route::is('berita.agenda') ? 'active' : ''}}">Agenda</a></li>
                      </ul>
                  </details>
                </li>
                <li><a href="{{route('produk.index')}}" class="font-bold text-lg {{Route::is('produk.index') ? 'active' : ''}}">Produk</a></li>
              </ul>
            </div>
          </div>        
        
        <footer class="footer bg-base-200 text-base-content p-10">
          <aside>
            
            <p>
              Website desa Pokaan, Kecamatan Kapongan, Kabupaten Situbondo
              <br />
              Website ini digunakan untuk berbagi informasi serta potensi desa Pokaan dikelola oleh perangkat desa setempat
            </p>
          </aside>
          <nav>
            <h6 class="footer-title">Profil Desa</h6>
            <a class="link link-hover">Tentang kami</a>
            <a class="link link-hover">Visi Misi</a>
            <a class="link link-hover">Sejarah Desa</a>
            <a class="link link-hover">Geografis Desa</a>
          </nav>
          <nav>
            <h6 class="footer-title">Informasi</h6>
            <a class="link link-hover">Berita</a>
            <a class="link link-hover">Pengumuman</a>
            <a class="link link-hover">Agenda</a>
          </nav>
          <nav>
            <h6 class="footer-title">Pemerintahan</h6>
            <a class="link link-hover">Struktur Organisasi</a>
            <a class="link link-hover">Perangkat desa</a>
            <a class="link link-hover">Lembaga Desa</a>
          </nav>
        </footer>
        <footer class="footer bg-neutral text-neutral-content items-center p-4">
          <aside class="grid-flow-col items-center">
            <p>Copyright © KKN 188 Universitas Jember</p>
          </aside>
        </footer>
    </body>
</html>
