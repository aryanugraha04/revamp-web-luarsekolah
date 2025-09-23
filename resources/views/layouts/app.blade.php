<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luarsekolah - @yield('title', 'Platform Belajar Online')</title>

    {{-- Contoh jika menggunakan Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    {{-- Memasukkan Navbar --}}
    @include('partials.navbar')

    <main>
        {{-- Di sini konten dari setiap halaman akan dimasukkan --}}
        @yield('content')
    </main>

    {{-- Memasukkan Footer --}}
    @include('partials.footer')

    </body>
</html>