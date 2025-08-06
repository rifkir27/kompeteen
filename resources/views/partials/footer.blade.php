<footer class="bg-gray-800 text-white py-8">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h3 class="text-lg font-semibold mb-4">Kompeteen</h3>
                <p class="text-sm text-gray-300">
                    Platform belajar pemrograman dan teknologi dengan pendekatan yang komprehensif dan mendalam.
                </p>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('login') }}" class="text-gray-300 hover:text-white">Login</a></li>
                    <li><a href="{{ route('register') }}" class="text-gray-300 hover:text-white">Register</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white">Courses</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white">About Us</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-4">Contact</h3>
                <ul class="space-y-2 text-sm text-gray-300">
                    <li>Email: support@kompeteen.com</li>
                    <li>Phone: +62 821-4094-6544</li>
                    <li>Address: Indonesia</li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-700 mt-8 pt-4 text-center text-sm text-gray-400">
            <p>&copy; {{ date('Y') }} Kompeteen. All rights reserved.</p>
        </div>
    </div>
</footer>
