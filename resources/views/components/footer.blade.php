<footer class="mt-8">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            <div class="space-y-8 xl:col-span-1">
                <a wire:navigate href="/" class="flex items-center gap-2">
                    <ion-icon name="logo-laravel" class="h-8 w-auto text-white"></ion-icon>
                    <span class="text-xl capitalize text-blue-800 font-bold tracking-tight">Blog +</span>
                </a>
                <p class="text-white/70 text-base">
                    A simple blog built with the TALL stack.
                </p>
                <div class="flex space-x-6">
                    {{-- Replace # with your actual social media links --}}
                    <a href="#" class="text-blue-800 hover:text-white">
                        <span class="sr-only">Twitter</span>
                        <ion-icon name="logo-twitter" class="h-6 w-6"></ion-icon>
                    </a>
                    <a href="#" class="text-blue-800 hover:text-white">
                        <span class="sr-only">GitHub</span>
                        <ion-icon name="logo-github" class="h-6 w-6"></ion-icon>
                    </a>
                </div>
            </div>
            <div class="mt-4 grid grid-cols-2 gap-8 xl:mt-0 xl:col-span-2">
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        {{-- You can add navigation links here if needed --}}
                    </div>
                    <div class="mt-4 md:mt-0">
                        <h3 class="text-sm font-semibold text-blue-700 tracking-wider uppercase">Subscribe to our newsletter</h3>
                        <p class="mt-4 text-base text-white/70">No Spams! Just the latest news and resources sent to your inbox weekly.</p>
                        <form class="mt-4 sm:flex sm:max-w-md">
                            <label for="email-address" class="sr-only">Email address</label>
                            <input type="email" name="email-address" id="email-address" autocomplete="email" required class="appearance-none min-w-0 w-full bg-white/5 border-0 rounded-md py-2 px-4 text-base text-white placeholder-white/50 ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-white sm:text-sm sm:leading-6" placeholder="Enter your email">
                            <div class="mt-3 rounded-md sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                                <button type="submit" class="w-full flex items-center justify-center border-2 border-transparent rounded-md py-2 px-4 text-bold text-blue-800 bg-black/70 hover:bg-black/70 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4 text-center border-white/10 pt-4">
            <p class="text-base text-white/70 xl:text-center">&copy; {{ date('Y') }} J&amp;Co All rights reserved.</p>
        </div>
    </div>
</footer>
