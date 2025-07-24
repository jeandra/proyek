<!DOCTYPE html>
<html lang="id" x-data="{ isDarkMode: localStorage.getItem('isDarkMode') === 'true' }" x-init="$watch('isDarkMode', val => localStorage.setItem('isDarkMode', val))" :class="{ 'dark': isDarkMode }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Rental Mobil BPSDM</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .animated-gradient {
            background-size: 300%;
            background-image: linear-gradient(-45deg, #E0E7F0, #F0F4F8, #E8EFF5, #F0F4F8, #E0E7F0);
            animation: AnimateBG 20s ease infinite;
        }
        .dark .animated-gradient {
            background-image: linear-gradient(-45deg, #0A121A, #070E14, #101C28, #070E14, #0A121A);
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
            animation: fade-in-up 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94) forwards;
            opacity: 0;
        }
        .delay-1 { animation-delay: 0.1s; }
        .delay-2 { animation-delay: 0.2s; }
        .delay-3 { animation-delay: 0.3s; }
        .delay-4 { animation-delay: 0.4s; }
        .delay-5 { animation-delay: 0.5s; }
        .shadow-custom-light {
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1), 0 4px 15px rgba(0, 0, 0, 0.05);
        }
        .dark .shadow-custom-dark {
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.5), 0 4px 15px rgba(0, 0, 0, 0.25);
        }
        .btn-3d-push:active {
            transform: translateY(2px);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body class="animated-gradient min-h-screen flex items-center justify-center p-4 text-gray-900 dark:text-gray-100 transition-all duration-500">

    <div class="relative w-full max-w-md p-8 sm:p-10 bg-white/70 dark:bg-gray-900/70 rounded-3xl shadow-custom-light dark:shadow-custom-dark backdrop-blur-xl animate-fade-in-up">
        
        <div class="absolute top-4 right-4">
            <button @click="isDarkMode = !isDarkMode" class="p-2.5 rounded-full text-gray-600 dark:text-gray-300 bg-gray-200/50 dark:bg-gray-800/50 hover:bg-gray-300/50 dark:hover:bg-gray-700/50 transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500/50">
                <svg x-show="!isDarkMode" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" /></svg>
                <svg x-show="isDarkMode" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
            </button>
        </div>
        
        <div class="text-center">
            <svg class="mx-auto h-12 w-12 text-blue-700 dark:text-blue-400 animate-fade-in-up delay-1" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14.59L6.41 12 5 13.41 11 19.41l8-8L17.59 10 11 16.59z"/></svg>
            <h2 class="mt-4 text-3xl font-extrabold animate-fade-in-up delay-2">Selamat Datang</h2>
            <p class="text-gray-600 dark:text-gray-300 animate-fade-in-up delay-2">Login untuk mengakses sistem.</p>
        </div>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="animate-fade-in-up delay-3 mt-6 mb-2 flex items-center p-3 bg-red-100 dark:bg-red-900/40 text-red-800 dark:text-red-200 rounded-lg">
                <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.21 3.03-1.742 3.03H4.42c-1.532 0-2.492-1.696-1.742-3.03l5.58-9.92zM10 13a1 1 0 110-2 1 1 0 010 2zm-1-4a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" /></svg>
                <span><?= session()->getFlashdata('error') ?></span>
            </div>
        <?php endif; ?>

        <form action="<?= site_url('login') ?>" method="post" class="space-y-6 mt-6">
            <?= csrf_field() ?>
            <div class="relative animate-fade-in-up delay-3">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                </div>
                <input type="text" name="username" required placeholder="Username" class="w-full pl-10 px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white/50 dark:bg-gray-800/50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
            </div>

            <div class="relative animate-fade-in-up delay-4">
                 <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg>
                </div>
                <input type="password" name="password" required placeholder="Password" class="w-full pl-10 px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white/50 dark:bg-gray-800/50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
            </div>

            <div class="animate-fade-in-up delay-5">
                <button type="submit" class="w-full py-3 bg-blue-700 text-white font-bold rounded-full shadow-lg hover:bg-blue-800 hover:scale-105 transition-all transform duration-300 btn-3d-push">
                    Masuk
                </button>
            </div>
        </form>

        <div class="mt-6 text-center text-sm text-gray-600 dark:text-gray-300 animate-fade-in-up delay-5">
            <p>
                Belum punya akun?
                <a href="<?= site_url('register') ?>" class="font-semibold text-blue-600 dark:text-blue-400 hover:underline">
                    Buat Akun
                </a>
            </p>
             <p class="mt-4">
                <a href="<?= site_url('/') ?>" class="hover:underline">
                    &larr; Kembali ke Beranda
                </a>
            </p>
        </div>
    </div>

</body>
</html>