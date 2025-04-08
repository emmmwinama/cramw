<div class="py-12 bg-gray-100 dark:bg-transparent text-gray-700 dark:text-gray-100">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="font-bold text-2xl text-[#074923] text-center block mb-5">News and Publications</div>
        @if($news->count())
            <p class="text-center mb-5">Check out the latest developments at CRA and <a href="{{ route('news') }}" class="bg-[#074923] bg-opacity-30 py-1 px-3 rounded-full text-[#074923]">More</a></p>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-2 md:gap-3">
                <div class="col-span-1 md:col-span-2 lg:col-span-3 grid grid-cols-1 md:grid-cols-3 gap-2 md:gap-3">
                    @foreach($news as $newspost)
                        <div class="relative shadow-md rounded-md col-span-1 hover:shadow-2xl hover:rounded-2xl overflow-hidden">
                            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-end justify-start p-2">
                                <h2 class="text-white font-bold">{{ $newspost->title }}</h2>
                            </div>
                            <a href="{{ route('newsread', $newspost->id) }}" class="absolute inset-0 items-end justify-end p-4 hover:flex ease-in-out group">
                                <div class="rounded-full bg-white p-3 group-hover:flex hidden ease-in-out transition-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </div>
                            </a>
                            <img src="{{ asset('storage/'.$newspost->image) }}" alt="News 1" class="h-full w-full object-cover rounded-md">
                        </div>
                    @endforeach
                </div>
                <div class="col-span-1">
                    <div class="col-span-1">
                        <div class="font-bold mb-2">Publications</div>
                        @if($publications->count())
                            @foreach($publications as $publication)
                                <a href="{{ $publication->file }}" class="hover:bg-[#074923]">
                                    <p>{{ $publication->name }}</p>
                                    <p class="text-sm font-bold text-[#074923]">{{ $publication->type }}</p>
                                </a>
                            @endforeach
                        @else
                            <div class="max-w-7xl mx-auto px-6 lg:px-8 mb-4">
                                <div class="flex justify-center items-centers p-6 bg-opacity-50-shadow text-bold bg-[#074923] text-gray-100">
                                    No publications available at the moment.
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @else
            <div class="max-w-7xl mx-auto px-6 lg:px-8 mb-4">
                <div class="flex justify-center items-centers p-6 bg-opacity-50-shadow text-bold bg-[#074923] text-gray-100">
                    No news available at the moment.
                </div>
            </div>
        @endif
    </div>
</div>
