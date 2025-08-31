<!DOCTYPE html>
<html lang="en" x-data="{
    darkMode: localStorage.getItem('darkMode') === 'true' || localStorage.getItem('darkMode') === null,
    sidebarOpen: false,
}" x-init="// Sinkronisasi dengan class yang sudah ada
const currentlyDark = document.documentElement.classList.contains('dark');
if (currentlyDark !== darkMode) {
    darkMode = currentlyDark;
}

// Watch untuk perubahan darkMode
$watch('darkMode', val => {
    localStorage.setItem('darkMode', val);
    if (val) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark');
    }
});" :class="{ 'dark': darkMode }"
    @keydown.window.escape="sidebarOpen = false">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ideas into Action</title>
    <link rel="shortcut icon" href="{{ asset('/storage/logo/Logo_TechStack/favicon.png') }}" type="image/x-icon">


    <!-- Set dark mode immediately before any rendering -->
    <script>
        // Fungsi untuk menentukan dark mode
        function getDarkModePreference() {
            const saved = localStorage.getItem('darkMode');
            // Jika tidak ada preferensi yang disimpan, default ke dark mode
            if (saved === null) {
                return true;
            }
            return saved === 'true';
        }

        // Set dark mode segera
        const shouldBeDark = getDarkModePreference();
        if (shouldBeDark) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }

        // Tambahkan class loading ke body
        document.addEventListener('DOMContentLoaded', function() {
            document.body.classList.add('loading');
        });
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        /* Reset margin dan padding untuk elemen utama */
        html,
        body {
            margin: 0;
            padding: 0;
            height: 100%;
        }

        /* Custom styles untuk layout dengan navbar terpusat */
        .main-container {
            display: flex;
            min-height: 100vh;
            justify-content: center;
        }

        .centered-layout {
            width: 100%;
            max-width: 72rem;
            /* max-w-6xl = 72rem */
            display: flex;
            margin-top: 0;
            /* Pastikan tidak ada gap di atas */
        }

        .sidebar-desktop {
            width: 16rem;
            flex-shrink: 0;
            position: sticky;
            top: 0;
            height: 100vh;
            /* Pastikan sidebar full height */
            overflow-y: auto;
            /* Biarkan sidebar discroll jika kontennya panjang */
            padding: 1rem;
            margin-right: 2rem;
            /* Space antara sidebar dan konten */
        }

        .content-area {
            flex: 1;
            padding: 2rem 0;
            position: relative;
            min-height: 100vh;
            /* Pastikan konten area minimal setinggi viewport */
        }

        /* Untuk mobile */
        @media (max-width: 1023px) {
            .centered-layout {
                padding: 0 1rem;
                margin-top: 4rem;
                /* Space untuk header mobile */
            }

            .sidebar-desktop {
                display: none;
            }

            .content-area {
                min-height: calc(100vh - 4rem);
                /* Kurangi tinggi header mobile */
            }
        }

        /* Pastikan spinner tetap di tengah */
        .main-spinner {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 50;
        }

        /* Menambahkan space di sisi kiri dan kanan */
        .space-side {
            margin: 0 auto;
            width: 100%;
        }

        /* Sidebar mobile fullscreen dengan animasi slide dari kiri */
        .mobile-sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 100%;
            z-index: 60;
            transform: translateX(-100%);
            transition: transform 0.3s ease;
            background: rgba(0, 0, 0, 0.5);
            /* Overlay background */
        }

        .mobile-sidebar.open {
            transform: translateX(0);
        }

        .mobile-sidebar-content {
            width: 16rem;
            height: 100%;
            background: rgb(244, 244, 245);
            overflow-y: auto;
            padding: 1rem;
        }

        .dark .mobile-sidebar-content {
            background: rgb(39, 39, 42);
        }

        /* Tombol close untuk sidebar mobile */
        .close-sidebar {
            position: absolute;
            top: 1rem;
            right: 1rem;
            z-index: 70;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 50%;
            width: 2.5rem;
            height: 2.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .dark .close-sidebar {
            background: rgba(0, 0, 0, 0.8);
            color: white;
        }
    </style>
</head>

<body class="bg-zinc-50 dark:bg-zinc-900 text-zinc-900 dark:text-zinc-100 transition-colors duration-300">

    {{-- Mobile Header --}}
    <header
        class="lg:hidden fixed top-0 left-0 right-0 flex items-center justify-between h-16 px-4 bg-zinc-100 dark:bg-gray-800 shadow-md z-50 transition-colors duration-300">
        <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100 transition-colors duration-300">Ridhan Al
            Aufar</h2>
        <button @click="sidebarOpen = !sidebarOpen"
            class="text-gray-600 dark:text-gray-200 p-2 transition-colors duration-300">
            <div class="w-6 h-6 flex flex-col justify-center items-center">
                <span class="bg-current block h-1 w-6 rounded-sm transition-all duration-300"
                    :class="sidebarOpen ? 'rotate-45 translate-y-1' : '-translate-y-0.5'"></span>
                <span class="bg-current block h-1 w-6 rounded-sm transition-all duration-300"
                    :class="sidebarOpen ? 'opacity-0' : 'opacity-100'"></span>
                <span class="bg-current block h-1 w-6 rounded-sm transition-all duration-300"
                    :class="sidebarOpen ? '-rotate-45 -translate-y-1' : 'translate-y-0.5'"></span>
            </div>
        </button>
    </header>

    {{-- Sidebar Mobile Fullscreen dengan animasi slide dari kiri --}}
    <div class="mobile-sidebar lg:hidden transition-colors duration-300" :class="{ 'open': sidebarOpen }">
        <div class="mobile-sidebar-content">
            <div class="close-sidebar" @click="sidebarOpen = false">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </div>
            @include('components.nav')
        </div>
    </div>

    {{-- Main Container --}}
    <div class="main-container">
        <div class="centered-layout">
            {{-- Sidebar Desktop --}}
            <aside class="sidebar-desktop bg-zinc-50 dark:bg-zinc-900 transition-colors duration-300">
                @include('components.nav')
            </aside>

            {{-- Content Area --}}
            <div class="content-area">
                {{-- Main Content --}}
                <main class="transition-colors duration-300">
                    {{-- Modern Spinner hanya di main container --}}
                    <div class="main-spinner">
                        <div class="modern-spinner">
                            <div class="spinner-ring"></div>
                            <div class="spinner-ring"></div>
                            <div class="spinner-ring"></div>
                            <div class="spinner-center"></div>
                        </div>
                    </div>

                    {{-- Konten utama dengan space di sisi kiri dan kanan --}}
                    <div class="space-side space-y-12">
                        @yield('content')
                    </div>
                </main>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
        // Pastikan halaman selalu scroll ke atas
        if (history.scrollRestoration) {
            history.scrollRestoration = 'manual';
        }

        // Hapus spinner dan inisialisasi AOS setelah halaman dimuat
        window.addEventListener('load', function() {
            window.scrollTo(0, 0);

            // Hapus class loading dari body
            document.body.classList.remove('loading');

            // Inisialisasi AOS setelah halaman dimuat
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    once: false,
                    mirror: true,
                    duration: 1000,
                    offset: 10,
                    easing: 'ease-in-out-cubic'
                });
            }
        });
    </script>
</body>

</html>
