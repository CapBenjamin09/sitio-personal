<div class="max-w-screen-xl mx-auto px-5 grid lg:grid-cols-2 place-items-center pt-16 md:pt-12 md:pb-12">
    <div class="py-6 md:order-1 hidden md:block">
        <img src="{{ asset($image) }}" alt="">
    </div>
    <div>
        <x-title>
            {{ $title }}
        </x-title>
        <p class="text-lg mt-4 text-slate-600 max-w-xl">
            {{ $content }}
        </p>
    </div>
</div>
