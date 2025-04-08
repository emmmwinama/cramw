<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Our Publications') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="w-full">
                <div class="grid grid-cols-1 md:grid-cols-7 gap-0 md:gap-x-2">
                    <div class="col-span-1 md:col-span-5 md:mb-4">
                        <div class="mb-4">Welcome to our Publications Page! Here, you'll find a curated collection of insightful articles, news updates, research papers, and official documents that reflect our latest work and initiatives.
                        </div>
                        @if($publications->count())
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
                                @foreach($publications as $publication)
                                    <div class="border-t-2 border-[#DEC23D] relative inset-0 hover:bg-[#074923] hover:bg-opacity-5 hover:shadow">
                                        <a href="{{ route('contact-form') }}" class="absolute w-full h-full"></a>
                                        <p class="text-sm font-bold  self-end absolute py-1 px-3 bg-[#DEC23D] text-gray-100 rounded-br-lg">{{ $publication->type }}</p>
                                        <div class="mt-10 mb-4">
                                            <p class="font-extrabold text-lg m-2">{{ $publication->name }}</p>
                                            <p class="text-justify m-2">{{ $publication->description }}</p>
                                            <div class="w-full flex justify-start items-center">
                                                <a href="{{ $publication->file }}" class=" bg-[#074923] hover:bg-transparent hover:border-[#074923] hover:text-[#074923] py-1 px-5 m-2 rounded text-gray-100">
                                                    <i class="fas fa-download text-gray-100"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="p-4">
                                {{ $publications->links() }}
                            </div>
                        @else
                            <div class="max-w-7xl mx-auto lg:px-8 mb-4">
                                <div class="flex justify-center items-centers p-6 bg-opacity-50-shadow text-bold bg-[#074923] text-gray-100">
                                    No publications available at the moment.
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="lg:px-5 col-span-1 md:col-span-2">
                        <div class="font-bold mb-4">Vacancies</div>
                        <div class="">
                            @if($vacancies->count())
                                @foreach($vacancies as $vacancy)
                                    <div class="h-full w-full hover:shadow-md p-1 hover:p-2">
                                        <a href="{{ route('vacancies-read', $vacancy->id) }}" class="">
                                            <p class="">{{ $vacancy->title }} - attainable in {{ $vacancy->location }}</p>
                                            <p class="text-sm text-[#074923] font-bold">{{ $vacancy->type }}</p>
                                        </a>
                                    </div>
                                @endforeach
                            @else
                                <div class="max-w-7xl mx-auto px-6 lg:px-8 mb-4">
                                    <div class="flex justify-center items-centers p-6 bg-opacity-50-shadow text-bold bg-[#074923] text-gray-100">
                                        No vacancies available at the moment.
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.footer')
</x-app-layout>
