<x-layouts.app>

    <div class="grid justify-center mx-auto my-10 max-w-5xl p-6 bg-white border border-gray-200 rounded-lg shadow">
        <div class="grid justify-center">
            <h1 class="text-4xl text-gray-800 mb-4 justify-center items-center font-bold lg:tracking-tight xl:tracking-tighter">
                Información de contacto
            </h1>
        </div>
        <div>
            <h5 class="text-lg font-bold tracking-tight text-gray-900">Nombre:
                <p class="font-normal text-gray-700 inline">
                    {{ $contact->name }}
                </p>
            </h5>
        </div>
        <div>
            <h5 class="text-lg font-bold tracking-tight text-gray-900">Email:
                <p class="font-normal text-gray-700 inline">
                    {{ $contact->email }}
                </p>
            </h5>
        </div>
        <div>
            <h5 class="text-lg font-bold tracking-tight text-gray-900">Teléfono:
                <p class="font-normal text-gray-700 inline">
                    {{ $contact->phone }}
                </p>
            </h5>
        </div>
        <div>
            <h5 class="text-lg font-bold tracking-tight text-gray-900">Titulo:
                <p class="font-normal text-gray-700 inline">
                    {{ $contact->title }}
                </p>
            </h5>
        </div>
        <div>
            <h5 class="text-lg font-bold tracking-tight text-gray-900">Consulta:</h5>
            <p class="font-normal text-gray-700 inline">
                {{ $contact->detail }}
            </p>
        </div>
        <x-a-button class="max-w-fit mt-10" href="{{ route('contact.index') }}">Regresar</x-a-button>
    </div>

</x-layouts.app>
