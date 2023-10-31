<x-layouts.app>
    <div class="max-w-screen-xl mx-auto px-5 grid lg:grid-cols-2 place-items-center pt-10 md:pt-2 md:pb-12">
        <div class="py-6 md:order-1 hidden md:block">
            <img src="{{ asset('./images/projects.png') }}" height="600" width="600" alt="">
        </div>
        <div>
            <x-title>
                Portafolio
            </x-title>

            <p class="text-lg mt-4 text-slate-600 max-w-xl">
                Mi portafolio de proyectos web es una recopilación de mis trabajos más destacados en el campo del
                diseño y desarrollo web. Cada proyecto en mi portafolio representa un desafío único que abordé con creatividad
                y habilidad técnica.
            </p>
            @auth
                <div class="mt-6 flex flex-col sm:flex-row gap-3">
                    <x-a-button type="black" href="{{ route('portfolio.create') }}">Crear nuevo proyecto</x-a-button>
                </div>
            @endauth

        </div>
    </div>

    <hr class="max-w-screen-xl h-px mb-8 bg-gray-200 border-0 dark:shadow-2xl mx-auto">

    <div class="max-w-screen-xl mx-auto px-5 grid place-items-center pb-8 md:pt-12 md:pb-24">
        <div class="grid mb-20">
            <x-title>Proyectos realizados</x-title>
        </div>
        <div class="grid grid-cols-2 gap-12">
            @foreach($projects as $project)
                <div class="flex flex-col items-center mx-2 mt-5 bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ $project->image_path }}" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $project->name }}</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $project->detail }}</p>

                        @auth
                            <div class="grid grid-cols-4 gap-2">
                                <x-a-button type="primary" class="max-w-fit h-10" href="{{ route('portfolio.edit', $project) }}">Editar</x-a-button>

                                <form action="{{ route('portfolio.destroy', $project) }}" method="post" class="inline">
                                    @csrf
                                    @method('delete')

                                    <x-button class="inline" type="danger">Eliminar</x-button>
                                </form>
                            </div>
                        @endauth
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layouts.app>
