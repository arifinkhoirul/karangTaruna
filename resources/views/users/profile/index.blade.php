@extends('layouts.layout_user')


@section('user_content')
    <div class="min-h-screen bg-red-50 flex items-center justify-center p-6">
        <div class="w-full max-w-5xl bg-white rounded-xl shadow-md grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Kiri: Profil Card -->
            <div class="flex flex-col items-center justify-center p-6">
                <img src="{{ asset($user->image) }}" alt="Profile Photo"
                    class="w-32 h-32 rounded-full border-4 border-red-500">
                <h2 class="mt-4 text-xl font-semibold">{{ $user->name }}</h2>
                <p class="">Junior Software Engineer</p>
                {{-- {{session('image')}} --}}
            </div>

            <!-- Kanan: Form -->
            {{-- <div class="md:col-span-2 p-6">
                <form class="space-y-5" action="{{ route('user.profile.update', session('id')) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <!-- Input Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-red-700">Masukkan Nama Baru</label>
                        <input type="text" id="name" name="name"
                            class="mt-1 block w-full border rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-red-400 focus:border-red-400"
                            placeholder="Enter your name" value="{{ old('name', session('name')) }}">
                    </div>

                    <!-- Upload Image -->
                    <div>
                        <label for="image" class="block text-sm font-medium text-red-700">Upload Image</label>
                        <input type="file" id="image" name="image"
                            class="mt-1 block w-full border rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-red-400 focus:border-red-400 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-red-50 file:text-red-700 hover:file:bg-red-100">
                    </div>

                    <!-- Preview -->
                    <div class="mt-3">
                        <img id="preview-image" src="{{ asset('image') }}" alt="Preview Image"
                            class="w-32 h-32 object-cover rounded-md border border-red-300 hidden">
                    </div>

                    <!-- Button -->
                    <div class="flex justify-end">
                        <button type="submit"
                            class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md transition">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div> --}}

            <div class="md:col-span-2 p-6">
                <form class="space-y-5" action="{{ route('user.profile.store', $user->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    {{-- @method('PUT') --}}
                    <!-- Input Name -->
                    {{-- <div>
                        <label for="name" class="block text-sm font-medium text-red-700">Masukkan Nama Baru</label>
                        <input type="text" id="name" name="name"
                            class="mt-1 block w-full border rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-red-400 focus:border-red-400"
                            placeholder="Enter your name" value="{{ old('name', session('name')) }}">
                    </div> --}}

                    <!-- Upload Image -->
                    <div>
                        <label for="image" class="block text-sm font-medium text-red-700">Upload Image</label>
                        <input type="file" id="image" name="image"
                            class="mt-1 block w-full border rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-red-400 focus:border-red-400 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-red-50 file:text-red-700 hover:file:bg-red-100">
                    </div>

                    <!-- Preview -->
                    <div class="mt-3">
                        {{-- <img src="{{ asset(session('image')) }}" alt="">S --}}

                        <img id="preview-image" src="{{ asset($user->name) }}" alt="Preview Image"
                            class="w-32 h-32 object-cover rounded-md border border-red-300 hidden">
                    </div>

                    <!-- Button -->
                    <div class="flex justify-end">
                        <button type="submit"
                            class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md transition">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const inputImage = document.getElementById('image');
        const previewImage = document.getElementById('preview-image');

        inputImage.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    previewImage.src = event.target.result;
                    previewImage.classList.remove('hidden'); // tampilkan gambar
                };
                reader.readAsDataURL(file);
            } else {
                previewImage.src = '';
                previewImage.classList.add('hidden'); // sembunyikan jika tidak ada file
            }
        });
    </script>
@endsection
