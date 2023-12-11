@props([ 
    'label' => !empty($label) ? $label : null, 
    'placeholder' => !empty($placeholder) ? $placeholder : null, 
    'value' => !empty($value) ? $value : null, 
    'autofocus' => !empty($autofocus) ? $autofocus : null, 
    'autocomplete' => !empty($autocomplete) ? $autocomplete : null, 
    'disabled' => !empty($disabled) ? $disabled : false,
    'required' => !empty($required) ? $required : true, 
    'class' => !empty($class) ? $class : null, 

    'wire' => !empty($wire) ? $wire : null,
])

<div>
    @if(!empty($label))
    <label class="text-zinc-900 dark:text-zinc-50">{{ $label }}:</label>
    @endif
    <div class="relative mt-2 rounded-md shadow-sm" x-data="{ ShowPassword: false }">
        <input
            :type="ShowPassword === true ? 'text' : 'password'"
            placeholder="{{$placeholder}}"
            value="{{$value}}"
            autofocus="{{$autofocus}}"
            autocomplete="{{$autocomplete}}"
            required="{{$required}}"
            class="
            @error($wire)
            !border-red-400
            @enderror
            @if(session($wire))
            !border-green-400
            @endif
            w-full p-2 transition duration-100 ease-in-out border rounded-md shadow-sm rtl:pl-8 ltr:pr-8 placeholder-zinc-400 dark:bg-zinc-700 dark:text-zinc-300 dark:placeholder-zinc-400 border-zinc-200 focus:ring-primary-400 focus:border-primary-400 dark:border-zinc-500 form-input sm:text-sm focus:outline-none"
            wire:loading.attr="disabled"
            wire:target="{{$wire}}"
            wire:model="{{$wire}}"
            :disabled="{{$disabled}}"
        />
        <div class="absolute inset-y-0 ltr:right-0 rtl:left-0 ltr:pr-3.5 rtl:pl-3.5 flex items-center text-zinc-400">
            <a class="cursor-pointer" x-on:click="ShowPassword = ! ShowPassword" wire:loading.attr="disabled" wire:target="{{$wire}}">
                <i class="fa-solid fa-eye @error($wire) !text-red-400 @enderror @if(session($wire)) !text-green-400 @endif" x-show="!ShowPassword"></i>
                <i class="fa-solid fa-eye-slash @error($wire) !text-red-400 @enderror @if(session($wire)) !text-green-400 @endif" x-show="ShowPassword"></i>
            </a>
        </div>
    </div>
    @error($wire)
        <span class="text-xs text-red-400">{{ $message }}</span> 
    @enderror
    @if (session($wire))
        <span class="text-xs text-green-400">{{ session($wire) }}</span> 
    @endif
</div>