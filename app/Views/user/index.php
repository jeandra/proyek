<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Selamat Datang
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 md:p-12 lg:p-16 text-center">
    
    <div class="max-w-3xl mx-auto">
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold tracking-tight text-gray-900 dark:text-white">
            <span class="block">Layanan Digital</span>
            <span class="block text-blue-600 dark:text-blue-500">Penyewaan Mobil Dinas</span>
        </h1>
        
        <p class="mt-6 text-lg sm:text-xl text-gray-600 dark:text-gray-300">
            Solusi penyewaan kendaraan yang efisien, transparan, dan terintegrasi untuk mendukung mobilitas kedinasan di lingkungan BPSDM Jawa Barat.
        </p>
        
        <div class="mt-10">
            <a href="/login" class="inline-flex items-center justify-center px-8 py-4 bg-blue-600 text-white font-bold rounded-xl shadow-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transform hover:scale-105 transition-all duration-300">
                <svg class="h-6 w-6 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                Ajukan Penyewaan Sekarang
            </a>
        </div>
    </div>

</div>

<?= $this->endSection() ?>