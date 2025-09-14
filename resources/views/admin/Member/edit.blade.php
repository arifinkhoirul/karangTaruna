@extends('layouts.layout_admin')


@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Inputs</h4>
            </div>

            <form class="card-body" action="{{ route('admin.member.update', $member->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <h6>Nama Remaja</h6>
                        <fieldset class="form-group">
                            <select class="form-select" id="basicSelect" name="teenager_id">
                                <option disabled selected hidden>Pilih Nama Remaja</option>
                                @foreach ($teenagers as $teenager)
                                    <option value="{{ $teenager->id }}"
                                        {{ old('teenager_id', $member->teenager_id) == $teenager->id ? 'selected' : '' }}>
                                        {{ $teenager->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('teenager_id')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </fieldset>

                        <div class="form-group mt-3">
                            <label for="narasi_blog" class="form-label">Deskripsi Member</label>
                            <textarea class="form-control" id="deskripsi_member" name="deskripsi_member" rows="3">{{ old('deskripsi_member', $member->deskripsi_member) }}</textarea>
                            @error('deskripsi_member')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan"
                                value="{{ old('jabatan', $member->jabatan) }}" name="jabatan" placeholder="Masukkan Nama">
                            @error('jabatan')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h6>Status</h6>
                        <fieldset class="form-group">
                            <select class="form-select" id="basicSelect" name="status">
                                <option disabled selected hidden>Pilih Status Remaja</option>
                                <option class="text-success" value="aktif" {{ old('status', $member->status) == 'aktif' ? 'selected' : '' }}>
                                    Aktif</option>
                                <option class="text-danger" value="tidak aktif"
                                    {{ old('status', $member->status) == 'tidak aktif' ? 'selected' : '' }}>Tidak
                                    Aktif</option>
                            </select>
                        </fieldset>
                        @error('status')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="mt-5">
                    <a href="{{ route('admin.member.index') }}" class="btn btn-secondary mr-4">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </section>
@endsection
