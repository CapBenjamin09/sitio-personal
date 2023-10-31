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
                    <div>
                        <x-label for="email">Nombre de proyecto:</x-label>
                        <x-input-form type="text" name="name" value="{{ old('name') }}" id="email" placeholder="Escribe aqui el nombre del proyecto"/>
                        @error('name')
                        <x-error-form>
                            {{ $message }}
                        </x-error-form>
                        @enderror

                    </div>
                    <div>
                        <x-label for="password">Descripción del proyecto:</x-label>
                        <x-text-area-form name="detail" value="{{ old('detail') }}" id="detail" placeholder="Escribe la descripción del proyecto..."/>
                        @error('detail')
                        <x-error-form>
                            {{ $message }}
                        </x-error-form>
                        @enderror
                    </div>
                    <div>
                        <x-label for="image_path">Imagen de proyecto:</x-label>
                        <x-input-form type="file" name="image_path" id="image_path" accept="image/*"/>
                        @error('name')
                        <x-error-form>
                            {{ $message }}
                        </x-error-form>
                        @enderror

                    </div>
                    <x-button type="black" class="w-full h-10">Crear proyecto</x-button>
                </form>
        </div>
    </div>
    </div>
</x-layouts.app>
