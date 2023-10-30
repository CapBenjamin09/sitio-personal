<x-layouts.app>
    <section class="bg-white">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div href="" class="flex items-center mb-6 text-2xl font-semibold text-gray-900">
                <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
                Sitio-Personal
            </div>
            <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                        Bienvenido administrador!
                    </h1>
                    <form class="space-y-4 md:space-y-6" method="post" action="{{ route('login.authenticate') }}">
                        @csrf
                        <div>
                            <x-label for="email">Tu email:</x-label>
                            <x-input-form type="email" name="email" id="email" placeholder="name@mail.com"/>
                            @error('email')
                                <x-error-form>
                                    {{ $message }}
                                </x-error-form>
                            @enderror

                        </div>
                        <div>
                            <x-label for="password">Tu contraseña:</x-label>
                            <x-input-form type="password" name="password" id="password" placeholder="••••••••"/>
                            @error('password')
                            <x-error-form>
                                {{ $message }}
                            </x-error-form>
                            @enderror
                        </div>
                        <x-button class="w-full h-10">Iniciar Sesión</x-button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
