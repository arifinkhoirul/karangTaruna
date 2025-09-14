@extends('layouts.layout_admin')


@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Inputs</h4>
            </div>
            {{-- {{ dd($sponsor->id) }} --}}

            <form class="card-body" action="{{ route('admin.sponsor.update', $sponsor->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nama_perusahaan" class="form-label">Nama Perusahaan</label>
                            <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan"
                                placeholder="Masukkan Nama Perusahaan"
                                value="{{ old('nama_perusahaan', $sponsor->nama_perusahaan) }}">
                            @error('nama_perusahaan')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Logo Sponsorship</label>
                            <input class="form-control" type="file" id="image" name="image">
                        </div>

                        <!-- Preview Gambar -->
                        <div class="mt-2 mb-3">
                            <img id="previewImage" src="{{ asset($sponsor->image) }}" alt="Preview Gambar"
                                style="max-height: 200px;" class="img-fluid rounded border">
                        </div>

                        <h6>Status</h6>
                        <fieldset class="form-group">
                            <select class="form-select" id="basicSelect" name="status">
                                <option disabled selected hidden>Pilih Status Sponsorship</option>
                                <option class="text-success" value="aktif"
                                    {{ old('status', $sponsor->status) == 'aktif' ? 'selected' : '' }}>
                                    Aktif</option>
                                <option class="text-danger" value="nonaktif"
                                    {{ old('status', $sponsor->status) == 'nonaktif' ? 'selected' : '' }}>Nonaktif
                                </option>
                            </select>
                        </fieldset>
                        @error('status')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="mt-5">
                    <a href="{{ route('admin.sponsor.index') }}" class="btn btn-secondary mr-4">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </section>


    <script>
        document.getElementById('image').addEventListener('change', function(event) {
            let input = event.target;
            let preview = document.getElementById('previewImage');

            if (input.files && input.files[0]) {
                let reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }

                reader.readAsDataURL(input.files[0]);
            } else {
                preview.src = "";
                preview.style.display = 'none';
            }
        });
    </script>
@endsection
