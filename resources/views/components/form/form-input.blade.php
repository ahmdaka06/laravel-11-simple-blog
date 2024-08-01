<div>
    <div class="mb-4">
        <label for="{{ $name }}" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
        <input
            type="{{ $type }}"
            wire:model="{{ $name }}"
            id="{{ $name }}"
            name="{{ $name }}"
            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
            :class="@if ($errors->has($name)) 'border-red-500' @else 'border-gray-300' @endif"
        >
        @if ($errors->has($name))
            <p class="text-red-500 text-xs italic mt-2">{{ $errors->first($name) }}</p>
        @endif
    </div>
</div>
