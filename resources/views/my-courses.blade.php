<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <title>Kompeten My Course</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-white">
    <div class="min-h-screen flex flex-col">
        <div class="flex flex-1">
            <!-- Sidebar -->
            <aside class="bg-[#3D0B7B] w-64 flex flex-col justify-between">
                <div>
                    <div class="px-6 py-8 flex items-center space-x-1">
                        <h1 class="text-white font-extrabold text-2xl leading-none">
                            Kompe
                            <span class="text-[#F7941D]">teen</span>
                        </h1>
                    </div>
                    <nav class="px-6 space-y-4">
                        <a class="flex items-center space-x-3 text-white text-sm font-normal" href="{{ route('dashboard') }}">
                            <i class="fas fa-th-large text-lg"></i>
                            <span>Dashboard</span>
                        </a>
                        <a aria-current="page" class="flex items-center space-x-3 text-white text-sm font-normal rounded-md px-3 py-2" href="{{ route('my-courses') }}">
                            <i class="fas fa-book-open text-lg"></i>
                            <span>My course</span>
                        </a>
                        <a class="flex items-center space-x-3 text-white text-sm font-normal" href="#">
                            <i class="fas fa-image text-lg"></i>
                            <span>Showcase</span>
                        </a>
                        <a class="flex items-center space-x-3 text-white text-sm font-normal" href="#">
                            <i class="fas fa-exchange-alt text-lg"></i>
                            <span>Transaction</span>
                        </a>
                        <a class="flex items-center space-x-3 text-white text-sm font-normal" href="#">
                            <i class="fas fa-ticket-alt text-lg"></i>
                            <span>Voucher</span>
                        </a>
                        <a class="flex items-center space-x-3 text-white text-sm font-normal" href="{{ route('profile.edit') }}">
                            <i class="fas fa-user text-lg"></i>
                            <span>Profile</span>
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="flex items-center space-x-3 text-white text-sm font-normal w-full text-left">
                                <i class="fas fa-power-off text-lg"></i>
                                <span>Sign Out</span>
                            </button>
                        </form>
                    </nav>
                </div>
                <div class="px-6 py-8 text-white text-xs leading-tight">
                    <h2 class="font-extrabold text-lg mb-1">
                        Kompe
                        <span class="text-[#F7941D]">teen</span>
                    </h2>
                    <p class="text-[9px] leading-tight max-w-[220px]">
                        Website Belajar Seputar Coding Lengkap. Ada pertanyaan lebih lanjut ?
                        silakan hubungi 081244054444
                    </p>
                </div>
            </aside>
            
            <!-- Main content -->
            <main class="flex-1 p-6">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6">
                    <p class="text-xs text-[#1A1A1A] font-normal mb-3 sm:mb-0">
                        Home / My Course
                    </p>
                    <form class="w-full sm:w-64">
                        <label class="sr-only" for="search">
                            Search course
                        </label>
                        <div class="relative">
                            <input class="w-full border border-[#F7941D] rounded-md py-2 pl-3 pr-10 text-xs placeholder-[#F7941D] focus:outline-none focus:ring-1 focus:ring-[#F7941D]" 
                                   id="search" 
                                   name="search" 
                                   placeholder="cari course" 
                                   type="text"/>
                            <button aria-label="Search" class="absolute right-2 top-1/2 -translate-y-1/2 text-[#F7941D]" type="submit">
                                <i class="fas fa-search text-xs"></i>
                            </button>
                        </div>
                    </form>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 max-w-5xl">
                    <!-- Card 1 -->
                    <article class="bg-[#6B1FA9] rounded-md overflow-hidden shadow-md">
                        <img alt="" 
                             class="w-full h-40 object-cover" 
                             src=""/>
                        <div class="bg-[#F7941D] text-[10px] text-center py-1 font-semibold">
                            Mulai Kelas
                        </div>
                        <div class="p-4">
                            <div class="flex items-center space-x-3 mb-2">
                                <img alt="Profile image" 
                                     class="w-10 h-10 rounded-full object-cover" 
                                     src=""/>
                                <div>
                                    <p class="text-white text-sm font-semibold leading-tight">
                                        Angelica Dyson
                                    </p>
                                    <p class="text-[#D9D9D9] text-xs font-normal leading-tight">
                                        Mobile Developer
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-1 text-[#D9D9D9] text-xs font-normal mb-1">
                                <div class="flex space-x-0.5">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <span>4.3 Rating</span>
                            </div>
                            <div class="flex items-center space-x-1 text-[#D9D9D9] text-xs font-normal">
                                <i class="fas fa-book-open text-xs"></i>
                                <span>25 Course</span>
                            </div>
                        </div>
                    </article>
                    
                    <!-- Card 2 -->
                    <article class="bg-[#6B1FA9] rounded-md overflow-hidden shadow-md">
                        <img alt="Laptop on wooden desk with code editor open on screen" 
                             class="w-full h-40 object-cover" 
                             src=""/>
                        <div class="bg-[#F7941D] text-[10px] text-center py-1 font-semibold">
                            Mulai Kelas
                        </div>
                        <div class="p-4">
                            <div class="flex items-center space-x-3 mb-2">
                                <img alt="Profile image" 
                                     class="w-10 h-10 rounded-full object-cover" 
                                     src="https://placehold.co/40x40/png?text=Profile"/>
                                <div>
                                    <p class="text-white text-sm font-semibold leading-tight">
                                        Angelica Dyson
                                    </p>
                                    <p class="text-[#D9D9D9] text-xs font-normal leading-tight">
                                        Mobile Developer
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-1 text-[#D9D9D9] text-xs font-normal mb-1">
                                <div class="flex space-x-0.5">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <span>4.3 Rating</span>
                            </div>
                            <div class="flex items-center space-x-1 text-[#D9D9D9] text-xs font-normal">
                                <i class="fas fa-book-open text-xs"></i>
                                <span>25 Course</span>
                            </div>
                        </div>
                    </article>
                </div>
            </main>
        </div>
        
        <!-- Footer -->
        <footer class="bg-[#3D0B7B] text-white text-xs px-6 py-8">
            <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-3 gap-8">
                <div>
                   
                    
                </div>
                <div>
                    <h3 class="font-semibold mb-2">
                        Informasi
                    </h3>
                    <ul class="space-y-1">
                        <li>Tentang Kami</li>
                        <li>FAQ</li>
                        <li>Tim Kami</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-semibold mb-2">
                        Komunitas
                    </h3>
                    <ul class="space-y-1">
                        <li>Ulasan Member</li>
                        <li>Showcase Member</li>
                        <li>Grup Telegram</li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
