@extends('layouts.layout_user')


@section('user_content')
    <section class="max-w-screen-3xl mx-auto flex flex-col pt-36 pb-20 px-4 max-md:pt-28 sm:px-10">
        {{-- ? parent --}}
        <div class="flex flex-col gap-5 max-lg:gap-16">
            <form method="GET" action="{{ route('user.data-uang-kas') }}"
                class="mb-6 flex flex-col sm:flex-row sm:items-center gap-3 bg-white p-4 rounded-xl shadow-md border border-gray-200">

                {{-- Pilih bulan --}}
                <div class="flex flex-col w-full sm:w-1/3">
                    <label for="bulan" class="text-sm font-medium text-gray-700 mb-1">Bulan</label>
                    <select name="bulan" id="bulan"
                        class="border-gray-300 rounded-lg px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary">
                        <option value="">-- Semua Bulan --</option>
                        <option value="Jan" {{ request('bulan') == 'Jan' ? 'selected' : '' }}>Januari</option>
                        <option value="Feb" {{ request('bulan') == 'Feb' ? 'selected' : '' }}>Februari</option>
                        <option value="Mar" {{ request('bulan') == 'Mar' ? 'selected' : '' }}>Maret</option>
                        <option value="Apr" {{ request('bulan') == 'Apr' ? 'selected' : '' }}>April</option>
                        <option value="Mei" {{ request('bulan') == 'Mei' ? 'selected' : '' }}>Mei</option>
                        <option value="Jun" {{ request('bulan') == 'Jun' ? 'selected' : '' }}>Juni</option>
                        <option value="Jul" {{ request('bulan') == 'Jul' ? 'selected' : '' }}>Juli</option>
                        <option value="Agu" {{ request('bulan') == 'Agu' ? 'selected' : '' }}>Agustus</option>
                        <option value="Sep" {{ request('bulan') == 'Sep' ? 'selected' : '' }}>September</option>
                        <option value="Okt" {{ request('bulan') == 'Okt' ? 'selected' : '' }}>Oktober</option>
                        <option value="Nov" {{ request('bulan') == 'Nov' ? 'selected' : '' }}>November</option>
                        <option value="Des" {{ request('bulan') == 'Des' ? 'selected' : '' }}>Desember</option>
                    </select>
                </div>

                {{-- Pilih tahun --}}
                <div class="flex flex-col w-full sm:w-1/3">
                    <label for="tahun" class="text-sm font-medium text-gray-700 mb-1">Tahun</label>
                    <select name="tahun" id="tahun"
                        class="border-gray-300 rounded-lg px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary">
                        <option value="">-- Semua Tahun --</option>
                        @for ($y = 2020; $y <= date('Y'); $y++)
                            <option value="{{ $y }}" {{ request('tahun') == $y ? 'selected' : '' }}>
                                {{ $y }}
                            </option>
                        @endfor
                    </select>
                </div>

                {{-- Tombol filter --}}
                <div class="flex items-end w-full sm:w-auto">
                    <button type="submit"
                        class="w-full mt-6 sm:w-auto bg-primary text-white px-5 py-2 rounded-lg font-semibold shadow hover:bg-primary/90 transition duration-200">
                        Filter
                    </button>
                </div>
            </form>


            {{-- ? pemasukan --}}
            <div
                class="flex mb-20 flex-col gap-8 p-8 bg-bg2 border-t-4 border-t-primary rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.06)]">
                {{-- ? box data remaja dan print  --}}
                <div class="flex justify-between items-center">
                    <div class="flex flex-col gap-3 max-md:gap-2">
                        <h1
                            class="text-textPrimary text-4xl max-lg:text-3xl max-md:text-2xl capitalize font-bold leading-snug">
                            Uang kas</h1>
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
                    <table
                        class="w-full max-lg:min-w-[800px] border border-gray-300 border-collapse text-center rounded-xl">
                        <thead>
                            <tr class="bg-primary text-bg1 max-md:text-sm">
                                <th class="px-4 py-3 capitalize border border-gray-300">No</th>
                                <th class="px-4 py-2 capitalize font-medium border border-gray-300">nama</th>
                                <th class="px-4 py-2 capitalize font-medium border border-gray-300">bulan</th>
                                <th class="px-4 py-2 capitalize font-medium border border-gray-300">tahun</th>
                                <th class="px-4 py-2 capitalize font-medium border border-gray-300">jumlah</th>
                                <th class="px-4 py-3 capitalize border border-gray-300">tanggal bayar</th>
                                <th class="px-4 py-2 capitalize font-medium border border-gray-300">status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pemasukanKas as $pemasukan)
                                <tr class="odd:bg-bg2 even:bg-bg1 text-textPrimary max-md:text-sm">
                                    <td class="px-4 py-3 border border-gray-300">{{ $loop->iteration }}</td>
                                    <td class="px-4 py-3 capitalize border border-gray-300">
                                        {{ $pemasukan->teenager->name }}
                                    </td>
                                    <td class="px-4 py-3 capitalize border border-gray-300">{{ $pemasukan->bulan }}</td>
                                    <td class="px-4 py-3 capitalize border border-gray-300">{{ $pemasukan->tahun }}</td>
                                    <td class="px-4 py-3 capitalize border border-gray-300">Rp
                                        {{ number_format($pemasukan->jumlah, '0', ',', '.') }}</td>
                                    <td class="px-4 py-3 border border-gray-300">
                                        {{ \Carbon\Carbon::parse($pemasukan->tanggal_bayar)->format('d F Y') }}</td>
                                    <td class="px-4 py-3 font-semibold capitalize border border-gray-300 text-green-600">
                                        {{ $pemasukan->status }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="bg-primary text-bg1 font-medium max-md:text-sm">
                                <td class="px-4 py-3 text-center border border-gray-300 uppercase" colspan="4">total</td>
                                <td class="px-4 py-3 border border-gray-300">Rp
                                    {{ number_format($totalPemasukan, '0', ',') }}</td>
                                <td class="px-4 py-3 border border-gray-300"></td>
                                <td class="px-4 py-3 border border-gray-300"></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>



            {{-- ? pengeluaran --}}
            <div
                class="flex mb-20 flex-col gap-8 p-8 bg-bg2 border-t-4 border-t-primary rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.06)]">
                {{-- ? box data remaja dan print  --}}
                <div class="flex justify-between items-center">
                    <div class="flex flex-col gap-3 max-md:gap-2">
                        <h1
                            class="text-textPrimary text-4xl max-lg:text-3xl max-md:text-2xl capitalize font-bold leading-snug">
                            Pemasukan Eksternal</h1>
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
                    <table
                        class="w-full max-lg:min-w-[800px] border border-gray-300 border-collapse text-center rounded-xl">
                        <thead>
                            <tr class="bg-primary text-bg1 max-md:text-sm">
                                <th class="px-4 py-3 capitalize border border-gray-300">No</th>
                                <th class="px-4 py-2 capitalize font-medium border border-gray-300">Bulan</th>
                                <th class="px-4 py-2 capitalize font-medium border border-gray-300">Tahun</th>
                                <th class="px-4 py-2 capitalize font-medium border border-gray-300">Keterangan</th>
                                <th class="px-4 py-2 capitalize font-medium border border-gray-300">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pemasukanEksternals as $pemasukanEksternal)
                                <tr class="odd:bg-bg2 even:bg-bg1 text-textPrimary max-md:text-sm">
                                    <td class="px-4 py-3 border border-gray-300">{{ $loop->iteration }}</td>
                                    <td class="px-4 py-3 capitalize border border-gray-300">
                                        {{ $pemasukanEksternal->bulan }}
                                    </td>
                                    <td class="px-4 py-3 capitalize border border-gray-300">
                                        {{ $pemasukanEksternal->tahun }}
                                    </td>
                                    <td class="px-4 py-3 capitalize border border-gray-300">{{ $pemasukanEksternal->keterangan }}
                                    </td>
                                    <td class="px-4 py-3 capitalize border border-gray-300">Rp
                                        {{ number_format($pemasukanEksternal->jumlah, '0', ',', '.') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="bg-primary text-bg1 font-medium max-md:text-sm">
                                <td class="px-4 py-3 text-center border border-gray-300 uppercase" colspan="4">total</td>
                                <td class="px-4 py-3 border border-gray-300">Rp
                                    {{ number_format($totalPemasukanEksternal, '0', ',', '.') }}</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>



            <div
                class="flex flex-col gap-8 p-8 bg-bg2 border-t-4 border-t-primary rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.06)]">
                {{-- ? box data remaja dan print  --}}
                <div class="flex justify-between items-center">
                    <div class="flex flex-col gap-3 max-md:gap-2">
                        <h1
                            class="text-textPrimary text-4xl max-lg:text-3xl max-md:text-2xl capitalize font-bold leading-snug">
                            pengeluaran</h1>
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
                    <table
                        class="w-full max-lg:min-w-[800px] border border-gray-300 border-collapse text-center rounded-xl">
                        <thead>
                            <tr class="bg-primary text-bg1 max-md:text-sm">
                                <th class="px-4 py-3 capitalize border border-gray-300">No</th>
                                <th class="px-4 py-2 capitalize font-medium border border-gray-300">Bulan</th>
                                <th class="px-4 py-2 capitalize font-medium border border-gray-300">Tahun</th>
                                <th class="px-4 py-2 capitalize font-medium border border-gray-300">Keterangan</th>
                                <th class="px-4 py-2 capitalize font-medium border border-gray-300">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengeluaranKas as $pengeluaran)
                                <tr class="odd:bg-bg2 even:bg-bg1 text-textPrimary max-md:text-sm">
                                    <td class="px-4 py-3 border border-gray-300">{{ $loop->iteration }}</td>
                                    <td class="px-4 py-3 capitalize border border-gray-300">
                                        {{ $pengeluaran->bulan }}
                                    </td>
                                    <td class="px-4 py-3 capitalize border border-gray-300">
                                        {{ $pengeluaran->tahun }}
                                    </td>
                                    <td class="px-4 py-3 capitalize border border-gray-300">{{ $pengeluaran->keterangan }}
                                    </td>
                                    <td class="px-4 py-3 capitalize border border-gray-300">Rp
                                        {{ number_format($pengeluaran->jumlah, '0', ',', '.') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="bg-primary text-bg1 font-medium max-md:text-sm">
                                <td class="px-4 py-3 text-center border border-gray-300 uppercase" colspan="4">total</td>
                                <td class="px-4 py-3 border border-gray-300">Rp
                                    {{ number_format($totalPengeluaran, '0', ',', '.') }}</td>
                            </tr>
                        </tfoot>
                    </table>
                    <button
                        class="p-4  mt-3 text-white text-base max-md:text-sm {{ $sisaSaldo < 0 ? 'bg-primary' : 'bg-green-600' }}">Sisa
                        Saldo : Rp
                        {{ number_format($sisaSaldo, '0', ',', '.') }}</button>
                </div>
            </div>
        </div>
    </section>
@endsection
