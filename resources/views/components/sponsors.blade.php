<div
    class="w-full flex overflow-hidden relative group
                [mask-image:linear-gradient(to_right,transparent_0,black_128px,black_calc(100%-200px),transparent_100%)]
                [-webkit-mask-image:linear-gradient(to_right,transparent_0,black_128px,black_calc(100%-200px),transparent_100%)] logo-container">
    <div id="logo"
        class="animate-infiniteScrool flex gap-16 logo pr-16 items-center flex-shrink-0 [&_li]:mx-8 cursor-pointer">
        @foreach ($sponsors as $sponsor)
            <img class=" w-32 h-auto object-contain grayscale hover:grayscale-0 transition duration-300 opacity-50 hover:opacity-100"
                src="{{ asset($sponsor->image) }}" alt="{{ $sponsor->name }}" />
        @endforeach
    </div>
</div>
