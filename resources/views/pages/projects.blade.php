@extends('app')

@section('content')
    <div class="flex min-h-screen w-full">
        {{-- Main Content --}}
        <main class="flex-1 w-full p-2 md:p-2 lg:p-4">
            <div class="w-full max-w-7xl mx-auto space-y-12">

                {{-- Projects Header --}}
                <section id="projects-header" class="w-full">
                    <h2 class="text-2xl md:text-3xl font-medium text-gray-800 dark:text-gray-100 mb-4 tracking-tight"
                        data-aos="fade-down">
                        My Projects
                    </h2>
                    <p class="text-gray-600 dark:text-gray-400 text-lg mb-8" data-aos="fade-right">
                        A collection of projects I've worked on, showcasing my skills in web development, networking, data
                        science, and cloud technologies.
                    </p>
                </section>

                {{-- Projects Grid --}}
                <section id="projects-grid" class="w-full">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        {{-- BYD Sales Jabodetabek Project --}}
                        <div class="project-card group bg-white dark:bg-gray-800 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-500 overflow-hidden border border-gray-100 dark:border-gray-700 flex flex-col"
                            data-aos="fade-up" data-aos-delay="0" x-data="{
                                images: [
                                    '/storage/projects/byd/thumbnail.png',
                                    '/storage/projects/byd/thumbnail2.png',
                                    '/storage/projects/byd/thumbnail3.png'
                                ],
                                currentImageIndex: 0,
                                showImageModal: false
                            }"
                            @keydown.window="if(showImageModal && $event.key === 'Escape') { showImageModal = false; currentImageIndex = 0; }">
                            <div class="flex flex-col flex-1">
                                <div class="relative overflow-hidden">
                                    {{-- Image Carousel Indicators --}}
                                    <div class="absolute top-3 right-3 z-10 flex space-x-1" x-show="images.length > 1">
                                        <template x-for="(image, index) in images" :key="index">
                                            <span class="w-1.5 h-1.5 rounded-full transition-all duration-300"
                                                :class="index === currentImageIndex ? 'bg-white' : 'bg-white/40'"></span>
                                        </template>
                                    </div>

                                    {{-- Project Image --}}
                                    <div class="h-48 overflow-hidden relative cursor-pointer"
                                        @click="showImageModal = true">
                                        {{-- Thumbnail menggunakan gambar index 0 --}}
                                        <img :src="images[0]" alt="BYD Sales Jabodetabek Website"
                                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">

                                        {{-- Multiple Images Indicator --}}
                                        <div class="absolute bottom-3 right-3 bg-black/60 text-white text-xs px-2 py-1 rounded-full"
                                            x-show="images.length > 1">
                                            <svg class="w-3 h-3 inline mr-1" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M4 6a2 2 0 012-2h10a2 2 0 012 2v10a2 2 0 01-2 2H6a2 2 0 01-2-2V6z">
                                                </path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M14 10l2.5 2.5L14 15"></path>
                                            </svg>
                                            <span x-text="images.length"></span>
                                        </div>
                                    </div>

                                    {{-- Overlay on hover --}}
                                    <div
                                        class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center space-x-2">
                                        <button @click="showImageModal = true"
                                            class="view-images-btn text-white text-sm font-medium px-3 py-1.5 rounded-lg bg-blue-600/90 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                                            View Images
                                        </button>
                                        {{-- <a href="https://bydsalesjabodetabek.com" target="_blank"
                                            class="view-project-btn text-white text-sm font-medium px-3 py-1.5 rounded-lg bg-green-600/90 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                                            Live Project
                                        </a> --}}
                                    </div>
                                </div>

                                <div class="p-5 flex flex-col flex-1">
                                    {{-- Project Title --}}
                                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100 mb-2 line-clamp-2">BYD
                                        Sales Jabodetabek Website</h3>

                                    {{-- Project Description --}}
                                    <p class="text-gray-600 dark:text-gray-400 mb-4 text-sm leading-relaxed line-clamp-3">
                                        A digital platform to support the marketing and sales of BYD electric vehicles in
                                        the Greater Jakarta area.
                                    </p>

                                    {{-- Project Features --}}
                                    <div class="mb-4">
                                        <h4 class="text-xs font-medium text-gray-800 dark:text-gray-200 mb-1">Key Features:
                                        </h4>
                                        <ul class="text-xs text-gray-600 dark:text-gray-400 space-y-1">
                                            <li class="flex items-start">
                                                <svg class="w-3.5 h-3.5 text-blue-500 mr-1.5 mt-0.5 flex-shrink-0"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                <span class="line-clamp-2">Interactive product pages with vehicle
                                                    specifications</span>
                                            </li>
                                            <li class="flex items-start">
                                                <svg class="w-3.5 h-3.5 text-blue-500 mr-1.5 mt-0.5 flex-shrink-0"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                <span class="line-clamp-2">Sales profiles and client gallery</span>
                                            </li>
                                        </ul>
                                    </div>

                                    {{-- Technology Stack --}}
                                    <div class="mb-4">
                                        <h4 class="text-xs font-medium text-gray-800 dark:text-gray-200 mb-1">Technology
                                            Stack:</h4>
                                        <div class="flex flex-wrap gap-1.5">
                                            <span
                                                class="px-1.5 py-0.5 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 text-xs rounded-full">HTML5</span>
                                            <span
                                                class="px-1.5 py-0.5 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 text-xs rounded-full">Tailwind</span>
                                            <span
                                                class="px-1.5 py-0.5 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 text-xs rounded-full">Laravel</span>
                                            <span
                                                class="px-1.5 py-0.5 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 text-xs rounded-full">MySQL</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Project Links --}}
                            <div class="p-5 pt-0 mt-auto">
                                <div class="flex space-x-2">
                                    {{-- <button @click="showImageModal = true"
                                        class="view-images-btn flex-1 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white text-center text-sm font-medium py-2 px-3 rounded-xl transition-all duration-300 transform hover:-translate-y-1 shadow-md hover:shadow-lg flex items-center justify-center">
                                        <svg class="w-3.5 h-3.5 mr-1.5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 6a2 2 0 012-2h10a2 2 0 012 2v10a2 2 0 01-2 2H6a2 2 0 01-2-2V6z">
                                            </path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M14 10l2.5 2.5L14 15"></path>
                                        </svg>
                                        <span>Images</span>
                                    </button> --}}
                                    <a href="https://bydsalesjabodetabek.com" target="_blank"
                                        class="flex-1 bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white text-center text-sm font-medium py-2 px-3 rounded-xl transition-all duration-300 transform hover:-translate-y-1 shadow-md hover:shadow-lg flex items-center justify-center">
                                        <span>Live</span>
                                        <svg class="w-3.5 h-3.5 ml-1.5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            {{-- Image Modal --}}
                            <div x-show="showImageModal" x-cloak
                                class="fixed inset-0 z-50 bg-black/70 flex items-center justify-center p-4"
                                x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
                                x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                                <div class="relative bg-white dark:bg-gray-800 rounded-xl overflow-hidden w-full max-w-4xl max-h-[90vh]"
                                    @click.away="showImageModal = false">
                                    <div
                                        class="relative h-80 md:h-[450px] bg-gray-100 dark:bg-gray-700 flex items-center justify-center">
                                        <img :src="images[currentImageIndex]" alt="Project image"
                                            class="max-h-full max-w-full object-contain">

                                        <button x-show="images.length > 1"
                                            @click="currentImageIndex = (currentImageIndex - 1 + images.length) % images.length; $event.stopPropagation();"
                                            class="absolute left-4 top-1/2 -translate-y-1/2 w-10 h-10 flex items-center justify-center bg-black/40 text-white rounded-full hover:bg-black/70 transition-colors focus:outline-none">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 19l-7-7 7-7" />
                                            </svg>
                                        </button>
                                        <button x-show="images.length > 1"
                                            @click="currentImageIndex = (currentImageIndex + 1) % images.length; $event.stopPropagation();"
                                            class="absolute right-4 top-1/2 -translate-y-1/2 w-10 h-10 flex items-center justify-center bg-black/40 text-white rounded-full hover:bg-black/70 transition-colors focus:outline-none">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                            </svg>
                                        </button>

                                        {{-- Image Counter --}}
                                        <div x-show="images.length > 1"
                                            class="absolute bottom-4 left-1/2 -translate-x-1/2 bg-black/60 text-white text-sm px-3 py-1 rounded-full">
                                            <span x-text="currentImageIndex + 1"></span> / <span
                                                x-text="images.length"></span>
                                        </div>
                                    </div>

                                    <div class="p-4 flex justify-center space-x-2 bg-gray-50 dark:bg-gray-600">
                                        <template x-for="(image, index) in images" :key="index">
                                            <button @click="currentImageIndex = index; $event.stopPropagation();"
                                                class="w-12 h-12 rounded-md overflow-hidden border-2 transition-all focus:outline-none"
                                                :class="index === currentImageIndex ? 'border-blue-500 scale-105' :
                                                    'border-transparent'">
                                                <img :src="image" class="w-full h-full object-cover">
                                            </button>
                                        </template>
                                    </div>

                                    <button @click="showImageModal = false; currentImageIndex = 0;"
                                        class="absolute top-4 right-4 w-8 h-8 flex items-center justify-center bg-black/40 text-white rounded-full hover:bg-red-500 transition-colors focus:outline-none">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        {{-- Machine Learning Project (Tanpa Link Eksternal) --}}
                        <div class="project-card group bg-white dark:bg-gray-800 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-500 overflow-hidden border border-gray-100 dark:border-gray-700 flex flex-col"
                            data-aos="fade-up" data-aos-delay="100" x-data="{
                                images: [
                                    '/storage/projects/ml/thumbnail.jpg',
                                    '/storage/projects/ml/image1.jpg',
                                    '/storage/projects/ml/image2.jpg',
                                    '/storage/projects/ml/image3.jpg'
                                ],
                                currentImageIndex: 0,
                                showImageModal: false
                            }"
                            @keydown.window="if(showImageModal && $event.key === 'Escape') { showImageModal = false; currentImageIndex = 0; }">
                            <div class="flex flex-col flex-1">
                                <div class="relative overflow-hidden">
                                    {{-- Image Carousel Indicators --}}
                                    <div class="absolute top-3 right-3 z-10 flex space-x-1" x-show="images.length > 1">
                                        <template x-for="(image, index) in images" :key="index">
                                            <span class="w-1.5 h-1.5 rounded-full transition-all duration-300"
                                                :class="index === currentImageIndex ? 'bg-white' : 'bg-white/40'"></span>
                                        </template>
                                    </div>

                                    {{-- Project Image --}}
                                    <div class="h-48 overflow-hidden relative cursor-pointer"
                                        @click="showImageModal = true">
                                        {{-- Thumbnail menggunakan gambar index 0 --}}
                                        <img :src="images[0]" alt="Machine Learning Classification Model"
                                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">

                                        {{-- Multiple Images Indicator --}}
                                        <div class="absolute bottom-3 right-3 bg-black/60 text-white text-xs px-2 py-1 rounded-full"
                                            x-show="images.length > 1">
                                            <svg class="w-3 h-3 inline mr-1" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M4 6a2 2 0 012-2h10a2 2 0 012 2v10a2 2 0 01-2 2H6a2 2 0 01-2-2V6z">
                                                </path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M14 10l2.5 2.5L14 15"></path>
                                            </svg>
                                            <span x-text="images.length"></span>
                                        </div>
                                    </div>

                                    {{-- Overlay on hover (Hanya View Images) --}}
                                    <div
                                        class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                                        <button @click="showImageModal = true"
                                            class="view-images-btn text-white text-sm font-medium px-3 py-1.5 rounded-lg bg-green-600/90 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                                            View Images
                                        </button>
                                    </div>
                                </div>

                                <div class="p-5 flex flex-col flex-1">
                                    {{-- Project Title --}}
                                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100 mb-2 line-clamp-2">
                                        Machine Learning Classification Model</h3>

                                    {{-- Project Description --}}
                                    <p class="text-gray-600 dark:text-gray-400 mb-4 text-sm leading-relaxed line-clamp-3">
                                        An image classification model using TensorFlow for identifying various objects with
                                        high accuracy. This project involved extensive data preprocessing and model
                                        optimization to achieve exceptional performance metrics.
                                    </p>

                                    {{-- Project Features --}}
                                    <div class="mb-4">
                                        <h4 class="text-xs font-medium text-gray-800 dark:text-gray-200 mb-1">Key Features:
                                        </h4>
                                        <ul class="text-xs text-gray-600 dark:text-gray-400 space-y-1">
                                            <li class="flex items-start">
                                                <svg class="w-3.5 h-3.5 text-green-500 mr-1.5 mt-0.5 flex-shrink-0"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                <span class="line-clamp-2">High accuracy image classification with 95%+
                                                    precision</span>
                                            </li>
                                            <li class="flex items-start">
                                                <svg class="w-3.5 h-3.5 text-green-500 mr-1.5 mt-0.5 flex-shrink-0"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                <span class="line-clamp-2">Transfer learning with pre-trained models
                                                    (ResNet, VGG16)</span>
                                            </li>
                                        </ul>
                                    </div>

                                    {{-- Technology Stack --}}
                                    <div class="mb-4">
                                        <h4 class="text-xs font-medium text-gray-800 dark:text-gray-200 mb-1">Technology
                                            Stack:</h4>
                                        <div class="flex flex-wrap gap-1.5">
                                            <span
                                                class="px-1.5 py-0.5 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 text-xs rounded-full">Python</span>
                                            <span
                                                class="px-1.5 py-0.5 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 text-xs rounded-full">TensorFlow</span>
                                            <span
                                                class="px-1.5 py-0.5 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 text-xs rounded-full">Keras</span>
                                            <span
                                                class="px-1.5 py-0.5 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 text-xs rounded-full">Flask</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Project Links (Hanya View Images) --}}
                            {{-- <div class="p-5 pt-0 mt-auto">
                                <button @click="showImageModal = true"
                                    class="w-full bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white text-center text-sm font-medium py-2 px-3 rounded-xl transition-all duration-300 transform hover:-translate-y-1 shadow-md hover:shadow-lg flex items-center justify-center">
                                    <svg class="w-3.5 h-3.5 mr-1.5" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6a2 2 0 012-2h10a2 2 0 012 2v10a2 2 0 01-2 2H6a2 2 0 01-2-2V6z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 10l2.5 2.5L14 15"></path>
                                    </svg>
                                    <span>View Project Images</span>
                                </button>
                            </div> --}}

                            {{-- Image Modal --}}
                            <div x-show="showImageModal" x-cloak
                                class="fixed inset-0 z-50 bg-black/70 flex items-center justify-center p-4"
                                x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
                                x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                                <div class="relative bg-white dark:bg-gray-800 rounded-xl overflow-hidden w-full max-w-4xl max-h-[90vh]"
                                    @click.away="showImageModal = false">
                                    <div
                                        class="relative h-80 md:h-[450px] bg-gray-100 dark:bg-gray-700 flex items-center justify-center">
                                        <img :src="images[currentImageIndex]" alt="Project image"
                                            class="max-h-full max-w-full object-contain">

                                        <button x-show="images.length > 1"
                                            @click="currentImageIndex = (currentImageIndex - 1 + images.length) % images.length; $event.stopPropagation();"
                                            class="absolute left-4 top-1/2 -translate-y-1/2 w-10 h-10 flex items-center justify-center bg-black/40 text-white rounded-full hover:bg-black/70 transition-colors focus:outline-none">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 19l-7-7 7-7" />
                                            </svg>
                                        </button>
                                        <button x-show="images.length > 1"
                                            @click="currentImageIndex = (currentImageIndex + 1) % images.length; $event.stopPropagation();"
                                            class="absolute right-4 top-1/2 -translate-y-1/2 w-10 h-10 flex items-center justify-center bg-black/40 text-white rounded-full hover:bg-black/70 transition-colors focus:outline-none">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                            </svg>
                                        </button>

                                        {{-- Image Counter --}}
                                        <div x-show="images.length > 1"
                                            class="absolute bottom-4 left-1/2 -translate-x-1/2 bg-black/60 text-white text-sm px-3 py-1 rounded-full">
                                            <span x-text="currentImageIndex + 1"></span> / <span
                                                x-text="images.length"></span>
                                        </div>
                                    </div>

                                    <div class="p-4 flex justify-center space-x-2 bg-gray-50 dark:bg-gray-600">
                                        <template x-for="(image, index) in images" :key="index">
                                            <button @click="currentImageIndex = index; $event.stopPropagation();"
                                                class="w-12 h-12 rounded-md overflow-hidden border-2 transition-all focus:outline-none"
                                                :class="index === currentImageIndex ? 'border-green-500 scale-105' :
                                                    'border-transparent'">
                                                <img :src="image" class="w-full h-full object-cover">
                                            </button>
                                        </template>
                                    </div>

                                    <button @click="showImageModal = false; currentImageIndex = 0;"
                                        class="absolute top-4 right-4 w-8 h-8 flex items-center justify-center bg-black/40 text-white rounded-full hover:bg-red-500 transition-colors focus:outline-none">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        {{-- Network Infrastructure Project --}}
                        <div class="project-card group bg-white dark:bg-gray-800 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-500 overflow-hidden border border-gray-100 dark:border-gray-700 flex flex-col"
                            data-aos="fade-up" data-aos-delay="200" x-data="{
                                images: [
                                    '/storage/projects/network/thumbnail.jpg',
                                    '/storage/projects/network/image1.jpg'
                                ],
                                currentImageIndex: 0,
                                showImageModal: false
                            }"
                            @keydown.window="if(showImageModal && $event.key === 'Escape') { showImageModal = false; currentImageIndex = 0; }">
                            <div class="flex flex-col flex-1">
                                <div class="relative overflow-hidden">
                                    {{-- Image Carousel Indicators --}}
                                    <div class="absolute top-3 right-3 z-10 flex space-x-1" x-show="images.length > 1">
                                        <template x-for="(image, index) in images" :key="index">
                                            <span class="w-1.5 h-1.5 rounded-full transition-all duration-300"
                                                :class="index === currentImageIndex ? 'bg-white' : 'bg-white/40'"></span>
                                        </template>
                                    </div>

                                    {{-- Project Image --}}
                                    <div class="h-48 overflow-hidden relative cursor-pointer"
                                        @click="showImageModal = true">
                                        {{-- Thumbnail menggunakan gambar index 0 --}}
                                        <img :src="images[0]" alt="Enterprise Network Infrastructure"
                                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">

                                        {{-- Multiple Images Indicator --}}
                                        <div class="absolute bottom-3 right-3 bg-black/60 text-white text-xs px-2 py-1 rounded-full"
                                            x-show="images.length > 1">
                                            <svg class="w-3 h-3 inline mr-1" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M4 6a2 2 0 012-2h10a2 2 0 012 2v10a2 2 0 01-2 2H6a2 2 0 01-2-2V6z">
                                                </path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M14 10l2.5 2.5L14 15"></path>
                                            </svg>
                                            <span x-text="images.length"></span>
                                        </div>
                                    </div>

                                    {{-- Overlay on hover (Hanya View Images) --}}
                                    <div
                                        class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                                        <button @click="showImageModal = true"
                                            class="view-images-btn text-white text-sm font-medium px-3 py-1.5 rounded-lg bg-purple-600/90 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                                            View Images
                                        </button>
                                    </div>
                                </div>

                                <div class="p-5 flex flex-col flex-1">
                                    {{-- Project Title --}}
                                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100 mb-2 line-clamp-2">
                                        Enterprise Network Infrastructure</h3>

                                    {{-- Project Description --}}
                                    <p class="text-gray-600 dark:text-gray-400 mb-4 text-sm leading-relaxed line-clamp-3">
                                        Design and implementation of a secure and scalable enterprise network infrastructure
                                        for a medium-sized company with multiple locations and remote workers.
                                    </p>

                                    {{-- Project Features --}}
                                    <div class="mb-4">
                                        <h4 class="text-xs font-medium text-gray-800 dark:text-gray-200 mb-1">Key Features:
                                        </h4>
                                        <ul class="text-xs text-gray-600 dark:text-gray-400 space-y-1">
                                            <li class="flex items-start">
                                                <svg class="w-3.5 h-3.5 text-purple-500 mr-1.5 mt-0.5 flex-shrink-0"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                <span class="line-clamp-2">VLAN segmentation for enhanced security</span>
                                            </li>
                                            <li class="flex items-start">
                                                <svg class="w-3.5 h-3.5 text-purple-500 mr-1.5 mt-0.5 flex-shrink-0"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                <span class="line-clamp-2">Redundant connections for high
                                                    availability</span>
                                            </li>
                                        </ul>
                                    </div>

                                    {{-- Technology Stack --}}
                                    <div class="mb-4">
                                        <h4 class="text-xs font-medium text-gray-800 dark:text-gray-200 mb-1">Technology
                                            Stack:</h4>
                                        <div class="flex flex-wrap gap-1.5">
                                            <span
                                                class="px-1.5 py-0.5 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 text-xs rounded-full">Cisco
                                                Routers</span>
                                            <span
                                                class="px-1.5 py-0.5 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 text-xs rounded-full">Cisco
                                                Switches</span>
                                            <span
                                                class="px-1.5 py-0.5 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 text-xs rounded-full">MikroTik</span>
                                            <span
                                                class="px-1.5 py-0.5 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 text-xs rounded-full">VPN</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Project Links (Hanya View Images) --}}
                            <div class="p-5 pt-0 mt-auto">
                                <button @click="showImageModal = true"
                                    class="w-full bg-gradient-to-r from-purple-600 to-purple-700 hover:from-purple-700 hover:to-purple-800 text-white text-center text-sm font-medium py-2 px-3 rounded-xl transition-all duration-300 transform hover:-translate-y-1 shadow-md hover:shadow-lg flex items-center justify-center">
                                    <svg class="w-3.5 h-3.5 mr-1.5" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6a2 2 0 012-2h10a2 2 0 012 2v10a2 2 0 01-2 2H6a2 2 0 01-2-2V6z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 10l2.5 2.5L14 15"></path>
                                    </svg>
                                    <span>View Project Images</span>
                                </button>
                            </div>

                            {{-- Image Modal --}}
                            <div x-show="showImageModal" x-cloak
                                class="fixed inset-0 z-50 bg-black/70 flex items-center justify-center p-4"
                                x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
                                x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                                <div class="relative bg-white dark:bg-gray-800 rounded-xl overflow-hidden w-full max-w-4xl max-h-[90vh]"
                                    @click.away="showImageModal = false">
                                    <div
                                        class="relative h-80 md:h-[450px] bg-gray-100 dark:bg-gray-700 flex items-center justify-center">
                                        <img :src="images[currentImageIndex]" alt="Project image"
                                            class="max-h-full max-w-full object-contain">

                                        <button x-show="images.length > 1"
                                            @click="currentImageIndex = (currentImageIndex - 1 + images.length) % images.length; $event.stopPropagation();"
                                            class="absolute left-4 top-1/2 -translate-y-1/2 w-10 h-10 flex items-center justify-center bg-black/40 text-white rounded-full hover:bg-black/70 transition-colors focus:outline-none">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 19l-7-7 7-7" />
                                            </svg>
                                        </button>
                                        <button x-show="images.length > 1"
                                            @click="currentImageIndex = (currentImageIndex + 1) % images.length; $event.stopPropagation();"
                                            class="absolute right-4 top-1/2 -translate-y-1/2 w-10 h-10 flex items-center justify-center bg-black/40 text-white rounded-full hover:bg-black/70 transition-colors focus:outline-none">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                            </svg>
                                        </button>

                                        {{-- Image Counter --}}
                                        <div x-show="images.length > 1"
                                            class="absolute bottom-4 left-1/2 -translate-x-1/2 bg-black/60 text-white text-sm px-3 py-1 rounded-full">
                                            <span x-text="currentImageIndex + 1"></span> / <span
                                                x-text="images.length"></span>
                                        </div>
                                    </div>

                                    <div class="p-4 flex justify-center space-x-2 bg-gray-50 dark:bg-gray-600">
                                        <template x-for="(image, index) in images" :key="index">
                                            <button @click="currentImageIndex = index; $event.stopPropagation();"
                                                class="w-12 h-12 rounded-md overflow-hidden border-2 transition-all focus:outline-none"
                                                :class="index === currentImageIndex ? 'border-purple-500 scale-105' :
                                                    'border-transparent'">
                                                <img :src="image" class="w-full h-full object-cover">
                                            </button>
                                        </template>
                                    </div>

                                    <button @click="showImageModal = false; currentImageIndex = 0;"
                                        class="absolute top-4 right-4 w-8 h-8 flex items-center justify-center bg-black/40 text-white rounded-full hover:bg-red-500 transition-colors focus:outline-none">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

            </div>
        </main>
    </div>
@endsection

<style>
    .project-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
    }

    .project-card:hover {
        transform: translateY(-5px);
    }

    .view-images-btn,
    .view-project-btn {
        transition: all 0.3s ease;
    }

    .view-images-btn:hover,
    .view-project-btn:hover {
        transform: scale(1.05);
    }

    [x-cloak] {
        display: none !important;
    }

    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>

<script>
    // Pastikan event listener keyboard berfungsi dengan baik
    document.addEventListener('alpine:init', () => {
        // Handler untuk event keyboard
        const handleKeyDown = (event) => {
            if (event.key === 'Escape') {
                // Tutup modal
                const activeModals = document.querySelectorAll(
                    '[x-show="showImageModal"][showImageModal="true"]');
                if (activeModals.length > 0) {
                    const alpineData = Alpine.$data(activeModals[0].closest('[x-data]'));
                    if (alpineData) {
                        alpineData.showImageModal = false;
                        alpineData.currentImageIndex = 0;
                    }
                }
            }
        };

        // Tambahkan event listener
        document.addEventListener('keydown', handleKeyDown);
    });
</script>
