<!doctype html>
<html lang="en" class="h-full absolute bg-black/90 bottom-0 left-0  right-0 top-0 bg-[linear-gradient(to_right,#4f4f4f2e_1px,transparent_1px),linear-gradient(to_bottom,#8080800a_1px,transparent_1px)] bg-[size:100px_80px]">
{{--
<div class="relative h-full w-full bg-slate-950">
    <div class="absolute bottom-0 left-0 right-0 top-0 bg-[linear-gradient(to_right,#4f4f4f2e_1px,transparent_1px),linear-gradient(to_bottom,#4f4f4f2e_1px,transparent_1px)] bg-[size:14px_24px] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_100%)]">
    </div>
</div> --}}

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'blog'}}</title>
    <meta name="description" content="A simple Livewire blog application">
    {{-- The default tailwind config is not always sufficient. For a more robust setup, consider installing and configuring it via npm. --}}
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Google Sans Code">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full antialiased capitalize font-semibold text-white tracking-wide" style="font-family:Google Sans Code" x-data x-on:click.away="$dispatch('search.clear-results')">
    <div class="flex flex-col min-h-screen">
        <header class="py-6 bg-inherit hover:text-white transition">
            <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between" aria-label="Global">
                <div class="flex items-center gap-x-4">
                    <x-nav-link :active="request()->routeIs('home')" wire:navigate.hover class="flex items-center gap-2 -m-1.5 p-1.5">
                        <span class="sr-only">J$Co</span>
                        <ion-icon name="logo-laravel" class="h-8 w-auto text-white"></ion-icon>
                        <span class="tracking-tight">Blog</span>
                    </x-nav-link>
                    <div class="lg:flex lg:gap-x-8">
                        {{-- <div class="hidden lg:flex lg:gap-x-8">  --}}
                        <x-nav-link wire:navigate.hover href="/dashboard" :active="request()->routeIs('dashboard')" class="text-sm leading-6 hover:text-white/70 transition">Dashboard </x-nav-link>
                    </div>
                </div>
                <div class="flex lg:flex-1 lg:justify-end">
                    <livewire:search placeholder="Search articles..." />
                </div>
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
