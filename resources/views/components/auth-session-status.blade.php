@props(['status'])

@if ($status)
    <div {{ $attributes->merge([
            'class' => '
            bg-green-50 dark:bg-green-900/20 
            border border-green-200 dark:border-green-700 
            text-green-700 dark:text-green-300 
            font-medium text-sm p-3 rounded-lg 
            flex items-center space-x-2
        '
        ]) }}>

        <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>

        <span>
            {{ $status }}
        </span>
    </div>
@endif