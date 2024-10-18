<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Saya')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-500 p-4">
        <div class="container mx-auto">
            <a href="/" class="text-white font-bold">Beranda</a>
            <a href="/contact" class="text-white ml-4">Kontak</a>
            <a href="/login" class="text-white ml-4">Masuk</a>
            <a href="/register" class="text-white ml-4">Daftar</a>
        </div>
    </nav>

    <main class="container mx-auto mt-8">
        @yield('content')
    </main>

    @include('layouts.footer')
</body>
</html>

 