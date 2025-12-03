<button {{ $attributes->merge([
    'type' => 'button',
    'class' => '
        inline-flex items-center justify-center 
        px-4 py-2.5 bg-white dark:bg-gray-800 
        border border-gray-200 dark:border-gray-700 
        rounded-lg font-bold text-sm text-gray-700 dark:text-gray-300 uppercase 
        tracking-wide shadow-sm 
        hover:bg-gray-100 dark:hover:bg-gray-700 
        focus:outline-none focus:ring-4 focus:ring-indigo-500/50 focus:ring-offset-2 dark:focus:ring-offset-gray-800 
        disabled:opacity-50 transition ease-in-out duration-200
    '
]) }}>
    {{ $slot }}
</button>