<nav class="bg-gray-50 border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ route('home') }}" class="flex items-center">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap">Sitio-Personal</span>
        </a>
        @auth
            <div>
                ¡Bienvenido de nuevo {{ auth()->user()->name }}!
            </div>
        @endauth
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-gray-50 justify-center items-center">
                <li>
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">Inicio</x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('home')"  :active="request()->routeIs('home')">Sobre mi</x-nav-link>
                </li>
                <li>
                    <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Services</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Contact</a>
                </li>
                @if(!request()->routeIs('login.index'))
                    @guest()
                        <li>
                            <x-a-button href="{{ route('login.index') }}">Login</x-a-button>
                        </li>
                    @endguest
                @endif
                @auth
                    <li>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <x-button type="danger" class="">Logout</x-button>
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

