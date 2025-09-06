@extends('layouts.layout_admin')


@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Inputs</h4>
            </div>

            <form class="card-body" action="{{ route('admin.pengeluaran-kas.update', $pengeluaranKas->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <h6>Bulan</h6>
                        <fieldset class="form-group">
                            <select class="form-select" id="basicSelect" name="bulan" >
                                <option disabled selected hidden>Pilih Bulan</option>
                                <option class="" value="jan" {{ old('bulan', $pengeluaranKas->bulan) == 'jan' ? 'selected' : '' }}>Jan
                                </option>
                                <option class="" value="feb" {{ old('bulan', $pengeluaranKas->bulan) == 'feb' ? 'selected' : '' }}>Feb
                                </option>
                                <option class="" value="mar" {{ old('bulan', $pengeluaranKas->bulan) == 'mar' ? 'selected' : '' }}>Mar
                                </option>
                                <option class="" value="apr" {{ old('bulan', $pengeluaranKas->bulan) == 'apr' ? 'selected' : '' }}>Apr
                                </option>
                                <option class="" value="mei" {{ old('bulan', $pengeluaranKas->bulan) == 'mei' ? 'selected' : '' }}>Mei
                                </option>
                                <option class="" value="jun" {{ old('bulan', $pengeluaranKas->bulan) == 'jun' ? 'selected' : '' }}>Jun
                                </option>
                                <option class="" value="jul" {{ old('bulan', $pengeluaranKas->bulan) == 'jul' ? 'selected' : '' }}>Jul
                                </option>
                                <option class="" value="agu" {{ old('bulan', $pengeluaranKas->bulan) == 'agu' ? 'selected' : '' }}>Agu
                                </option>
                                <option class="" value="sep" {{ old('bulan', $pengeluaranKas->bulan) == 'sep' ? 'selected' : '' }}>Sep
                                </option>
                                <option class="" value="okt" {{ old('bulan', $pengeluaranKas->bulan) == 'okt' ? 'selected' : '' }}>Okt
                                </option>
                                <option class="" value="nov" {{ old('bulan', $pengeluaranKas->bulan) == 'nov' ? 'selected' : '' }}>Nov
                                </option>
                                <option class="" value="des" {{ old('bulan', $pengeluaranKas->bulan) == 'des' ? 'selected' : '' }}>Des
                                </option>
                            </select>
                            @error('bulan')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </fieldset>

                        <div class="mb-3">
                            <label for="tahun" class="form-label fw-bold">Tahun</label>
                            <input type="text" class="form-control" id="tahun" value="{{ old('tahun', $pengeluaranKas->tahun) }}"
                                name="tahun" placeholder="Masukkan Tahun" >
                                @error('tahun')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>

                        <div class="mb-3">
                            <label for="jumlah" class="form-label fw-bold">Jumlah</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah"
                                placeholder="Masukkan Jumlah Bayar" value="{{ old('jumlah', $pengeluaranKas->jumlah) }}" >
                            @error('jumlah')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="keterangan" class="form-label fw-bold">Keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan"
                                placeholder="Masukkan keterangan Bayar" value="{{ old('keterangan', $pengeluaranKas->keterangan) }}" >
                            @error('keterangan')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tanggal_pengeluaran" class="form-label fw-bold">Tanggal Pengeluaran</label>
                            <input type="date" class="form-control date" id="tanggal_pengeluaran" name="tanggal_pengeluaran" value="{{ old('tanggal_pengeluaran', $pengeluaranKas->tanggal_pengeluaran) }}"
                                placeholder="Pilih Tanggal Pengeluaran">
                            @error('tanggal_pengeluaran')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                </div>
        </div>
        <div class="mt-5">
            <a href="{{ route('admin.pengeluaran-kas.index') }}" class="btn btn-secondary mr-4">Batal</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        </form>
        </div>
    </section>
@endsection
