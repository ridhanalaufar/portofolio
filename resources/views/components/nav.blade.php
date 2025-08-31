{{-- Navigation untuk Desktop dan Mobile --}}
<div class="flex flex-col items-center p-2 h-full">
    <div class="flex flex-col items-center flex-grow w-full">
        {{-- Profile --}}
        <div class="flex flex-col items-center mb-6 ">
            <img src="storage/profiles/1.jpg" alt="Profile"
                class="w-28 h-28 object-cover rounded-full border-4 border-blue-600 shadow-md transition-colors duration-300">
            <h2 class="mt-3 text-lg font-semibold text-zinc-900 dark:text-zinc-50 transition-colors duration-300">Ridhan
                Al
                Aufar</h2>
            <p class="text-sm text-zinc-500 dark:text-zinc-400 transition-colors duration-300">IT Enthusiast</p>
        </div>

        {{-- Enhanced Animated Switch Dark Mode Toggle --}}
        <div class="relative inline-flex items-center group mb-6">
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
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
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
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
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
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
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

        {{-- Separator Line --}}
        <hr class="w-full border-zinc-300 dark:border-zinc-600 my-6 transition-colors duration-300">

        {{-- Social Media Icons --}}
        <div class="flex justify-center space-x-5 w-full">
            {{-- Instagram --}}
            <a href="https://www.instagram.com/yourusername" target="_blank" rel="noopener noreferrer"
                class="flex items-center justify-center w-10 h-10 rounded-full bg-zinc-100 dark:bg-zinc-800 text-zinc-600 dark:text-zinc-400 hover:bg-pink-100 dark:hover:bg-pink-900/30 hover:text-pink-600 dark:hover:text-pink-400 transition-all duration-300 transform hover:scale-110"
                title="Instagram">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                        clip-rule="evenodd" />
                </svg>
            </a>

            {{-- LinkedIn --}}
            <a href="https://www.linkedin.com/in/yourusername" target="_blank" rel="noopener noreferrer"
                class="flex items-center justify-center w-10 h-10 rounded-full bg-zinc-100 dark:bg-zinc-800 text-zinc-600 dark:text-zinc-400 hover:bg-blue-100 dark:hover:bg-blue-900/30 hover:text-blue-700 dark:hover:text-blue-400 transition-all duration-300 transform hover:scale-110"
                title="LinkedIn">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                        d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                </svg>
            </a>

            {{-- Email --}}
            <a href="mailto:your.email@example.com" target="_blank" rel="noopener noreferrer"
                class="flex items-center justify-center w-10 h-10 rounded-full bg-zinc-100 dark:bg-zinc-800 text-zinc-600 dark:text-zinc-400 hover:bg-red-100 dark:hover:bg-red-900/30 hover:text-red-600 dark:hover:text-red-400 transition-all duration-300 transform hover:scale-110"
                title="Email">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z"
                        clip-rule="evenodd" />
                    <path fill-rule="evenodd"
                        d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>

    {{-- Footer --}}
    <footer class="mt-auto py-4 w-full text-center">
        <hr class="w-full border-zinc-300 dark:border-zinc-600 mb-4 transition-colors duration-300">
        <p class="text-xs text-zinc-500 dark:text-zinc-400 transition-colors duration-300">
            &copy; {{ date('Y') }} Ridhan Al Aufar.
        </p>
        <p class="text-xs text-zinc-500 dark:text-zinc-400 transition-colors duration-300">
            All rights reserved.
        </p>
    </footer>
</div>
