<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kompeteen - Platform Belajar Pemrograman</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js']) {{-- Jika pakai Vite --}}
    <style>
        /* Warna dasar */
        .primary { background-color: #37005b; }
        .btn-orange { background-color: #f48c06; color: white; }
        .btn-orange:hover { background-color: #d97706; }
    </style>
</head>
<body class="bg-white font-sans text-gray-800">

    {{-- Navbar --}}
    <nav class="primary text-white flex justify-between items-center px-6 py-4">
        <div class="text-xl font-bold">
            <span class="text-white">Kompe</span><span class="text-orange-400">teen</span>
        </div>
        <ul class="flex space-x-4 text-sm">
            <li><a href="#" class="hover:underline">Home</a></li>
            <li><a href="#" class="hover:underline">Course</a></li>
            <li><a href="#" class="hover:underline">Category</a></li>
            <li><a href="#" class="hover:underline">Review</a></li>
            <li><a href="#" class="hover:underline">Showcase</a></li>
            <li><a href="#" class="hover:underline">Mentor</a></li>
            <li><a href="#" class="hover:underline">Infrastructure</a></li>
        </ul>
        <div class="space-x-2">
            <a href="{{ route('login') }}" class="btn-orange px-4 py-1 rounded text-sm">Sign In</a>
            <a href="{{ route('register') }}" class="border border-white px-4 py-1 rounded text-sm hover:bg-white hover:text-purple-800">Sign Up</a>
        </div>
    </nav>

    {{-- Hero --}}
    <section class="text-center px-4 py-20">
        <h1 class="text-2xl md:text-3xl font-semibold">Platform Belajar Pemrograman dan Ilmu Teknologi Lainnya Secara<br>Lengkap dan Mendasar.</h1>
        <p class="text-sm mt-2">Belajar, berkolaborasi, dan kembangkan skill anda bersama kami di KOMPETEEN</p>
        <div class="mt-6 space-x-4">
            <a href="{{ route('register') }}" class="btn-orange px-4 py-2 rounded">Daftar Sekarang</a>
            <a href="#" class="border border-gray-600 px-4 py-2 rounded text-sm">Lihat Showcase</a>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="primary text-white px-6 py-12 grid grid-cols-1 md:grid-cols-3 gap-6">
        <div>
            <div class="text-xl font-bold mb-2">
                Kompe<span class="text-orange-400">teen</span>
            </div>
            <p class="text-sm">Website Belajar Seputar Coding Lengkap. Ada pertanyaan? Hubungi 082140946544</p>
        </div>
        <div>
            <h3 class="font-semibold mb-2">Informasi</h3>
            <ul class="text-sm space-y-1">
                <li><a href="#" class="hover:underline">Tentang Kami</a></li>
                <li><a href="#" class="hover:underline">FAQ</a></li>
                <li><a href="#" class="hover:underline">Tim Kami</a></li>
            </ul>
        </div>
        <div>
            <h3 class="font-semibold mb-2">Komunitas</h3>
            <ul class="text-sm space-y-1">
                <li><a href="#" class="hover:underline">Ulasan Member</a></li>
                <li><a href="#" class="hover:underline">Showcase Member</a></li>
                <li><a href="#" class="hover:underline">Grup Telegram</a></li>
            </ul>
        </div>
    </footer>

</body>
</html>
