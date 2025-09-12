@extends('layouts.layout_user')



@section('user_content')
    <section class="max-w-screen-lg
        mx-auto flex flex-col pt-36 pb-20 px-4 max-md:pt-28 sm:px-10">
        <div class="flex flex-col gap-8 ">
            {{-- ? judul --}}
            <div class="flex flex-col gap-4">
                <h5
                    class="text-lg flex gap-3 font-light capitalize text-primary max-xl:text-base max-md:text-sm max-md:gap-1">
                    <a href="{{ route('user.blog') }}" class="text-primary">
                        blog
                    </a>
                    <span class="text-textPrimary">»</span>
                    <span class="text-textPrimary">lomba 12 september</span>
                </h5>
                <h1 class="capitalize font-semibold text-4xl mb-2 max-xl:text-3xl max-lg:mb-1">
                    Apa itu Prograssive Web Apps?
                </h1>

                <div class="flex gap-5 items-center mt-2 max-md:mt-0">
                    <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-primary max-md:w-10 max-md:h-10">
                        <img src="{{ asset('uploads/blogs/1756540856_Draw-Toothless-Step-24.jpg') }}" alt=""
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                    </div>
                    <div class="flex items-center gap-2">
                        <h5 class="font-semibold capitalize text-textPrimary">{{ $blog->user->name }}</h5>
                        <span class="text-textSecondary">•</span>
                        <p class="text-textSecondary text-sm font-light">{{ Carbon\Carbon::parse($blog->tanggal_post)->format('d F Y') }}</p>
                    </div>
                </div>
            </div>

            {{-- ? isi --}}
            <div class="flex flex-col gap-8 max-md:gap-6">
                <img src="{{ asset('uploads/blogs/1756540903_IMG_3472.jpg') }}"
                    alt=""
                    class="block object-cover rounded-2xl w-full transition-transform duration-300 ease-in-out group-hover:scale-110">

                <p class="text-textSecondary font-light text-lg/9 max-md:text-base">Kecepatan dalam pembuatan suatu produk
                    merupakan hal penting untuk bersaing di zaman yang serba canggih seperti sekarang ini. Tak terkecuali
                    ketika kita ingin membuat sebuah aplikasi yang tidak hanya dapat diakses melalui smartphone. Namun, bisa
                    terakses juga di browser. Tentunya kita membutuhkan teknologi yang dapat menangani hal tersebut maka
                    dari itu munculah PWA Progressive Web Apps</p>

                <h1 class="capitalize font-semibold text-4xl max-xl:text-3xl">apa itu pwa</h1>

                <img src="{{ asset('uploads/blogs/1757298074_8820ff7553baaf595822b58c5590b604.jpg') }}" alt=""
                    class="block object-cover rounded-2xl w-full transition-transform duration-300 ease-in-out group-hover:scale-110">

                <p class="text-textSecondary font-light text-lg/9 max-md:text-base">PWA (Progressive Web Apps) adalah sebuah
                    aplikasi yang dibangun dengan menggunakan teknologi web namun berjalan selayaknya aplikasi mobile.
                    Dengan menggabungkan kelebihan dari website biasa dan native apps terciptalah PWA. Lalu, apa perbedaan
                    dari Web App, Aplikasi mobile, dan PWA?</p>

                <h1 class="capitalize font-semibold text-4xl max-xl:text-3xl">web app</h1>

                <ul class="list-disc list-inside text-textSecondary font-light text-lg/9 max-md:text-base">
                    <li>Dibuat dengan mengandalkan browser dan bersifat cross-platform</li>
                    <li>Update berjalan otomatis</li>
                    <li>Hanya berjalan dalam kondisi online</li>
                    <li>Hanya berjalan dalam kondisi online</li>
                    <li>Biaya development murah</li>
                </ul>


                {{-- ? media social --}}
                <div class="flex gap-4 items-center py-8 border-y max-md:py-6 border-y-[#E4E6EE]">
                    <h1 class="text-textPrimary text-2xl font-semibold capitalize">share:</h1>
                    <div class="flex gap-6 max-md:gap-4">
                        <a href="#"
                            class="w-10 h-10 bg-primary text-white rounded-full flex items-center justify-center transition-colors duration-300 hover:bg-red-700">
                            <i class="ri-instagram-fill text-xl"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-primary text-white rounded-full flex items-center justify-center transition-colors duration-300 hover:bg-red-700">
                            <i class="ri-tiktok-fill text-xl"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-primary text-white rounded-full flex items-center justify-center transition-colors duration-300 hover:bg-red-700">
                            <i class="ri-twitter-x-fill text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-screen-3xl mx-auto flex flex-col pb-20 px-4 sm:px-10">
        <div class="flex flex-col gap-12 max-md:gap-8">
            <div class="flex justify-between items-center">
                <h1 class="text-textPrimary text-4xl max-lg:text-3xl max-md:text-2xl capitalize font-bold leading-snug">
                    topic terbaru</h1>

                <a href="{{ route('user.blog') }}"
                    class="font-medium capitalize rounded-xl bg-primary text-bg1 max-lg:py-2 max-lg:px-6 py-3 px-8 text-base max-sm:py-2 max-sm:px-5 max-sm:text-sm hover:bg-red-700 transition-colors duration-300 cursor-pointer">
                    view all
                </a>
            </div>

            {{-- ? card --}}
            <div class="grid grid-cols-3 gap-10 max-lg:grid-cols-2 max-sm:grid-cols-1 max-md:gap-6 ">
                {{-- ? card loop --}}
                @for ($i = 0; $i < 3; $i++)
                <div data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                    <a href="#"
                        class="flex flex-col h-full gap-7 max-md:gap-4 rounded-xl p-8 bg-bg1 shadow-[0_8px_30px_rgb(0,0,0,0.04)] group transition-all duration-300 ease-in-out hover:-translate-y-2 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] cursor-pointer">
                        {{-- ? image --}}
                        <div class="w-full overflow-hidden rounded-xl">
                            <img src="{{ asset('uploads/blogs/1756540856_Draw-Toothless-Step-24.jpg') }}" alt=""
                                class="w-full h-[300px] object-cover object-center rounded-xl max-lg:h-[200px] max-md:h-[200px] transition-all duration-300 ease-in-out group-hover:scale-110">
                        </div>

                        {{-- ? deskripsi --}}
                        <div class="flex flex-col gap-3 max-md:gap-2">
                            <h5 class="text-primary text-base font-semibold uppercase">design</h5>
                            <h1
                                class="text-textPrimary font-semibold text-2xl line-clamp-2 transition-colors duration-300 group-hover:underline">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, aliquid!
                            </h1>
                            <p class="text-textSecondary text-base leading-relaxed line-clamp-3 font-light">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem numquam earum
                                consectetur,
                                iure aliquid dicta at obcaecati corporis minus pariatur?
                            </p>

                            {{-- ? penulis --}}
                            <div class="flex gap-3 items-center mt-6 max-md:mt-4">
                                <div class="w-12 h-12 rounded-full overflow-hidden">
                                    <img src="{{ asset('uploads/blogs/1756540856_Draw-Toothless-Step-24.jpg') }}"
                                        alt=""
                                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                                </div>
                                <div class="flex flex-col">
                                    <h5 class="font-semibold capitalize text-textPrimary">irul</h5>
                                    <p class="text-textSecondary text-sm font-light">05-01-99</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endfor

            </div>

        </div>
    </section>
@endsection
