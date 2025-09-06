@extends('layouts.layout_admin')


@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Inputs</h4>
            </div>

            <form class="card-body" action="{{ route('admin.main-images.update', $mainImage->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="image" class="form-label">Upload Gambar</label>
                            <input class="form-control" type="file" id="image" name="image">
                            @error('image')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Preview Gambar -->
                        <div class="mt-2">
                            <img id="previewImage" src="{{ asset($mainImage->image) }}" alt="Preview Gambar"
                                style="max-height: 200px;" class="img-fluid rounded border">
                        </div>

                        <h6>Status</h6>
                        <fieldset class="form-group">
                            <select class="form-select" id="basicSelect" name="status" required>
                                <option disabled selected hidden>Pilih Status</option>
                                <option class="text-success" value="aktif"
                                    {{ old('status', $mainImage->status) == 'aktif' ? 'selected' : '' }}>Aktif</option>
                                <option class="text-danger" value="nonaktif"
                                    {{ old('status', $mainImage->status) == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                            </select>
                        </fieldset>
                    </div>
                </div>
                <div class="mt-5">
                    <a href="{{ route('admin.main-image.index') }}" class="btn btn-secondary mr-4">Batal</a>
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
