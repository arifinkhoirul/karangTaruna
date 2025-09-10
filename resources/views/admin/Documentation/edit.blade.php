@extends('layouts.layout_admin')


@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Documentation</h4>
            </div>

            <form class="card-body" action="{{ route('admin.documentation.update', $documentation->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="judul_dokumentasi" class="form-label">Judul Dokumentasi</label>
                            <input type="text" class="form-control" id="judul_dokumentasi" name="judul_dokumentasi" value="{{ old('judul_dokumentasi', $documentation->judul_dokumentasi) }}">
                            @error('judul_dokumentasi')
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
                        <div class="mt-2 mb-3">
                            <img id="previewImage" src="{{ asset($documentation->image) }}" alt="Preview Gambar"
                                style="max-height: 200px;" class="img-fluid rounded border">
                        </div>

                        <div class="mb-3">
                            <label for="link" class="form-label fw-bold">Link</label>
                            <input type="text" class="form-control" id="link"
                                value="{{ old('link', $documentation->link) }}" name="link" placeholder="Masukkan link">
                            @error('link')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <a href="{{ route('admin.documentation.index') }}" class="btn btn-secondary mr-4">Batal</a>
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
