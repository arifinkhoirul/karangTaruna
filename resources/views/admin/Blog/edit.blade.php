@extends('layouts.layout_admin')


@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Inputs</h4>
            </div>

            <form class="card-body" action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul"
                                value="{{ old('judul', $blog->judul) }}" placeholder="Enter email">
                            @error('judul')
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
                            <img id="previewImage" src="{{ asset($blog->image) }}" alt="Preview Gambar"
                                style="max-height: 200px;" class="img-fluid rounded border">
                        </div>

                        <div class="form-group mt-3">
                            <label for="narasi_blog" class="form-label">Narasi</label>
                            <textarea class="form-control" id="narasi_blog" name="narasi_blog" rows="3">{{ old('narasi_blog', $blog->narasi_blog) }}</textarea>
                            @error('narasi_blog')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tanggal_post">Tanggal Post</label>
                            <input type="date" class="form-control" id="tanggal_post" name="tanggal_post"
                                value="{{ old('tanggal_post', $blog->tanggal_post) }}" placeholder="Enter Tanggal">
                            @error('tanggal_post')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <a href="{{ route('blog.index') }}" class="btn btn-secondary mr-4">Batal</a>
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
