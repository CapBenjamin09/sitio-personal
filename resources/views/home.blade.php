<x-layouts.app>

    <div class="max-w-screen-xl mx-auto px-5 grid lg:grid-cols-2 place-items-center pt-16 md:pt-12 md:pb-12">
        <div class="py-6 md:order-1 hidden md:block">
            <img src="{{ asset('./images/hero.png') }}" alt="">
        </div>
        <div>
            <x-title>
                Inicio
            </x-title>

            <p class="text-lg mt-4 text-slate-600 max-w-xl">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid dolorem eaque id
                laudantium nobis officia possimus quibusdam soluta unde veniam. Beatae dicta fuga iste natus
                necessitatibus possimus quod, sit vero!
            </p>

            <div class="mt-6 flex flex-col sm:flex-row gap-3">
                <x-a-button type="primary" href="{{ route('portfolio.index') }}">Portafolio</x-a-button>
                <x-a-button type="black" href="{{ route('about-me') }}">Sobre mi</x-a-button>
            </div>
        </div>
    </div>

    <hr class="max-w-screen-xl h-px mb-8 bg-gray-200 border-0 dark:shadow-2xl mx-auto">

    <div class="max-w-screen-xl mx-auto px-5 grid place-items-center pb-8 md:pt-12 md:pb-24">
        <div class="grid mb-20">
            <x-title>Más Información</x-title>
        </div>

        <div class="grid grid-cols-2 gap-12">
            <x-card>
                <x-slot name="image">images/hamburguesa-inicio.jpg</x-slot>
                <x-slot name="title">Mis proyectos</x-slot>
                <x-slot name="text">Lorem ipsum dolor sit amet, consectetur adipisicing.</x-slot>
            </x-card>
            <x-card>
                <x-slot name="image">images/hamburguesa-inicio.jpg</x-slot>
                <x-slot name="title">Sobre mi</x-slot>
                <x-slot name="text">Lorem ipsum dolor sit amet, consectetur adipisicing.</x-slot>
            </x-card>
        </div>
    </div>


</x-layouts.app>
