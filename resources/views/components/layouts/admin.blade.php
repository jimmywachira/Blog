<x-head :title="$title ?? 'Admin Dashboard'" />
@livewireStyles
<div class="flex flex-col min-h-screen">
    <header class="py-4 bg-inherit hover:text-white transition">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between" aria-label="Global">
            <div class="flex items-center gap-x-3 p-2 m-2">
                <x-nav-link :active="request()->routeIs('home')" wire:navigate href="/" class="">
                    <span class="sr-only"></span>
                    <ion-icon name="logo-laravel" size="large" class="h-8 w-auto text-white"></ion-icon>
                    <span class="tracking-tight">Blog</span>
                </x-nav-link>
                <div class="lg:flex lg:gap-x-8">
                    {{-- <div class="hidden lg:flex lg:gap-x-8">  --}}
                    <x-nav-link :active="request()->routeIs('home')" wire:navigate.hover href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="">Dashboard </x-nav-link>
                </div>

                <div class="lg:flex lg:gap-x-8">
                    <x-nav-link wire:navigate.hover href="/dashboard/articles" :active="request()->routeIs('dashboard.articles')" class="">Articles</x-nav-link>
                </div>
            </div>
            {{-- <div class="flex lg:flex-1 lg:justify-end">
                    <livewire:search placeholder="Search articles..." />
                </div> --}}
        </nav>
    </header>

    <main class="flex-grow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
            {{ $slot }}
        </div>
    </main>

    <x-footer />
</div>

{{-- <script data-navigate-once>
        document.addEventListener('search.clear-results', function(e) {
            console.log('Cleared results');
        });

    </script> --}}

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
