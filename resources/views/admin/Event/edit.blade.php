@extends('layouts.layout_admin')


@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Inputs</h4>
            </div>

            <form class="card-body" action="{{ route('admin.event.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama_event">Nama Event</label>
                            <input type="text" class="form-control" id="nama_event" name="nama_event"
                                value="{{ old('nama_event', $event->nama_event) }}" placeholder="Enter Nama Event">
                            @error('nama_event')
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
                            <img id="previewImage" src="{{ asset($event->image) }}" alt="Preview Gambar"
                                style="max-height: 200px;" class="img-fluid rounded border">
                        </div>

                        <div class="form-group mt-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ old('deskripsi', $event->deskripsi) }}</textarea>
                            @error('deskripsi')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tanggal_mulai">Tanggal Mulai</label>
                            <input type="date" class="form-control date" id="tanggal_mulai" name="tanggal_mulai"
                                value="{{ old('tanggal_mulai', $event->tanggal_mulai) }}" placeholder="Enter Tanggal Mulai">
                            @error('tanggal_mulai')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tanggal_selesai">Tanggal Selesai</label>
                            <input type="date" class="form-control date" id="tanggal_selesai" name="tanggal_selesai"
                                value="{{ old('tanggal_selesai', $event->tanggal_selesai) }}" placeholder="Enter Tanggal Selesai">
                            @error('tanggal_selesai')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="lokasi">Lokasi</label>
                            <input type="text" class="form-control" id="lokasi" name="lokasi"
                                value="{{ old('lokasi', $event->lokasi) }}" placeholder="Enter Lokasi">
                            @error('lokasi')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <a href="{{ route('admin.event.index') }}" class="btn btn-secondary mr-4">Batal</a>
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
