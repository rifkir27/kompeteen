<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kompeteen - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .primary { background-color: #37005b; }
        .btn-orange { background-color: #f48c06; color: white; }
        .btn-orange:hover { background-color: #d97706; }
        .profile-dropdown {
            position: relative;
            display: inline-block;
        }
        .profile-dropdown-content {
            display: none;
            position: absolute;
            right: 0;
            background-color: white;
            min-width: 200px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            border-radius: 8px;
        }
        .profile-dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-size: 14px;
        }
        .profile-dropdown-content a:hover {
            background-color: #f1f1f1;
            border-radius: 8px;
        }
        .profile-dropdown:hover .profile-dropdown-content {
            display: block;
        }
    </style>
</head>
<body class="bg-white font-sans text-gray-800">

    {{-- Navbar with Profile --}}
    <nav class="primary text-white flex justify-between items-center px-6 py-4">
        <div class="text-4xl font-bold">
            <span class="text-white">Kompe</span><span class="text-orange-600">teen</span>
        </div>
        <ul class="flex space-x-4 text-sm">
            <li><a href="{{ route('home') }}" class="hover:underline font-light">Dashboard</a></li>
            <li><a href="#" class="hover:underline font-light">My Courses</a></li>
            <li><a href="#" class="hover:underline font-light">Categories</a></li>
            <li><a href="#" class="hover:underline font-light">Progress</a></li>
            <li><a href="#" class="hover:underline font-light">Showcase</a></li>
            <li><a href="#" class="hover:underline font-light">Mentors</a></li>
        </ul>
        <div class="flex items-center space-x-4">
            <div class="profile-dropdown">
                <button class="flex items-center space-x-2 px-3 py-1 rounded-lg bg-orange-600 hover:bg-orange-700">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}&background=orange&color=white&size=32" 
                         alt="Profile" class="w-8 h-8 rounded-full">
                    <span class="text-sm">{{ auth()->user()->name }}</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="profile-dropdown-content">
                    <a href="{{ route('profile.edit') }}">
                        <i class="fas fa-user mr-2"></i>Profile Settings
                    </a>
                    <a href="#">
                        <i class="fas fa-graduation-cap mr-2"></i>My Learning
                    </a>
                    <a href="#">
                        <i class="fas fa-certificate mr-2"></i>Certificates
                    </a>
                    <a href="#">
                        <i class="fas fa-cog mr-2"></i>Account Settings
                    </a>
                    <hr class="my-2">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                            <i class="fas fa-sign-out-alt mr-2"></i>Sign Out
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    {{-- Welcome Section --}}
    <section class="text-center px-4 py-16 bg-gradient-to-b from-purple-50 to-white">
        <h1 class="text-2xl md:text-3xl font-semibold leading-relaxed">
            Selamat Datang, <span class="text-orange-600">{{ auth()->user()->name }}</span>!
        </h1>
        <p class="text-sm mt-2 text-gray-600">Terus tingkatkan skill Anda dengan kursus-kursus terbaik kami</p>
        
        <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-purple-800">Kursus Aktif</h3>
                <p class="text-3xl font-bold text-orange-600 mt-2">5</p>
                <p class="text-sm text-gray-600">Sedang dipelajari</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-purple-800">Progress</h3>
                <p class="text-3xl font-bold text-orange-600 mt-2">72%</p>
                <p class="text-sm text-gray-600">Keseluruhan</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-purple-800">Sertifikat</h3>
                <p class="text-3xl font-bold text-orange-600 mt-2">3</p>
                <p class="text-sm text-gray-600">Telah diperoleh</p>
            </div>
        </div>
    </section>

    {{-- My Courses Section --}}
    <section class="px-4 py-16 max-w-7xl mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold">Kursus Saya</h2>
            <a href="#" class="btn-orange px-4 py-2 rounded-lg text-sm">Lihat Semua</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-6">
            @for ($i = 0; $i < 3; $i++)
                <div class="border rounded-lg shadow-md overflow-hidden">
                    <div class="relative">
                        <img src="{{ asset('images/tgs.png') }}" alt="Course image" class="w-full h-48 object-cover">
                        <div class="absolute top-0 left-0 flex justify-between w-full p-2 text-sm">
                            <span class="bg-green-500 text-white px-2 py-0.5 rounded">Aktif</span>
                            <span class="bg-blue-500 text-white px-2 py-0.5 rounded">{{ 65 + $i }}% Selesai</span>
                        </div>
                    </div>
                    <div class="p-4 bg-purple-800 text-white">
                        <h3 class="text-sm font-semibold mb-1">
                            @if($i == 0)
                                Membangun Mobile Apps Menggunakan Flutter
                            @elseif($i == 1)
                                Web Development dengan Laravel
                            @else
                                Data Science dengan Python
                            @endif
                        </h3>
                        <p class="text-xs mb-2">Progress: {{ 65 + $i }}% • {{ 5 - $i }} materi tersisa</p>
                        <div class="flex justify-between mt-3">
                            <a href="#" class="text-xs bg-orange-500 px-3 py-1 rounded hover:bg-orange-600">Lanjutkan</a>
                            <a href="#" class="text-xs border border-white px-3 py-1 rounded hover:bg-white hover:text-purple-800">Detail</a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </section>

    {{-- Recommended Courses --}}
    <section class="px-4 py-16 max-w-7xl mx-auto bg-gray-50">
        <h2 class="text-2xl font-semibold mb-6">Rekomendasi Untuk Anda</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-6">
            @for ($i = 0; $i < 3; $i++)
                <div class="border rounded-lg shadow-md overflow-hidden bg-white">
                    <div class="relative">
                        <img src="{{ asset('images/tgs.png') }}" alt="Course image" class="w-full h-48 object-cover">
                        <div class="absolute top-0 left-0 flex justify-between w-full p-2 text-sm">
                            <span class="bg-orange-500 text-white px-2 py-0.5 rounded">★ 4.9</span>
                            <span class="bg-orange-500 text-white px-2 py-0.5 rounded">NEW</span>
                        </div>
                    </div>
                    <div class="p-4 bg-purple-800 text-white">
                        <h3 class="text-sm font-semibold mb-1">
                            @if($i == 0)
                                Machine Learning Fundamentals
                            @elseif($i == 1)
                                React Native Development
                            @else
                                Cloud Computing Basics
                            @endif
                        </h3>
                        <p class="text-xs mb-2">Diajarkan oleh Expert</p>
                        <p class="text-white font-bold text-sm">Rp 299.000</p>
                        <div class="flex justify-between mt-3">
                            <a href="#" class="text-xs bg-orange-500 px-3 py-1 rounded hover:bg-orange-600">Daftar Kelas</a>
                            <a href="#" class="text-xs border border-white px-3 py-1 rounded hover:bg-white hover:text-purple-800">Detail</a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </section>

    {{-- Footer --}}
    <footer class="primary text-white px-6 py-12 grid grid-cols-1 md:grid-cols-3 gap-6">
        <div>
            <div class="text-xl font-bold mb-2">
                Kompe<span class="text-orange-400">teen</span>
            </div>
            <p class="text-sm">Platform belajar pemrograman lengkap. Ada pertanyaan? Hubungi support@kompeteen.com</p>
        </div>
        <div>
            <h3 class="font-semibold mb-2">Akun Saya</h3>
            <ul class="text-sm space-y-1">
                <li><a href="{{ route('profile.edit') }}" class="hover:underline font-light">Profile Settings</a></li>
                <li><a href="#" class="hover:underline font-light">Learning Progress</a></li>
                <li><a href="#" class="hover:underline font-light">Certificates</a></li>
            </ul>
        </div>
        <div>
            <h3 class="font-semibold mb-2">Bantuan</h3>
            <ul class="text-sm space-y-1">
                <li><a href="#" class="hover:underline font-light">Pusat Bantuan</a></li>
                <li><a href="#" class="hover:underline font-light">Hubungi Kami</a></li>
                <li><a href="#" class="hover:underline font-light">FAQ</a></li>
            </ul>
        </div>
    </footer>

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</body>
</html>
