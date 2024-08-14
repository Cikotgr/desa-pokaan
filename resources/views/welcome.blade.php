<x-app-layout>
<div class="hero md:min-h-96 " style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);">
    <div class="hero-overlay bg-opacity-60"></div>
    <div class="hero-content text-neutral-content text-center">
    <div class="max-w-md ">
        <h1 class="mb-5 text-5xl font-bold">POK-DC</h1>
        <p class="mb-5">
        Pokaan Digital Center (POK-DC) adalah sebuah aplikasi berbasis web yang digunakan untuk memudahkan masyarakat dalam mengakses informasi dan layanan yang disediakan oleh Pemerintah Desa Pokaan.
        </p>
        <button class="btn btn-primary">Get Started</button>
    </div>
</div>
</div>
<div class="news p-4 md:p-28">
    <div class="grid grid-cols-1 md:grid-cols-6">
        <div class="flex flex-col p-4 col-span-4">
            <h1 class="font-bold flex text-3xl">Berita 
                <span class="flex items-center ms-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </span>
            </h1>
            <div class="divider"></div>
            @foreach ($berita as $item)
            <div class="card card-compact md:card-side bg-base-100 shadow-xl mt-6">
                <figure>
                <div class="h-36 w-full md:w-96 md:h-60" style="background-image: url('{{asset($item->gambar)}}'); background-size: cover; background-position: center"></div>
                </figure>
                <div class="card-body md:max-w-xl">
                <a class="font-bold link link-hover text-lg md:card-title">{{$item->judul}}</a>
                <p>{{ \Illuminate\Support\Str::limit($item->deskripsi, 500) }}</p>
                <div class="card-actions justify-end">
                    <div class="badge badge-primary badge-lg">
                        <span class="me-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                <path fill-rule="evenodd" d="M5.75 2a.75.75 0 0 1 .75.75V4h7V2.75a.75.75 0 0 1 1.5 0V4h.25A2.75 2.75 0 0 1 18 6.75v8.5A2.75 2.75 0 0 1 15.25 18H4.75A2.75 2.75 0 0 1 2 15.25v-8.5A2.75 2.75 0 0 1 4.75 4H5V2.75A.75.75 0 0 1 5.75 2Zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75Z" clip-rule="evenodd" />
                            </svg>                              
                        </svg>
                        </span>
                        {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}</div>
                </div>
                </div>
            </div>
            @endforeach
            
        </div>
        <div class="grid grid-cols-1 col-span-2">
            <div class="flex flex-col allert p-4 mx-auto">
                <h1 class="font-bold text-3xl flex">Pengumuman
                    <span class="flex items-center ms-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </span>
                </h1>
                <div class="divider"></div>
                @foreach ($pengumuman as $item)
                    <div class="card-compact bg-primary text-primary-content md:w-96 mt-4 ">
                        <div class="card-body">
                        <p class="font-bold text-lg">{{$item->judul}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            
            <div class="agenda p-6">
                <h1 class="font-bold text-3xl flex">Agenda
                    <span class="flex items-center ms-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </span>
                </h1>
                <div class="divider"></div>
                @foreach ($agenda as $item)
                <div class="mt-4">
                    <div class="badge badge-primary badge-outline">{{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}</div>
                    <div class="col-span-2">
                        <a class="font-bold">{{$item->judul}}</a>
                        <p><span>Lokasi : </span>{{$item->lokasi}}</p>
                    </div>                
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-6 pt-12">
      <div class="md:col-span-4 p-6">
        <h1 class="font-bold text-3xl flex">Galeri Foto
            <span class="flex items-center ms-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </span>
        </h1>
        <div class="divider"></div>
        <div class="max-w-5xl mx-auto py-8 px-4">
          <div class="grid grid-cols-1 md:grid-cols-3 gap-2 md:gap-1">
              <div class="relative">
                <div class=" h-64 bg-no-repeat bg-center bg-cover" style="background-image: url('https://img.daisyui.com/images/stock/photo-1494232410401-ad00d5433cfa.webp')"></div>
                  <div class="absolute bottom-0 bg-blue-800 bg-opacity-75 w-full text-white text-lg p-2">
                      TP PKK Lapeo
                  </div>
              </div>
              <div class="relative">
                <div class=" h-64 bg-no-repeat bg-center bg-cover" style="background-image: url('https://img.daisyui.com/images/stock/photo-1494232410401-ad00d5433cfa.webp')"></div>
                  <div class="absolute bottom-0 bg-blue-800 bg-opacity-75 w-full text-white text-lg p-2">
                      Lapeo Bahari Festival 2022
                  </div>
              </div>
              <div class="relative">
                <div class=" h-64 bg-no-repeat bg-center bg-cover" style="background-image: url('https://img.daisyui.com/images/stock/photo-1494232410401-ad00d5433cfa.webp')"></div>
                  <div class="absolute bottom-0 bg-blue-800 bg-opacity-75 w-full text-white text-lg p-2">
                      Makam K.H. Muhammad Tahir (Imam Lapeo)
                  </div>
              </div>
              <div class="relative">
                <div class=" h-64 bg-no-repeat bg-center bg-cover" style="background-image: url('https://img.daisyui.com/images/stock/photo-1494232410401-ad00d5433cfa.webp')"></div>
                  <div class="absolute bottom-0 bg-blue-800 bg-opacity-75 w-full text-white text-lg p-2">
                      Wisata Reliqi, Masjid Nuruttaubah Lapeo
                  </div>
              </div>
              <div class="relative">
                <div class=" h-64 bg-no-repeat bg-center bg-cover" style="background-image: url('https://img.daisyui.com/images/stock/photo-1494232410401-ad00d5433cfa.webp')"></div>
                  <div class="absolute bottom-0 bg-blue-800 bg-opacity-75 w-full text-white text-lg p-2">
                      Wisata Pantai Lapeo, Perahu Sandeq
                  </div>
              </div>
              <div class="relative">
                <div class=" h-64 bg-no-repeat bg-center bg-cover" style="background-image: url('https://img.daisyui.com/images/stock/photo-1494232410401-ad00d5433cfa.webp')"></div>
                  <div class="absolute bottom-0 bg-blue-800 bg-opacity-75 w-full text-white text-lg p-2">
                      Objek Wisata Kabupaten Polman, Desa Lapeo
                  </div>
              </div>
          </div>
      </div>
      </div>
      <div class="md:col-span-2 p-6">
        <h1 class="font-bold text-3xl flex">Perangkat Desa
            <span class="flex items-center ms-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </span>
        </h1>
        <div class="divider"></div>
        <div class="max-w-xs mt-12 bg-white shadow-lg rounded-lg overflow-hidden min-w-80 min-h-80 mx-auto">
          <div class="relative">
            <div id="carousel" class="flex transition-transform duration-500 ease-out">
                <div class="carousel-item w-full ">
                  <div class="card-carousel w-full">
                    <div class=" h-64 bg-no-repeat bg-center bg-cover" style="background-image: url({{asset('images/nopal-kopyah.jpg')}})"></div>
                    
                    <div class="p-4 text-center">
                      <p class="text-gray-800 font-bold">Nopal Kopyah</p>
                      <p class="text-gray-800">Kepala Pengayom janda</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item w-full ">
                  <div class="card-carousel">
                    <img class="w-full h-64 object-cover" src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" alt="Image 1">
                    <div class="p-4 text-center">
                      <p class="text-gray-800 font-bold">Sepatu sebelah</p>
                      <p class="text-gray-800">Bagian pengaman kaki</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item w-full ">
                  <div class="card-carousel">
                    <img class="w-full h-64 object-cover" src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" alt="Image 1">
                    <div class="p-4 text-center">
                      <p class="text-gray-800 font-bold">Sepatu sebelah</p>
                      <p class="text-gray-800">Bagian pengaman kaki</p>
                    </div>
                  </div>
                </div>
            </div>
            <button id="prev" class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-white bg-opacity-50 hover:bg-opacity-75 p-2">
                &#10094;
            </button>
            <button id="next" class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-white bg-opacity-50 hover:bg-opacity-75 p-2">
                &#10095;
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="produk pt-12">
        <h1 class="text-center text-3xl font-bold mb-6 flex items-center">Produk Inovatif
            <span class="flex items-center ms-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </span>
        </h1>
        <div class="divider"></div>
        <div class="flex">
            <div class="w-2/12 flex items-center">
                <div class="w-full text-right">
                    <button id="prev-produk">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div id="sliderContainer" class="w-10/12 overflow-hidden">
                <ul id="slider" class="flex w-full transition-margin duration-700">
                    <li class="p-5">
                        <div class="card bg-base-100 image-full w-96 shadow-xl">
                            <figure>
                            <img
                                src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                alt="Shoes" />
                            </figure>
                            <div class="card-body">
                                <h2 class="card-title">Shoes!</h2>
                                <p>If a dog chews shoes whose shoes does he choose?</p>
                                <div class="card-actions justify-end">
                                <button class="btn btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="p-5">
                        <div class="card bg-base-100 image-full w-96 shadow-xl">
                            <figure>
                            <img
                                src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                alt="Shoes" />
                            </figure>
                            <div class="card-body">
                                <h2 class="card-title">Shoes!</h2>
                                <p>If a dog chews shoes whose shoes does he choose?</p>
                                <div class="card-actions justify-end">
                                <button class="btn btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="p-5">
                        <div class="card bg-base-100 image-full w-96 shadow-xl">
                            <figure>
                            <img
                                src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                alt="Shoes" />
                            </figure>
                            <div class="card-body">
                                <h2 class="card-title">Shoes!</h2>
                                <p>If a dog chews shoes whose shoes does he choose?</p>
                                <div class="card-actions justify-end">
                                <button class="btn btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="p-5">
                        <div class="card bg-base-100 image-full w-96 shadow-xl">
                            <figure>
                            <img
                                src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                alt="Shoes" />
                            </figure>
                            <div class="card-body">
                                <h2 class="card-title">Shoes!</h2>
                                <p>If a dog chews shoes whose shoes does he choose?</p>
                                <div class="card-actions justify-end">
                                <button class="btn btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="p-5">
                        <div class="card bg-base-100 image-full w-96 shadow-xl">
                            <figure>
                            <img
                                src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                alt="Shoes" />
                            </figure>
                            <div class="card-body">
                                <h2 class="card-title">Shoes!</h2>
                                <p>If a dog chews shoes whose shoes does he choose?</p>
                                <div class="card-actions justify-end">
                                <button class="btn btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="w-2/12 flex items-center">
                <div class="w-full text-left">
                    <button id="next-produk"> 
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="advice pt-12">
        <div class="w-full max-w-md mx-auto">
            <h1 class="text-center text-3xl font-bold mb-6">Kritik dan Saran</h1>
            <div class="divider"></div>
            <form class=" px-8 pt-6 pb-8 mb-4">
                <div class="mb-4">
                    <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-lg" />
                </div>
                <div class="mb-4">
                    <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-lg" />
                </div>
                <div class="mb-6">
                    <textarea
                    placeholder="Bio"
                    class="textarea textarea-bordered textarea-lg w-full max-w-lg"></textarea>
                </div>
                <div class="flex items-center justify-center">
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-6 rounded-full focus:outline-none focus:shadow-outline" type="button">
                        Kirim
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="region ">
        <h1 class="font-bold text-2xl">Wilayah Desa Pokaan</h1>
        <div class="divider"></div>
        <div class="grid grid-cols-1 md:grid-cols-3 ">
            <div class="col-span-2">
                <div class="map-responsive">
                    <iframe class="w-96 h-64 md:w-full md:h-96" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15816.55914467468!2d114.04790670121338!3d-7.668117161155159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd72c0504e8bc83%3A0x372bc48d824fc8db!2sPokaan%2C%20Kapongan%2C%20Situbondo%20Regency%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1721983303932!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="">
                <div class="w-full max-w-lg mx-auto p-6">
                    <div class="grid grid-cols-1">
                        <div class="grid grid-cols-5">
                            <span class="font-bold text-sm md:text-base col-span-2">Kode PUM</span>
                            <span>:</span>
                            <span class="text-sm md:text-base col-span-2">7604022009</span>
                        </div>
                        <div class="grid grid-cols-5">
                            <span class="text-sm md:text-base font-bold col-span-2">Tahun Pembentukan</span>
                            <span >:</span>
                            <span class="text-sm md:text-base col-span-2"></span>
                        </div>
                        <div class="grid grid-cols-5">
                            <span class="text-sm md:text-base font-bold col-span-2">Dasar Hukum</span>
                            <span >:</span>
                            <span class="text-sm md:text-base col-span-2"></span>
                        </div>
                        <div class="grid grid-cols-5">
                            <span class="text-sm md:text-base font-bold col-span-2">Tipologi</span>
                            <span >:</span>
                            <span class="text-sm md:text-base col-span-2">SWASEMBADA</span>
                        </div>
                        <div class="grid grid-cols-5">
                            <span class="text-sm md:text-base font-bold col-span-2">Klasifikasi</span>
                            <span >:</span>
                            <span class="text-sm md:text-base col-span-2">DESA MANDIRI</span>
                        </div>
                        <div class="grid grid-cols-5">
                            <span class="text-sm md:text-base font-bold col-span-2">Kategori</span>
                            <span >:</span>
                            <span class="text-sm md:text-base col-span-2">FORMAL</span>
                        </div>
                        <div class="grid grid-cols-5">
                            <span class="text-sm md:text-base font-bold col-span-2">Luas Wilayah</span>
                            <span >:</span>
                            <span class="text-sm md:text-base col-span-2">2.192,2 Ha</span>
                        </div>
                        <div class="grid grid-cols-5">
                            <span class="text-sm md:text-base font-bold col-span-2">Batas Sebelah Utara</span>
                            <span >:</span>
                            <span class="text-sm md:text-base col-span-2">Desa Kenje</span>
                        </div>
                        <div class="grid grid-cols-5">
                            <span class="text-sm md:text-base font-bold col-span-2">Batas Sebelah Selatan</span>
                            <span >:</span>
                            <span class="text-sm md:text-base col-span-2">Desa Laliko</span>
                        </div>
                        <div class="grid grid-cols-5">
                            <span class="text-sm md:text-base font-bold col-span-2">Batas Sebelah Timur</span>
                            <span >:</span>
                            <span class="text-sm md:text-base col-span-2">Selat Makassar</span>
                        </div>
                        <div class="grid grid-cols-5">
                            <span class="text-sm md:text-base font-bold col-span-2">Batas Sebelah Barat</span>
                            <span >:</span>
                            <span class="text-sm md:text-base col-span-2">Desa Suruang</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    const carousel = document.getElementById('carousel');
    const items = carousel.querySelectorAll('.carousel-item');
    let currentIndex = 0;
      const intervalTime = 3000; // Time in milliseconds for auto-scroll

    document.getElementById('next').addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % items.length;
        updateCarousel();
    });

    document.getElementById('prev').addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + items.length) % items.length;
        updateCarousel();
    });

    function updateCarousel() {
          carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

      // Auto-scroll functionality
    setInterval(() => {
        currentIndex = (currentIndex + 1) % items.length;
        updateCarousel();
    }, intervalTime);
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let sliderContainer = document.getElementById('sliderContainer');
            let slider = document.getElementById('slider');
            let cards = slider.getElementsByTagName('li');
    
            let elemenToShow = 3;
            let sliderContainerWidth = sliderContainer.clientWidth;
            console.log(sliderContainerWidth);
            let cardWidth = sliderContainerWidth / elemenToShow;
            console.log(cardWidth);
            slider.style.width = cards.length * cardWidth + 'px';
    
            function prev() {
            let currentMarginLeft = parseInt(slider.style.marginLeft || 0, 10);
                if (currentMarginLeft + cardWidth > 0) {
                    slider.style.marginLeft = -(cards.length - elemenToShow) * cardWidth + 'px';
                } else {
                    slider.style.marginLeft = (currentMarginLeft + cardWidth) + 'px';
                }
            }

            function next() {
                let currentMarginLeft = parseInt(slider.style.marginLeft || 0, 10);
                if (Math.abs(currentMarginLeft - cardWidth) >= (cards.length - elemenToShow) * cardWidth) {
                    slider.style.marginLeft = '0px';
                } else {
                    slider.style.marginLeft = (currentMarginLeft - cardWidth) + 'px';
                }
            }
    
            // Attach functions to buttons or other elements as needed
            document.getElementById('prev-produk').addEventListener('click', prev);
            document.getElementById('next-produk').addEventListener('click', next);
        });
    </script>
    
</div>

</x-app-layout>