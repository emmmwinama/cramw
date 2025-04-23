<x-app-layout>
    @section('title', 'Vacancy at CRA Malawi')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __($vacancy->title) }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-gray-700 dark:text-gray-100">
            <div class="grid grid-cols-1 md:grid-cols-9 md:gap-3">
                <div class="col-span-1 md:col-span-6 sm:mb-4 mb-0">
                    @if(isset($vacancy) )
                        <div class="mb-4">
                            <p class="font-bold text-2xl">{{ $vacancy->title }}</p>
                            <p class="text-sm text-[#074923]">{{ $vacancy->created_at->format('l, F j, Y') }}</p>
                        </div>
                        <div class="mb-4">
                            <p class="text-justify">
                                {!! $vacancy->description !!}
                            </p>
                        </div>
                        <div class="mb-4">
                            <a href="{{ asset('storage/'.$vacancy->file) }}" class=" bg-[#074923] hover:bg-opacity-30 hover:text-gray-700 py-1 px-5 m-2 rounded text-gray-100">
                                <i class="fas fa-download text-gray-100"></i>
                            </a>
                        </div>
                    @else
                        <div class="max-w-7xl mx-auto px-6 lg:px-8 mb-4">
                            <div class="flex justify-center items-centers p-6 bg-opacity-50-shadow text-bold bg-[#074923]">
                                Oops! Something happened. Please try again.
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-span-1 md:col-span-3">
                    <div class="font-bold mb-4">Latest Vacancies</div>
                    @if($vacancies->count())
                        @foreach($vacancies as $vacpost)
                            <div class="col-span-1 mb-4 hover:px-3 hover:shadow p-4 shadow-sm border">
                                <a href="{{ route('vacancies-read', $vacpost->id) }}" class="">
                                    <div class="grid grid-cols-3 gap-x-1">
                                        <div class="col-span-2 pr-3 text-justify">{{ $vacpost->title }}</div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    @include('components.footer')
</x-app-layout>
