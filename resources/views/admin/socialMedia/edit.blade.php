@extends('layouts.layout_admin')


@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Inputs</h4>
            </div>

            <form class="card-body" action="{{ route('admin.social-media.update', $socialMedia->id) }}" method="POST"
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
                                        {{ old('member_id', $socialMedia->member_id) == $member->id ? 'selected' : '' }}>
                                        {{ $member->teenager->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('teenager_id')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </fieldset>

                        <div class="mb-3">
                            <label for="instagram" class="form-label">Instagram</label>
                            <input type="text" class="form-control" id="instagram" value="{{ old('instagram', $socialMedia->instagram) }}"
                                name="instagram" placeholder="Masukkan Link Instgaram" >
                            @error('instagram')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tiktok" class="form-label">Tiktok</label>
                            <input type="text" class="form-control" id="tiktok" value="{{ old('tiktok', $socialMedia->tiktok) }}"
                                name="tiktok" placeholder="Masukkan Link Instgaram" >
                            @error('tiktok')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="twitter" class="form-label">Twitter</label>
                            <input type="text" class="form-control" id="twitter" value="{{ old('twitter', $socialMedia->twitter) }}"
                                name="twitter" placeholder="Masukkan Link Instgaram" >
                            @error('twitter')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="mt-5">
                    <a href="{{ route('admin.social-media.index') }}" class="btn btn-secondary mr-4">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </section>
@endsection
