<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <title>{{ config('app.name', 'POK-DC') }}</title>

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
            <svg
              width="50"
              height="50"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
              fill-rule="evenodd"
              clip-rule="evenodd"
              class="fill-current">
              <path
                d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z"></path>
            </svg>
            <p>
              ACME Industries Ltd.
              <br />
              Providing reliable tech since 1992
            </p>
          </aside>
          <nav>
            <h6 class="footer-title">Services</h6>
            <a class="link link-hover">Branding</a>
            <a class="link link-hover">Design</a>
            <a class="link link-hover">Marketing</a>
            <a class="link link-hover">Advertisement</a>
          </nav>
          <nav>
            <h6 class="footer-title">Company</h6>
            <a class="link link-hover">About us</a>
            <a class="link link-hover">Contact</a>
            <a class="link link-hover">Jobs</a>
            <a class="link link-hover">Press kit</a>
          </nav>
          <nav>
            <h6 class="footer-title">Legal</h6>
            <a class="link link-hover">Terms of use</a>
            <a class="link link-hover">Privacy policy</a>
            <a class="link link-hover">Cookie policy</a>
          </nav>
        </footer>
        <footer class="footer bg-neutral text-neutral-content items-center p-4">
          <aside class="grid-flow-col items-center">
            <p>Copyright © KKN 188 Universitas Jember</p>
          </aside>
        </footer>
    </body>
</html>
