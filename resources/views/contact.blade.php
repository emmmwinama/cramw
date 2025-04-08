<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Contact US') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6">
        <div class="grid grid-cols-1">
            @include('components.contact-form')
        </div>
    </div>
    @include('components.footer')
</x-app-layout>
