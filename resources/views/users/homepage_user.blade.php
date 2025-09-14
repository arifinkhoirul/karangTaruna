@extends('layouts.layout_user')

@section('user_content')
    {{-- ? image slider --}}
    <section class="max-w-screen-3xl mx-auto flex flex-col pt-32 px-4 max-md:pt-28 sm:px-10">
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            {{-- ? Carousel wrapper --}}
            <div class="relative h-[600px] overflow-hidden rounded-lg max-2xl:h-[400px] max-md:h-[220px] ">
                {{-- ? looping --}}
                @foreach ($mainImages as $mainImage)
                    @if ($mainImage->status == 'aktif')
                        <div class="hidden duration-700 ease-in-out animate__animated animate__fadeIn" data-carousel-item>
                            <img src="{{ asset($mainImage->image) }}" class="block w-full h-full object-cover object-center"
                                alt="...">
                        </div>
                    @endif
                @endforeach
            </div>

            {{-- ? Slider indicators --}}
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                @foreach ($mainImages as $mainImage)
                    @if ($mainImage->status == 'aktif')
                        <button type="button" class="w-3 h-3 rounded-full"
                            aria-current="{{ $loop->first ? 'true' : 'false' }}" aria-label="Slide {{ $loop->iteration }}"
                            data-carousel-slide-to="{{ $loop->index }}">
                        </button>
                    @endif
                @endforeach
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
        <div class="grid grid-cols-2 gap-12 max-sm:grid-cols-1 max-md:gap-8 overflow-hidden">
            {{-- ? gambar --}}
            <div class="relative bg-cover bg-center rounded-lg group h-[400px] max-sm:h-[150px] animate__animated animate__fadeInLeft"
                style="background-image: url('{{ asset('uploads/blogs/1756540856_Draw-Toothless-Step-24.jpg') }}')">
                <div
                    class="absolute inset-0 bg-primary/50 group-hover:bg-transparent transition-all duration-500 ease-in-out rounded-lg">
                </div>
            </div>
            {{-- ? text visi misi --}}
            <div class="flex flex-col gap-5 animate__animated animate__fadeInRight">
                <div class="flex flex-col gap-3 max-md:gap-2">
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
                        class="text-4xl max-lg:text-3xl max-md:text-2xl capitalize font-bold leading-snug max-md:text-center
                        animate__animated animate__fadeInDown ">
                        We Need Sponsors!
                    </h1>
                    <p
                        class="text-lg font-light max-lg:text-base leading-relaxed max-md:text-center
                        animate__animated animate__fadeInUp animate__fast">
                        Jadilah sponsor kami dan ikut berkontribusi menciptakan dampak positif
                    </p>
                </div>
                {{-- ? box 2 --}}
                <div>
                    <a href="#"
                        class="px-6 block py-3 text-xs lg:px-8 lg:py-4 md:text-sm
                        hover:bg-primary hover:text-bg1 hover:border-bg1 shadow-lg hover:scale-105
                        transition-all duration-300 ease-in-out
                        rounded-lg font-medium tracking-wide cursor-pointer
                        focus:ring-2 focus:ring-primary/50
                        text-primary border border-primary bg-bg1
                        animate__animated animate__zoomIn">
                        Kontak disini
                    </a>
                </div>
            </div>
        </div>
    </section>


    {{-- ? sponsor --}}
    <section class="max-w-screen-3xl mx-auto flex flex-col py-20 px-4 max-md:py-10 sm:px-10">
        <div class="flex flex-col gap-14 max-md:gap-8">
            <h1 class="text-4xl max-md:text-3xl capitalize font-bold leading-snug text-center text-[#E4E6EE]">
                sponsor
            </h1>

            {{-- ? container sponsor --}}
            <div
                class="w-full flex overflow-hidden relative group
                [mask-image:linear-gradient(to_right,transparent_0,black_128px,black_calc(100%-200px),transparent_100%)]
                [-webkit-mask-image:linear-gradient(to_right,transparent_0,black_128px,black_calc(100%-200px),transparent_100%)] logo-container">
                <div id="logo" class="flex gap-16 logo pr-16 items-center flex-shrink-0 [&_li]:mx-8  cursor-pointer">
                    @foreach ($sponsors as $sponsor)
                        <img class="w-32 h-auto object-contain grayscale hover:grayscale-0 transition duration-300 opacity-50 hover:opacity-100"
                            src="{{ asset($sponsor->image) }}" alt="Google" />
                    @endforeach
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
                @foreach ($blogs as $index => $blog)
                    <div data-aos="fade-up" data-aos-delay="{{ $index * 100 }}" data-aos-duration="800">
                        <a href="{{ route('user.blog.show', $blog->id) }}"
                            class="flex flex-col h-full gap-7 max-md:gap-4 rounded-xl p-8 bg-bg1 shadow-[0_8px_30px_rgb(0,0,0,0.04)] group transition-all duration-300 ease-in-out hover:-translate-y-2 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] cursor-pointer">
                            {{-- ? image --}}
                            <div class="w-full overflow-hidden rounded-xl">
                                <img src="{{ asset($blog->image) }}" alt=""
                                    class="w-full h-[300px] object-cover object-center rounded-xl max-lg:h-[200px] max-md:h-[200px] transition-all duration-300 ease-in-out group-hover:scale-110">
                            </div>

                            {{-- ? deskripsi --}}
                            <div class="flex flex-col gap-3 max-md:gap-2">
                                <h5 class="text-primary text-base font-semibold uppercase">blog</h5>
                                <h1
                                    class="text-textPrimary font-semibold text-2xl line-clamp-2 transition-colors duration-300 group-hover:underline">
                                    {{ $blog->judul }}
                                </h1>
                                <p class="text-textSecondary text-base leading-relaxed line-clamp-3 font-light">
                                    {{ $blog->narasi_blog }}
                                </p>

                                {{-- ? penulis --}}
                                <div class="flex gap-3 items-center mt-6 max-md:mt-4">
                                    <div class="w-12 h-12 rounded-full overflow-hidden">
                                        <img src="{{ asset('uploads/blogs/1756540856_Draw-Toothless-Step-24.jpg') }}"
                                            alt=""
                                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                                    </div>
                                    <div class="flex flex-col">
                                        <h5 class="font-semibold capitalize text-textPrimary">{{ $blog->user->name }}</h5>
                                        <p class="text-textSecondary text-sm font-light">
                                            {{ Carbon\Carbon::parse($blog->tanggal_post)->format('d F Y') }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
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
