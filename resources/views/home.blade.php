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
                "¡Bienvenidos a mi sitio web! Aquí, encontrarás una ventana a mi mundo profesional y creativo.
                Este sitio, construido con la potente plataforma Laravel, se compone de varios módulos diseñados para ofrecerte
                una visión completa de quién soy y lo que hago. En el módulo de 'Portafolio', podrás explorar mis trabajos pasados
                y proyectos destacados. La sección 'Sobre Mí' te permitirá conocer más sobre mi trayectoria, intereses y pasiones.
                Además, si deseas ponerte en contacto conmigo o discutir oportunidades de colaboración, simplemente dirígete a la página
                de 'Contacto'. ¡Espero que disfrutes explorando mi mundo a través de este sitio web!"
            </p>

        </div>
    </div>

    <hr class="max-w-screen-xl h-px mb-8 bg-gray-200 border-0 dark:shadow-2xl mx-auto">

    <div class="max-w-screen-xl mx-auto px-5 grid place-items-center pb-8 md:pt-12 md:pb-24">
        <div class="grid mb-20">
            <x-title>Más Información</x-title>
        </div>

        <div class="grid max-w-full grid-cols-2 gap-2">
            <a href="{{route('portfolio.index')}}" class="flex flex-col items-center mx-2 mt-5 bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-60 md:w-48 md:rounded-none md:rounded-l-lg" src="{{ asset('images/portfolio.jpg') }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Mi portafolio</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Aquí puedes ver los distintos proyectos desarrollados durante el semestre de Programación Web 2</p>
                </div>
            </a>
            <a href="{{route('about.index')}}" class="flex flex-col items-center mx-2 mt-5 bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-60 md:w-48 md:rounded-none md:rounded-l-lg" src="{{ asset('images/sobremi.jpg') }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Sobre mi</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Te explico un poco sobre mi.</p>
                </div>
            </a>
        </div>
    </div>


</x-layouts.app>
