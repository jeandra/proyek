<!DOCTYPE html>
<html lang="id" x-data="{
    isMenuOpen: false,
    isDarkMode: localStorage.getItem('isDarkMode') === 'true'
}" x-init="$watch('isDarkMode', val => localStorage.setItem('isDarkMode', val))" :class="{ 'dark': isDarkMode }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BPSDM Jabar | Sistem Penyewaan Mobil Premium</title>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f7fafc;
        }
        /* Animasi, shadow, glassmorphism, dll. tetap seperti semula */
        /* (potongan style dipersingkat di sini untuk fokus ke bagian perbaikan tombol) */
    </style>
</head>

<body class="animated-gradient text-gray-800 dark:text-gray-100 antialiased transition-colors duration-500">

    <nav class="sticky top-0 z-50 transition-all duration-300" x-data="{ scrolled: false }" @scroll.window="scrolled = (window.scrollY > 50)">
        <div class="absolute inset-0 bg-white/70 dark:bg-gray-900/80 backdrop-blur-xl border-b border-white/20 dark:border-gray-800/60 transition-all duration-300"
             :class="{'shadow-custom-light dark:shadow-custom-dark': scrolled}">
        </div>
        <div class="relative container mx-auto px-6">
            <div class="flex justify-between items-center h-20">
                <a href="#" class="flex items-center space-x-2">
                    <svg class="h-9 w-9 text-blue-700 dark:text-blue-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14.59L6.41 12 5 13.41 11 19.41l8-8L17.59 10 11 16.59z"/></svg>
                    <span class="text-xl font-extrabold text-gray-900 dark:text-white">BPSDM Jabar</span>
                </a>
                
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="#" class="text-gray-600 dark:text-gray-200 hover:text-blue-700 font-medium">Armada</a>
                    <a href="#" class="text-gray-600 dark:text-gray-200 hover:text-blue-700 font-medium">Prosedur</a>
                    <a href="#" class="text-gray-600 dark:text-gray-200 hover:text-blue-700 font-medium">FAQ</a>
                </div>
                
                <div class="flex items-center space-x-4">
                    <!-- ✅ TOMBOL LOGIN/LOGOUT -->
                    <?php if (session()->get('isLoggedIn')): ?>
                        <a href="/logout" class="hidden sm:block px-6 py-3 bg-red-600 text-white text-base font-semibold rounded-full shadow-lg hover:bg-red-700 hover:scale-105 transition-all transform duration-300">
                            Logout
                        </a>
                    <?php else: ?>
                        <a href="/login" class="hidden sm:block px-6 py-3 bg-blue-700 text-white text-base font-semibold rounded-full shadow-lg hover:bg-blue-800 hover:scale-105 transition-all transform duration-300">
                            Login
                        </a>
                    <?php endif; ?>

                    <button @click="isDarkMode = !isDarkMode" class="p-2.5 rounded-full text-gray-600 dark:text-gray-300 bg-gray-200/50 dark:bg-gray-800/50 hover:bg-gray-300/50 dark:hover:bg-gray-700/50 transition-colors duration-300">
                        <svg x-show="!isDarkMode" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" /></svg>
                        <svg x-show="isDarkMode" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                    </button>

                    <button @click="isMenuOpen = !isMenuOpen" class="lg:hidden p-2.5 rounded-md text-gray-600 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                    </button>
                </div>
            </div>

            <!-- ✅ TOMBOL LOGIN/LOGOUT VERSI MOBILE -->
            <div x-show="isMenuOpen" @click.away="isMenuOpen = false" x-transition.opacity.duration.300 class="lg:hidden py-4 space-y-2 text-center bg-white/90 dark:bg-gray-900/95 backdrop-blur-md rounded-lg shadow-xl mt-2">
                <a href="#" class="block py-2 text-gray-700 dark:text-gray-100 hover:text-blue-700 font-medium">Armada</a>
                <a href="#" class="block py-2 text-gray-700 dark:text-gray-100 hover:text-blue-700 font-medium">Prosedur</a>
                <a href="#" class="block py-2 text-gray-700 dark:text-gray-100 hover:text-blue-700 font-medium">FAQ</a>
                <?php if (session()->get('isLoggedIn')): ?>
                    <a href="/logout" class="block w-full mt-4 px-6 py-3 bg-red-600 text-white text-base font-semibold rounded-full shadow-lg hover:bg-red-700 transition-colors">Logout</a>
                <?php else: ?>
                    <a href="/login" class="block w-full mt-4 px-6 py-3 bg-blue-700 text-white text-base font-semibold rounded-full shadow-lg hover:bg-blue-800 transition-colors">Login</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <!-- Konten utama dan footer tetap sama seperti milikmu sebelumnya -->
    <!-- Tidak ditampilkan ulang di sini karena tidak berubah -->
    
</body>
</html>
