<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Layout</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">

    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Content --}}
    <main class="flex-grow container mx-auto p-6">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.footer')

</body>
</html>