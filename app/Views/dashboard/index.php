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
    </style>
</head>
<body class="animated-gradient text-gray-800 dark:text-gray-100 antialiased transition-colors duration-500">
    <!-- Navbar tetap seperti sebelumnya -->

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
</body>
</html>
