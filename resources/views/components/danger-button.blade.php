<button {{ $attributes->merge([
    'type' => 'submit',
    'class' => '
        inline-flex items-center justify-center 
        px-4 py-2.5 bg-red-700 border border-transparent 
        rounded-lg font-bold text-sm text-white uppercase 
        tracking-wide shadow-md 
        hover:bg-red-600 active:bg-red-800 
        focus:outline-none focus:ring-4 focus:ring-red-500/50 focus:ring-offset-2 dark:focus:ring-offset-gray-800 
        transition ease-in-out duration-200
    '
]) }}>
    {{ $slot }}
</button>