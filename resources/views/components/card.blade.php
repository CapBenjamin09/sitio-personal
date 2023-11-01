<a class="flex flex-col items-center mx-2 mt-5 bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100">
    <img class="object-cover w-full rounded-t-lg h-96 md:h-60 md:w-48 md:rounded-none md:rounded-l-lg" src="{{ $image }}" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $title }}</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $text }}</p>
    </div>
</a>
