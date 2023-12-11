@props([ 
    // Style
    'class' => !empty($class) ? $class : null,
    'icon' => !empty($icon) ? $icon : null,
    'style' => !empty($style) ? $style : 'primary',
    'size' => !empty($size) ? $size : null,
    
    // Button
    'type' => !empty($type) ? $type : null,
    
    // A
    'href' => !empty($href) ? $href : null,
    'target' => !empty($target) ? $target : null,
    'navigate' => !empty($navigate) ? $navigate : null,

    // Alpinejs
    'click' => !empty($click) ? $click : null,

    // Wire
    'wire' => !empty($wire) ? $wire : null,
])

<div>
    @if(empty($href))
    <button
        type="{{ $type }}"
        class="{{ $class }} 
        {{ $style == 'primary' ? 'text-white dark:bg-indigo-500 bg-indigo-600' : null }}
        {{ $style == 'secondary' ? 'text-white dark:bg-gray-500 bg-gray-600' : null }} 
        {{ $style == 'warning' ? 'text-white dark:bg-yellow-500 bg-yellow-600' : null }} 
        {{ $style == 'danger' ? 'text-white dark:bg-red-500 bg-red-600' : null }}
        {{ $style == 'none' ? 'text-black dark:text-white !bg-transparent !border-0 !shadow-none' : null }}
        flex items-center w-full px-5 py-3 transition duration-150 ease-out border border-transparent rounded-md shadow-sm whitespace-nowrap hover:opacity-80 disabled:opacity-70 hover:ease-in"
        wire:loading.attr="disabled"
        wire:target="{{$wire}}"
        x-on:click="{{$click}}"
    >
        @if(!empty($icon))
        <div class="flex justify-between w-full">
            <div class="flex items-center justify-start text-start">
                <svg class="w-5 h-5 rtl:-mr-1 ltr:-ml-1 ltr:mr-2 rtl:ml-2 text-white animate-spin 
                {{ $style == 'none' ? 'text-black dark:text-white' : 'text-white' }}
                " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" wire:loading wire:target="{{$wire}}">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                <h1 class="font-bold">
                    {{ $slot }}
                </h1>
            </div>
            <div class="flex items-center justify-end text-end">
                <i class="{{ $icon }} rtl:mr-4 ltr:ml-4"></i>
            </div>
        </div>
        @else
        <div class="flex items-center justify-center w-full">
            <h1 class="font-bold" wire:loading.class="hidden" wire:target="{{$wire}}">
                {{ $slot }}
            </h1>
            <svg class="w-5 h-5 text-black rtl:-mr-1 ltr:-ml-1 ltr:mr-2 rtl:ml-2 dark:text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" wire:loading wire:target="{{$wire}}">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
        </div>
        @endif
    </button>
    @else
    <a 
    href="{{$href}}"
    target="{{$target}}"
    @if(!empty($navigate)) wire:navigate="true" @endif
    wire:loading.attr="disabled"
    class="{{ $class }}
    {{ $style == 'primary' ? 'text-white dark:bg-indigo-600 bg-indigo-600' : null }}
    {{ $style == 'secondary' ? 'text-white dark:bg-gray-600 bg-gray-600' : null }} 
    {{ $style == 'warning' ? 'text-white dark:bg-yellow-600 bg-yellow-600' : null }} 
    {{ $style == 'danger' ? 'text-white dark:bg-red-600 bg-red-600' : null }}
    {{ $style == 'none' ? 'text-black dark:text-white !bg-transparent !border-0 !shadow-none' : null }}
    flex items-center w-full px-3 py-2 transition duration-150 ease-out border border-transparent rounded-md shadow-sm whitespace-nowrap hover:opacity-80 disabled:opacity-70 hover:ease-in"
    >
        @if(!empty($icon))
        <div class="flex justify-between w-full">
            <div class="flex items-center justify-start text-start">
                <h1 class="font-bold">
                    {{ $slot }}
                </h1>
            </div>
            <div class="flex items-center justify-end text-end">
                <i class="{{ $icon }} rtl:mr-4 ltr:ml-4"></i>
            </div>
        </div>
        @else
        <div class="flex justify-center w-full">
            <h1 class="font-bold">
                {{ $slot }}
            </h1>
        </div>
        @endif
    </a>
    @endif
</div>