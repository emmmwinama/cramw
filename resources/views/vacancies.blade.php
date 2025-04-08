<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Vacancies') }}
        </h2>
    </x-slot>
    <div class="py-12 dark:text-gray-100  text-gray-700">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-2">
                <div class="col-span-3">
                    @if($vacancies->count())
                        <div class="mb-4">
                            Join us in one of the following capacities
                        </div>
                        @foreach($vacancies as $vacancy)
                            <div class="rounded-lg bg-white p-4 mb-4">
                                <div class="flex justify-between mb-4">
                                    <p class="font-bold text-lg">{{ $vacancy->title }}</p>
                                    <p class="text-sm">Posted {{ $vacancy->posting_date->diffForHumans() }}</p>
                                </div>
                                <div class="flex mb-4">
                                    <p class="font-bold mr-4">{{ $vacancy->location }}</p>
                                    <p class="text-sm">{{ $vacancy->type }}</p>
                                </div>
                                <div class="flex justify-between">
                                    <p>{{ \Illuminate\Support\Str::limit(strip_tags($vacancy->description), 40) }}...</p>
                                    <a href="{{ route('vacancies-read', $vacancy->id) }}" class="py-1 px-5 bg-[#074923] text-gray-100 hover:bg-opacity-30 hover:text-gray-700 rounded-full">Read More</a>
                                </div>
                            </div>
                        @endforeach
                        <div class="p-4">
                            {{ $vacancies->links() }}
                        </div>
                    @else
                        <div class="max-w-7xl mx-auto px-6 lg:px-8 mb-4">
                            <div class="flex justify-center items-centers p-6 bg-opacity-50-shadow text-bold bg-[#074923]  text-gray-100">
                                No vacancies available at the moment.
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-span-1"></div>
            </div>
        </div>
    </div>
    @include('components.footer')
</x-app-layout>
