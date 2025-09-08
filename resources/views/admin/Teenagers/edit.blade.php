@extends('layouts.layout_admin')


@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Inputs</h4>
            </div>

            <form class="card-body" action="{{ route('admin.data-remaja.update', $teenager->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" value="{{ old('name', $teenager->name) }}"
                                name="name"  placeholder="Masukkan Nama">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Upload Gambar</label>
                            <input class="form-control" type="file" id="image" name="image">
                            @error('image')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Preview Gambar -->
                        <div class="mt-2">
                            <img id="previewImage" src="{{ asset($teenager->image) }}" alt="Preview Gambar"
                                style="max-height: 200px;" class="img-fluid rounded border">
                        </div>

                        <div class="mb-3">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control date" id="tanggal_lahir"
                                value="{{ old('tanggal_lahir', $teenager->tanggal_lahir) }}" name="tanggal_lahir"
                                placeholder="Pilih Tanggal">
                            @error('tanggal_lahir')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3"  placeholder="Masukkan Alamat">{{ old('alamat', $teenager->alamat) }}</textarea>
                            @error('alamat')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="minat_bakat" class="form-label">Minat Bakat</label>
                            <input type="text" class="form-control" id="minat_bakat" placeholder="Masukkan Minat Bakat"
                                name="minat_bakat" value="{{ old('minat_bakat', $teenager->minat_bakat) }}" >
                            @error('minat_bakat')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <h6>Status</h6>
                        <fieldset class="form-group">
                            <select class="form-select" id="basicSelect" name="status">
                                <option disabled selected hidden>Pilih Staus Remaja</option>
                                <option value="aktif" {{ old('status', $teenager->status) == 'aktif' ? 'selected' : '' }}>Aktif</option>
                                <option value="tidak aktif" {{ old('status', $teenager->status) == 'tidak aktif' ? 'selected' : '' }}>Tidak
                                    Aktif</option>
                            </select>
                        </fieldset>
                    </div>
                </div>
                <div class="mt-5">
                    <a href="{{ route('admin.data-remaja.index') }}" class="btn btn-secondary mr-4">Batal</a>
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
