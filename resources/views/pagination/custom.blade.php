@if ($paginator->hasPages())
    <nav class="flex flex-wrap items-center justify-center gap-2 mt-8">
        {{-- Prev --}}
        @if ($paginator->onFirstPage())
            <span class="text-gray-300 p-1 inline-flex items-center cursor-not-allowed">
                <span class="w-10 h-10 sm:w-12 sm:h-12 rounded-full flex justify-center items-center">
                    <!-- ikon panah kiri -->
                    <svg width="7" height="12" viewBox="0 0 7 12" fill="none">
                        <path
                            d="M5.5 1L1.91421 4.58578C1.24755 5.25245 0.914213 5.58579 0.914213 6C0.914213 6.41421 1.24755 6.74755 1.91421 7.41421L5.5 11"
                            stroke="#FE0000" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </span>
            </span>
        @else
            <a class="text-gray-500 hover:text-textPrimary p-1 inline-flex items-center"
                href="{{ $paginator->previousPageUrl() }}">
                <span
                    class="w-10 h-10 sm:w-12 sm:h-12 rounded-full flex justify-center items-center hover:border hover:border-primary">
                    <!-- ikon panah kiri -->
                    <svg width="7" height="12" viewBox="0 0 7 12" fill="none">
                        <path
                            d="M5.5 1L1.91421 4.58578C1.24755 5.25245 0.914213 5.58579 0.914213 6C0.914213 6.41421 1.24755 6.74755 1.91421 7.41421L5.5 11"
                            stroke="#FE0000" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </span>
            </a>
        @endif

        {{-- Page Numbers --}}
        @foreach ($elements as $element)
            {{-- Tanda "..." --}}
            @if (is_string($element))
                <span
                    class="w-10 h-10 sm:w-12 sm:h-12 text-base sm:text-lg text-gray-500 inline-flex items-center justify-center">
                    {{ $element }}
                </span>
            @endif

            {{-- Array angka halaman --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span
                            class="w-10 h-10 sm:w-12 sm:h-12 text-base sm:text-lg bg-primary text-white inline-flex items-center justify-center rounded-full">
                            {{ $page }}
                        </span>
                    @else
                        <a class="w-10 h-10 sm:w-12 sm:h-12 text-base sm:text-lg text-gray-500 inline-flex items-center justify-center border border-gray-200 rounded-full hover:text-primary hover:border-primary"
                            href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next --}}
        @if ($paginator->hasMorePages())
            <a class="text-gray-500 hover:text-textPrimary p-1 inline-flex items-center"
                href="{{ $paginator->nextPageUrl() }}">
                <span
                    class="w-10 h-10 sm:w-12 sm:h-12 rounded-full flex justify-center items-center hover:border hover:border-primary">
                    <!-- ikon panah kanan -->
                    <svg width="7" height="12" viewBox="0 0 7 12" fill="none">
                        <path
                            d="M1.5 11L5.08578 7.41421C5.75245 6.74755 6.08579 6.41421 6.08579 6C6.08579 5.58579 5.75245 5.25245 5.08579 4.58579L1.5 1"
                            stroke="#FE0000" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </span>
            </a>
        @else
            <span class="text-gray-300 p-1 inline-flex items-center cursor-not-allowed">
                <span class="w-10 h-10 sm:w-12 sm:h-12 rounded-full flex justify-center items-center">
                    <!-- ikon panah kanan -->
                    <svg width="7" height="12" viewBox="0 0 7 12" fill="none">
                        <path
                            d="M1.5 11L5.08578 7.41421C5.75245 6.74755 6.08579 6.41421 6.08579 6C6.08579 5.58579 5.75245 5.25245 5.08579 4.58579L1.5 1"
                            stroke="#FE0000" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </span>
            </span>
        @endif
    </nav>
@endif
