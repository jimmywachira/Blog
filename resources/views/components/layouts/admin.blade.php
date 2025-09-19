<!doctype html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'livewire basics'}}</title>
    <meta name="description" content="A simple Livewire blog application">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Outfit">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased font-semibold text-black/50 bg-gradient-to-tl from-blue-300 via-blue-600 to-blue-900" style="font-family:Outfit" x-data x-on:click="$dispatch('search.clear-results')">
    <div class="">
        <div class="relative flex flex-col max-w-2xl lg:max-w-7xl shadow">
            <div class="relative w-full max-w-2xl lg:max-w-7xl shadow">
                <nav class="">
                    <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
                        <div class="w-full block" id="navbar-default">
                            <ul class="flex flex-col p-4 rounded">
                                <li>
                                    <a wire:navigate.hover href="/dashboard" class="block py-2 px-4">Admin Dashboard</a>
                                </li>
                                <li>
                                    <a wire:navigate.hover href="/dashboard/articles" class="block py-2 px-4">Articles</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="relative flex flex-col max-w-2xl lg:max-w-7xl">
            <main class="mt-5">
                <div class="p-3 mt-6">
                    {{ $slot }}
                </div>
            </main>
        </div>
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
