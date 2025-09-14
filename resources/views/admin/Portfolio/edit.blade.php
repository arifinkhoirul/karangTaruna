@extends('layouts.layout_admin')


@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Inputs</h4>
            </div>

            <form class="card-body" action="{{ route('admin.portfolio.update', $portfolio->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <h6>Nama Remaja</h6>
                        <fieldset class="form-group">
                            <select class="form-select" id="basicSelect" name="member_id">
                                <option disabled selected hidden>Pilih Nama Remaja</option>
                                @foreach ($members as $member)
                                    <option value="{{ $member->id }}"
                                        {{ old('member_id', $portfolio->member_id) == $member->id ? 'selected' : '' }}>
                                        {{ $member->teenager->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('teenager_id')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </fieldset>

                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul"
                                placeholder="Masukkan Nama Pengurus" value="{{ old('judul', $portfolio->judul) }}">
                            @error('judul')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tag" class="form-label">Tag</label>
                            <input type="text" class="form-control" id="tag" name="tag"
                                placeholder="Masukkan Nama Event" value="{{ old('tag', $portfolio->tag) }}">
                            @error('tag')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ old('deskripsi', $portfolio->deskripsi) }}</textarea>
                            @error('deskripsi')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="vidio" class="form-label">Link Vidio</label>
                            <input type="text" class="form-control" id="vidio" name="vidio"
                                placeholder="Masukkan Nama Event" value="{{ old('vidio', $portfolio->vidio) }}">
                            <p class="mt-2 text-danger">Note: pilih salah satu ingin mengupload vidio atau gambar</p>

                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Upload Gambar</label>
                            <input class="form-control" type="file" id="image" name="image">
                            <p class="mt-2 text-danger">Note: pilih salah satu ingin mengupload vidio atau gambar</p>
                        </div>

                        <!-- Preview Gambar -->
                        <div class="mt-2">
                            <img id="previewImage" src="{{ asset($portfolio->image) }}" alt="Preview Gambar"
                                style="max-height: 200px;" class="img-fluid rounded border">

                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <a href="{{ route('admin.portfolio.index') }}" class="btn btn-secondary mr-4">Batal</a>
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
