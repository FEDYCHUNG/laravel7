<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalabel=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Component in Laravel 7</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
</head>

<body class="flex flex-col items-center">
    {{-- call app/View/Component/Sidebar --}}
    {{-- Passing title to Sidebar title --}}
    {{-- Passing info to Sidebar info from route --}}
    {{-- Managing class attribute --}}
    <x-sidebar title="My Sidebar" :info="$info" class="bg-gray-500">
        {{-- Adding new html slot to sidebar --}}
        <div>Additional content</div>
        {{-- Adding slot with name of sub_title --}}
        <x-slot name="sub_title">Sidebar Cooler Title</x-slot>
    </x-sidebar>

    {{-- call app/View/Component/Navigation --}}
    <x-navigation></x-navigation>

    {{-- calling subview --}}
    <x-subview></x-subview>

    {{-- calling other subview inside folder --}}
    <x-partials.subview></x-partials.subview>
</body>

</html>