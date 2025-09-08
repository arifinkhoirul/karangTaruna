@extends('layouts.layout_admin')




@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Kelola Data Anggota</h3>
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
                Tambah Anggota
            </button>
        </div>

        <!-- Modal Tambah Blog -->
        <div class="modal fade " id="modalTambahBlog" tabindex="-1" aria-labelledby="modalTambahBlogLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content px-3 py-3">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTambahBlogLabel">Tambah Data Anggota</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <h6>Nama Remaja</h6>
                            <fieldset class="form-group">
                                <select class="form-select" id="basicSelect" name="teenager_id" required>
                                    <option disabled selected hidden>Pilih Nama Remaja</option>
                                    @foreach ($teenagers as $teenager)
                                        <option value="{{ $teenager->id }}" {{ old('teenager_id') == $teenager->id ? 'selected' : '' }}>
                                            {{ $teenager->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </fieldset>

                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <input type="text" class="form-control" id="jabatan" value="{{ old('jabatan') }}"
                                    name="jabatan"  placeholder="Masukkan Nama" required>
                            </div>

                            <h6>Status</h6>
                            <fieldset class="form-group">
                                <select class="form-select" id="basicSelect" name="status" required>
                                    <option disabled selected hidden>Pilih Status Remaja</option>
                                    <option class="text-success" value="aktif" {{ old('status') == 'aktif' ? 'selected' : '' }}>Aktif</option>
                                    <option class="text-danger" value="tidak aktif" {{ old('status') == 'tidak aktif' ? 'selected' : '' }}>Tidak
                                        Aktif</option>
                                </select>
                            </fieldset>
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
                    class="bi bi-exclamation-circle"></i> <span
                    class="ms-1">{{ ucwords(session('status_delete')) }}</span>.
            </div>
        @endif
        {{-- Tabel Sectioon --}}
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Data Anggota Karang Taruna Rt 05
                    </h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                {{-- <th>Image</th> --}}
                                <th>Jabatan</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($members as $member)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $member->teenager->name }}</td>
                                    {{-- <td>
                                        <img src="{{ asset($member->teenager->image) }}" alt="{{ $member->teenager->name }}"
                                            width="80" class="img-thumbnail">
                                    </td> --}}
                                    <td>{{ $member->jabatan }}</td>
                                    @if ($member->status == 'aktif')
                                        <td class="text-success">{{ $member->status }}</td>
                                    @else
                                        <td class="text-danger">{{ $member->status }}</td>
                                    @endif
                                    <td class="d-flex gap-2">
                                        <a href="{{ route('admin.member.edit', $member->id) }}" class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form action="{{ route('admin.member.destroy', $member->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#confirmDeleteModal-{{ $member->id }}">
                                                <i class="bi bi-trash"></i>
                                            </button>


                                            <!-- Modal alert hapus-->
                                            <div class="modal fade" id="confirmDeleteModal-{{ $member->id }}"
                                                tabindex="-1" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content rounded-3 shadow">
                                                        <div class="modal-header border-0">
                                                            <h5 class="modal-title fw-bold text-danger"
                                                                id="confirmDeleteLabel">
                                                                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                                                Konfirmasi Hapus
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Tutup"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Apakah Anda yakin ingin menghapus data ini? Data yang dihapus
                                                            tidak bisa di kembalikan lagi.
                                                        </div>
                                                        <div class="modal-footer border-0">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-danger">
                                                                <i class="bi bi-trash"></i> Hapus
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
        }, 1500); // 3 detik



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
