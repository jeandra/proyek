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
<<<<<<< HEAD
=======
        .animated-gradient {
            background-size: 300%;
            background-image: linear-gradient(
                -45deg,
                #E0E7F0 0%,
                #F0F4F8 25%,
                #E8EFF5 50%,
                #F0F4F8 75%,
                #E0E7F0 100%
            );
            animation: AnimateBG 20s ease infinite;
        }
        .dark .animated-gradient {
            background-image: linear-gradient(
                -45deg,
                #0A121A 0%,
                #070E14 25%,
                #101C28 50%,
                #070E14 75%,
                #0A121A 100%
            );
        }
        @keyframes AnimateBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        @keyframes fade-in-up {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-up {
            animation: fade-in-up 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94) forwards;
            opacity: 0;
        }
        .delay-1 { animation-delay: 0.1s; }
        .delay-2 { animation-delay: 0.2s; }
        .delay-3 { animation-delay: 0.3s; }
        .delay-4 { animation-delay: 0.4s; }
        .delay-5 { animation-delay: 0.5s; }
        .shadow-custom-light {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08), 0 4px 12px rgba(0, 0, 0, 0.04);
        }
        .dark .shadow-custom-dark {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5), 0 4px 12px rgba(0, 0, 0, 0.25);
        }
        .glassmorphism {
            background-color: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .dark .glassmorphism-dark {
            background-color: rgba(0, 0, 0, 0.35);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border: 1px solid rgba(255, 255, 255, 0.12);
        }
        .btn-3d-push:active {
            transform: translateY(2px);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        .dark .btn-3d-push:active {
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.6);
        }
>>>>>>> origin/main
    </style>
</head>
<body class="animated-gradient text-gray-800 dark:text-gray-100 antialiased transition-colors duration-500">
    <!-- Navbar tetap seperti sebelumnya -->

<<<<<<< HEAD
    <!-- Hero Section -->
    <section class="relative bg-white dark:bg-gray-900">
        <div class="container mx-auto px-6 py-20 text-center">
            <h1 class="text-4xl sm:text-5xl font-extrabold mb-6 text-gray-900 dark:text-white leading-tight">
                Sewa Mobil Dinas BPSDM Jabar
            </h1>
            <p class="text-lg sm:text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                Sistem penyewaan mobil premium yang cepat, praktis, dan efisien untuk kebutuhan operasional Anda.
            </p>
            <div class="mt-10">
                <a href="/login" class="inline-block px-8 py-3 bg-blue-700 text-white text-lg font-semibold rounded-full shadow-md hover:bg-blue-800 transition-all">
                    Mulai Sewa Sekarang
                </a>
            </div>
        </div>
    </section>

    <!-- Section Armada -->
    <section class="py-20 bg-gray-50 dark:bg-gray-800">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-gray-800 dark:text-white mb-10">Armada Tersedia</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white dark:bg-gray-900 p-6 rounded-xl shadow-lg text-center">
                    <img src="https://source.unsplash.com/300x200/?car" alt="Mobil 1" class="rounded-md mb-4 mx-auto">
                    <h3 class="font-bold text-xl mb-2">Toyota Innova</h3>
                    <p class="text-gray-600 dark:text-gray-300">Kenyamanan dan ruang luas untuk perjalanan dinas Anda.</p>
                </div>
                <div class="bg-white dark:bg-gray-900 p-6 rounded-xl shadow-lg text-center">
                    <img src="https://source.unsplash.com/300x200/?vehicle" alt="Mobil 2" class="rounded-md mb-4 mx-auto">
                    <h3 class="font-bold text-xl mb-2">Toyota Avanza</h3>
                    <p class="text-gray-600 dark:text-gray-300">Efisien dan praktis untuk keperluan harian instansi.</p>
                </div>
                <div class="bg-white dark:bg-gray-900 p-6 rounded-xl shadow-lg text-center">
                    <img src="https://source.unsplash.com/300x200/?suv" alt="Mobil 3" class="rounded-md mb-4 mx-auto">
                    <h3 class="font-bold text-xl mb-2">Mitsubishi Pajero</h3>
                    <p class="text-gray-600 dark:text-gray-300">Tangguh untuk medan berat dan perjalanan luar kota.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Prosedur Section -->
    <section class="py-20 bg-white dark:bg-gray-900">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-gray-800 dark:text-white mb-6">Prosedur Penyewaan</h2>
            <ol class="space-y-4 text-left max-w-xl mx-auto text-gray-700 dark:text-gray-300">
                <li><strong>1.</strong> Login ke sistem menggunakan akun BPSDM Anda.</li>
                <li><strong>2.</strong> Pilih kendaraan dan isi formulir penyewaan.</li>
                <li><strong>3.</strong> Tunggu konfirmasi dari admin.</li>
                <li><strong>4.</strong> Ambil kendaraan sesuai jadwal yang disetujui.</li>
            </ol>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-100 dark:bg-gray-800 py-6">
        <div class="container mx-auto px-6 text-center text-gray-600 dark:text-gray-400">
            &copy; 2025 BPSDM Jawa Barat. All rights reserved.
        </div>
    </footer>
=======
    <nav class="sticky top-0 z-50 transition-all duration-300" x-data="{ scrolled: false }" @scroll.window="scrolled = (window.scrollY > 50)">
        <div class="absolute inset-0 bg-white/70 dark:bg-gray-900/80 backdrop-blur-xl border-b border-white/20 dark:border-gray-800/60 transition-all duration-300"
             :class="{'shadow-custom-light dark:shadow-custom-dark': scrolled}">
        </div>
        <div class="relative container mx-auto px-6">
            <div class="flex justify-between items-center h-20">
                <a href="/" class="flex items-center space-x-2">
                    <svg class="h-9 w-9 text-blue-700 dark:text-blue-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14.59L6.41 12 5 13.41 11 19.41l8-8L17.59 10 11 16.59z"/></svg>
                    <span class="text-xl font-extrabold text-gray-900 dark:text-white">BPSDM Jabar</span>
                </a>
                
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="#" class="text-gray-600 dark:text-gray-200 hover:text-blue-700 dark:hover:text-blue-400 font-medium transition-colors duration-200 relative group">Armada
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-blue-700 dark:bg-blue-400 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#" class="text-gray-600 dark:text-gray-200 hover:text-blue-700 dark:hover:text-blue-400 font-medium transition-colors duration-200 relative group">Prosedur
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-blue-700 dark:bg-blue-400 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#" class="text-gray-600 dark:text-gray-200 hover:text-blue-700 dark:hover:text-blue-400 font-medium transition-colors duration-200 relative group">FAQ
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-blue-700 dark:bg-blue-400 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </div>
                
                <div class="flex items-center space-x-4">
                    <div class="hidden sm:flex items-center space-x-4">
                        <?php if (session()->get('isLoggedIn')): ?>
                            <a href="/logout" class="px-6 py-3 bg-red-600 text-white text-base font-semibold rounded-full shadow-lg hover:bg-red-700 hover:scale-105 transition-all transform duration-300 btn-3d-push">
                                Logout
                            </a>
                        <?php else: ?>
                            <a href="/login" class="px-6 py-3 bg-blue-700 text-white text-base font-semibold rounded-full shadow-lg hover:bg-blue-800 hover:scale-105 transition-all transform duration-300 btn-3d-push">
                                Login
                            </a>
                        <?php endif; ?>
                    </div>

                    <button @click="isDarkMode = !isDarkMode" class="p-2.5 rounded-full text-gray-600 dark:text-gray-300 bg-gray-200/50 dark:bg-gray-800/50 hover:bg-gray-300/50 dark:hover:bg-gray-700/50 transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500/50">
                        <svg x-show="!isDarkMode" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" /></svg>
                        <svg x-show="isDarkMode" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                    </button>
                    
                    <button @click="isMenuOpen = !isMenuOpen" class="lg:hidden p-2.5 rounded-md text-gray-600 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                    </button>
                </div>
            </div>
            
            <div x-show="isMenuOpen" @click.away="isMenuOpen = false" x-transition.opacity.duration.300 class="lg:hidden py-4 space-y-2 bg-white/90 dark:bg-gray-900/95 backdrop-blur-md rounded-lg shadow-xl mt-2">
                <a href="#" class="block py-2 text-center text-gray-700 dark:text-gray-100 hover:text-blue-700 font-medium transition-colors">Armada</a>
                <a href="#" class="block py-2 text-center text-gray-700 dark:text-gray-100 hover:text-blue-700 font-medium transition-colors">Prosedur</a>
                <a href="#" class="block py-2 text-center text-gray-700 dark:text-gray-100 hover:text-blue-700 font-medium transition-colors">FAQ</a>
                <div class="border-t border-gray-200 dark:border-gray-700 mx-4 my-2"></div>
                <div class="sm:hidden px-4 space-y-3">
                    <?php if (session()->get('isLoggedIn')): ?>
                        <a href="/dashboard" class="block w-full px-6 py-3 bg-gray-200 text-gray-800 text-base font-semibold rounded-full shadow-lg hover:bg-gray-300 transition-colors">Dashboard</a>
                        <a href="/logout" class="block w-full px-6 py-3 bg-red-600 text-white text-base font-semibold rounded-full shadow-lg hover:bg-red-700 transition-colors">Logout</a>
                    <?php else: ?>
                        <a href="/login" class="block w-full px-6 py-3 bg-blue-700 text-white text-base font-semibold rounded-full shadow-lg hover:bg-blue-800 transition-colors">Login</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
    
    <main>
        <section class="container mx-auto px-6 py-24 sm:py-32">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="text-center lg:text-left">
                    <p class="animate-fade-in-up delay-1 text-lg font-semibold text-blue-700 dark:text-blue-300">BPSDM Provinsi Jawa Barat</p>
                    <h1 class="animate-fade-in-up delay-2 mt-4 text-5xl md:text-6xl lg:text-7xl font-extrabold tracking-tight text-gray-900 dark:text-white leading-tight">
                        Mobilitas Dinas <span class="text-blue-700 dark:text-blue-400">Terdepan.</span>
                    </h1>
                    <p class="animate-fade-in-up delay-3 mt-6 text-xl text-gray-600 dark:text-gray-200 max-w-xl mx-auto lg:mx-0">
                        Akses armada kendaraan dinas premium dengan proses pengajuan yang <strong>cerdas, efisien, dan terintegrasi penuh secara digital.</strong>
                    </p>
                    <div class="animate-fade-in-up delay-4 mt-12 flex flex-col sm:flex-row gap-5 justify-center lg:justify-start">
                        <a href="/login" class="px-8 py-4 bg-blue-700 text-white font-bold rounded-full shadow-xl hover:bg-blue-800 hover:scale-105 transition-all transform duration-300 btn-3d-push">
                            Mulai Pengajuan
                        </a>
                        <a href="#features" class="px-8 py-4 bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-100 font-bold rounded-full hover:bg-gray-300 dark:hover:bg-gray-600 transition-all transform duration-300 btn-3d-push">
                            Pelajari Lebih Lanjut
                        </a>
                    </div>
                </div>
                <div class="animate-fade-in-up delay-4 hidden lg:block relative group transform hover:scale-105 transition-transform duration-500">
                    <div class="relative p-10 bg-white/20 dark:bg-gray-900/40 rounded-3xl glassmorphism dark:glassmorphism-dark shadow-custom-light dark:shadow-custom-dark overflow-hidden">
                        <div class="aspect-w-16 aspect-h-9">
                            <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?q=80&w=2070&auto=format&fit=crop" alt="Ilustrasi Kendaraan Premium" class="w-full h-full object-cover rounded-xl transition-transform duration-500 group-hover:scale-105">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="features" class="container mx-auto px-6 py-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
                 <div class="animate-fade-in-up delay-1 p-8 bg-white/50 dark:bg-gray-900/50 rounded-2xl shadow-custom-light dark:shadow-custom-dark backdrop-blur-sm">
                    <h3 class="text-6xl font-extrabold text-blue-700 dark:text-blue-400">50<span class="text-4xl">+</span></h3>
                    <p class="mt-4 text-xl font-semibold text-gray-700 dark:text-gray-100">Unit Kendaraan Modern</p>
                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-300">Tersedia untuk berbagai kebutuhan dinas Anda.</p>
                </div>
                 <div class="animate-fade-in-up delay-2 p-8 bg-white/50 dark:bg-gray-900/50 rounded-2xl shadow-custom-light dark:shadow-custom-dark backdrop-blur-sm">
                    <h3 class="text-6xl font-extrabold text-blue-700 dark:text-blue-400">1.2<span class="text-4xl">k+</span></h3>
                    <p class="mt-4 text-xl font-semibold text-gray-700 dark:text-gray-100">Perjalanan Terselesaikan</p>
                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-300">Dukungan mobilitas dinas yang terpercaya.</p>
                </div>
                 <div class="animate-fade-in-up delay-3 p-8 bg-white/50 dark:bg-gray-900/50 rounded-2xl shadow-custom-light dark:shadow-custom-dark backdrop-blur-sm">
                    <h3 class="text-6xl font-extrabold text-blue-700 dark:text-blue-400">98<span class="text-4xl">%</span></h3>
                    <p class="mt-4 text-xl font-semibold text-gray-700 dark:text-gray-100">Tingkat Kepuasan</p>
                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-300">Komitmen kami untuk layanan prima.</p>
                </div>
            </div>
        </section>

    </main>
    
    <footer class="mt-32 border-t border-gray-300/50 dark:border-gray-700/50 bg-white/50 dark:bg-gray-900/60 backdrop-blur-sm">
        <div class="container mx-auto px-6 py-10 text-center text-gray-600 dark:text-gray-300">
            <p>&copy; 2025 BPSDM Provinsi Jawa Barat. Hak Cipta Dilindungi.</p>
            <p class="text-sm mt-3">Sebuah Solusi Digital untuk Birokrasi Modern yang <span class="font-bold">Efisien dan Terdepan.</span></p>
            <div class="flex justify-center space-x-6 mt-4">
                <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-200">Privasi</a>
                <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-200">Syarat & Ketentuan</a>
                <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-200">Kontak</a>
            </div>
        </div>
    </footer>

>>>>>>> origin/main
</body>
</html>