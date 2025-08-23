@extends('app')

@section('content')
    {{-- Hero Section --}}
    <section id="home" class="text-center" data-aos="fade-up">
        <h1 class="text-3xl md:text-5xl font-bold mb-4">Selamat Datang di Portfolio Saya</h1>
        <p class="text-lg text-gray-600 dark:text-gray-300">Laravel | Tailwind | Alpine.js | AOS</p>
    </section>

    {{-- About --}}
    <section id="about" data-aos="fade-up" class="max-w-3xl mx-auto text-center">
        <h2 class="text-2xl font-semibold mb-4">Tentang Saya</h2>
        <p class="text-gray-700 dark:text-gray-300">
            Saya seorang web developer yang fokus pada Laravel, Tailwind, Alpine.js, dan interaksi modern untuk
            membangun aplikasi responsif.
        </p>
    </section>

    {{-- Portfolio --}}
    <section id="portfolio" data-aos="fade-up" class="grid md:grid-cols-2 gap-6">
        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow">
            <h3 class="text-xl font-semibold mb-2">Proyek 1</h3>
            <p class="text-gray-600 dark:text-gray-300">Deskripsi singkat proyek pertama.</p>
        </div>
        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow">
            <h3 class="text-xl font-semibold mb-2">Proyek 2</h3>
            <p class="text-gray-600 dark:text-gray-300">Deskripsi singkat proyek kedua.</p>
        </div>
        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow">
            <h3 class="text-xl font-semibold mb-2">Proyek 2</h3>
            <p class="text-gray-600 dark:text-gray-300">Deskripsi singkat proyek kedua.</p>
        </div>
        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow">
            <h3 class="text-xl font-semibold mb-2">Proyek 2</h3>
            <p class="text-gray-600 dark:text-gray-300">Deskripsi singkat proyek kedua.</p>
        </div>
        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow">
            <h3 class="text-xl font-semibold mb-2">Proyek 2</h3>
            <p class="text-gray-600 dark:text-gray-300">Deskripsi singkat proyek kedua.</p>
        </div>
        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow">
            <h3 class="text-xl font-semibold mb-2">Proyek 2</h3>
            <p class="text-gray-600 dark:text-gray-300">Deskripsi singkat proyek kedua.</p>
        </div>
        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow">
            <h3 class="text-xl font-semibold mb-2">Proyek 2</h3>
            <p class="text-gray-600 dark:text-gray-300">Deskripsi singkat proyek kedua.</p>
        </div>
        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow">
            <h3 class="text-xl font-semibold mb-2">Proyek 2</h3>
            <p class="text-gray-600 dark:text-gray-300">Deskripsi singkat proyek kedua.</p>
        </div>
    </section>

    {{-- Contact --}}
    <section id="contact" data-aos="fade-up" class="text-center">
        <h2 class="text-2xl font-semibold mb-4">Hubungi Saya</h2>
        <p class="text-gray-700 dark:text-gray-300">Email: kamu@email.com</p>
    </section>
@endsection
