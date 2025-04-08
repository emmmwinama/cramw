<footer class="py-12 bg-teal-950 text-gray-100">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
        <div class="grid grid-cols-1 md:grid-cols-4 border-b-4 border-gray-300 pb-12">
            <div class="col-span-1">
                <div class="w-[10rem]">
                    <x-application-logo class="block fill-current text-gray-800 dark:text-gray-200"/>
                </div>
            </div>
            <div class="col-span-1 md:col-span-3 grid grid-cols-1 md:grid-cols-3">

                <div class="col-span-1 flex flex-col items-center justify-center pt-2">
                    <a href="{{ route('home') }}" class="uppercase">Home</a>
                    <a href="{{ route('about') }}" class="uppercase">About US</a>
                    <a href="{{ route('contact') }}" class="uppercase">Contact</a>
                    <a href="{{ route('licenses') }}" class="uppercase">Licences</a>
                </div>
                <div class="col-span-1 flex flex-col items-center justify-center pt-2">
                    <a href="{{ route('publications') }}" class="uppercase">Publications</a>
                    <a href="{{ route('news') }}" class="uppercase">News & Events</a>
                    <a href="{{ route('vacancies') }}" class="uppercase">Vacancies</a>
                    <a href="{{ route('staff') }}" class="uppercase">CRA Staff</a>
                </div>
                <div class="col-span-1 flex flex-col items-center justify-center pt-2">
                    <a href="{{ route('home') }}" class="font-bold uppercase mb-2">Other Links</a>
                    <a href="{{ route('home') }}" class="font-bold uppercase">Other Links</a>
                    <a href="{{ route('home') }}" class="font-bold uppercase">Other Links</a>
                    <a href="{{ route('home') }}" class="font-bold uppercase">Other Links</a>
                </div>
            </div>
        </div>
        <div class="pt-12 flex flex-row justify-center items-center">
            <i class="fab fa-facebook text-2xl px-3"></i>
            <i class="fab fa-twitter text-2xl px-3"></i>
            <i class="fab fa-reddit text-2xl px-3"></i>
            <i class="fab fa-youtube text-2xl px-3"></i>
        </div>
    </div>
</footer>
