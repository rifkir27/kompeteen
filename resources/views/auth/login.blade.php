<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - Kompeteen</title>
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
                        <h2 class="text-3xl font-bold mb-4">Selamat Datang di Kompeteen</h2>
                        <p class="text-lg mb-8">Bangun kompetensimu dan raih masa depan cerah bersama kami.</p>
                        <img src="/images/hero-illustration.svg" class="max-w-full h-auto" alt="Ilustrasi">
                    </div>
                </div>

                <!-- Login form -->
                <div class="w-full md:w-1/2 py-16 px-8">
                    <div class="max-w-sm mx-auto">
                        <div class="text-center mb-8">
                            <img src="/images/logo-kompeteen.png" alt="Logo Kompeteen" class="mx-auto h-16 mb-4">
                            <h2 class="text-2xl font-bold text-gray-800">Masuk ke Akun Anda</h2>
                            <p class="text-sm text-gray-500">Silakan login untuk melanjutkan</p>
                        </div>

                        <form method="POST" action="#" class="space-y-6">
                            @csrf
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

                            <div class="flex items-center justify-between text-sm">
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
                        </form>

                        <p class="mt-6 text-center text-sm text-gray-600">
                            Belum punya akun?
                            <a href="/register" class="text-purple-700 font-semibold hover:underline">Daftar sekarang</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>