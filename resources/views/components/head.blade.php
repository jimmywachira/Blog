<!doctype html>
<html lang="en" class="h-full bg-black/90 absolute bottom-0 left-0 right-0 top-0 bg-[linear-gradient(to_right,#4f4f4f2e_1px,transparent_1px),linear-gradient(to_bottom,#8080800a_1px,transparent_1px)] bg-[size:60px_60px]">

<head>
    <meta charset=" UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'blog'}}</title>
    <meta name="description" content="A simple Livewire blog application">
    {{-- The default tailwind config is not always sufficient. For a more robust setup, consider installing and configuring it via npm. --}}
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Google Sans Code">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased font-semibold capitalize text-white/40 w-full leading-relaxed" style="font-family:Google Sans Code" x-data x-on:click.away="$dispatch('search.clear-results')">
