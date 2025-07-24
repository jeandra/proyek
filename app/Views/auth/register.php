<!DOCTYPE html>
<html lang="id" x-data="{ isDarkMode: localStorage.getItem('isDarkMode') === 'true' }" x-init="$watch('isDarkMode', val => localStorage.setItem('isDarkMode', val))" :class="{ 'dark': isDarkMode }">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar | BPSDM Jabar</title>
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
    .animate-fade-in-up { animation: fade-in-up 0.7s ease-out forwards; opacity: 0; }
    @keyframes fade-in-up {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .btn-3d-push:active {
      transform: translateY(2px);
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }
  </style>
</head>
<body class="animated-gradient min-h-screen flex items-center justify-center p-4 text-gray-900 dark:text-gray-100 transition-all duration-500">

  <div class="relative w-full max-w-md p-8 sm:p-10 bg-white/70 dark:bg-gray-900/70 rounded-3xl shadow-xl backdrop-blur-xl animate-fade-in-up">

    <!-- Dark Mode Toggle -->
    <div class="absolute top-4 right-4">
      <button @click="isDarkMode = !isDarkMode" class="p-2.5 rounded-full text-gray-600 dark:text-gray-300 bg-gray-200/50 dark:bg-gray-800/50 hover:bg-gray-300/50 dark:hover:bg-gray-700/50 transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500/50">
        <svg x-show="!isDarkMode" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" /></svg>
        <svg x-show="isDarkMode" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
      </button>
    </div>

    <div class="text-center">
      <h2 class="text-3xl font-extrabold">Daftar Akun</h2>
      <p class="text-gray-600 dark:text-gray-300 mt-1">Buat akun baru untuk mengakses sistem.</p>
    </div>

    <?php if (session()->getFlashdata('error')): ?>
      <div class="mt-6 mb-2 p-3 bg-red-100 dark:bg-red-900/40 text-red-800 dark:text-red-200 rounded-lg">
        <?= session()->getFlashdata('error') ?>
      </div>
    <?php endif; ?>

    <form action="<?= site_url('register') ?>" method="post" class="space-y-5 mt-6">
      <?= csrf_field() ?>

      <div>
        <label for="username" class="block mb-1 font-medium">Username</label>
        <input type="text" id="username" name="username" required class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 bg-white/50 dark:bg-gray-800/50 focus:ring-2 focus:ring-blue-500">
      </div>

      <div>
        <label for="email" class="block mb-1 font-medium">Email</label>
        <input type="email" id="email" name="email" required class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 bg-white/50 dark:bg-gray-800/50 focus:ring-2 focus:ring-blue-500">
      </div>

      <div>
        <label for="password" class="block mb-1 font-medium">Password</label>
        <input type="password" id="password" name="password" required class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 bg-white/50 dark:bg-gray-800/50 focus:ring-2 focus:ring-blue-500">
      </div>

      <div>
        <label for="password_confirm" class="block mb-1 font-medium">Konfirmasi Password</label>
        <input type="password" id="password_confirm" name="password_confirm" required class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 bg-white/50 dark:bg-gray-800/50 focus:ring-2 focus:ring-blue-500">
      </div>

      <button type="submit" class="w-full py-3 bg-blue-700 text-white font-bold rounded-full shadow-lg hover:bg-blue-800 hover:scale-105 transition-all transform duration-300 btn-3d-push">
        Daftar
      </button>
    </form>

    <div class="mt-6 text-center">
      <p class="text-sm text-gray-600 dark:text-gray-300">
        Sudah punya akun? <a href="<?= site_url('login') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">Masuk</a>
      </p>
    </div>

  </div>
</body>
</html>
