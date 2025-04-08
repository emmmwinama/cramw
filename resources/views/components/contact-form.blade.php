<section class="bg-gray-100 dark:bg-transparent text-gray-700 dark:text-gray-100 col-span-1 my-12 shadow-lg">
    <div class="">
        <div class="grid grid-cols-1 md:grid-cols-5 md:gap-2 gap-0">
            <div class="col-span-1 md:col-span-2 py-12 px-4">
                <div class="">
                    <p class="font-extrabold text-2xl">Get in Touch</p>
                    <p>Need help with something? Get in touch with our team and we will get back to you as soon as possible.</p>
                </div>
                <div class="">
                    <form action="{{ route('contact-form') }}" name="contact-form">
                        @csrf
                        <div class="flex my-3">
                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M3 2h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1Zm5 12h4v-2H8v2Zm0-4h4V8H8v2Zm0-4h4V4H8v2Z"/>
                                </svg>
                            </span>
                            <input type="text" id="website-admin" class="rounded-none rounded-e-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="First name">
                        </div>
                        <div class="flex my-3">
                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 2h16a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1Zm4 10h8v2H6v-2Zm0-4h8v2H6v-2Zm0-4h8v2H6V4Z"/>
                                </svg>
                            </span>
                            <input type="text" id="website-admin" class="rounded-none rounded-e-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Last name">
                        </div>
                        <div class="flex my-3">
                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <i class="w-4 h-4 text-gray-500 dark:text-gray-400 fas fa-envelope"></i>
                            </span>
                            <input type="text" id="website-admin" class="rounded-none rounded-e-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email Address">
                        </div>
                        <div class="flex my-3">
                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <i class="w-4 h-4 text-gray-500 dark:text-gray-400 fas fa-phone"></i>
                            </span>
                            <input type="text" id="website-admin" class="rounded-none rounded-e-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Phone Number">
                        </div>
                        <div class="flex my-3">
                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <i class="w-4 h-4 text-gray-500 dark:text-gray-400 fas fa-message"></i>
                            </span>
                            <textarea id="message" class="rounded-none rounded-e-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your message" rows="4"></textarea>
                        </div>
                        <div class="flex justify-center items-center py-4">
                            {!! NoCaptcha::display() !!}
                        </div>
                        <div class="flex justify-center items-center">
                            <input type="submit" value="Submit" class="g-recaptcha py-2 px-5 bg-[#074923] hover:bg-transparent hover:border hover:border-[#074923] rounded-full hover:text-[#074923] text-gray-100">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-span-1 md:col-span-3 relative">
                <div class="absolute inset-0 bg-black bg-opacity-60 flex items-center justify-center flex-col p-2 text-gray-100 h-auto">
                    <div class="md:flex justify-center items-center flex-col hidden ">
                        <div class="w-[10rem]">
                            <x-application-logo class="block fill-current text-gray-800 dark:text-gray-200 "/>
                        </div>
                        <p class="font-bold text-2xl">Cannabis Regulatory Authority</p>
                    </div>
                    <div class="w-full my-8">
                        <div class="col-span-1 flex flex-col items-center">
                            <div class="bg-[#074923] p-6 rounded-full">
                                <i class="fas fa-phone text-2xl md:text-3xl"></i>
                            </div>
                            <div class="font-bold mt-4">
                                <p><a href="tel:+265991386779" class="text-gray-100">+265 (0) 991386779</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="col-span-1 flex flex-col items-center">
                            <div class="bg-[#074923] p-6 rounded-full">
                                <i class="fas fa-envelopes-bulk text-2xl md:text-3xl"></i>
                            </div>
                            <div class="font-bold mt-4">
                                <p><a href="mailto:ketulosalipira@gmail.com" class="text-gray-100">ketulosalipira@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('assets/contact.svg') }}" alt="Photo by Washarapol D BinYo Jundang: https://www.pexels.com/photo/dark-green-leafed-plant-2731663/" class="h-full w-full md:object-cover object-fill rounded-md">
            </div>
        </div>
    </div>
</section>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('{{ config('6LctZVgqAAAAAIl109_kjL2M1URwbed24M4NXART') }}', {action: 'submit'}).then(function(token) {
            document.getElementById('g-recaptcha-response').value = token;
        });
    });
</script>
