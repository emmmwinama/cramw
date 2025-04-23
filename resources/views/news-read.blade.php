<x-app-layout>
    @section('title', 'News and Events')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('News and Events') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-gray-700 dark:text-gray-100">
            <div class="grid grid-cols-1 md:grid-cols-9 md:gap-3">
                <div class="col-span-1 md:col-span-6 sm:mb-4 mb-0">
                    @if(isset($news) )
                        <div class="mb-4">
                            <p class="font-bold text-2xl">{{ $news->title }}</p>
                            <p class="text-sm text-[#074923]">{{ $news->created_at->format('l, F j, Y') }}</p>
                        </div>
                        <div class="mb-4">
                            <img src="{{ asset('storage/'.$news->image) }}" alt="alt" class="object-fit w-full h-full">
                        </div>
                        <div class="">
                            <p class="text-justify">
                                {!! $news->body !!}
                            </p>
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
                    <div class="font-bold mb-4">Other News</div>
                    @if($featuredPosts->count())
                        @foreach($featuredPosts as $post)
                            <div class="col-span-1 mb-4 hover:px-1 hover:shadow">
                                <a href="{{ route('contact') }}" class="">
                                    <div class="grid grid-cols-3 gap-x-1">
                                        <div class="col-span-1">
                                            <img src="{{ asset('storage/'.$post->image) }}" alt="alt" class="w-full h-full object-cover">
                                        </div>
                                        <div class="col-span-2 pr-3 text-justify">{{ $post->title }}</div>
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
