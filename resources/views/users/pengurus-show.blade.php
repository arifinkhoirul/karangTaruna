@extends('layouts.layout_user')

@section('user_content')
    <section class="max-w-screen-3xl mx-auto flex flex-col pt-36 pb-20 px-4 max-md:pt-28 sm:px-10">
        <div class="flex flex-col gap-16">
            {{-- ? menu pengurus --}}
            <div class="grid grid-cols-2 gap-12 max-md:grid-cols-1 overflow-hidden">
                {{-- ? gambar member --}}
                <div
                    class="overflow-hidden flex justify-center order-1 max-md:order-2 animate__animated animate__fadeInLeft">
                    <img src="{{ asset($member->teenager->image) }}" alt=""
                        class="block object-cover rounded-2xl w-[350px] h-auto transition-transform duration-300 ease-in-out group-hover:scale-110">
                </div>

                <div class="flex flex-col gap-6 order-2 max-md:order-1 animate__animated animate__fadeInRight">
                    {{-- ? nama --}}
                    <div class="flex flex-col gap-3 max-md:gap-2 ">
                        <h1 class="text-textPrimary text-5xl max-lg:text-4xl capitalize font-bold leading-snug">
                            maudy ayunda</h1>
                        <div class="h-1 w-24 bg-primary rounded-full"></div>
                    </div>

                    {{-- ? deskripsi --}}
                    <p class="text-textSecondary font-light text-lg max-lg:text-base leading-relaxed"><span
                            class="text-textPrimary font-bold">Maudy Ayunda</span> adalah seorang aktris, penyanyi, penulis,
                        sekaligus aktivis muda Indonesia. Ia dikenal sebagai sosok multitalenta yang tidak hanya berkarya di
                        dunia hiburan, tetapi juga berprestasi di bidang akademik dengan menempuh pendidikan di Oxford
                        University dan Stanford University.</p>

                    <div class="flex flex-col gap-6">
                        <h5 class="text-textPrimary capitalize text-4xl font-semibold max-lg:text-3xl">kenali lebih lanjut
                        </h5>
                        {{-- ? media social --}}
                        <div class="flex gap-6 max-md:gap-4">
                            <a href="#" onclick="event.stopPropagation();"
                                class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center transition-colors duration-300 hover:bg-red-700">
                                <i class="ri-instagram-fill text-2xl"></i>
                            </a>
                            <a href="#" onclick="event.stopPropagation();"
                                class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center transition-colors duration-300 hover:bg-red-700">
                                <i class="ri-tiktok-fill text-2xl"></i>
                            </a>
                            <a href="#" onclick="event.stopPropagation();"
                                class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center transition-colors duration-300 hover:bg-red-700">
                                <i class="ri-twitter-x-fill text-2xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ? menu portfolio --}}
            <div class="flex flex-col gap-8">
                {{-- ? h1 portfolio --}}
                <div class="flex flex-col gap-3 max-md:gap-2">
                    <h1 class="text-textPrimary text-4xl max-lg:text-3xl capitalize font-bold leading-snug">
                        portfolio</h1>
                    <div class="h-1 w-20 bg-primary rounded-full"></div>
                </div>

                {{-- ? grid portfolio --}}
                <div class="grid grid-cols-3 gap-10 max-lg:grid-cols-2 max-sm:grid-cols-1 max-md:gap-6">

                    {{-- ? card foto --}}
                    <div class="bg-bg1 rounded-xl overflow-hidden shadow-md flex flex-col cursor-pointer group"
                        onclick="openModal(this)" data-type="foto"
                        data-src="{{ asset('uploads/portfolio/portfolio-img-04.jpg') }}" data-title="Edit DUCATION"
                        data-desc="Deskripsi foto portfolio disini...">
                        <div class="h-64 w-full overflow-hidden">
                            <img src="{{ asset('uploads/portfolio/portfolio-img-04.jpg') }}" alt=""
                                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                        </div>
                        <div class="p-5 flex flex-col gap-2">
                            <h5 class="text-textSecondary text-base font-semibold uppercase">foto editing</h5>
                            <h1
                                class="text-textPrimary capitalize font-semibold text-2xl flex justify-between line-clamp-2">
                                edit ducation
                                <i
                                    class="ri-arrow-right-up-fill text-primary transform scale-0 opacity-0 group-hover:scale-100 group-hover:opacity-100 transition-all duration-300"></i>
                            </h1>
                        </div>
                    </div>

                    {{-- ? card video --}}
                    <div class="bg-bg1 rounded-xl overflow-hidden shadow-md flex flex-col cursor-pointer group"
                        onclick="openModal(this)" data-type="video" data-src="https://www.youtube.com/embed/D1e5GHBWLHE"
                        data-title="Edit DUCATION" data-desc="Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis nisi tenetur fugiat ipsam aliquid impedit voluptatum inventore corporis earum, laboriosam natus sunt quasi dolor, nostrum nesciunt, magni debitis culpa. Totam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed architecto illum cumque porro maiores dolore sint, inventore nesciunt est nihil explicabo deserunt ratione tempore. Debitis eos explicabo dolorum eius rem?">
                        <div class="h-64 w-full relative overflow-hidden group cursor-pointer">
                            <img src="{{ asset('uploads/portfolio/portfolio-img-04.jpg') }}" alt=""
                                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                            <div
                                class="absolute inset-0 bg-black/30 transition-opacity duration-300 group-hover:bg-black/40">
                            </div>
                            <i
                                class="ri-play-circle-fill text-white text-6xl absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 opacity-80 scale-90 transition-all duration-300 group-hover:opacity-100 group-hover:scale-110"></i>
                        </div>
                        <div class="p-5 flex flex-col gap-2">
                            <h5 class="text-textSecondary text-base font-semibold uppercase">video editing</h5>
                            <h1
                                class="text-textPrimary capitalize font-semibold text-2xl flex justify-between line-clamp-2">
                                edit ducation
                                <i
                                    class="ri-arrow-right-up-fill text-primary transform scale-0 opacity-0 group-hover:scale-100 group-hover:opacity-100 transition-all duration-300"></i>
                            </h1>
                        </div>
                    </div>

                </div>

                {{-- ? Modal Global --}}
                <div id="modal"
                    class="fixed inset-0 bg-black/60 backdrop-blur-sm items-center justify-center z-50 hidden no-scrollbar"
                    onclick="closeModal()">
                    <div id="modalContent"
                        class="bg-white p-8 rounded-xl shadow-lg max-w-3xl w-full max-h-[80vh] overflow-y-auto transform scale-0 transition-transform duration-300 mx-4 relative no-scrollbar"
                        onclick="event.stopPropagation()">

                        <button onclick="closeModal()" class="absolute top-2 right-2 text-primary hover:text-red-700">
                            <i class="ri-close-line font-bold text-2xl"></i>
                        </button>

                        <div id="modalMedia" class="w-full"></div>

                        <div class="py-6 flex flex-col gap-3">
                            <h1 id="modalTitle" class="text-textPrimary font-semibold text-3xl max-md:text-2xl"></h1>
                            <p id="modalDesc" class="text-textSecondary text-base leading-relaxed font-light"></p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
