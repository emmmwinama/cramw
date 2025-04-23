<x-app-layout>
@section('title', 'Home | Welcome to CRA Website')
@include('components.carousel')
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Welcome to the Cannabis Regulatory Authority') }}
    </h2>
</x-slot>
<div class="">
    @include('components.services')
    @include('components.hemp-uses')
    @include('components.home-news')
    @include('components.footer')
</div>
</x-app-layout>
