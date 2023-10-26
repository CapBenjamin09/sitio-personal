<x-layouts.app>

    <x-hero>
        <x-slot name="image">storage/img/hero.png</x-slot>

        <x-slot name="title">Inicio</x-slot>

        <x-slot name="content">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid dolorem eaque id
            laudantium nobis officia possimus quibusdam soluta unde veniam. Beatae dicta fuga iste natus
            necessitatibus possimus quod, sit vero!
        </x-slot>

        <x-slot name="first">
            Ver Portafolio
        </x-slot>

        <x-slot name="secondary">
            Sobre mi
        </x-slot>

    </x-hero>

    <hr class="max-w-screen-xl h-px mb-8 bg-gray-200 border-0 dark:shadow-2xl mx-auto">

    <div class="max-w-screen-xl mx-auto px-5 grid place-items-center pb-8 md:pt-12 md:pb-24">
        <div class="grid mb-20">
            <x-title>Más Información</x-title>
        </div>

        <div class="grid grid-cols-2 gap-12">
            <x-card>
                <x-slot name="image">storage/img/image.jpg</x-slot>
                <x-slot name="title">Mis proyectos</x-slot>
                <x-slot name="text">Lorem ipsum dolor sit amet, consectetur adipisicing.</x-slot>
            </x-card>
            <x-card>
                <x-slot name="image">storage/img/image.jpg</x-slot>
                <x-slot name="title">Sobre mi</x-slot>
                <x-slot name="text">Lorem ipsum dolor sit amet, consectetur adipisicing.</x-slot>
            </x-card>
        </div>
    </div>


</x-layouts.app>
