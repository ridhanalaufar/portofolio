@extends('app')

@section('content')
    <div class="flex min-h-screen">

        {{-- Main Content --}}
        <main class="flex-1 p-2 md:p-2 lg:p-4">
            <div class="max-w-6xl mx-auto space-y-12">

                {{-- Career --}}
                <section id="career">
                    <h2 class="text-2xl md:text-3xl font-medium text-gray-800 dark:text-gray-100 mb-8 tracking-tight"
                        data-aos="fade-down">
                        Professional Experience
                    </h2>

                    <div class="space-y-8" data-aos="fade-right">
                        @forelse ($groupedCareers as $company)
                            <div class="company-experience-group">
                                {{-- Setiap posisi dalam perusahaan --}}
                                @foreach ($company['positions'] as $career)
                                    <div class="position-card bg-white dark:bg-gray-800 rounded-lg shadow-md transition-all 
                                                hover:shadow-lg border-l-4 border-blue-500 dark:border-blue-600 p-6 mb-6"
                                        data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">

                                        <div class="flex flex-col md:flex-row">
                                            {{-- Company Logo (lebih kecil dan subtle) --}}
                                            <div
                                                class="flex-shrink-0 w-12 h-12 rounded-lg flex items-center justify-center 
                                                        mr-4 mb-4 md:mb-0 bg-gray-100 dark:bg-gray-700 p-1">
                                                <img src="{{ asset('storage/' . $company['icon']) }}"
                                                    alt="logo {{ $company['company'] }}"
                                                    class="object-contain w-full h-full opacity-80">
                                            </div>

                                            {{-- Position Details --}}
                                            <div class="flex-1">
                                                {{-- Position Title (lebih menonjol) --}}
                                                <h3
                                                    class="text-md md:text-xl font-semibold text-gray-800 dark:text-gray-100 mb-1">
                                                    {{ $career['title'] }}
                                                </h3>

                                                {{-- Company name (lebih subtle) --}}
                                                <p class="text-gray-600 dark:text-gray-300 text-base mb-2">
                                                    {{ $company['company'] }}
                                                </p>

                                                {{-- Metadata --}}
                                                <div class="flex flex-wrap gap-3 mb-4">
                                                    <span
                                                        class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium 
                                                                bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">
                                                        {{ $career['employment-type'] }}
                                                    </span>
                                                    <span
                                                        class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium 
                                                                bg-purple-100 text-purple-800 dark:bg-purple-900 dark:text-purple-200">
                                                        {{ $career['location-type'] }}
                                                    </span>
                                                    <span
                                                        class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium 
                                                                bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">
                                                        {{ $career['duration'] }}
                                                    </span>
                                                </div>

                                                {{-- Location --}}
                                                <p class="text-gray-500 dark:text-gray-400 text-sm mb-4 flex items-center">
                                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                                        </path>
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                    </svg>
                                                    {{ $career['location'] }}
                                                </p>

                                                {{-- Responsibilities --}}
                                                <div x-data="{ open: false }" class="mt-4">
                                                    {{-- Toggle button --}}
                                                    <button @click="open = !open"
                                                        class="flex items-center gap-2 text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300 
                                                                   text-sm font-medium focus:outline-none transition">
                                                        <svg :class="{ 'rotate-90': open }"
                                                            class="w-4 h-4 transform transition-transform duration-300"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M9 5l7 7-7 7" />
                                                        </svg>
                                                        <span
                                                            x-text="open ? 'Hide Responsibilities' : 'View Key Responsibilities'"></span>
                                                    </button>

                                                    {{-- Responsibilities list --}}
                                                    <ul x-show="open" x-collapse
                                                        class="list-disc pl-5 mt-3 space-y-2 leading-relaxed text-gray-700 dark:text-gray-300">
                                                        @foreach ($career['responsibilities'] ?? [] as $task)
                                                            <li>{{ $task }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @empty
                            <div class="text-center text-gray-600 dark:text-gray-300 py-8">No career data found.</div>
                        @endforelse
                    </div>
                </section>

                {{-- Education --}}
                <section id="education" class="mt-16">
                    <h2 class="text-2xl md:text-3xl font-medium text-gray-800 dark:text-gray-100 mb-8 tracking-tight"
                        data-aos="fade-down">
                        Education
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6" data-aos="fade-right">
                        @forelse ($educations as $edu)
                            <div
                                class="education-card bg-white dark:bg-gray-800 rounded-lg shadow-md transition-all 
                                       hover:shadow-lg p-6 border-t-4 border-green-500 dark:border-green-600">
                                <div class="flex items-start">
                                    {{-- Institution Logo --}}
                                    <div
                                        class="flex-shrink-0 w-12 h-12 rounded-lg flex items-center justify-center 
                                                mr-4 bg-gray-100 dark:bg-gray-700 p-1">
                                        <img src="{{ asset('storage/' . $edu['icon']) }}"
                                            alt="logo {{ $edu['institution'] }}"
                                            class="object-contain w-full h-full opacity-80">
                                    </div>

                                    {{-- Details --}}
                                    <div class="flex-1">
                                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100 mb-1">
                                            {{ $edu['institution'] }}
                                        </h3>
                                        <p class="text-gray-600 dark:text-gray-300 text-base mb-2">
                                            {{ $edu['degree'] }} • {{ $edu['Major'] }}
                                        </p>
                                        <div class="flex items-center text-gray-500 dark:text-gray-400 text-sm">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                </path>
                                            </svg>
                                            {{ $edu['year'] }}
                                        </div>
                                        <div class="flex items-center text-gray-500 dark:text-gray-400 text-sm mt-1">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                                </path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            </svg>
                                            {{ $edu['location'] }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="text-center text-gray-600 dark:text-gray-300 py-8 col-span-full">No education data
                                found.</div>
                        @endforelse
                    </div>
                </section>

            </div>
        </main>
    </div>
@endsection

<style>
    .position-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .position-card:hover {
        transform: translateY(-2px);
    }

    .education-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .education-card:hover {
        transform: translateY(-2px);
    }
</style>
