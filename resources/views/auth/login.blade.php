<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - Kompeteen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css']) {{-- pastikan Vite aktif --}}
</head>
<body class="bg-white">

    <div class="min-h-screen flex">
        <!-- Left side image (optional) -->
        <div class="hidden md:flex w-1/2 bg-gradient-to-tr from-purple-800 to-purple-600 justify-center items-center">
            <div class="text-white text-center px-10">
                <h2 class="text-4xl font-bold mb-4">Selamat Datang di Kompeteen</h2>
                <p class="text-lg">Bangun kompetensimu dan raih masa depan cerah bersama kami.</p>
                <img src="/images/hero-illustration.svg" class="mt-10 max-w-xs" alt="Ilustrasi">
            </div>
        </div>

        <!-- Login form -->
        <div class="flex w-full md:w-1/2 justify-center items-center p-6">
            <div class="max-w-md w-full space-y-6">
                <div class="text-center">
                    <img src="/images/logo-kompeteen.png" alt="Logo Kompeteen" class="mx-auto h-16 mb-4">
                    <h2 class="text-2xl font-bold text-gray-800">Masuk ke Akun Anda</h2>
                    <p class="text-sm text-gray-500">Silakan login untuk melanjutkan</p>
                </div>

                <form method="POST" action="#">
                    @csrf
                    <div class="space-y-4">
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

                        <div class="flex justify-between items-center text-sm">
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox text-purple-600">
                                <span class="ml-2 text-gray-600">Ingat saya</span>
                            </label>
                            <a href="#" class="text-purple-600 hover:underline">Lupa password?</a>
                        </div>

                        <button type="submit"
                            class="w-full py-2 px-4 bg-purple-700 text-white font-semibold rounded-md hover:bg-purple-800 transition duration-200">
                            Masuk
                        </button>
                    </div>
                </form>

                <p class="text-center text-sm text-gray-600">
                    Belum punya akun?
                    <a href="/register" class="text-purple-700 font-semibold hover:underline">Daftar sekarang</a>
                </p>
            </div>
        </div>
    </div>

</body>
</html>
