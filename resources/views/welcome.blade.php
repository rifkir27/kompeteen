<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kompeteen - Platform Belajar Pemrograman</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .primary { background-color: #37005b; }
        .btn-orange { background-color: #f48c06; color: white; }
        .btn-orange:hover { background-color: #d97706; }
    </style>
</head>
<body class="bg-white font-sans text-gray-800">

    {{-- Navbar --}}
    <nav class="primary text-white flex justify-between items-center px-6 py-4">
        <div class="text-4xl font-bold">
            <span class="text-white">Kompe</span><span class="text-orange-600">teen</span>
        </div>
        <ul class="flex space-x-4 text-sm">
            <li><a href="#" class="hover:underline font-light">Home</a></li>
            <li><a href="#" class="hover:underline font-light">Course</a></li>
            <li><a href="#" class="hover:underline font-light">Category</a></li>
            <li><a href="#" class="hover:underline font-light">Review</a></li>
            <li><a href="#" class="hover:underline font-light">Showcase</a></li>
            <li><a href="#" class="hover:underline font-light">Mentor</a></li>
            <li><a href="#" class="hover:underline font-light">Infrastructure</a></li>
        </ul>
        <div class="space-x-2">
           <a href="{{ route('login') }}" class="px-4 py-1 rounded text-sm bg-orange-600 text-white hover:bg-orange-600">
            Sign In
        </a>
            <a href="{{ route('register') }}" class="border border-white px-4 py-1 rounded text-sm hover:bg-white hover:text-purple-800">Sign Up</a>
        </div>
    </nav>

    {{-- Hero --}}
    <section class="text-center px-4 py-20">
        <h1 class="text-2xl md:text-3xl font-semibold leading-relaxed">
            Platform Belajar Pemrograman dan Ilmu Teknologi Lainnya Secara<br>Lengkap dan Mendasar.
        </h1>
        <p class="text-sm mt-2">Belajar, berkolaborasi, dan kembangkan skill anda bersama kami di KOMPETEEN</p>
        <div class="mt-6 space-x-4">
            <a href="{{ route('register') }}" class="btn-orange px-4 py-2 rounded-lg">Daftar Sekarang</a>
            <a href="#" class="border border-gray-600 px-4 py-2 rounded-lg text-sm">Lihat Showcase</a>
        </div>

        {{-- Gambar showcase --}}
        <div class="mt-10 flex flex-col md:flex-row justify-center gap-1.5 px-4">
            <img src="{{ asset('images/img.png') }}" 
                class="rounded-2xl transform -rotate-2 shadow-lg translate-y-2" alt="">

            <img src="{{ asset('images/img.png') }}" 
                class="rounded-2xl shadow-lg relative top-0.5" alt="">
                
            <img src="{{ asset('images/img.png') }}" 
                class="rounded-2xl transform rotate-2 shadow-lg translate-y-2" alt="">
        </div>


    </section>

    {{-- Course Section --}}
    <section class="px-4 py-16 max-w-7xl mx-auto">
        <h2 class="text-lg mb-2 font-thin">Siap upgrade skill anda hari ini ?</h2>
        <h3 class="text-2xl font-semibold mb-6">Dapatkan kelas sesuai passion dan skill anda</h3>

        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-6">
            @for ($i = 0; $i < 6; $i++)
                <div class="border rounded-lg shadow-md overflow-hidden">
                    <div class="relative">
                        <img src="{{ asset('images/tgs.png') }}" alt="Course image" class="w-full h-48 object-cover">
                    <div class="absolute top-0 left-0 flex justify-between w-full p-2 text-sm">
                        <span class="bg-orange-500 text-white px-2 py-0.5 rounded">★ 4.9</span>
                        <span class="bg-orange-500 text-white px-2 py-0.5 rounded">50% OFF</span>
                   </div>
                </div>
                    <div class="p-4 bg-purple-800 text-white">
                        <h3 class="text-sm font-semibold mb-1">Membangun Mobile Apps Menggunakan Flutter</h3>
                            <p class="text-xs">Anggieta Diyon</p>
                            <p class="text-xs text-purple-200 mb-2">Populer</p>
                            <p class="text-white font-bold text-sm">Rp 250.000</p>
                      <div class="flex justify-between mt-3">
                            <a href="#" class="text-xs bg-orange-500 px-3 py-1 rounded hover:bg-orange-600">Daftar Kelas</a>
                            <a href="#" class="text-xs border border-white px-3 py-1 rounded hover:bg-white hover:text-purple-800">Detail Kelas</a>
                        </div>
                    </div>
                </div>

            @endfor
        </div>

        <div class="text-center mt-10">
            <a href="#" class="border border-gray-600 px-4 py-2 rounded text-sm">Lihat semua kelas</a>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="primary text-white px-6 py-12 grid grid-cols-1 md:grid-cols-3 gap-6">
        <div>
            <div class="text-xl font-bold mb-2">
                Kompe<span class="text-orange-400">teen</span>
            </div>
            <p class="text-sm">Website belajar seputar coding lengkap. Ada pertanyaan lebih lanjut? Hubungi 082140946544</p>
        </div>
        <div>
            <h3 class="font-semibold mb-2">Informasi</h3>
            <ul class="text-sm space-y-1">
                <li><a href="#" class="hover:underline font-light">Tentang Kami</a></li>
                <li><a href="#" class="hover:underline font-light">FAQ</a></li>
                <li><a href="#" class="hover:underline font-light">Tim Kami</a></li>
            </ul>
        </div>
        <div>
            <h3 class="font-semibold mb-2">Komunitas</h3>
            <ul class="text-sm space-y-1">
                <li><a href="#" class="hover:underline font-light">Ulasan Member</a></li>
                <li><a href="#" class="hover:underline font-light">Showcase Member</a></li>
                <li><a href="#" class="hover:underline font-light">Grup Telegram</a></li>
            </ul>
        </div>
    </footer>

</body>
</html>
