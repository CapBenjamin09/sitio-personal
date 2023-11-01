<x-layouts.app>
    <div class="justify-center grid mt-10">
        <h1 class="text-5xl text-gray-800 font-bold lg:tracking-tight xl:tracking-tighter">
            Contáctanos
        </h1>
    </div>
    <div class="flex flex-col items-center mt-10 px-4 py-8 mx-auto md:h-screen lg:py-0">
        <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
            <div class="md:space-y-6 sm:p-8 grid justify-center">
                @if(session('status'))
                    <x-alert-form type="info">
                        {{ session('status') }}
                    </x-alert-form>
                    @enderror
                <h1 class="text-xl font-bold  my-0 text-gray-900 md:text-2xl justify-center ">
                    ¿Tienes alguna duda?
                    <x-label>Dejame tus datos y con gusto me comunico contigo.</x-label>
                </h1>
                <form method="post" action="{{ route('contact.store') }}">
                    @csrf

                    @include('contact.form')

                    <div class="grid grid-cols-1 my-2">
                        <x-button type="black" class="">Guardar</x-button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</x-layouts.app>
