@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-700 dark:text-red-400 space-y-2 italic mt-1']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>

    {{-- 
    If you want a more distinct alert box for the error (recommended for SaaS):
    
    <div {{ $attributes->merge(['class' => 'bg-red-50/70 dark:bg-red-900/20 border border-red-200 dark:border-red-800 p-2 rounded-lg mt-2']) }}>
        <ul class="text-sm text-red-700 dark:text-red-400 space-y-1">
            @foreach ((array) $messages as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    </div>
    --}}
@endif