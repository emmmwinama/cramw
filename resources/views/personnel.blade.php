<x-app-layout>
    @section('title', 'CRA Management')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('CRA Leadership and staff') }}
        </h2>
    </x-slot>
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="py-6">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-4">
                <div class="lg:col-span-3 col-span-1 text-gray-800 dark:text-gray-200 leading-tight">
                    <div class="">
                        @if($management->count())
                            <div id="introduction" class="py-4">
                                <h2 class="text-2xl font-bold mb-4 capitalize text-[#074923] text-justify">Management</h2>
                                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-3">
                                    @foreach($management as $managementofficer)
                                        <div class="col-span-1">
                                            <img src="{{ asset('storage/'.$managementofficer->picture) }}" alt="{{ $managementofficer->name     }}" class="w-full">
                                            <p class="font-bold text-lg my-2">{{ $managementofficer->name }}</p>
                                            <p>{{ $managementofficer->position }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="">
                        @if($staff->count())
                            <div id="introduction" class="py-5">
                                <h2 class="text-2xl font-bold mb-4 capitalize text-[#074923] text-justify">Staff</h2>
                                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-3">
                                    @foreach($staff as $staffofficer)
                                        <div class="col-span-1">
                                            <img src="{{ asset('storage/'.$staffofficer->picture) }}" alt="{{ $staffofficer->name     }}" class="w-full">
                                            <p class="font-bold text-lg my-2">{{ $staffofficer->name }}</p>
                                            <p>{{ $staffofficer->position }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="hidden col-span-1 lg:block text-gray-800 dark:text-gray-200 leading-tight">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-4">Relevant Resources</h3>
                        <ul class="">
                            <li><a href="#" class="block w-full hover:bg-[#074923] bg-transparent hover:text-gray-100 p-1">Cannabis Regulation Act 2020</a></li>
                            <li><a href="#" class="block w-full hover:bg-[#074923] bg-transparent hover:text-gray-100 p-1">Guidelines for the Cannabis Industry in Malawi</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('components.footer')
</x-app-layout>
