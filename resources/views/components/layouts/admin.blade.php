<!doctype html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'livewire basics'}}</title>
    <meta name="description" content="A simple Livewire blog application">
    {{-- The default tailwind config is not always sufficient. For a more robust setup, consider installing and configuring it via npm. --}}
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Outfit">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased font-semibold text-white bg-gradient-to-tl from-blue-300 via-blue-600 to-blue-900 min-h-screen" style="font-family:Outfit" x-data x-on:click.away="$dispatch('search.clear-results')">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <header class="py-6">
            <nav class="flex items-center justify-between" aria-label="Global">
                <div class="flex items-center gap-x-12">
                    <a wire:navigate href="/" class="flex items-center gap-2 -m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <ion-icon name="logo-laravel" class="h-8 w-auto large text-black"></ion-icon>
                        <span class="text-xl font-bold tracking-tight">Blog</span>
                    </a>
                    <div class="hidden lg:flex lg:gap-x-8">
                        <a wire:navigate.hover href="/dashboard" class="text-sm leading-6 hover:text-white/70 transition">Admin Dashboard</a>
                        <a wire:navigate.hover href="/dashboard/articles" class="text-sm leading-6 hover:text-white/70 transition">Articles</a>
                    </div>
                </div>
                <div class="flex lg:flex-1 lg:justify-end bg-inherit">
                    <livewire:search placeholder="Search articles..." />
                </div>
            </nav>
        </header>

        <main class="py-10">
            {{ $slot }}
        </main>
    </div>

    {{-- <script data-navigate-once>
        document.addEventListener('search.clear-results', function(e) {
            console.log('Cleared results');
        });

    </script> --}}

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    {{-- <x-footer /> --}}
</body>

</html>
