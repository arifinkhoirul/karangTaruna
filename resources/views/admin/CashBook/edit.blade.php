@extends('layouts.layout_admin')


@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Inputs</h4>
            </div>

            <form class="card-body" action="{{ route('admin.pemasukan-kas.update', $cashBook->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <h6>Nama Remaja</h6>
                        <fieldset class="form-group">
                            <select class="form-select" id="basicSelect" name="teenager_id" >
                                <option disabled selected hidden>Pilih Nama Remaja</option>
                                @foreach ($teenagers as $teenager)
                                    <option value="{{ $teenager->id }}"
                                        {{ old('teenager_id', $cashBook->teenager_id) == $teenager->id ? 'selected' : '' }}>
                                        {{ $teenager->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('teenager_id')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </fieldset>

                        <h6>Bulan</h6>
                        <fieldset class="form-group">
                            <select class="form-select" id="basicSelect" name="bulan" >
                                <option disabled selected hidden>Pilih Bulan</option>
                                <option class="" value="jan" {{ old('bulan', $cashBook->bulan) == 'jan' ? 'selected' : '' }}>Jan
                                </option>
                                <option class="" value="feb" {{ old('bulan', $cashBook->bulan) == 'feb' ? 'selected' : '' }}>Feb
                                </option>
                                <option class="" value="mar" {{ old('bulan', $cashBook->bulan) == 'mar' ? 'selected' : '' }}>Mar
                                </option>
                                <option class="" value="apr" {{ old('bulan', $cashBook->bulan) == 'apr' ? 'selected' : '' }}>Apr
                                </option>
                                <option class="" value="mei" {{ old('bulan', $cashBook->bulan) == 'mei' ? 'selected' : '' }}>Mei
                                </option>
                                <option class="" value="jun" {{ old('bulan', $cashBook->bulan) == 'jun' ? 'selected' : '' }}>Jun
                                </option>
                                <option class="" value="jul" {{ old('bulan', $cashBook->bulan) == 'jul' ? 'selected' : '' }}>Jul
                                </option>
                                <option class="" value="agu" {{ old('bulan', $cashBook->bulan) == 'agu' ? 'selected' : '' }}>Agu
                                </option>
                                <option class="" value="sep" {{ old('bulan', $cashBook->bulan) == 'sep' ? 'selected' : '' }}>Sep
                                </option>
                                <option class="" value="okt" {{ old('bulan', $cashBook->bulan) == 'okt' ? 'selected' : '' }}>Okt
                                </option>
                                <option class="" value="nov" {{ old('bulan', $cashBook->bulan) == 'nov' ? 'selected' : '' }}>Nov
                                </option>
                                <option class="" value="des" {{ old('bulan', $cashBook->bulan) == 'des' ? 'selected' : '' }}>Des
                                </option>
                            </select>
                            @error('bulan')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </fieldset>

                        <div class="mb-3">
                            <label for="tahun" class="form-label fw-bold">Tahun</label>
                            <input type="text" class="form-control" id="tahun" value="{{ old('tahun', $cashBook->tahun) }}"
                                name="tahun" placeholder="Masukkan Tahun" >
                                @error('tahun')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="jumlah" class="form-label fw-bold">Jumlah</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah"
                                placeholder="Masukkan Jumlah Bayar" value="{{ old('jumlah', $cashBook->jumlah) }}" >
                            @error('jumlah')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tanggal_bayar" class="form-label fw-bold">Tanggal Bayar</label>
                            <input type="date" class="form-control date" id="tanggal_bayar" name="tanggal_bayar" value="{{ old('tanggal_bayar', $cashBook->tanggal_bayar) }}"
                                placeholder="Pilih Tanggal Bayar">
                            @error('tanggal_bayar')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <h6>Status</h6>
                        <fieldset class="form-group">
                            <select class="form-select" id="basicSelect" name="status" >
                                <option disabled selected hidden>Pilih Status Pembayaran</option>
                                <option class="text-success" value="sudah bayar"
                                    {{ old('status', $cashBook->status) == 'sudah bayar' ? 'selected' : '' }}>Sudah Bayar</option>
                                <option class="text-danger" value="belum bayar"
                                    {{ old('status', $cashBook->status) == 'belum bayar' ? 'selected' : '' }}>Belum Bayar</option>
                            </select>
                            @error('status')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </fieldset>
                    </div>
                </div>
        </div>
        <div class="mt-5">
            <a href="{{ route('admin.pemasukan-kas.index') }}" class="btn btn-secondary mr-4">Batal</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        </form>
        </div>
    </section>
@endsection
