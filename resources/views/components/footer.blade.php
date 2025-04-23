<footer class="py-12 bg-teal-950 text-gray-100">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
        <div class="grid grid-cols-1 md:grid-cols-4 border-b-4 border-gray-300 pb-12">
            <div class="col-span-1 mx-auto">
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
                    <a href="https://www.linkedin.com/in/cra-malawi-567614333/" class="font-bold uppercase"><i class="fab fa-linkedin-in text-base px-3"></i><span class="text-base">CRA Malawi</span></a>
                    <a href="https://web.facebook.com/CRA.gov" class="font-bold uppercase"><i class="fab fa-facebook-f text-base px-3"></i><span class="text-base">CRA Malawi</span></a>
                    <a href="https://x.com/CRAMalawi" class="font-bold uppercase"><i class="fab fa-x-twitter text-base px-3"></i><span class="text-base">CRA Malawi</span></a>
                    <a href="https://www.instagram.com/cramalawi/" class="font-bold uppercase"><i class="fab fa-instagram text-base px-3"></i><span class="text-base">CRA Malawi</span></a>
                </div>
            </div>
        </div>
        <div class="pt-12 flex flex-row justify-center items-center">
            <p>&copy; <span id="year"></span> Nthambi Trading & Bytebridge Systems. All rights reserved.</p>
        </div>
    </div>
</footer>
<script>
    document.getElementById("year").textContent = new Date().getFullYear();
</script>
