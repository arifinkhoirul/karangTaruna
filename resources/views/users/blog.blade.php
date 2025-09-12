@extends('layouts.layout_user')



@section('user_content')
    <section class="default-section">
        <div class="flex flex-col gap-8">
            {{-- ? text baca blog --}}
            <div class="flex flex-col gap-2 max-md:gap-2 overflow-hidden">
                <h1 class="text-textPrimary text-5xl max-lg:text-4xl max-md:text-3xl capitalize font-bold leading-snug animate__animated animate__fadeInUp animate__faster" >
                    Blog</h1>
                <div class="flex flex-col gap-4 max-md:gap-2">
                    <p class="text-lg font-light text-textSecondary max-lg:text-base max-md:text-sm leading-relaxed animate__animated animate__fadeInUp">Simak aktivitas dan kisah inspiratif di blog ini.</p>
                    <div class="h-1 w-20 bg-primary rounded-full animate__animated animate__fadeInLeft"></div>
                </div>
            </div>

            {{-- ? card --}}
            <div class="grid grid-cols-3 gap-10 max-lg:grid-cols-2 max-sm:grid-cols-1 max-md:gap-6">
                {{-- ? card 1 --}}
                @foreach ($blogs as $index => $blog)
                <div class="animate__animated animate__fadeInUpShort" style="animation-delay: {{ $index * 0.2 }}s">
                    <a
                        href="{{ route('user.blog.show', $blog->id) }}"
                        class="flex flex-col h-full gap-7 max-md:gap-4 rounded-xl p-8 bg-bg1 shadow-[0_8px_30px_rgb(0,0,0,0.04)] group transition-all duration-300 ease-in-out hover:-translate-y-2 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] cursor-pointer" >
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
                </div>
                @endforeach
            </div>

            {{-- ? pagination --}}
            <nav class="flex flex-wrap items-center justify-center gap-2 mt-8 ">
                {{-- ? Prev --}}
                <a class="text-gray-500 hover:text-textPrimary p-1 inline-flex items-center" href="javascript:;">
                    <span
                        class="w-10 h-10 sm:w-12 sm:h-12 rounded-full transition-all duration-150 flex justify-center items-center hover:border hover:border-primary">
                        <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.5 1L1.91421 4.58578C1.24755 5.25245 0.914213 5.58579 0.914213 6C0.914213 6.41421 1.24755 6.74755 1.91421 7.41421L5.5 11"
                                stroke="#FE0000" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </a>

                {{-- ? number page --}}
                <a class="w-10 h-10 sm:w-12 sm:h-12 text-base sm:text-lg text-gray-500 inline-flex items-center justify-center border border-gray-200 rounded-full transition-all duration-150 hover:text-primary hover:border-primary"
                    href="javascript:;" aria-current="page">1</a>

                <a class="w-10 h-10 sm:w-12 sm:h-12 text-base sm:text-lg bg-primary text-white inline-flex items-center justify-center rounded-full transition-all duration-150 hover:bg-primary hover:text-white"
                    href="javascript:;">2</a>

                <a class="w-10 h-10 sm:w-12 sm:h-12 text-base sm:text-lg text-gray-500 inline-flex items-center justify-center border border-gray-200 rounded-full transition-all duration-150 hover:text-primary hover:border-primary"
                    href="javascript:;">...</a>

                <a class="w-10 h-10 sm:w-12 sm:h-12 text-base sm:text-lg text-gray-500 inline-flex items-center justify-center border border-gray-200 rounded-full transition-all duration-150 hover:text-primary hover:border-primary"
                    href="javascript:;">10</a>

                {{-- ? next --}}
                <a class="text-gray-500 hover:text-textPrimary p-1 inline-flex items-center" href="javascript:;">
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
            </nav>
        </div>
    </section>
@endsection
