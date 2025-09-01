@extends('layouts.layout_admin')




@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Kelola Blog</h3>
                    <p class="text-subtitle text-muted">A sortable, searchable, paginated table without
                        dependencies thanks to simple-datatables.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>


        <!-- Tombol Tambah Blog -->
        <div class="d-flex justify-content-end mb-3">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahBlog">
                Tambah Event
            </button>
        </div>

        <!-- Modal Tambah Blog -->
        <div class="modal fade " id="modalTambahBlog" tabindex="-1" aria-labelledby="modalTambahBlogLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content px-3 py-3">
                    <form action="{{ route('admin.event.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTambahBlogLabel">Tambah Blog Baru</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="nama_event" class="form-label">Nama Event</label>
                                <input type="text" class="form-control" id="nama_event" name="nama_event" required>
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Gambar</label>
                                <input type="file" class="form-control" id="image" name="image" required>

                                <!-- Preview Gambar -->
                                <div class="mt-2">
                                    <img id="previewImage" src="" alt="Preview Gambar"
                                        style="max-height: 200px; display: none;" class="img-fluid rounded border">
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
                                <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" required>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
                                <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" required>
                            </div>
                            <div class="mb-3">
                                <label for="lokasi" class="form-label">Lokasi</label>
                                <input type="text" class="form-control" id="lokasi" name="lokasi" required>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>




        @if (session('status'))
            <div id="notification" class="alert alert-light-success color-success alert-dismissible fade show">
                <i class="bi bi-check-circle"></i> <span class="ms-1">{{ ucwords(session('status')) }}</span>
            </div>
        @elseif (session('status_delete'))
            <div id="notification" class="alert alert-light-danger color-danger alert-dismissible fade show"><i
                    class="bi bi-exclamation-circle"></i> <span class="ms-1">{{ ucwords(session('status_delete')) }}</span>.
            </div>
        @endif
        {{-- Tabel Sectioon --}}
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Simple Datatable
                    </h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Event</th>
                                <th>Gambar</th>
                                <th>Deskripsi</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Selesai</th>
                                <th>Lokasi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($events as $event)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="text-truncate">{{ $event->nama_event }}</td>
                                    <td>
                                        <img src="{{ asset($event->image) }}" alt="{{ $event->nama_event }}" width="80"
                                            class="img-thumbnail">
                                    </td>
                                    <td class="text-truncate" style="max-width: 250px">{{ $event->deskripsi }}</td>
                                    <td>{{ $event->tanggal_mulai }}</td>
                                    <td>{{ $event->tanggal_selesai }}</td>
                                    <td>{{ $event->lokasi }}</td>
                                    <td class="d-flex gap-2">
                                        <a href="{{ route('admin.event.edit', $event->id) }}" class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form action="{{ route('admin.event.delete', $event->id) }}" method="POST"
                                            class="d-inline"
                                            onsubmit="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini ?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i
                                                    class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>




    <script>
        setTimeout(() => {
            const alert = document.getElementById('notification');
            if (alert) {
                // trigger close pakai bootstrap
                let bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            }
        }, 3000); // 3 detik



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
