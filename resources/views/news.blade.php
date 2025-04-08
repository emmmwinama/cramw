<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('News and Events') }}
        </h2>
    </x-slot>
    <div class="py-12">
        @if($featuredPosts->count())
        <div class="max-w-7xl mx-auto px-6 lg:px-8 mb-4">
            <div class="grid grid-cols-1 md:grid-cols-5">
                <div class="hover:shadow col-span-1 md:col-span-3">
                    <div class="col-span-3 relative">
                        <img src="{{ asset('storage/'.$featuredPosts[0]->image) }}" alt="alt" class="w-full h-full object-contain">
                        <div class="absolute bg-black bg-opacity-50 inset-0 w-full h-full flex">
                            <a href="{{ route('newsread', $featuredPosts[0]->id) }}" class="text-2xl text-gray-100 w-full h-full flex items-end justify-center p-4 text-justify hover:p-3 capitalize">
                                {{ $featuredPosts[0]->title }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 md:col-span-2 md:pl-4 flex flex-col justify-between">
                    @foreach(range(1, 4) as $index)
                        @if(isset($featuredPosts[$index]))
                        <a href="{{ route('newsread', $featuredPosts[$index]->id) }}" class="hover:px-1 hover:shadow mb-4">
                            <div class="grid grid-cols-3 gap-x-1">
                                <div class="col-span-2 pr-3 text-justify">
                                    {{ $featuredPosts[$index]->title }}
                                </div>
                                <div class="col-span-1">
                                    <img src="{{ asset('storage/'.$featuredPosts[$index]->image) }}" alt="alt" class="w-full h-full object-cover"> <!-- Assuming your item has an image property -->
                                </div>
                            </div>
                        </a>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="md:my-12">
                <div class="font-bold text-2xl capitalize">Other News and Events</div>
                @if($otherPosts->count())
                <div class="grid grid-cols-1 md:grid-cols-3 md:pt-12 md:gap-3 gap-y-3">
                    @foreach($otherPosts as $post)
                    <div class="col-span-1 mb-4 hover:px-1 hover:shadow">
                        <a href="{{ route('newsread', $post->id) }}" class="">
                            <div class="grid grid-cols-3 gap-x-1">
                                <div class="col-span-2 pr-3 text-justify">{{ $post->title }}</div>
                                <div class="col-span-1">
                                    <img src="{{ asset('storage/'.$post->image) }}" alt="alt" class="w-full h-full object-cover">
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                    <div class="p-4">
                        {{ $otherPosts->links() }}
                    </div>
                @endif
            </div>
        </div>
        @else
            <div class="max-w-7xl mx-auto px-6 lg:px-8 mb-4">
                <div class="flex justify-center items-centers p-6 bg-opacity-50-shadow text-bold bg-[#074923] text-gray-100">
                    No news and events information available at the moment.
                </div>
            </div>
        @endif
    </div>
    @include('components.footer')
</x-app-layout>
