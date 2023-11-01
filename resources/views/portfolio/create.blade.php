<x-layouts.app>
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <h1 class="text-xl font-bold leading-tight tracking-tight my-0 text-gray-900 md:text-2xl">
                Crear nuevo proyecto
                <x-label>Al crear un proyecto se mostrará en el apartado de <b>proyectos realizados</b>.</x-label>
            </h1>

            @if(session('status'))
                <x-error-form>
                    {{ session('status') }}
                </x-error-form>
                @enderror
                <form class="space-y-4 md:space-y-6" method="post" action="{{ route('portfolio.store') }}" enctype="multipart/form-data">
                    @csrf

                    @include('portfolio.form')

                    <div class="grid grid-cols-2 gap-2">
                        <x-button type="info" class="grid-cols-1">Crear Proyecto</x-button>
                        <x-a-button type="primary" href="{{ route('portfolio.index') }}" class="grid-cols-3">Regresar</x-a-button>
                    </div>
                </form>
        </div>
    </div>
    </div>
</x-layouts.app>
