<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center mr-16">
                    <a href="{{ route('dashboard') }}" class="w-[60px]">
                        <x-application-logo class="block w-full h-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links (visible on screens medium and above) -->
                <div class="hidden space-x-8 md:flex">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('Home') }}
                    </x-nav-link>

                    <div x-data="{ open: false }" class="relative">
                        <!-- Dropdown Toggle Button without Link -->
                        <button @click="open = !open" class="flex items-center justify-center h-full text-gray-500 text-sm focus:outline-none">
                            <span class="text-center">{{ __('About CRA') }}</span>
                            <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div x-show="open" @click.away="open = false" class="absolute z-10 mt-2 bg-white border rounded shadow-lg w-80">
                            <x-nav-link :href="route('about')" class="block w-full hover:bg-gray-300">
                                <div class="px-5 py-2">About CRA</div>
                            </x-nav-link>
                            <x-nav-link :href="route('staff')" class="block w-full hover:bg-gray-300">
                                <div class="px-5 py-2">Leadership and Staff</div>
                            </x-nav-link>
                        </div>
                    </div>


{{--                    <x-nav-link :href="route('about')" :active="request()->routeIs('about')">--}}
{{--                        {{ __('About CRA') }}--}}
{{--                    </x-nav-link>--}}
                    <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
                        {{ __('Contact CRA') }}
                    </x-nav-link>
                    <x-nav-link :href="route('licenses')" :active="request()->routeIs('licenses')">
                        {{ __('CRA Licences') }}
                    </x-nav-link>
                    <x-nav-link :href="route('publications')" :active="request()->routeIs('publications')">
                        {{ __('Publications') }}
                    </x-nav-link>
                    <x-nav-link :href="route('news')" :active="request()->routeIs('news')">
                        {{ __('News & Events') }}
                    </x-nav-link>
                    <x-nav-link :href="route('vacancies')" :active="request()->routeIs('vacancies')">
                        {{ __('Join our Team') }}
                    </x-nav-link>
{{--                    <x-nav-link :href="route('resources')" :active="request()->routeIs('resources')">--}}
{{--                        {{ __('Resources') }}--}}
{{--                    </x-nav-link>--}}
                </div>
            </div>

            <!-- Settings Dropdown (visible on screens medium and above) -->
            <div class="hidden md:flex md:items-center">
                @auth
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @else
                    <div class="hidden md:hidden lg:hiiden space-x-8 md:flex">
{{--                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">--}}
{{--                            <span class="py-2 px-4 dark:bg-amber-700 bg-green-900 text-gray-100 rounded-full">--}}
{{--                                {{ __('Get Started with CRA') }}--}}
{{--                            </span>--}}
{{--                        </x-nav-link>--}}
                    </div>
                @endauth
            </div>

            <!-- Hamburger (visible on screens medium and above) -->
            <div class="-me-2 flex items-center md:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu (visible when hamburger is clicked on screens medium and below) -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden md:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-responsive-nav-link>

            <div x-data="{ open: false }" class="relative">
                <!-- Dropdown Toggle Button without Link -->
                <button @click="open = !open" class="flex items-center justify-center h-full text-gray-700 focus:outline-none">
                    <span class="text-center px-4 py-1">{{ __('About CRA') }}</span>
                    <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <div x-show="open" @click.away="open = false" class="absolute z-10 mt-2 bg-white border rounded shadow-lg w-80">
                    <x-responsive-nav-link :href="route('about')" class="block w-full hover:bg-gray-300">
                        <div class="px-5 py-2">About CRA</div>
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('staff')" class="block w-full hover:bg-gray-300">
                        <div class="px-5 py-2">Leadership and Staff</div>
                    </x-responsive-nav-link>
                </div>
            </div>

{{--            <x-responsive-nav-link :href="route('about')" :active="request()->routeIs('about')">--}}
{{--                {{ __('About CRA') }}--}}
{{--            </x-responsive-nav-link>--}}

            <x-responsive-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
                {{ __('Contact CRA') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('licenses')" :active="request()->routeIs('licenses')">
                {{ __('CRA Licences') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('publications')" :active="request()->routeIs('publications')">
                {{ __('Publications') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('news')" :active="request()->routeIs('news')">
                {{ __('News & Events') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('vacancies')" :active="request()->routeIs('vacancies')">
                {{ __('Join Our Team') }}
            </x-responsive-nav-link>

{{--            <x-responsive-nav-link :href="route('resources')" :active="request()->routeIs('resources')">--}}
{{--                {{ __('Resources') }}--}}
{{--            </x-responsive-nav-link>--}}
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div>
                @auth
                    <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                @else
                    <div class="space-y-1">
                        <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Login') }}
                        </x-responsive-nav-link>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</nav>
