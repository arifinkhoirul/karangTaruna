@extends('layouts.layout_user')



@section('user_content')
    <section class="max-w-screen-lg mx-auto flex flex-col pt-36 pb-20 px-4 max-md:pt-28 sm:px-10">
        <div class="flex flex-col gap-8 ">
            {{-- ? judul --}}
            <div class="flex flex-col gap-4">
                <h5 class="text-lg flex gap-3 font-light capitalize text-primary max-xl:text-base max-md:text-sm max-md:gap-1">
                    <a href="{{ route('user.documentation') }}" class="text-primary">
                        dokumentasi
                    </a>
                    <span class="text-textPrimary">»</span>
                    <span class="text-textPrimary">lomba 12 september</span>
                </h5>

                <h1 class="capitalize font-semibold text-4xl mb-2 max-xl:text-3xl max-lg:mb-1">
                    Upacara & Perayaan Hari Kemerdekaan Republik Indonesia
                </h1>
            </div>

            {{-- ? isi --}}
            <div class="flex flex-col gap-8 max-md:gap-6">
                <img src="{{ asset('uploads/blogs/1757485212_go-yoon-jungjpg-20220713125232_waifu2x_photo_noise3_scale.png') }}"
                    alt=""
                    class="block object-cover rounded-2xl w-full transition-transform duration-300 ease-in-out group-hover:scale-110">

                <p class="text-textSecondary font-light text-lg/9 max-md:text-base">Upacara Kemerdekaan RI ke-80  Mari
                    bersama-sama rayakan Hari Kemerdekaan Republik Indonesia dengan penuh semangat persatuan 🇮🇩✨</p>

                <p class="text-textSecondary font-light text-lg/9 max-md:text-base">📅 Tanggal: 17 Agustus 2025  📍 Lokasi:
                    Lapangan Merdeka, Bekasi  🎓 Terbuka untuk seluruh masyarakat  🔥 Akan ada rangkaian acara: upacara
                    bendera, parade budaya, penampilan seni, dan lomba 17-an seru!</p>
                    
                <a href="#" class="block underline font-light text-lg/9 max-md:text-base text-blue-400">https://youtu.be/-R92GsDLipg?list=RD-R92GsDLipg</a>
            </div>
        </div>
    </section>

    <section class="max-w-screen-3xl mx-auto flex flex-col pb-20 px-4 sm:px-10">
        <div class="flex flex-col gap-12 max-md:gap-8">
            <div class="flex justify-between items-center">
                <h1 class="text-textPrimary text-4xl max-lg:text-3xl max-md:text-2xl capitalize font-bold leading-snug">
                    topic terbaru</h1>

                <a href="{{ route('user.documentation') }}"
                    class="font-medium capitalize rounded-xl bg-primary text-bg1 max-lg:py-2 max-lg:px-6 py-3 px-8 text-base max-sm:py-2 max-sm:px-5 max-sm:text-sm hover:bg-red-700 transition-colors duration-300 cursor-pointer">
                    view all
                </a>
            </div>

            {{-- ? card --}}
        <div class="grid grid-cols-3 gap-10 max-lg:grid-cols-2 max-sm:grid-cols-1 max-md:gap-6 py-8 overflow-hidden">
            {{-- ? card looping --}}
            @for ($i = 0; $i < 3; $i++)
                <a href="#"
                    class="flex flex-col gap-6 max-md:gap-5 rounded-xl p-8 bg-bg1 
                            shadow-[0_8px_30px_rgba(0,0,0,0.04)] 
                            group transition-all duration-300 ease-in-out 
                            hover:-translate-y-2 hover:shadow-[0_8px_30px_rgba(0,0,0,0.08)] cursor-pointer">
                    {{-- ? image --}}
                    <div class="w-full overflow-hidden rounded-xl">
                        <img src="" alt=""
                            class="w-full h-[300px] object-cover object-center rounded-xl max-lg:h-[200px] max-md:h-[200px] transition-all duration-300 ease-in-out group-hover:scale-110">
                    </div>

                    {{-- ? deskripsi --}}
                    <div class="flex flex-col gap-4 max-md:gap-3">
                        <h5 class="text-primary text-base font-semibold uppercase">lomba 17an</h5>
                        <h1
                            class="text-textPrimary font-semibold text-2xl line-clamp-2 transition-colors duration-300 group-hover:underline">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi, quibusdam.
                        </h1>

                        {{-- ? tanggal event --}}
                        <div class="flex gap-3 items-center">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10 0C15.523 0 20 4.477 20 10C20 15.523 15.523 20 10 20C4.477 20 0 15.523 0 10C0 4.477 4.477 0 10 0ZM10 4C9.73478 4 9.48043 4.10536 9.29289 4.29289C9.10536 4.48043 9 4.73478 9 5V10C9.00006 10.2652 9.10545 10.5195 9.293 10.707L12.293 13.707C12.4816 13.8892 12.7342 13.99 12.9964 13.9877C13.2586 13.9854 13.5094 13.8802 13.6948 13.6948C13.8802 13.5094 13.9854 13.2586 13.9877 12.9964C13.99 12.7342 13.8892 12.4816 13.707 12.293L11 9.586V5C11 4.73478 10.8946 4.48043 10.7071 4.29289C10.5196 4.10536 10.2652 4 10 4Z"
                                    fill="#667085" />
                            </svg>

                            <p class="text-textSecondary text-base capitalize leading-relaxed line-clamp-1 font-light">
                                10 september 2025
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

        </div>
    </section>
@endsection
