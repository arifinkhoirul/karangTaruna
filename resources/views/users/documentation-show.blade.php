@extends('layouts.layout_user')



@section('user_content')
    <section class="max-w-screen-lg mx-auto flex flex-col pt-36 pb-20 px-4 max-md:pt-28 sm:px-10">
        <div class="flex flex-col gap-8 ">
            {{-- ? judul --}}
            <div class="flex flex-col gap-4">
                <h5
                    class="text-lg flex gap-3 font-light capitalize text-primary max-xl:text-base max-md:text-sm max-md:gap-1">
                    <a href="{{ route('user.documentation') }}" class="text-primary">
                        dokumentasi
                    </a>
                    <span class="text-textPrimary">»</span>
                    <span class="text-textPrimary">{{ $documentation->judul_dokumentasi }}</span>
                </h5>

                <h1 class="capitalize font-semibold text-4xl mb-2 max-xl:text-3xl max-lg:mb-1">
                    {{ $documentation->judul_dokumentasi }}
                </h1>
            </div>

            {{-- ? isi --}}
            <div class="flex flex-col gap-8 max-md:gap-6">
                <img src="{{ asset($documentation->image) }}" alt=""
                    class="block object-cover rounded-2xl w-full transition-transform duration-300 ease-in-out group-hover:scale-110">

                <p class="text-textSecondary font-light text-lg/9 max-md:text-base">Klik link dibawah untuk mendownload
                    dokumentasi dari event {{ $documentation->judul_dokumentasi }}</p>

                <a href="{{ $documentation->link }}" target="_blank" rel="noopener noreferrer"
                    class="block font-light text-lg/9 max-md:text-base">
                    <div
                        class="animate-wiggle inline-block px-6 py-3 mt-4 capitalize text-xs lg:px-8 lg:py-4 md:text-sm
                        text-bg1 border
                        hover:bg-red-800 p-4 shadow-xl bg-red-600 hover:text-bg1 hover:scale-105
                        transition-all duration-300 ease-in-out
                        rounded-lg font-medium tracking-wide cursor-pointer
                        focus:ring-2 focus:ring-primary/50 shadow-[0_8px_30px_rgb(0,0,0,0.12)">

                        <i class="bi bi-file-earmark-image  rounded-lg shadow-xl text-white">
                            Unduh Gambar</i>
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection
