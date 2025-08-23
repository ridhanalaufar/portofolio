@extends('app')

@section('content')
    <div class="flex min-h-screen">
        {{-- Main Content --}}
        <main class="flex-1 p-2 md:p-2 lg:p-4">
            <div class="max-w-6xl mx-auto space-y-12">

                {{-- Achievements --}}
                <section id="achievements">
                    <h2 class="text-2xl md:text-3xl font-medium text-gray-800 dark:text-gray-100 mb-6 tracking-tight"
                        data-aos="fade-down">
                        My Achievements & Certifications
                    </h2>

                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6" data-aos="fade-right">
                        @foreach ($achievements as $index => $achievement)
                            <div class="bg-slate-100 dark:bg-gray-800 border border-zinc-300 dark:border-gray-700
                                rounded-xl shadow-sm hover:shadow-lg transition transform hover:-translate-y-1 cursor-pointer flex flex-col group achievement-card"
                                onclick="openAchievementModal({{ $index }})">

                                {{-- Thumbnail Sertifikat --}}
                                <div class="w-full aspect-[4/3] flex items-center justify-center overflow-hidden p-2">
                                    <img src="{{ asset($achievement['images'][0]) }}" alt="{{ $achievement['title'] }}"
                                        class="h-full w-auto object-contain transition duration-300 group-hover:scale-105 rounded-lg" />
                                </div>

                                {{-- Info Sertifikat --}}
                                <div class="p-5 md:p-6 relative flex flex-col flex-grow overflow-hidden">
                                    <h3
                                        class="text-base md:text-lg font-medium text-gray-800 dark:text-gray-100 leading-snug mb-2 line-clamp-3 group-hover:text-indigo-600 transition">
                                        {{ $achievement['title'] }}
                                    </h3>

                                    <div class="mt-auto space-y-1 relative z-10">
                                        <p class="text-xs text-gray-500 dark:text-gray-400">
                                            Organizer <span class="font-medium">{{ $achievement['organizer'] }}</span>
                                        </p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">
                                            Issued On <span class="font-medium">{{ $achievement['date'] }}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>

            </div>
        </main>
    </div>
@endsection

{{-- Modal harus di luar .flex agar full layar --}}
<div id="achievementModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black/70 p-4 hidden"
    onclick="closeModal(event)">
    <div class="relative bg-slate-100 dark:bg-gray-800 rounded-xl overflow-hidden
                w-full max-w-md md:max-w-2xl lg:max-w-5xl
                max-h-[90vh] flex flex-col lg:flex-row border border-zinc-300 dark:border-gray-700 shadow-lg"
        onclick="event.stopPropagation()">

        {{-- Gambar Slider --}}
        <div
            class="relative w-full lg:flex-1 bg-gray-100 dark:bg-gray-700 flex items-center justify-center p-4 min-h-[300px]">
            <img id="modalImage" src=""
                class="max-h-[50vh] md:max-h-[60vh] lg:max-h-[70vh] max-w-full object-contain mx-auto transition rounded-lg" />

            <button id="prevButton"
                class="absolute left-2 md:left-4 top-1/2 -translate-y-1/2
                        w-8 h-8 md:w-10 md:h-10 flex items-center justify-center
                        bg-black/40 text-white rounded-full hover:bg-black/70 focus:outline-none z-50 hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 md:w-8 md:h-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <button id="nextButton"
                class="absolute right-2 md:right-4 top-1/2 -translate-y-1/2
                        w-8 h-8 md:w-10 md:h-10 flex items-center justify-center
                        bg-black/40 text-white rounded-full hover:bg-black/70 focus:outline-none z-50 hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 md:w-8 md:h-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>

        {{-- Detail Info --}}
        <div class="w-full lg:w-1/3 p-5 md:p-6 overflow-y-auto text-gray-800 dark:text-gray-50 flex flex-col">
            <h2 id="modalTitle" class="text-base lg:text-lg font-bold mb-2"></h2>
            <p class="text-sm mb-1">Organizer <span id="modalOrganizer" class="font-medium"></span></p>
            <p class="text-sm mb-4">Issued On <span id="modalDate" class="font-medium"></span></p>
        </div>

        {{-- Tombol Close --}}
        <button onclick="closeModal()" aria-label="Close"
            class="absolute top-3 right-3 lg:top-4 lg:right-4
                   w-8 h-8 lg:w-10 lg:h-10 grid place-items-center
                   rounded-full bg-black/40 text-white shadow
                   hover:bg-red-600/70 hover:text-white transition z-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 lg:w-6 lg:h-6" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6l12 12M6 18L18 6" />
            </svg>
        </button>
    </div>
</div>

<script>
    // Data achievements
    const achievements = @json($achievements);
    let currentModalIndex = 0;
    let currentImageIndex = 0;

    function openAchievementModal(index) {
        currentModalIndex = index;
        currentImageIndex = 0;

        const achievement = achievements[index];
        const modal = document.getElementById('achievementModal');
        const modalImage = document.getElementById('modalImage');
        const modalTitle = document.getElementById('modalTitle');
        const modalOrganizer = document.getElementById('modalOrganizer');
        const modalDate = document.getElementById('modalDate');
        const prevButton = document.getElementById('prevButton');
        const nextButton = document.getElementById('nextButton');

        modalImage.src = achievement.images[0];
        modalTitle.textContent = achievement.title;
        modalOrganizer.textContent = achievement.organizer;
        modalDate.textContent = achievement.date;

        if (achievement.images.length > 1) {
            prevButton.classList.remove('hidden');
            nextButton.classList.remove('hidden');
            prevButton.onclick = () => navigateImage(-1);
            nextButton.onclick = () => navigateImage(1);
        } else {
            prevButton.classList.add('hidden');
            nextButton.classList.add('hidden');
        }

        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function navigateImage(direction) {
        const achievement = achievements[currentModalIndex];
        currentImageIndex = (currentImageIndex + direction + achievement.images.length) % achievement.images.length;
        document.getElementById('modalImage').src = achievement.images[currentImageIndex];
    }

    function closeModal(event) {
        if (event && event.target !== event.currentTarget) return;
        const modal = document.getElementById('achievementModal');
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }

    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') closeModal();
    });

    document.addEventListener('DOMContentLoaded', function() {
        closeModal();
    });
</script>

<style>
    .achievement-card {
        transition: all 0.3s ease;
    }

    .achievement-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }

    #achievementModal {
        transition: opacity 0.3s ease;
    }

    #achievementModal:not(.hidden) {
        display: flex !important;
        animation: fadeIn 0.3s ease;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    #achievementModal>div {
        animation: scaleIn 0.3s ease;
    }

    @keyframes scaleIn {
        from {
            transform: scale(0.95);
            opacity: 0;
        }

        to {
            transform: scale(1);
            opacity: 1;
        }
    }
</style>
