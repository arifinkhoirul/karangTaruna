@extends('layouts.layout_admin')




@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Kelola Data Pemasukan Eskternal </h3>
                    <p class="text-subtitle text-muted">Tabel interaktif untuk memudahkan pencarian, pengurutan, dan navigasi data</p>
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
                Tambah Pemasukan
            </button>
        </div>

        <!-- Modal Tambah Blog -->
        <div class="modal fade" id="modalTambahBlog" tabindex="-1" aria-labelledby="modalTambahBlogLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content px-3 py-3">
                    <form action="{{ route('admin.pemasukan-eksternal.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTambahBlogLabel">Tambah Data Pemasukan Eksternal Kas</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">

                            <h6>Bulan</h6>
                            <fieldset class="form-group">
                                <select class="form-select" id="basicSelect" name="bulan" required>
                                    <option disabled selected hidden>Pilih Bulan</option>
                                    <option class="" value="jan" {{ old('bulan') == 'jan' ? 'selected' : '' }}>Jan
                                    </option>
                                    <option class="" value="feb" {{ old('bulan') == 'feb' ? 'selected' : '' }}>Feb
                                    </option>
                                    <option class="" value="mar" {{ old('bulan') == 'mar' ? 'selected' : '' }}>Mar
                                    </option>
                                    <option class="" value="apr" {{ old('bulan') == 'apr' ? 'selected' : '' }}>Apr
                                    </option>
                                    <option class="" value="mei" {{ old('bulan') == 'mei' ? 'selected' : '' }}>Mei
                                    </option>
                                    <option class="" value="jun" {{ old('bulan') == 'jun' ? 'selected' : '' }}>Jun
                                    </option>
                                    <option class="" value="jul" {{ old('bulan') == 'jul' ? 'selected' : '' }}>Jul
                                    </option>
                                    <option class="" value="agu" {{ old('bulan') == 'agu' ? 'selected' : '' }}>Agu
                                    </option>
                                    <option class="" value="sep" {{ old('bulan') == 'sep' ? 'selected' : '' }}>Sep
                                    </option>
                                    <option class="" value="okt" {{ old('bulan') == 'okt' ? 'selected' : '' }}>Okt
                                    </option>
                                    <option class="" value="nov" {{ old('bulan') == 'nov' ? 'selected' : '' }}>Nov
                                    </option>
                                    <option class="" value="des" {{ old('bulan') == 'des' ? 'selected' : '' }}>Des
                                    </option>
                                </select>
                            </fieldset>

                            <div class="mb-3">
                                <label for="tahun" class="form-label fw-bold">Tahun</label>
                                <input type="text" class="form-control" id="tahun" value="{{ old('tahun') }}"
                                    name="tahun" placeholder="Masukkan Tahun" required>
                            </div>

                            <div class="mb-3">
                                <label for="jumlah" class="form-label fw-bold">Jumlah</label>
                                <input type="number" class="form-control" id="jumlah" name="jumlah"
                                    placeholder="Masukkan Jumlah Bayar" required>
                            </div>

                            <div class="mb-3">
                                <label for="keterangan" class="form-label fw-bold">Keterangan</label>
                                <input type="text" class="form-control" id="keterangan" name="keterangan"
                                    placeholder="Masukkan keterangan Pengeluaran" required>
                            </div>

                            <div class="mb-3">
                                <label for="tanggal_pemasukan" class="form-label fw-bold">Tanggal Pemasukan</label>
                                <input type="date" class="form-control date" id="tanggal_pemasukan"
                                    name="tanggal_pemasukan" required placeholder="Pilih Tanggal Pemasukan">
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
                    class="bi bi-exclamation-circle"></i> <span
                    class="ms-1">{{ ucwords(session('status_delete')) }}</span>.
            </div>
        @endif
        {{-- Tabel Sectioon --}}
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Data Pemasukan Eksternal
                    </h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Bulan</th>
                                <th>Tahun</th>
                                <th>Jumlah</th>
                                <th>Keterangan</th>
                                <th>Tanggal Pemasukan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allPemasukanEskternal as $PemasukanEskternal)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $PemasukanEskternal->bulan }}</td>
                                    <td>{{ $PemasukanEskternal->tahun }}</td>
                                    <td>Rp.{{ number_format($PemasukanEskternal->jumlah) }}</td>
                                    <td>{{ $PemasukanEskternal->keterangan }}</td>
                                    <td>{{ \Carbon\Carbon::parse($PemasukanEskternal->tanggal_pengeluaran)->format('d F Y') }}
                                    </td>
                                    <td class="d-flex gap-2">
                                        <a href="{{ route('admin.pemasukan-eksternal.edit', $PemasukanEskternal->id) }}"
                                            class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form action="{{ route('admin.pemasukan-eksternal.destroy', $PemasukanEskternal->id) }}"
                                            method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#confirmDeleteModal-{{ $PemasukanEskternal->id }}">
                                                <i class="bi bi-trash"></i>
                                            </button>


                                            <!-- Modal alert hapus-->
                                            <div class="modal fade" id="confirmDeleteModal-{{ $PemasukanEskternal->id }}"
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
                    <button class="btn btn-success">Rp {{ number_format($totalPengeluaran, '0', ',', '.') }}</button>

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

    </script>
@endsection
