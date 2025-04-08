{{--<div id="carouselExample" class="relative h-[50vh] w-full overflow-hidden">--}}
{{--    <!-- Carousel Items -->--}}
{{--    <div class="flex transition-transform duration-700 ease-in-out" id="carousel-items">--}}
{{--        @foreach ($carouselItems as $item)--}}
{{--            <div class="relative w-full h-[50vh] flex-shrink-0 bg-cover bg-center" style="background-image: url('{{ $item['image'] }}')">--}}
{{--                <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center">--}}
{{--                    <h2 class="text-white text-4xl font-bold mb-4">{{ $item['title'] }}</h2>--}}
{{--                    <p class="text-white text-lg mb-6">{{ $item['description'] }}</p>--}}
{{--                    <a href="{{ $item['button_link'] }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-full">--}}
{{--                        {{ $item['button_text'] }}--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endforeach--}}
{{--    </div>--}}

{{--    <!-- Controls -->--}}
{{--    <button id="prevSlide" class="absolute top-1/2 left-5 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full hover:bg-gray-600">--}}
{{--        &#9664;--}}

{{--        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">--}}
{{--            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />--}}
{{--        </svg>--}}
{{--    </button>--}}
{{--    <button id="nextSlide" class="absolute top-1/2 right-5 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full hover:bg-gray-600">--}}
{{--        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">--}}
{{--            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />--}}
{{--        </svg>--}}
{{--    </button>--}}
{{--</div>--}}


<div id="carouselExample" class="relative h-[60vh] w-full overflow-hidden">
    <!-- Carousel Items -->
    <div class="flex transition-transform duration-700 ease-in-out" id="carousel-items">
        @foreach ($carouselItems as $item)
            <div class="w-full h-[60vh] flex-shrink-0 flex">
                <!-- Image Half -->
                <div class="w-1/2 h-full bg-cover bg-center" style="background-image: url('{{ $item['image'] }}');"></div>

                <!-- Text Half with Gradient -->
                <div class="w-1/2 h-full flex flex-col justify-center bg-gradient-to-l from-black/60 to-transparent px-8">
                    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
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

{{--<div id="carouselExample" class="relative h-[50vh] w-full overflow-hidden">--}}
{{--    <!-- Carousel Items -->--}}
{{--    <div class="flex transition-transform duration-700 ease-in-out" id="carousel-items">--}}
{{--        @foreach ($carouselItems as $item)--}}
{{--            <div class="relative w-full h-[50vh] flex-shrink-0 bg-cover bg-center" style="background-image: url('{{ $item['image'] }}')">--}}
{{--                <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center">--}}
{{--                    <h2 class="text-white text-4xl font-bold mb-4">{{ $item['title'] }}</h2>--}}
{{--                    <p class="text-white text-lg mb-6">{{ $item['description'] }}</p>--}}
{{--                    <a href="{{ $item['button_link'] }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-full">--}}
{{--                        {{ $item['button_text'] }}--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endforeach--}}
{{--    </div>--}}

{{--    <!-- Controls -->--}}
{{--    <button id="prevSlide" class="absolute top-1/2 left-5 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full hover:bg-gray-600">--}}
{{--        &#9664;--}}

{{--        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">--}}
{{--            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />--}}
{{--        </svg>--}}
{{--    </button>--}}
{{--    <button id="nextSlide" class="absolute top-1/2 right-5 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full hover:bg-gray-600">--}}
{{--        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">--}}
{{--            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />--}}
{{--        </svg>--}}
{{--    </button>--}}
{{--</div>--}}
