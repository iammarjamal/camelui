@props([ 
    'size' => !empty($label) ? $label : 'xxs',
    'class' => !empty($class) ? $class : null
])

<div>
    <p class="text-zinc-500 dark:text-zinc-400 {{ $class }}
    {{ $size == 'xxs' ? 'text-xs md:text-sm lg:text-md xl:text-lg' : null }}
    {{ $size == 'xs' ? 'text-sm md:text-md lg:text-lg xl:text-xl' : null }}
    {{ $size == 'sm' ? 'text-md md:text-lg lg:text-xl xl:text-2xl' : null }}
    {{ $size == 'md' ? 'text-lg md:text-xl lg:text-2xl' : null }}
    {{ $size == 'lg' ? 'text-xl md:text-2xl lg:text-3xl' : null }}
    {{ $size == 'xl' ? 'text-2xl md:text-3xl lg:text-4xl' : null }}
    {{ $size == 'xxl' ? 'text-3xl md:text-4xl lg:text-5xl' : null }}"
    >
        {{ $slot }}
    </p>
</div>