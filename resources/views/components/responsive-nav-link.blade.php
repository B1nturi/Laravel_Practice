@props(['active'])

@php
$classes = ($active ?? false)
            // Active State: Increased text weight, slightly darker indigo border, and a very subtle background
            ? 'block w-full ps-4 pe-4 py-2 border-l-4 border-indigo-600 dark:border-indigo-400 text-start text-base font-semibold text-indigo-700 dark:text-indigo-300 bg-indigo-50 dark:bg-gray-800/50 focus:outline-none focus:text-indigo-800 dark:focus:text-indigo-200 focus:bg-indigo-100 dark:focus:bg-gray-700/50 focus:border-indigo-700 dark:focus:border-indigo-300 transition duration-150 ease-in-out'
            
            // Inactive State: Stronger contrast on hover, but still subtle background
            : 'block w-full ps-4 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700/50 hover:border-gray-300 dark:hover:border-gray-600 focus:outline-none focus:text-gray-800 dark:focus:text-gray-200 focus:bg-gray-100 dark:focus:bg-gray-700/50 focus:border-gray-300 dark:focus:border-gray-600 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>