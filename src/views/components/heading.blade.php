@props([ 
    'size' => !empty($label) ? $label : 'xxs',
    'class' => !empty($class) ? $class : null
])

<div>
    <h1 class="font-bold text-zinc-900 dark:text-zinc-50 {{ $class }}
    {{ $size == 'xxs' ? 'text-sm md:text-md lg:text-lg xl:text-xl' : null }}
    {{ $size == 'xs' ? 'text-md md:text-lg lg:text-xl xl:text-2xl' : null }}
    {{ $size == 'sm' ? 'text-lg md:text-xl lg:text-2xl xl:text-3xl' : null }}
    {{ $size == 'md' ? 'text-xl md:text-2xl lg:text-3xl' : null }}
    {{ $size == 'lg' ? 'text-2xl md:text-3xl lg:text-4xl' : null }}
    {{ $size == 'xl' ? 'text-3xl md:text-4xl lg:text-5xl' : null }}
    {{ $size == 'xxl' ? 'text-4xl md:text-5xl lg:text-6xl' : null }}"
    >
        {{ $slot }}
    </h1>
</div>