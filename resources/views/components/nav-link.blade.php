@props(['active'])

@php
$classes = ($active ?? false)
            // Active State: Bolder text, thicker border, using a slightly deeper indigo
            ? 'inline-flex items-center px-1 pt-1 border-b-3 border-indigo-600 dark:border-indigo-400 text-sm font-semibold leading-5 text-gray-900 dark:text-gray-100 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            
            // Inactive State: Refined hover for a clean look
            : 'inline-flex items-center px-1 pt-1 border-b-3 border-transparent text-sm font-medium leading-5 text-gray-500 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 hover:border-indigo-300 dark:hover:border-indigo-600 focus:outline-none focus:text-indigo-600 dark:focus:text-indigo-400 focus:border-indigo-300 dark:focus:border-indigo-600 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>