@props([
    'class' => !empty($class) ? $class : null,
    'full' => !empty($full) ? $full : false,
    'title' => !empty($title) ? $title : null,
    'required' => !empty($required) ? $required : false,
    'wire' => !empty($wire) ? $wire : null,
])

@teleport('body')
@if(!empty($full)) {{ $required = true; }} @endif
<div 
class="fixed inset-0 z-50 flex items-center justify-center w-full h-full cursor-pointer bg-opacity-90 bg-zinc-900"
x-show="{{ $wire }}"
x-transition:enter="transition transition-opacity transform ease-in duration-300"
x-transition:enter-start="opacity-0"
x-transition:enter-end="opacity-100"
x-transition:leave="transition transition-opacity transform ease-in duration-500"
x-transition:leave-start="opacity-100"
x-transition:leave-end="opacity-0"
>
    <div 
    class="{{ $class }} flex-col flex min-3-xl sm:!border-t-1 sm:!border-0 sm:!bottom-0 md:!border-t-1 md:!border-0 md:!bottom-0 shadow dark:shadow-zinc-800 overflow-y-scroll no-scrollbar dark:bg-zinc-800 border-zinc-300 dark:border-zinc-600 sm:fixed md:fixed lg:relative xl:relative ease-in-out z-50 p-2 bg-zinc-50 border cursor-auto sm:p-4 md:p-6 lg:p-8 xl:p-10 
    {{ $full ? 'sm:!rounded-b-none sm:!rounded-t-3xl md:!rounded-b-none md:!rounded-t-3xl lg:!rounded-b-none lg:!rounded-t-none xl:!rounded-b-none xl:!rounded-t-none sm:h-[96%] md:h-[96%] lg:h-full xl:h-full w-full' : 'rounded-md sm:!rounded-b-none sm:!rounded-t-3xl md:!rounded-t-3xl md:!rounded-b-none lg:!rounded-b-md xl:!rounded-b-md lg:!rounded-t-md xl:!rounded-t-md sm:max-h-[96%] md:max-h-[96%] lg:max-h-[94%] xl:max-h-[94%] sm:w-full md:w-full lg:w-1/2 xl:w-1/3 max-w-7xl' }}
    " :class="{{$wire}} ? 'animate__animated animate__fadeInUp animate__faster' : 'animate__animated animate__fadeOutDown animate__faster'"
    @if(empty($required)) @click.outside="{{$wire}} = false" @endif
    x-show="{{ $wire }}"
    x-transition:enter="transition-transform duration-300 opacity-100"
    x-transition:enter-start="translate-y-full opacity-100"
    x-transition:enter-end="translate-y-0 opacity-100"
    x-transition:leave="transition-transform duration-500 opacity-100"
    x-transition:leave-start="transform opacity-100"
    x-transition:leave-end="transform translate-y-0 opacity-100"
    >
    
    @if(!empty($full))
    <div class="flex w-full px-2 lg:gap-4 xl:gap-4 sm:flex-col md:flex-col lg:flex-row xl:flex-row">
        <!-- header -->
        <div class="flex items-center justify-center mb-3 text-center sm:flex-row md:flex-row lg:flex-col xl:flex-col">
            <!-- Mobile -->
            <div class="inline-flex flex-row justify-between w-full sm:flex md:flex lg:hidden xl:hidden sm:flex-row md:flex-row lg:flex-col xl:flex-col">
                <div class="inline-flex items-center justify-start w-1/2 mt-1.5">
                    <x-heading>
                        {{ $title }}
                    </x-heading>
                </div>
                <div class="inline-flex flex-row items-center justify-end w-1/2 cursor-pointer" x-on:click="{{$wire}} = false">
                    <x-heading>
                        {{ trans('app.back') }}
                    </x-heading>
                    <div>
                        <i class='text-3xl ltr:hidden bx bx-chevron-left text-zinc-900 dark:text-zinc-50'></i>
                        <i class='text-3xl rtl:hidden bx bx-chevron-right text-zinc-900 dark:text-zinc-50 '></i>
                    </div>
                </div>
            </div>
            <!-- Mobile -->
    
            <!-- Desktop -->
            <div class="top-0 flex flex-col h-full cursor-pointer sm:hidden md:hidden lg:flex xl:flex" x-on:click="{{$wire}} = false">
                <x-card class="!h-24">
                    <x-heading size="sm">
                        <i class="fa-2x bx bx-x"></i>
                    </x-heading>
                </x-card>
            </div>
            <!-- Desktop -->
        </div>
        <!-- header -->
        
        <!-- Body -->
        <div class="w-full">
            {{ $slot }}
        </div>
        <!-- Body -->

        <div class="items-center justify-center w-full mt-2 text-center sm:flex md:flex lg:hidden xl:hidden">
            <a class="text-gray-500 underline cursor-pointer text-md dark:text-gray-400" x-on:click="{{$wire}} = false">
                {{ trans('app.close') }}
            </a>
        </div>
    </div>
    @else
        <!-- Body -->
        {{ $slot }}
        <!-- Body -->

        <div class="flex items-center justify-center w-full mt-5 text-center">
            <a class="text-gray-500 underline cursor-pointer text-md dark:text-gray-400" x-on:click="{{$wire}} = false">
                {{ trans('app.close') }}
            </a>
        </div>
    @endif
    </div>
</div>
@endteleport