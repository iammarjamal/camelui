@props([
    'class' => !empty($class) ? $class : null,
])

<div class="
    {{ $class }} 
  bg-white border rounded-2xl shadow sm:p-5 md:p-6 lg:p-6 xl:p-8 dark:bg-zinc-800 border-zinc-200 dark:border-zinc-600">
    {{ $slot }}
</div>