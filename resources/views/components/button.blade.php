@props(['type' => 'info'])

@php
    switch ($type) {
        case 'primary':
            $classes = 'text-black rounded text-center cursor-pointer transition focus-visible:ring-2 ring-offset-2 ring-gray-200 px-5 py-2.5 bg-white border-2 border-black hover:bg-gray-100 text-black flex gap-1 items-center justify-center';
            break;

        case 'black':
            $classes = 'rounded text-center cursor-pointer transition focus-visible:ring-2 ring-offset-2 ring-gray-200 px-5 py-2.5 bg-black text-white hover:bg-gray-800 border-2 border-transparent flex gap-1 items-center justify-center';
            break;

        case 'danger':
            $classes = 'rounded text-center cursor-pointer transition focus-visible:ring-2 ring-offset-2 ring-gray-200 px-5 py-2.5 bg-red-600 text-white hover:bg-red-700 border-2 border-transparent flex gap-1 items-center justify-center';
            break;

        case 'info':
            $classes = 'rounded text-center cursor-pointer transition focus-visible:ring-2 ring-offset-2 ring-gray-200 px-5 py-2.5 bg-blue-600 text-white hover:bg-blue-700 border-2 border-transparent flex gap-1 items-center justify-center';

        default:
            $classes = 'rounded text-center cursor-pointer transition focus-visible:ring-2 ring-offset-2 ring-gray-200 px-5 py-2.5 bg-blue-600 text-white hover:bg-blue-700 border-2 border-transparent flex gap-1 items-center justify-center';
    }
@endphp

<button {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>
