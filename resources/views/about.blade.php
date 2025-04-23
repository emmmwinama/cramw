<x-app-layout>
    @section('title', 'About Us')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('About US') }}
        </h2>
    </x-slot>
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="py-6">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-4">
                <div class="lg:col-span-3 col-span-1 text-gray-800 dark:text-gray-200 leading-tight">
                    <div id="introduction" class="py-4">
                        <h2 class="text-2xl font-bold mb-4 capitalize text-[#074923] text-justify">Introduction</h2>
                        <p class="text-justify">Legalisation of Cannabis in Malawi created opportunities for the
                            legal cultivation of cannabis for medicinal and industrial purposes
                            and offers the country an opportunity to diversify its agricultural
                            production and potentially generate additional foreign exchange.
                            Cannabis is a strategic crop which requires systematic regulation
                            to safeguard its production and management in order for Malawi
                            to profit from its economic benefits. This calls for the need to
                            observe rules and regulations in the cannabis sector. <span class="block m-1.5"></span>
                            The Cannabis Regulatory Authority (CRA) was established to
                            regulate the Cannabis industry as provided for in the Cannabis
                            Regulation Act 2020. The Authority is mandated to license all
                            activities across the Cannabis value chain such as cultivation,
                            processing, distribution, storage, exportation, importation,
                            research, laboratory tests, transportation and medical use of
                            Cannabis.  The Cannabis Regulation Act 2020 promotes production
                            of Cannabis only for medicinal, industrial and scientific use and
                            does not in any manner advocate, authorize, promote or legally or
                            socially accept the use of cannabis for recreational uses.</p>
                    </div>
                    <div id="introduction" class="py-4">
                        <h2 class="text-2xl font-bold mb-4 capitalize text-[#074923] text-justify">our mission</h2>
                        <p class="text-justify">To provide quality, efficient and effective regulatory services in the cannabis industry that sustainably meet environmental and socioeconomic needs for all</p>
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
