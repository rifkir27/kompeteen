<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register - Kompeteen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="max-w-4xl w-full bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="flex flex-col md:flex-row">
                <!-- Left side image -->
                <div class="hidden md:block md:w-1/2 bg-gradient-to-tr from-purple-800 to-purple-600 p-12">
                    <div class="text-white">
                        <h2 class="text-3xl font-bold mb-4">Bergabung dengan Kompeteen</h2>
                        <p class="text-lg mb-8">Mulai perjalanan belajarmu dan tingkatkan kompetensimu bersama kami.</p>
                        <img src="/images/hero-illustration.svg" class="max-w-full h-auto" alt="Ilustrasi">
                    </div>
                </div>

                <!-- Registration form -->
                <div class="w-full md:w-1/2 py-16 px-8">
                    <div class="max-w-sm mx-auto">
                        <div class="text-center mb-8">
                            <img src="/images/logo-kompeteen.png" alt="Logo Kompeteen" class="mx-auto h-16 mb-4">
                            <h2 class="text-2xl font-bold text-gray-800">Buat Akun Baru</h2>
                            <p class="text-sm text-gray-500">Daftar untuk memulai perjalanan belajarmu</p>
                        </div>

                        <form method="POST" action="{{ route('register') }}" class="space-y-4">
                            @csrf
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                                <input type="text" id="name" name="name" required autofocus
                                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500">
                            </div>

                            <div>
                                <label for="username" class="block text-sm font-medium text-gray-700">Nama Pengguna</label>
                                <input type="text" id="username" name="username" required
                                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500">
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" id="email" name="email" required
                                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500">
                            </div>

                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                                <input type="password" id="password" name="password" required
                                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500">
                            </div>

                            <div>
                                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi Password</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" required
                                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500">
                            </div>

                            <button type="submit"
                                class="w-full py-2 px-4 bg-purple-700 text-white font-semibold rounded-md hover:bg-purple-800 transition duration-200">
                                Daftar
                            </button>
                        </form>

                        <p class="mt-6 text-center text-sm text-gray-600">
                            Sudah punya akun?
                            <a href="{{ route('login') }}" class="text-purple-700 font-semibold hover:underline">Masuk sekarang</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>