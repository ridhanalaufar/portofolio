@extends('app')

@section('content')
    <div class="flex min-h-screen w-full">
        {{-- Main Content --}}
        <main class="flex-1 w-full p-2 md:p-2 lg:p-4">
            <div class="w-full max-w-6xl mx-auto space-y-12">

                {{-- Achievements --}}
                <section id="achievements" class="w-full">
                    <h2 class="text-2xl md:text-3xl font-medium text-gray-800 dark:text-gray-100 mb-8 tracking-tight"
                        data-aos="fade-down">
                        My Achievements & Certifications
                    </h2>

                    {{-- Simple Filter and Sort Controls --}}
                    <div class="w-full bg-slate-50 dark:bg-gray-800 rounded-xl p-4 mb-6 border border-zinc-300 dark:border-gray-700"
                        data-aos="fade-down">
                        <div class="flex flex-col sm:flex-row gap-4 items-start sm:items-center w-full">

                            {{-- Filter by Organizer --}}
                            <div class="flex-1 w-full sm:w-auto">
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Filter by
                                    Organizer</label>
                                <select id="organizerFilter"
                                    class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                                    <option value="all">All Organizers</option>
                                    @foreach ($organizers as $organizer)
                                        <option value="{{ $organizer }}"
                                            {{ request('organizer') === $organizer ? 'selected' : '' }}>
                                            {{ $organizer }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Sort Controls --}}
                            <div class="flex gap-2 items-end w-full sm:w-auto">
                                <div class="flex-1 sm:flex-none">
                                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Sort
                                        by</label>
                                    <select id="sortSelect"
                                        class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                                        <option value="date" {{ request('sort', 'date') === 'date' ? 'selected' : '' }}>
                                            Date</option>
                                        <option value="title" {{ request('sort') === 'title' ? 'selected' : '' }}>Name
                                        </option>
                                    </select>
                                </div>

                                {{-- Sort Order Button --}}
                                <div class="flex-shrink-0">
                                    <label
                                        class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Order</label>
                                    <button id="sortOrderBtn" type="button"
                                        class="px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 hover:bg-gray-50 dark:hover:bg-gray-600 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition"
                                        data-order="{{ request('order', 'desc') }}">
                                        {{-- Descending Icon (default) --}}
                                        <svg id="descIcon"
                                            class="w-5 h-5 {{ request('order', 'desc') === 'desc' ? '' : 'hidden' }}"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                                        </svg>
                                        {{-- Ascending Icon --}}
                                        <svg id="ascIcon" class="w-5 h-5 {{ request('order') === 'asc' ? '' : 'hidden' }}"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 10l7-7m0 0l7 7m-7-7v18" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Results Count --}}
                    <div class="w-full mb-4" data-aos="fade-right">
                        <p class="text-sm text-right text-gray-600 dark:text-gray-400">
                            Showing {{ count($achievements) }} achievement{{ count($achievements) !== 1 ? 's' : '' }}
                        </p>
                    </div>

                    <div class="w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 sm:gap-6" data-aos="fade-right">
                        @foreach ($achievements as $index => $achievement)
                            <div class="w-full bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700
                                rounded-xl shadow-sm hover:shadow-md transition transform hover:-translate-y-0.5 cursor-pointer flex flex-col group achievement-card"
                                onclick="openAchievementModal({{ $index }})">

                                {{-- Thumbnail Sertifikat --}}
                                <div
                                    class="w-full aspect-[4/3] flex items-center justify-center overflow-hidden p-4 relative bg-gray-50 dark:bg-gray-700 rounded-t-xl">
                                    <img src="{{ asset($achievement['images'][0]) }}" alt="{{ $achievement['title'] }}"
                                        class="h-full w-auto object-contain transition duration-300 group-hover:scale-105 rounded-lg" />
                                </div>

                                {{-- Info Sertifikat --}}
                                <div class="w-full p-5 flex flex-col flex-grow overflow-hidden rounded-b-xl">
                                    {{-- Konten Info --}}
                                    <h3
                                        class="text-md md:text-xl font-medium text-gray-800 dark:text-gray-100 leading-snug mb-2 line-clamp-3 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition">
                                        {{ $achievement['title'] }}
                                    </h3>

                                    <div class="mt-auto space-y-1 relative z-10">
                                        <p class="text-xs text-gray-500 dark:text-gray-400 flex items-center">
                                            <svg class="w-3 h-3 mr-1 flex-shrink-0" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-4m-4 0H9m4 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v12m4 0V9" />
                                            </svg>
                                            <span class="truncate">{{ $achievement['organizer'] }}</span>
                                        </p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400 flex items-center">
                                            <svg class="w-3 h-3 mr-1 flex-shrink-0" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                            <span>{{ $achievement['formatted_date'] }}</span>
                                        </p>
                                        @if (isset($achievement['CredentialID']) && $achievement['CredentialID'])
                                            <p class="text-xs text-gray-500 dark:text-gray-400 flex items-center">
                                                <svg class="w-3 h-3 mr-1 flex-shrink-0" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                                                </svg>
                                                <span class="truncate">{{ $achievement['CredentialID'] }}</span>
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{-- No Results Message --}}
                    @if (count($achievements) === 0)
                        <div class="w-full text-center py-12" data-aos="fade-up">
                            <div class="mx-auto h-12 w-12 text-gray-400 mb-4">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-sm font-medium text-gray-900 dark:text-gray-100">No achievements found</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Try adjusting your filters to see more
                                results.</p>
                        </div>
                    @endif
                </section>

            </div>
        </main>
    </div>

    {{-- Modal --}}
    <div id="achievementModal" class="fixed inset-0 z-50 bg-black/70 hidden modal-overlay" onclick="closeModal(event)">
        <div class="flex items-center justify-center min-h-full w-full p-4">
            <div class="relative bg-white dark:bg-gray-800 rounded-xl overflow-hidden
                        w-full max-w-md md:max-w-2xl lg:max-w-5xl
                        h-auto max-h-[calc(100vh-2rem)] flex flex-col lg:flex-row border border-gray-200 dark:border-gray-700 shadow-lg"
                onclick="event.stopPropagation()">

                {{-- Gambar Slider --}}
                <div
                    class="relative w-full lg:flex-1 bg-gray-100 dark:bg-gray-700 flex items-center justify-center p-4 min-h-[300px] lg:min-h-[500px] overflow-hidden">
                    <div class="relative w-full h-full flex items-center justify-center overflow-hidden"
                        id="imageContainer">
                        <img id="modalImage" src=""
                            class="max-h-[40vh] md:max-h-[50vh] lg:max-h-[calc(100vh-8rem)] max-w-full object-contain mx-auto transition rounded-lg transform origin-center cursor-move" />

                        {{-- Zoom Controls --}}
                        <div
                            class="absolute bottom-2 right-2 md:bottom-4 md:right-4 flex flex-col gap-2 z-50 zoom-controls">
                            <button id="zoomInButton"
                                class="w-8 h-8 flex items-center justify-center bg-black/40 text-white rounded-full hover:bg-black/70 focus:outline-none transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                            </button>
                            <button id="zoomOutButton"
                                class="w-8 h-8 flex items-center justify-center bg-black/40 text-white rounded-full hover:bg-black/70 focus:outline-none transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 12h12" />
                                </svg>
                            </button>
                            <button id="resetZoomButton"
                                class="w-8 h-8 flex items-center justify-center bg-black/40 text-white rounded-full hover:bg-black/70 focus:outline-none transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <button id="prevButton"
                        class="absolute left-2 md:left-4 top-1/2 -translate-y-1/2
                                w-8 h-8 md:w-10 md:h-10 flex items-center justify-center
                                bg-black/40 text-white rounded-full hover:bg-black/70 focus:outline-none z-50 hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 md:w-8 md:h-8" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>

                    <button id="nextButton"
                        class="absolute right-2 md:right-4 top-1/2 -translate-y-1/2
                                w-8 h-8 md:w-10 md:h-10 flex items-center justify-center
                                bg-black/40 text-white rounded-full hover:bg-black/70 focus:outline-none z-50 hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 md:w-8 md:h-8" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>

                {{-- Detail Info --}}
                <div
                    class="w-full lg:w-1/3 p-5 md:p-6 overflow-y-auto text-gray-800 dark:text-gray-50 flex flex-col max-h-[40vh] lg:max-h-full">
                    {{-- Header dengan space untuk close button --}}
                    <div class="pr-8 mb-4">
                        <h2 id="modalTitle" class="text-xl font-bold leading-tight text-gray-900 dark:text-white"></h2>
                    </div>

                    <div class="space-y-3 mb-4">
                        <p class="text-sm text-gray-600 dark:text-gray-300 flex items-center">
                            <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-4m-4 0H9m4 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v12m4 0V9" />
                            </svg>
                            Organizer: <span id="modalOrganizer" class="font-medium ml-1"></span>
                        </p>
                        <p class="text-sm text-gray-600 dark:text-gray-300 flex items-center">
                            <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            Issued On: <span id="modalDate" class="font-medium ml-1"></span>
                        </p>
                        <div id="modalCredentialInfo" class="space-y-2">
                            <div>
                                <div class="flex justify-between items-center mb-2">
                                    <p class="text-sm text-gray-600 dark:text-gray-300 flex items-center">
                                        <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                                        </svg>
                                        Credential ID
                                    </p>
                                    <button id="copyCredentialButton"
                                        class="inline-flex items-center gap-1 px-2 py-1 bg-gray-200 dark:bg-gray-600 text-gray-700 dark:text-gray-200 text-xs rounded hover:bg-gray-300 dark:hover:bg-gray-500 transition-colors">
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                        </svg>
                                        <span class="text-xs">Copy</span>
                                    </button>
                                </div>
                                <div class="bg-gray-100 dark:bg-gray-700 p-3 rounded-md">
                                    <p id="modalCredentialID"
                                        class="text-sm font-mono break-all whitespace-pre-wrap text-gray-800 dark:text-gray-200 max-h-20 overflow-y-auto pr-1">
                                    </p>
                                </div>
                            </div>
                            <div id="modalCredentialURL" class="text-sm pt-2">
                                <a id="modalCredentialLink" href="#" target="_blank"
                                    class="inline-flex items-center gap-2 px-3 py-2 bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-700 text-blue-700 dark:text-blue-300 text-sm font-medium rounded-lg hover:bg-blue-100 dark:hover:bg-blue-800/30 hover:border-blue-300 dark:hover:border-blue-600 transition-all duration-200 group">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-4 h-4 transition-transform duration-200 group-hover:scale-110"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg>
                                    <span>View Certificate</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Additional content if needed --}}
                    <div class="mt-auto pt-4 border-t border-gray-200 dark:border-gray-700">
                        <p class="text-xs text-gray-500 dark:text-gray-400">Click outside to close</p>
                    </div>
                </div>

                {{-- Tombol Close - Positioned outside content area --}}
                <button onclick="closeModal()" aria-label="Close"
                    class="absolute top-2 right-2
                           w-8 h-8 lg:w-10 lg:h-10 grid place-items-center
                           rounded-full bg-black/40 text-white shadow-lg
                           hover:bg-red-500 hover:scale-110 transition-all duration-200 z-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 lg:w-6 lg:h-6" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 6l12 12M6 18L18 6" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <script>
        // Data achievements
        const achievements = @json($achievements);
        let currentModalIndex = 0;
        let currentImageIndex = 0;
        let currentScale = 1;
        let currentTranslateX = 0;
        let currentTranslateY = 0;
        let isDragging = false;
        let startX, startY;
        let initialTranslateX, initialTranslateY;
        const ZOOM_INCREMENT = 0.25;
        const MIN_ZOOM = 0.5;
        const MAX_ZOOM = 3;

        // Fungsi untuk membuka modal
        function openAchievementModal(index) {
            currentModalIndex = index;
            currentImageIndex = 0;
            resetZoom(); // Reset zoom saat modal dibuka

            const achievement = achievements[index];
            const modal = document.getElementById('achievementModal');
            const modalImage = document.getElementById('modalImage');
            const modalTitle = document.getElementById('modalTitle');
            const modalOrganizer = document.getElementById('modalOrganizer');
            const modalDate = document.getElementById('modalDate');
            const modalCredentialID = document.getElementById('modalCredentialID');
            const modalCredentialLink = document.getElementById('modalCredentialLink');
            const modalCredentialURL = document.getElementById('modalCredentialURL');
            const modalCredentialInfo = document.getElementById('modalCredentialInfo');
            const prevButton = document.getElementById('prevButton');
            const nextButton = document.getElementById('nextButton');
            const copyButton = document.getElementById('copyCredentialButton');

            // Update konten modal
            modalImage.src = achievement.images[0];
            modalTitle.textContent = achievement.title;
            modalOrganizer.textContent = achievement.organizer;
            modalDate.textContent = achievement.date;

            // Update credential information
            if (achievement.CredentialID) {
                modalCredentialID.textContent = achievement.CredentialID;
                modalCredentialInfo.style.display = 'block';

                // Setup copy button
                copyButton.onclick = function() {
                    navigator.clipboard.writeText(achievement.CredentialID).then(function() {
                        // Ubah tampilan tombol sementara
                        const originalHTML = copyButton.innerHTML;
                        copyButton.innerHTML = `
                            <svg class="w-3 h-3 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-xs text-green-500">Copied!</span>
                        `;

                        // Kembalikan ke tampilan semula setelah 2 detik
                        setTimeout(() => {
                            copyButton.innerHTML = originalHTML;
                        }, 2000);
                    }).catch(function() {
                        alert('Failed to copy credential ID');
                    });
                };
            } else {
                modalCredentialInfo.style.display = 'none';
            }

            if (achievement.CredentialURL) {
                modalCredentialLink.href = achievement.CredentialURL.startsWith('http') ?
                    achievement.CredentialURL :
                    'https://' + achievement.CredentialURL;
                modalCredentialURL.style.display = 'block';
            } else {
                modalCredentialURL.style.display = 'none';
            }

            // Tampilkan/sembunyikan tombol navigasi jika ada lebih dari 1 gambar
            if (achievement.images.length > 1) {
                prevButton.classList.remove('hidden');
                nextButton.classList.remove('hidden');

                // Setup event listeners untuk tombol navigasi
                prevButton.onclick = () => navigateImage(-1);
                nextButton.onclick = () => navigateImage(1);
            } else {
                prevButton.classList.add('hidden');
                nextButton.classList.add('hidden');
            }

            // Setup event listeners untuk tombol zoom
            document.getElementById('zoomInButton').onclick = zoomIn;
            document.getElementById('zoomOutButton').onclick = zoomOut;
            document.getElementById('resetZoomButton').onclick = resetZoom;

            // Setup event listeners untuk drag gambar
            setupDragEvents(modalImage);

            // Tampilkan modal
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        // Fungsi untuk setup drag events
        function setupDragEvents(imageElement) {
            // Mouse events
            imageElement.addEventListener('mousedown', startDrag);
            document.addEventListener('mousemove', drag);
            document.addEventListener('mouseup', endDrag);

            // Touch events for mobile
            imageElement.addEventListener('touchstart', startDragTouch);
            document.addEventListener('touchmove', dragTouch);
            document.addEventListener('touchend', endDrag);

            // Prevent image dragging (default browser behavior)
            imageElement.addEventListener('dragstart', (e) => e.preventDefault());
        }

        // Fungsi untuk memulai drag (mouse)
        function startDrag(e) {
            if (currentScale <= 1) return; // Hanya bisa drag jika zoom > 1
            isDragging = true;
            startX = e.clientX;
            startY = e.clientY;
            initialTranslateX = currentTranslateX;
            initialTranslateY = currentTranslateY;
            document.body.style.cursor = 'grabbing';
        }

        // Fungsi untuk memulai drag (touch)
        function startDragTouch(e) {
            if (currentScale <= 1) return; // Hanya bisa drag jika zoom > 1
            isDragging = true;
            startX = e.touches[0].clientX;
            startY = e.touches[0].clientY;
            initialTranslateX = currentTranslateX;
            initialTranslateY = currentTranslateY;
            e.preventDefault(); // Mencegah scroll saat menggeser gambar
        }

        // Fungsi untuk menggeser gambar (mouse)
        function drag(e) {
            if (!isDragging) return;

            const dx = e.clientX - startX;
            const dy = e.clientY - startY;

            currentTranslateX = initialTranslateX + dx;
            currentTranslateY = initialTranslateY + dy;

            updateZoom();
        }

        // Fungsi untuk menggeser gambar (touch)
        function dragTouch(e) {
            if (!isDragging) return;

            const dx = e.touches[0].clientX - startX;
            const dy = e.touches[0].clientY - startY;

            currentTranslateX = initialTranslateX + dx;
            currentTranslateY = initialTranslateY + dy;

            updateZoom();
            e.preventDefault(); // Mencegah scroll saat menggeser gambar
        }

        // Fungsi untuk mengakhiri drag
        function endDrag() {
            isDragging = false;
            document.body.style.cursor = 'default';
        }

        // Fungsi untuk navigasi gambar
        function navigateImage(direction) {
            const achievement = achievements[currentModalIndex];
            currentImageIndex = (currentImageIndex + direction + achievement.images.length) % achievement.images.length;

            const modalImage = document.getElementById('modalImage');
            modalImage.src = achievement.images[currentImageIndex];

            // Reset zoom dan posisi saat ganti gambar
            resetZoom();
        }

        // Fungsi untuk zoom in
        function zoomIn() {
            if (currentScale < MAX_ZOOM) {
                // Simpan posisi sebelum zoom untuk perhitungan zoom ke titik tertentu
                const oldScale = currentScale;
                currentScale += ZOOM_INCREMENT;

                // Jika sebelumnya tidak zoom, atur posisi ke tengah
                if (oldScale === 1) {
                    const modalImage = document.getElementById('modalImage');
                    const container = document.getElementById('imageContainer');

                    // Hitung posisi tengah relatif terhadap container
                    currentTranslateX = (container.clientWidth - modalImage.width) / 2;
                    currentTranslateY = (container.clientHeight - modalImage.height) / 2;
                }

                updateZoom();
            }
        }

        // Fungsi untuk zoom out
        function zoomOut() {
            if (currentScale > MIN_ZOOM) {
                currentScale -= ZOOM_INCREMENT;

                // Jika kembali ke zoom 1, reset posisi
                if (currentScale <= 1) {
                    resetZoom();
                    return;
                }

                updateZoom();
            }
        }

        // Fungsi untuk reset zoom
        function resetZoom() {
            currentScale = 1;
            currentTranslateX = 0;
            currentTranslateY = 0;
            updateZoom();
        }

        // Fungsi untuk mengaplikasikan zoom dan posisi
        function updateZoom() {
            const modalImage = document.getElementById('modalImage');
            modalImage.style.transform = `translate(${currentTranslateX}px, ${currentTranslateY}px) scale(${currentScale})`;

            // Ubah kursor jika gambar di-zoom
            if (currentScale > 1) {
                modalImage.style.cursor = 'grab';
            } else {
                modalImage.style.cursor = 'default';
            }
        }

        // Fungsi untuk menutup modal
        function closeModal(event) {
            if (event && event.target !== event.currentTarget && !event.target.closest('.modal-overlay')) return;

            const modal = document.getElementById('achievementModal');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';

            // Reset zoom dan posisi saat modal ditutup
            resetZoom();

            // Hapus event listeners untuk drag
            const modalImage = document.getElementById('modalImage');
            document.removeEventListener('mousemove', drag);
            document.removeEventListener('mouseup', endDrag);
            document.removeEventListener('touchmove', dragTouch);
            document.removeEventListener('touchend', endDrag);
        }

        // Tutup modal dengan tombol Escape
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeModal();
            }
        });

        // Inisialisasi setelah halaman dimuat
        document.addEventListener('DOMContentLoaded', function() {
            // Pastikan modal tertutup saat halaman dimuat
            closeModal();
        });

        // Handle simple filter and sort controls
        const organizerFilter = document.getElementById('organizerFilter');
        const sortSelect = document.getElementById('sortSelect');
        const sortOrderBtn = document.getElementById('sortOrderBtn');
        const descIcon = document.getElementById('descIcon');
        const ascIcon = document.getElementById('ascIcon');

        // Handle organizer filter change
        if (organizerFilter) {
            organizerFilter.addEventListener('change', function() {
                updateURL();
            });
        }

        // Handle sort select change
        if (sortSelect) {
            sortSelect.addEventListener('change', function() {
                updateURL();
            });
        }

        // Handle sort order button click
        if (sortOrderBtn) {
            sortOrderBtn.addEventListener('click', function() {
                const currentOrder = this.getAttribute('data-order');
                const newOrder = currentOrder === 'desc' ? 'asc' : 'desc';

                this.setAttribute('data-order', newOrder);

                // Toggle icons
                if (newOrder === 'desc') {
                    descIcon.classList.remove('hidden');
                    ascIcon.classList.add('hidden');
                } else {
                    ascIcon.classList.remove('hidden');
                    descIcon.classList.add('hidden');
                }

                updateURL();
            });
        }

        // Function to update URL with current filter and sort parameters
        function updateURL() {
            const params = new URLSearchParams();

            if (organizerFilter && organizerFilter.value !== 'all') {
                params.set('organizer', organizerFilter.value);
            }

            if (sortSelect) {
                params.set('sort', sortSelect.value);
            }

            if (sortOrderBtn) {
                params.set('order', sortOrderBtn.getAttribute('data-order'));
            }

            const newURL = window.location.pathname + (params.toString() ? '?' + params.toString() : '');
            window.location.href = newURL;
        }
    </script>

    <style>
        /* Prevent horizontal overflow */
        html,
        body {
            overflow-x: hidden;
            width: 100%;
            max-width: 100%;
        }

        * {
            box-sizing: border-box;
        }

        /* Style untuk kartu achievements */
        .achievement-card {
            transition: all 0.3s ease;
            position: relative;
            width: 100%;
            max-width: 100%;
        }

        .achievement-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        /* Animasi untuk modal */
        #achievementModal {
            transition: opacity 0.3s ease;
            display: none;
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

        #achievementModal>div>div {
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

        /* Pastikan modal overlay memenuhi seluruh layar */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100vw;
            height: 100vh;
            overflow-y: auto;
        }

        /* Prevent body scroll when modal is open */
        body.modal-open {
            overflow: hidden;
            position: fixed;
            width: 100%;
        }

        /* Line clamp utility */
        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* Style khusus untuk credential ID yang panjang */
        #modalCredentialID {
            word-break: break-all;
            overflow-wrap: anywhere;
            line-height: 1.4;
            max-height: 80px;
            overflow-y: auto;
            padding-right: 8px;
        }

        /* Scrollbar styling */
        #modalCredentialID::-webkit-scrollbar {
            width: 6px;
        }

        #modalCredentialID::-webkit-scrollbar-track {
            background: transparent;
        }

        #modalCredentialID::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 3px;
        }

        .dark #modalCredentialID::-webkit-scrollbar-thumb {
            background: #475569;
        }

        /* Mobile specific fixes */
        @media (max-width: 640px) {
            .achievement-card {
                margin-bottom: 0;
                width: 100%;
            }

            /* Ensure modal padding works on mobile */
            .modal-overlay {
                padding: 1rem;
            }

            /* Fix any potential width issues on mobile */
            .flex.min-h-screen {
                width: 100%;
                max-width: 100%;
            }

            main {
                width: 100%;
                max-width: 100%;
                padding-left: 0.5rem;
                padding-right: 0.5rem;
            }

            /* Reposition zoom controls on mobile */
            .zoom-controls {
                bottom: 16px !important;
                right: 16px !important;
                flex-direction: row !important;
                gap: 8px !important;
            }

            /* Adjust navigation buttons position on mobile */
            #prevButton,
            #nextButton {
                top: 50% !important;
                bottom: auto !important;
                transform: translateY(-50%) !important;
            }

            #prevButton {
                left: 16px !important;
            }

            #nextButton {
                right: 16px !important;
            }

            /* Adjust modal content spacing */
            #modalCredentialInfo {
                margin-top: 12px;
            }

            /* Fix copy button placement */
            #copyCredentialButton {
                margin-top: 0 !important;
            }
        }

        /* Additional mobile viewport fix */
        @media (max-width: 768px) {
            .max-w-6xl {
                max-width: 100%;
                padding-left: 0;
                padding-right: 0;
            }

            /* Adjust zoom controls for smaller screens */
            .zoom-controls {
                bottom: 12px;
                right: 12px;
            }

            .zoom-controls button {
                width: 36px;
                height: 36px;
            }
        }

        /* Fix for credential ID text not having enough space */
        #modalCredentialID {
            padding-right: 40px;
        }

        /* Adjust copy button position */
        #copyCredentialButton {
            margin-top: 8px;
        }

        /* Ensure navigation buttons are properly centered vertically */
        #prevButton,
        #nextButton {
            top: 50%;
            transform: translateY(-50%);
        }
    </style>
@endsection
