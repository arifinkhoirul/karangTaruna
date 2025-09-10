@extends('layouts.layout_user')



@section('user_content')
    <section class="default-section">
        <div class="flex flex-col gap-8">
            {{-- ? text baca blog --}}
            <div class="flex flex-col gap-2 max-md:gap-2">
                <h1 class="text-textPrimary text-5xl max-lg:text-4xl max-md:text-3xl capitalize font-bold leading-snug">
                    Pengurus</h1>
                <div class="flex flex-col gap-4 max-md:gap-2">
                    <p class="text-lg font-light text-textSecondary max-lg:text-base max-md:text-sm leading-relaxed">
                        Yuk kenalan sama orang-orang di balik kegiatan.</p>
                    <div class="h-1 w-20 bg-primary rounded-full"></div>

                </div>
            </div>

            {{-- ? card pengurus --}}
            <div class="grid grid-cols-3 gap-10 max-lg:grid-cols-2 max-sm:grid-cols-1 max-md:gap-6">
                {{-- ? card pembungkus --}}
                @foreach ($members as $member)

                <div onclick="window.location='{{ route('user.pengurus.show', $member->id) }}'"
                    class="relative block rounded-2xl overflow-hidden cursor-pointer group shadow-[0_8px_30px_rgb(0,0,0,0.13)] group transition-all duration-300 ease-in-out hover:-translate-y-2 hover:shadow-[0_8px_30px_rgb(0,0,0,0.18)]">

                    <div class="overflow-hidden">
                        <img src="{{ asset($member->teenager->image) }}" alt=""
                            class="block rounded-2xl w-full transition-transform duration-300 ease-in-out group-hover:scale-110">
                    </div>

                    {{-- ? gradient overlay --}}
                    <div
                        class="absolute inset-0 rounded-2xl bg-gradient-to-t from-primary/50 via-primary/10 to-transparent">
                    </div>

                    {{-- ? nama pengurus --}}
                    <div
                        class="absolute flex flex-col gap-2 bottom-0 left-0 right-0 px-10 pb-14 z-10 text-bg1 max-2xl:pb-10 max-xl:px-8 max-xl:pb-10 max-lg:px-8 max-lg:pb-12 max-md:pb-8 max-md:gap-1">
                        <h5 class="text-lg font-medium uppercase max-xl:text-base max-md:text-sm">{{ $member->jabatan }}</h5>
                        <h1
                            class="capitalize font-semibold text-4xl mb-2 max-xl:text-3xl max-lg:mb-1 line-clamp-1
                            transition-colors duration-300">
                            {{ $member->teenager->name }}
                        </h1>

                        {{-- ? media social --}}
                        <div class="flex gap-4 max-lg:gap-3">
                            <a href="#" onclick="event.stopPropagation();"
                                class="w-12 h-12 border border-bg1 rounded-full flex items-center justify-center
                                max-xl:w-10 max-xl:h-10 transition-colors duration-300 hover:bg-bg1 hover:text-primary">
                                <i class="ri-instagram-fill text-2xl max-xl:text-xl"></i>
                            </a>
                            <a href="#" onclick="event.stopPropagation();"
                                class="w-12 h-12 border border-bg1 rounded-full flex items-center justify-center
                                max-xl:w-10 max-xl:h-10 transition-colors duration-300 hover:bg-bg1 hover:text-primary">
                                <i class="ri-tiktok-fill text-2xl max-xl:text-xl"></i>
                            </a>
                            <a href="#" onclick="event.stopPropagation();"
                                class="w-12 h-12 border border-bg1 rounded-full flex items-center justify-center
                                max-xl:w-10 max-xl:h-10 transition-colors duration-300 hover:bg-bg1 hover:text-primary">
                                <i class="ri-twitter-x-fill text-2xl max-xl:text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>



        </div>
    </section>
@endsection
