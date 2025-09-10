@extends('layouts.layout_user')


@section('user_content')
    <section class="default-section">
        <div class="flex flex-col gap-8">
            {{-- ? text baca blog --}}
            <div class="flex flex-col gap-2 max-md:gap-2">
                <h1 class="text-textPrimary text-5xl max-lg:text-4xl max-md:text-3xl capitalize font-bold leading-snug">
                    Dokumentasi</h1>
                <div class="flex flex-col gap-4 max-md:gap-2">
                    <p class="text-lg font-light text-textSecondary max-lg:text-base max-md:text-sm leading-relaxed">Jadilah
                        Kumpulan dokumentasi dari berbagai event yang pernah dilaksanakan.</p>
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
                @foreach ($documentations as $documentation)
                    <a href="{{ route('user.documentation.show', $documentation->id) }}"
                        class="flex flex-col gap-6 max-md:gap-5 rounded-xl p-8 bg-bg1 shadow-[0_8px_30px_rgb(0,0,0,0.04)] group transition-all duration-300 ease-in-out hover:-translate-y-2 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] cursor-pointer">
                        {{-- ? image --}}
                        <div class="w-full overflow-hidden rounded-xl">
                            <img src="{{ asset($documentation->image) }}" alt=""
                                class="w-full h-[300px] object-cover object-center rounded-xl max-lg:h-[200px] max-md:h-[200px] transition-all duration-300 ease-in-out group-hover:scale-110">
                        </div>

                        {{-- ? deskripsi --}}
                        <div class="flex flex-col gap-4 max-md:gap-3">
                            <h5 class="text-primary text-base font-semibold uppercase">DOKUMENTASI</h5>
                            <h1
                                class="text-textPrimary font-semibold text-2xl line-clamp-2 transition-colors duration-300 group-hover:underline">
                                {{ $documentation->judul_dokumentasi }}
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
                                    {{ \Carbon\Carbon::parse($documentation->created_at)->format('d F Y') }}
                                </p>

                            </div>
                        </div>
                    </a>
                @endforeach
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
                </a> --}}
            {{-- </nav> --}}

            {{-- ? button --}}
            <div class="text-center ">
                <a href="{{ route('user.blog') }}"
                    class=" animate-bounce inline-block px-6 py-3 mt-4 capitalize text-xs lg:px-8 lg:py-4 md:text-sm
                        text-bg1 border border-primary bg-primary
                        hover:bg-red-700 hover:border-red-700 hover:text-bg1 hover:scale-105
                        transition-all duration-300 ease-in-out
                        rounded-lg font-medium tracking-wide cursor-pointer
                        focus:ring-2 focus:ring-primary/50 shadow-[0_8px_30px_rgb(0,0,0,0.12)]">load
                    more</a>
            </div>
        </div>
    </section>
@endsection
