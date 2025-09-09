@extends('layouts.layout_user')


@section('user_content')
    <section class="max-w-screen-3xl mx-auto flex flex-col pt-36 pb-20 px-4 max-md:pt-28 sm:px-10">
        {{-- ? parent --}}
        <div class="flex flex-col gap-8 p-8 bg-bg2 border-t-4 border-t-primary rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.06)]">
            {{-- ? box data remaja dan print  --}}
            <div class="flex justify-between items-center">
                <div class="flex flex-col gap-3 max-md:gap-2">
                    <h1 class="text-textPrimary text-4xl max-lg:text-3xl max-md:text-2xl capitalize font-bold leading-snug">
                        data <br class="hidden max-sm:block"> remaja</h1>
                    <div class="h-1 w-20 bg-primary rounded-full"></div>
                </div>

                {{-- ? print --}}
                <a href='{{ route('register') }}'
                    class="flex items-center gap-2 capitalize px-5 py-2 text-xs rounded-xl font-medium cursor-pointer tracking-wide text-white border border-primary bg-primary hover:bg-red-700 hover:border-red-700 transition-all duration-300 ease-in-out md:px-6 md:py-3 md:text-sm">
                    print <i class="ri-printer-fill"></i>
                </a>

            </div>

            {{-- ? tabel data remaja --}}
            <div class="max-lg:overflow-x-auto py-3">
                <table class="w-full max-lg:min-w-[800px] border border-gray-300 border-collapse text-center rounded-xl">
                    <thead>
                        <tr class="bg-primary text-bg1 max-md:text-sm">
                            <th class="px-4 py-3 capitalize border border-gray-300">No</th>
                            <th class="px-4 py-2 capitalize font-medium border border-gray-300">Jenis Kelamin</th>
                            <th class="px-4 py-2 capitalize font-medium border border-gray-300">Nama</th>
                            <th class="px-4 py-2 capitalize font-medium border border-gray-300">Minat Bakat</th>
                            <th class="px-4 py-2 capitalize font-medium border border-gray-300">Status Remaja</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < 5; $i++)
                        <tr class="odd:bg-bg2 even:bg-bg1 text-textPrimary max-md:text-sm">
                            <td class="px-4 py-3 border border-gray-300">1</td>
                            <td class="px-4 py-3 capitalize border border-gray-300">maudy ayunda</td>
                            <td class="px-4 py-3 capitalize border border-gray-300">perempuan</td>
                            <td class="px-4 py-3 capitalize border border-gray-300">nyanyi</td>
                            <td
                                class="px-4 py-3 font-semibold capitalize border border-gray-300 text-green-600">active</td>
                        </tr>
                        @endfor
                    </tbody>
                    <tfoot>
                        <tr class="bg-primary text-bg1 font-medium max-md:text-sm">
                            <td class="px-4 py-3 text-center border border-gray-300 uppercase">total</td>
                            <td class="px-4 py-3 border border-gray-300">30</td>
                            <td class="px-4 py-3 border border-gray-300" colspan="3"></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </section>
@endsection
