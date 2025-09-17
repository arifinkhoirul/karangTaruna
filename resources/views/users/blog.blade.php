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
                            <h5 class="text-primary text-base font-semibold uppercase">blog</h5>
                            <h1
                                class="text-textPrimary font-semibold text-2xl line-clamp-2 transition-colors duration-300 group-hover:underline">
                                {{ ucfirst($blog->judul) }}
                            </h1>
                            <div class="text-textSecondary text-base leading-relaxed line-clamp-3 font-light">
                                {!! ucfirst($blog->narasi_blog) !!}
                            </div>
                            <div class="flex gap-3 items-center mt-6 max-md:mt-4">
                                <div class="w-12 h-12 rounded-full overflow-hidden">
                                    <img src="{{ asset($blog->user->image) }}"
                                        alt=""
                                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                                </div>
                                <div class="flex flex-col">
                                    <h5 class="font-semibold capitalize text-textPrimary">{{ $blog->user->name }}</h5>
                                    <p class="text-textSecondary text-sm font-light">{{ Carbon\Carbon::parse($blog->tanggal_post)->format('d F Y') }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>

            {{-- ? pagination --}}
            {{ $blogs->links('pagination.custom') }}
        </div>
    </section>
@endsection
