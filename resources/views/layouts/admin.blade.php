<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-100 dark:bg-gray-950 text-gray-900 dark:text-gray-100">

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-white dark:bg-gray-900 border-r border-gray-200 dark:border-gray-800">

        <!-- Logo -->
        <div class="px-6 py-5 font-bold tracking-widest uppercase border-b border-gray-200 dark:border-gray-800">
           KARORY
        </div>

        <!-- Nav -->
        <nav class="p-4 space-y-2">

            <a href="{{ route('admin.roles.index') }}"
               class="block px-4 py-2 rounded-lg bg-gray-200 dark:bg-gray-800 font-semibold">
                Roles
            </a>

            <a href="{{ route('admin.permissions.index') }}"
               class="block px-4 py-2 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-800">
                Permissions
            </a>

            <a href="#"
               class="block px-4 py-2 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-800">
                About
            </a>

            <a href="#"
               class="block px-4 py-2 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-800">
                Contact
            </a>

        </nav>

    </aside>

    <!-- MAIN CONTENT -->
    <main class="flex-1 p-6"   >

        {{ $slot }}

    </main>

</div>

</body>
</html>