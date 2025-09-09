@extends('layouts.layout_user')



@section('user_content')
    <section class="max-w-screen-3xl mx-auto flex flex-col pt-32 pb-20 px-4 max-md:pt-28 sm:px-10">
        <div class="flex flex-col gap-8">
            {{-- ? text baca blog --}}
            <div class="flex flex-col gap-2 max-md:gap-2">
                <h1 class="text-textPrimary text-5xl max-lg:text-4xl max-md:text-3xl capitalize font-bold leading-snug">
                    Event</h1>
                <div class="flex flex-col gap-4 max-md:gap-2">
                    <p class="text-lg font-light text-textSecondary max-lg:text-base max-md:text-sm leading-relaxed">Jadilah
                        Temukan cerita seru dari setiap event yang telah berlangsung.</p>
                    <div class="h-1 w-20 bg-primary rounded-full"></div>
                </div>    
            </div>

            {{-- ? gambar slider --}}
            <div class="relative w-full h-[500px] max-lg:h-auto overflow-hidden rounded-lg">
                <img class="w-full h-full object-cover object-center" src="{{ asset('uploads/banner/Frame 3.jpg') }}"
                    alt="">
            </div>



            {{-- ? card --}}
            <div class="grid grid-cols-3 gap-10 max-lg:grid-cols-2 max-sm:grid-cols-1 max-md:gap-6 ">
                {{-- ? card looping --}}
                @for ($i = 0; $i < 5; $i++)
                    <a href="{{ route('user.blog') }}"
                        class="flex flex-col gap-6 max-md:gap-5 rounded-xl p-8 bg-bg1 shadow-[0_8px_30px_rgb(0,0,0,0.04)] group transition-all duration-300 ease-in-out hover:-translate-y-2 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] cursor-pointer">
                        {{-- ? image --}}
                        <div class="w-full overflow-hidden rounded-xl">
                            <img src="{{ asset('uploads/banner/Frame 3.jpg') }}" alt=""
                                class="w-full h-[300px] object-cover object-center rounded-xl max-lg:h-[200px] max-md:h-[200px] transition-all duration-300 ease-in-out group-hover:scale-110">
                        </div>

                        {{-- ? deskripsi --}}
                        <div class="flex flex-col gap-4 max-md:gap-3">
                            <h5 class="text-primary text-base font-semibold uppercase">EVENT 17 AGT</h5>
                            <h1
                                class="text-textPrimary font-semibold text-2xl line-clamp-2 transition-colors duration-300 group-hover:underline">
                                Upacara & Perayaan Hari Kemerdekaan Republik
                            </h1>

                            {{-- ? tanggal event --}}
                            <div class="flex gap-3 items-center">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 0C15.523 0 20 4.477 20 10C20 15.523 15.523 20 10 20C4.477 20 0 15.523 0 10C0 4.477 4.477 0 10 0ZM10 4C9.73478 4 9.48043 4.10536 9.29289 4.29289C9.10536 4.48043 9 4.73478 9 5V10C9.00006 10.2652 9.10545 10.5195 9.293 10.707L12.293 13.707C12.4816 13.8892 12.7342 13.99 12.9964 13.9877C13.2586 13.9854 13.5094 13.8802 13.6948 13.6948C13.8802 13.5094 13.9854 13.2586 13.9877 12.9964C13.99 12.7342 13.8892 12.4816 13.707 12.293L11 9.586V5C11 4.73478 10.8946 4.48043 10.7071 4.29289C10.5196 4.10536 10.2652 4 10 4Z"
                                        fill="#667085" />
                                </svg>

                                <p class="text-textSecondary text-base leading-relaxed line-clamp-1 font-light">
                                    17 Agustus 2025
                                </p>

                            </div>

                            {{-- ? button --}}
                            <div class="flex justify-between items-center">
                                <p
                                    class="text-primary uppercase font-light
                            text-xl max-sm:text-sm max-md:text-base max-lg:text-lg">
                                    gratis</p>
                                <p
                                    class="flex items-center gap-3 font-medium rounded-xl bg-primary text-bg1
                                max-lg:py-2 max-lg:px-6 
                                py-3 px-7 text-base
                                max-sm:py-2 max-sm:px-5 max-sm:text-sm
                                hover:bg-red-700 transition-colors duration-300 
                                ">
                                    view
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                        class="w-4 h-4 max-lg:w-3 max-lg:h-3" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.15385 0C0.969231 0 0 0.969231 0 2.15385V11.3077C0 12.4923 0.969231 13.4615 2.15385 13.4615H8.07692C8.29231 13.4615 8.45385 13.4109 8.61538 13.4109C7.86154 13.2494 7.21862 12.8692 6.68015 12.3846H2.15385C1.56154 12.3846 1.07692 11.9 1.07692 11.3077V2.15385C1.07692 1.56154 1.56154 1.07692 2.15385 1.07692H5.55315C5.93008 1.18462 5.92308 1.66923 5.92308 2.15385V3.76923C5.92308 4.09231 6.13846 4.30769 6.46154 4.30769H8.07692C8.61538 4.30769 9.15385 4.30769 9.15385 4.84615V5.38462H9.42308C9.69231 5.38462 9.96154 5.432 10.2308 5.48585V4.30769C10.2308 3.71538 9.69877 3.17046 8.78338 2.25454C8.62185 2.14685 8.50769 1.99231 8.34615 1.88462C8.23846 1.72308 8.08338 1.60838 7.97569 1.44685C7.06085 0.532 6.51538 0 5.92308 0H2.15385ZM9.42308 6.46154C7.80769 6.46154 6.46154 7.80769 6.46154 9.42308C6.46154 11.0385 7.80769 12.3846 9.42308 12.3846C10.1085 12.3846 10.7342 12.131 11.2404 11.7282L11.4089 11.8968C11.3415 11.9967 11.3113 12.117 11.3236 12.2369C11.3359 12.3568 11.3899 12.4685 11.4762 12.5526L12.8224 13.8988C13.0378 14.1142 13.3474 14.1142 13.5628 13.8988L13.832 13.6295C14.0474 13.4142 14.0474 13.0878 13.832 12.8725L12.4858 11.5263C12.4069 11.4437 12.3023 11.3904 12.1891 11.3751C12.0759 11.3599 11.9608 11.3836 11.8628 11.4423L11.7115 11.2738C12.1278 10.7633 12.3846 10.1215 12.3846 9.42308C12.3846 7.80769 11.0385 6.46154 9.42308 6.46154ZM9.42308 7.26923C10.6077 7.26923 11.5769 8.23846 11.5769 9.42308C11.5769 10.6077 10.6077 11.5769 9.42308 11.5769C8.23846 11.5769 7.26923 10.6077 7.26923 9.42308C7.26923 8.23846 8.23846 7.26923 9.42308 7.26923Z"
                                            fill="#FEFEFE" />
                                    </svg>
                                </p>
                            </div>
                        </div>
                    </a>
                @endfor
            </div>

            {{-- ? pagination --}}
            {{-- <nav class="flex flex-wrap items-center justify-center gap-2 mt-8"> --}}
                {{-- ? Prev --}}
                {{-- <a class="text-gray-500 hover:text-textPrimary p-1 inline-flex items-center" href="javascript:;">
                    <span
                        class="w-10 h-10 sm:w-12 sm:h-12 rounded-full transition-all duration-150 flex justify-center items-center hover:border hover:border-primary">
                        <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.5 1L1.91421 4.58578C1.24755 5.25245 0.914213 5.58579 0.914213 6C0.914213 6.41421 1.24755 6.74755 1.91421 7.41421L5.5 11"
                                stroke="#FE0000" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </a> --}}

                {{-- ? number page --}}
                {{-- <a class="w-10 h-10 sm:w-12 sm:h-12 text-base sm:text-lg text-gray-500 inline-flex items-center justify-center border border-gray-200 rounded-full transition-all duration-150 hover:text-primary hover:border-primary"
                    href="javascript:;" aria-current="page">1</a>

                <a class="w-10 h-10 sm:w-12 sm:h-12 text-base sm:text-lg bg-primary text-white inline-flex items-center justify-center rounded-full transition-all duration-150 hover:bg-primary hover:text-white"
                    href="javascript:;">2</a>

                <a class="w-10 h-10 sm:w-12 sm:h-12 text-base sm:text-lg text-gray-500 inline-flex items-center justify-center border border-gray-200 rounded-full transition-all duration-150 hover:text-primary hover:border-primary"
                    href="javascript:;">...</a>

                <a class="w-10 h-10 sm:w-12 sm:h-12 text-base sm:text-lg text-gray-500 inline-flex items-center justify-center border border-gray-200 rounded-full transition-all duration-150 hover:text-primary hover:border-primary"
                    href="javascript:;">10</a> --}}

                {{-- ? next --}}
                {{-- <a class="text-gray-500 hover:text-textPrimary p-1 inline-flex items-center" href="javascript:;">
                    <span
                        class="w-10 h-10 sm:w-12 sm:h-12 rounded-full transition-all duration-150 flex justify-center items-center hover:border hover:border-primary">
                        <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1.5 11L5.08578 7.41421C5.75245 6.74755 6.08579 6.41421 6.08579 6C6.08579 5.58579 5.75245 5.25245 5.08579 4.58579L1.5 1"
                                stroke="#FE0000" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </a>
            </nav> --}}

            {{-- ? button --}}
            <div class="text-center ">
                <a href="{{ route('user.blog') }}"
                    class=" animate-bounce inline-block px-6 py-3 mt-4 capitalize text-xs lg:px-8 lg:py-4 md:text-sm
                        text-bg1 border border-primary bg-primary
                        hover:bg-red-700 hover:border-red-700 hover:text-bg1 hover:scale-105
                        transition-all duration-300 ease-in-out
                        rounded-lg font-medium tracking-wide cursor-pointer
                        focus:ring-2 focus:ring-primary/50 shadow-[0_8px_30px_rgb(0,0,0,0.12)]">load more</a>
            </div>
        </div>
    </section>
@endsection
