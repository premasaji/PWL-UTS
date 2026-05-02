<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Kelompok</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 flex flex-col min-h-screen">
    <nav class="bg-blue-500 p-4 text-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="font-bold text-xl">EngineerSquad</h1>
            <div class="space-x-4">
                <a href="/home" class="hover:underline">Home</a>
                <a href="/about" class="hover:underline">About</a>
                <a href="/blog" class="hover:underline">Blog</a>
                <a href="/contact" class="hover:underline">Contact</a>
            </div>
        </div>
    </nav>

    <main class="container mx-auto p-8 flex-grow">
        @yield('content')
    </main>

    <footer class="bg-blue-500 text-white text-center p-6 mt-10">
        <p>&copy; 2026 Kelompok Pemrograman Web Lanjut</p>
    </footer>
</body>
</html>
