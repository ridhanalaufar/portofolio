{{-- Navigation untuk Desktop dan Mobile --}}
<div class="flex flex-col items-center p-2">
    {{-- Profile --}}
    <div class="flex flex-col items-center mb-6">
        <img src="storage/profiles/1.jpg" alt="Profile"
            class="w-28 h-28 object-cover rounded-full border-4 border-blue-600 shadow-md transition-colors duration-300">
        <h2 class="mt-3 text-lg font-semibold text-zinc-900 dark:text-zinc-50 transition-colors duration-300">Ridhan Al
            Aufar</h2>
        <p class="text-sm text-zinc-500 dark:text-zinc-400 transition-colors duration-300">IT Enthusiast</p>
    </div>

    {{-- Enhanced Animated Switch Dark Mode Toggle --}}
    <div class="mb-6">
        <div class="relative inline-flex items-center group">
            <button @click="darkMode = !darkMode; localStorage.setItem('darkMode', darkMode)"
                class="relative w-16 h-8 bg-zinc-300 dark:bg-zinc-600 rounded-full transition-all duration-500 focus:outline-none focus:ring-4 focus:ring-blue-500/30 focus:ring-offset-2 hover:shadow-lg hover:scale-105 group-hover:bg-zinc-400 dark:group-hover:bg-zinc-500"
                :title="darkMode ? 'Switch to Light Mode' : 'Switch to Dark Mode'">

                {{-- Switch Track with Gradient --}}
                <div class="absolute inset-0 rounded-full transition-all duration-500 bg-gradient-to-r"
                    :class="darkMode ? 'from-blue-600 to-blue-700 shadow-blue-500/30' : 'from-zinc-300 to-zinc-400'">
                </div>

                {{-- Switch Circle with Enhanced Animation --}}
                <div class="absolute top-1 left-1 w-6 h-6 bg-white rounded-full shadow-lg transform transition-all duration-500 flex items-center justify-center backdrop-blur-sm"
                    :class="{
                        'translate-x-8 shadow-blue-500/40 bg-blue-50': darkMode,
                        'translate-x-0 shadow-zinc-500/40 bg-white': !darkMode
                    }">

                    {{-- Sun Icon with Rotation Animation --}}
                    <svg x-show="!darkMode" x-transition:enter="transition-all duration-300 delay-200"
                        x-transition:enter-start="opacity-0 rotate-180 scale-0"
                        x-transition:enter-end="opacity-100 rotate-0 scale-100"
                        x-transition:leave="transition-all duration-200"
                        x-transition:leave-start="opacity-100 rotate-0 scale-100"
                        x-transition:leave-end="opacity-0 rotate-180 scale-0"
                        class="w-4 h-4 text-yellow-500 animate-spin-slow" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            clip-rule="evenodd"></path>
                    </svg>

                    {{-- Moon Icon with Rotation Animation --}}
                    <svg x-show="darkMode" x-transition:enter="transition-all duration-300 delay-200"
                        x-transition:enter-start="opacity-0 rotate-180 scale-0"
                        x-transition:enter-end="opacity-100 rotate-0 scale-100"
                        x-transition:leave="transition-all duration-200"
                        x-transition:leave-start="opacity-100 rotate-0 scale-100"
                        x-transition:leave-end="opacity-0 rotate-180 scale-0" class="w-4 h-4 text-blue-400"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                </div>

                {{-- Ripple Effect --}}
                <div
                    class="absolute inset-0 rounded-full opacity-0 bg-blue-500/20 transform scale-0 transition-all duration-300 group-active:opacity-100 group-active:scale-150">
                </div>
            </button>
        </div>
    </div>

    {{-- Separator Line --}}
    <hr class="w-full border-zinc-300 dark:border-zinc-600 mb-6 transition-colors duration-300">

    {{-- Navigation --}}
    <nav class="w-full">
        <ul class="space-y-2">
            {{-- Home --}}
            <li>
                <a href="/" @click="sidebarOpen = false"
                    class="flex items-center justify-between px-4 py-3 rounded-lg transition-all duration-300 group
                       hover:bg-blue-600 hover:text-white dark:hover:bg-blue-600
                       {{ request()->is('/') ? 'bg-zinc-100 dark:bg-zinc-800 border-2 border-blue-600 text-blue-600 dark:text-blue-400 bg-blue-50 dark:bg-blue-900/20' : 'text-zinc-700 dark:text-zinc-300' }}">
                    <div class="flex items-center flex-1 min-w-0 pr-3">
                        <svg class="w-5 h-5 mr-3 flex-shrink-0 transform transition-transform duration-300 group-hover:-rotate-12"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m3 12 2-2m0 0 7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                        <span
                            class="transform transition-transform duration-300 group-hover:scale-110 text-base">Home</span>
                    </div>
                    <svg class="w-4 h-4 flex-shrink-0 transform transition-transform duration-300 group-hover:translate-x-1"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </li>

            {{-- About - Tambahkan debug info untuk melihat route yang aktif --}}
            <li>
                <a href="{{ route('about') ?? '#about-placeholder' }}" @click="sidebarOpen = false"
                    class="flex items-center justify-between px-4 py-3 rounded-lg transition-all duration-300 group
                       hover:bg-blue-600 hover:text-white dark:hover:bg-blue-600
                       {{ request()->is('about*') ? 'bg-zinc-100 dark:bg-zinc-800 border-2 border-blue-600 text-blue-600 dark:text-blue-400 bg-blue-50 dark:bg-blue-900/20' : 'text-zinc-700 dark:text-zinc-300' }}">
                    <div class="flex items-center flex-1 min-w-0 pr-3">
                        <svg class="w-5 h-5 mr-3 flex-shrink-0 transform transition-transform duration-300 group-hover:-rotate-12"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <span
                            class="transform transition-transform duration-300 group-hover:scale-110 text-base">About</span>
                    </div>
                    <svg class="w-4 h-4 flex-shrink-0 transform transition-transform duration-300 group-hover:translate-x-1"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </li>

            {{-- Achievements --}}
            <li>
                <a href="/achievements" @click="sidebarOpen = false"
                    class="flex items-center justify-between px-4 py-3 rounded-lg transition-all duration-300 group
                   hover:bg-blue-600 hover:text-white dark:hover:bg-blue-600
                   {{ request()->is('achievements*') || request()->is('achievement*') ? 'bg-zinc-100 dark:bg-zinc-800 border-2 border-blue-600 text-blue-600 dark:text-blue-400 bg-blue-50 dark:bg-blue-900/20' : 'text-zinc-700 dark:text-zinc-300' }}">
                    <div class="flex items-center flex-1 min-w-0 pr-3">
                        <svg class="w-5 h-5 mr-3 flex-shrink-0 transform transition-transform duration-300 group-hover:-rotate-12"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span
                            class="transform transition-transform duration-300 group-hover:scale-110 text-base">Achievements</span>
                    </div>
                    <svg class="w-4 h-4 flex-shrink-0 transform transition-transform duration-300 group-hover:translate-x-1"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </li>

            {{-- Projects --}}
            <li>
                <a href="/projects" @click="sidebarOpen = false"
                    class="flex items-center justify-between px-4 py-3 rounded-lg transition-all duration-300 group
                   hover:bg-blue-600 hover:text-white dark:hover:bg-blue-600
                   {{ request()->is('projects*') || request()->is('project*') ? 'bg-zinc-100 dark:bg-zinc-800 border-2 border-blue-600 text-blue-600 dark:text-blue-400 bg-blue-50 dark:bg-blue-900/20' : 'text-zinc-700 dark:text-zinc-300' }}">
                    <div class="flex items-center flex-1 min-w-0 pr-3">
                        <svg class="w-5 h-5 mr-3 flex-shrink-0 transform transition-transform duration-300 group-hover:-rotate-12"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span
                            class="transform transition-transform duration-300 group-hover:scale-110 text-base">Projects</span>
                    </div>
                    <svg class="w-4 h-4 flex-shrink-0 transform transition-transform duration-300 group-hover:translate-x-1"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                </a>
            </li>
        </ul>
    </nav>
</div>
