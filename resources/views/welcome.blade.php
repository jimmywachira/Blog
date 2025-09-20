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

<body class="antialiased font-semibold h-full text-black/50 text-l bg-gradient-to-tl from-blue-300 via-blue-600 to-blue-900" style="font-family:Outfit">

    <div class="flex justify-center items-center w-3/4 p-3 m-3">
        <div class="flex flex-col items-center justify-center text-center">
            <p class="text-lg text-black shadow p-4 m-2 rounded-full">A collection of Livewire components to enhance your Laravel applications.</p>
        </div>
    </div>

    <div class="p-3 m-6">
        {{-- <livewire:search /> --}}
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    {{-- <x-footer /> --}}
</body>
</html>
