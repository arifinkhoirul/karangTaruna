@extends('layouts.layout_user')

@section('user_content')
    {{-- ? image slider --}}
    <section class="max-w-screen-3xl mx-auto flex flex-col pt-32 px-4 max-md:pt-28 sm:px-10">
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            {{-- ? Carousel wrapper --}}
            <div class="relative h-[600px] overflow-hidden rounded-lg max-2xl:h-[400px] max-md:h-[220px] ">
                {{-- ? looping --}}
                @for ($i = 0; $i < 5; $i++)
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('uploads/banner/Frame 3.jpg') }}"
                            class="block w-full h-full object-cover object-center" alt="...">
                    </div>
                @endfor
            </div>
            {{-- ? Slider indicators --}}
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
            </div>
            {{-- ? Slider controls --}}
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-primary/50 group-hover:bg-white/50 dark:group-hover:bg-primary/80 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-primary group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-bg1 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-primary/50 group-hover:bg-white/50 dark:group-hover:bg-primary/80 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-primary group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-bg1 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </section>


    {{-- ? visi & misi --}}
    <section class="max-w-screen-3xl mx-auto flex flex-col py-20 px-4 max-md:py-10 sm:px-10">
        <div class="grid grid-cols-2 gap-12 max-sm:grid-cols-1 max-md:gap-8">
            {{-- ? gambar --}}
            <div class="relative bg-cover bg-center rounded-lg group h-[400px] max-sm:h-[150px]"
                style="background-image: url('{{ asset('uploads/blogs/1756540856_Draw-Toothless-Step-24.jpg') }}')">
                <div
                    class="absolute inset-0 bg-primary/50 group-hover:bg-transparent transition-all duration-500 ease-in-out rounded-lg">
                </div>
            </div>
            {{-- ? text visi misi --}}
            <div class="flex flex-col gap-5">
                <div class="flex flex-col gap-6">
                    <h1 class="text-textPrimary text-4xl max-lg:text-3xl capitalize font-bold leading-snug">
                        visi & misi</h1>
                    <div class="h-1 w-20 bg-primary rounded-full"></div>
                </div>
                <p class="text-textSecondary font-light text-lg max-lg:text-base leading-relaxed"><span
                        class="text-textPrimary font-bold">Visi</span> menjadi wadah generasi
                    muda yang kreatif, berdaya, dan berakhlak mulia untuk membangun masyarakat sejahtera. <span
                        class="text-textPrimary font-bold">Misi</span> menumbuhkan kepedulian sosial, mengembangkan potensi
                    pemuda melalui pendidikan dan kewirausahaan, serta mendorong kreativitas di bidang seni, olahraga, dan
                    lingkungan.</p>
            </div>
        </div>
    </section>

    {{-- ? we need sponsor --}}
    <section class="bg-primary">
        <div class="max-w-screen-3xl mx-auto flex flex-col py-20 px-4 max-md:py-10 sm:px-10">
            <div class="flex justify-between gap-6 items-center text-bg1 max-md:flex-col max-md:justify-center">
                {{-- ? box 1 --}}
                <div class="flex flex-col gap-4">
                    <h1
                        class="text-4xl max-lg:text-3xl max-md:text-2xl capitalize font-bold leading-snug max-md:text-center">
                        We Need Sponsors!</h1>
                    <p class="text-lg font-light max-lg:text-base leading-relaxed max-md:text-center">Jadilah
                        sponsor kami dan ikut berkontribusi menciptakan dampak positif</p>
                </div>
                {{-- ? box 2 --}}
                <div>
                    <a href="#"
                        class="px-6 py-3 text-xs lg:px-8 lg:py-4 md:text-sm
                        text-primary border border-primary bg-bg1
                        hover:bg-primary hover:text-bg1 hover:border-bg1 shadow-lg hover:scale-105
                        transition-all duration-300 ease-in-out
                        rounded-lg font-medium tracking-wide cursor-pointer
                        focus:ring-2 focus:ring-primary/50">Kontak
                        disini</a>
                </div>
            </div>
        </div>
    </section>

    {{-- ? sponsor --}}
    <section class="max-w-screen-3xl mx-auto flex flex-col py-20 px-4 max-md:py-10 sm:px-10">
        <div class="flex flex-col gap-4">
            <h1
                class="text-4xl max-lg:text-3xl max-md:text-2xl capitalize font-bold leading-snug text-center text-[#E4E6EE]">
                sponsor</h1>
            {{-- ? container sponsor --}}
            <div class="relative w-full overflow-hidden bg-bg1 py-3">
                <!-- Track -->
                <div class="flex  gap-10 w-max animate-scroll">
                    <!-- Set 1 -->
                    <img src="{{ asset('sponsor/logo_1.png') }}" class="h-30 w-auto" alt="sponsor">
                    <img src="{{ asset('sponsor/logo_2.png') }}" class="h-30 w-auto" alt="sponsor">
                    <img src="{{ asset('sponsor/logo_3.png') }}" class="h-30 w-auto" alt="sponsor">
                    <img src="{{ asset('sponsor/logo_4.png') }}" class="h-30 w-auto" alt="sponsor">
                    <img src="{{ asset('sponsor/logo_5.png') }}" class="h-30 w-auto" alt="sponsor">
                    <img src="{{ asset('sponsor/logo_6.png') }}" class="h-30 w-auto" alt="sponsor">

                    <!-- Set 2 (copy biar mulus) -->
                    <img src="{{ asset('sponsor/logo_1.png') }}" class="h-30 w-auto" alt="sponsor">
                    <img src="{{ asset('sponsor/logo_2.png') }}" class="h-30 w-auto" alt="sponsor">
                    <img src="{{ asset('sponsor/logo_3.png') }}" class="h-30 w-auto" alt="sponsor">
                    <img src="{{ asset('sponsor/logo_4.png') }}" class="h-30 w-auto" alt="sponsor">
                    <img src="{{ asset('sponsor/logo_5.png') }}" class="h-30 w-auto" alt="sponsor">
                    <img src="{{ asset('sponsor/logo_6.png') }}" class="h-30 w-auto" alt="sponsor">
                </div>
            </div>


        </div>
    </section>

    {{-- ? baca blog --}}
    <main class="max-w-screen-3xl mx-auto flex flex-col pb-20 px-4 max-md:pb-10 sm:px-10">
        <div class="flex flex-col gap-12 max-lg:gap-10 max-md:gap-8">
            {{-- ? baca blog --}}
            <div class="flex flex-col gap-3 max-md:gap-2">
                <h1 class="text-textPrimary text-4xl max-lg:text-3xl capitalize font-bold leading-snug">
                    baca blog</h1>
                <div class="h-1 w-20 bg-primary rounded-full"></div>
            </div>

            {{-- ? card --}}
            <div class="grid grid-cols-3 gap-10 max-lg:grid-cols-2 max-sm:grid-cols-1 max-md:gap-6 ">
                {{-- ? card 1 --}}
                @foreach ($blogs as $blog)
                    <a href="#"
                        class="flex flex-col gap-7 max-md:gap-4 rounded-xl p-8 bg-bg1 shadow-[0_8px_30px_rgb(0,0,0,0.04)] group transition-all duration-300 ease-in-out hover:-translate-y-2 hover:shadow-lg cursor-pointer">
                        {{-- ? image --}}
                        <div class="w-full overflow-hidden rounded-xl">
                            <img src="{{ asset($blog->image) }}" alt=""
                                class="w-full h-[300px] object-cover object-center rounded-xl max-lg:h-[200px] max-md:h-[200px] transition-all duration-300 ease-in-out group-hover:scale-110">
                        </div>

                        {{-- ? deskripsi --}}
                        <div class="flex flex-col gap-3 max-md:gap-2">
                            <h5 class="text-primary text-base font-semibold uppercase">design</h5>
                            <h1
                                class="text-textPrimary font-semibold text-2xl line-clamp-2 transition-colors duration-300 group-hover:underline">
                                {{ $blog->judul }}
                            </h1>
                            <p class="text-textSecondary text-base leading-relaxed line-clamp-3 font-light">
                                {{ $blog->narasi_blog }}
                            </p>
                            <div class="flex gap-3 items-center mt-6 max-md:mt-4">
                                <div class="w-12 h-12 rounded-full overflow-hidden">
                                    <img src="{{ asset('uploads/blogs/1756540856_Draw-Toothless-Step-24.jpg') }}"
                                        alt=""
                                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                                </div>
                                <div class="flex flex-col">
                                    <h5 class="font-semibold capitalize text-textPrimary">{{ $blog->user->name }}</h5>
                                    <p class="text-textSecondary text-sm font-light">{{ $blog->tanggal_post }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>


            {{-- ? button view more --}}
            <div class="text-center ">
                <a href="{{ route('user.blog') }}"
                    class=" animate-bounce inline-block px-6 py-3 mt-4 capitalize text-xs lg:px-8 lg:py-4 md:text-sm
                        text-bg1 border border-primary bg-primary
                        hover:bg-red-700 hover:border-red-700 hover:text-bg1 hover:scale-105
                        transition-all duration-300 ease-in-out
                        rounded-lg font-medium tracking-wide cursor-pointer
                        focus:ring-2 focus:ring-primary/50 shadow-[0_8px_30px_rgb(0,0,0,0.12)]">lihat
                    semua</a>
            </div>

        </div>

    </main>
@endsection
