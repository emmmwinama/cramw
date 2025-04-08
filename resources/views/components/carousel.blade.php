<div id="carouselExample" class="relative h-[60vh] w-full overflow-hidden">
    <!-- Carousel Items -->
    <div class="flex transition-transform duration-700 ease-in-out" id="carousel-items">
        @foreach ($carouselItems as $item)
            <div class="w-full h-[60vh] flex-shrink-0 bg-cover bg-center flex" style="background-image: url('{{ '/storage/'.$item['image'] }}')">
                <div class="relative w-full bg-black bg-opacity-40 flex flex-col">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 absolute inset-0 flex flex-col {{ $item['alignment'] }} justify-center">
                        <h2 class="text-white text-4xl font-bold mb-4">{{ $item['title'] }}</h2>
                        <p class="text-white text-lg mb-6">{{ $item['description'] }}</p>
                        <a href="{{ $item['button_link'] }}" class="bg-[#074923] hover:bg-blue-700 text-white px-6 py-3 rounded-full">
                            {{ $item['button_text'] }}
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Controls -->
    <button id="prevSlide" class="absolute top-1/2 left-5 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full hover:bg-gray-600">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
    </button>
    <button id="nextSlide" class="absolute top-1/2 right-5 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full hover:bg-gray-600">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </button>
</div>
