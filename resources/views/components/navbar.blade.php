<nav class="bg-blue-600 text-white shadow">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <div class="flex items-center">
                <a href="{{ route('dashboard', ['username' => session('user')['username']]) }}" class="font-bold text-xl">
                    MEDCHECK
                </a>
            </div>
            <div class="flex items-center space-x-6">
                <a href="{{ route('dashboard', ['username' => session('user')['username']]) }}" class="hover:text-blue-200 transition">
                    Dashboard
                </a>
                <a href="{{ route('pengelolaan') }}" class="hover:text-blue-200 transition">
                    Pengelolaan
                </a>
                <details class="relative">
                    <summary class="list-none cursor-pointer flex items-center hover:text-blue-200 transition">
                        <span>{{ session('user')['nama'] }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </summary>
                    <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-10">
                        <a href="{{ route('profile') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            Profile
                        </a>
                        <a href="{{ route('login') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            Logout
                        </a>
                    </div>
                </details>
            </div>
        </div>
    </div>
</nav>
