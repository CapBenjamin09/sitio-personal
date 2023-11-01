<x-layouts.app>

    <div class="block mx-auto max-w-5xl p-6 bg-white border border-gray-200 rounded-lg shadow my-4">
        <div class="justify-center grid">
            <h1 class="text-4xl text-gray-800 mb-4 font-bold lg:tracking-tight xl:tracking-tighter">
                Lista de contactos
            </h1>
        </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            #
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nombre
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Titulo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Acciones
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contacts as $contact)
                        <tr class="bg-gray-100 border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $contact->id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $contact->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $contact->title }}
                            </td>
                            <td class="px-0 py-4">
                                <div class="grid grid-cols-2 gap-2 w-24">
                                    <x-a-button type="primary" class="max-w-fit h-8" href="{{ route('contact.show', $contact) }}">Ver</x-a-button>

                                    <form action="{{ route('contact.destroy', $contact) }}" method="post" class="inline">
                                        @csrf
                                        @method('delete')

                                        <x-button class="h-8" type="danger">Eliminar</x-button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="my-4">
                {{ $contacts->links() }}
            </div>
        </div>
    </div>
</x-layouts.app>
