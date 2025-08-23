@extends('app')

@section('content')
    <div class="flex min-h-screen">

        {{-- Main Content --}}
        <main class="flex-1 p-2 md:p-2 lg:p-4">
            <div class="max-w-6xl mx-auto space-y-12">

                {{-- Career --}}
                <section id="career">
                    <h2 class="text-2xl md:text-3xl font-medium text-gray-800 dark:text-gray-100 mb-6 tracking-tight"
                        data-aos="fade-down">
                        Career
                    </h2>

                    <div class="space-y-2" data-aos="fade-right">
                        @forelse ($careers as $career)
                            <div class="flex flex-col md:flex-row items-start md:items-center bg-slate-100 dark:bg-gray-800 
                                       rounded-xl transition p-5 md:p-6 border border-zinc-300 dark:border-gray-700"
                                data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">

                                {{-- Company Logo --}}
                                <div
                                    class="flex-shrink-0 w-14 h-14 rounded-md flex items-center justify-center mr-5 mb-4 md:mb-0 shadow-sm bg-white p-2 border border-zinc-300 dark:border-gray-700">
                                    <img src="{{ asset('storage/' . $career['icon']) }}" alt="logo {{ $career['company'] }}"
                                        class="object-contain w-full h-full">
                                </div>

                                {{-- Details --}}
                                <div class="flex-1">
                                    <h3 class="text-lg md:text-xl font-medium text-gray-800 dark:text-gray-100">
                                        {{ $career['title'] }}
                                    </h3>
                                    <p class="text-gray-600 dark:text-gray-300 text-sm md:text-base mt-0.5">
                                        {{ $career['company'] }} • {{ $career['location-type'] }}
                                    </p>
                                    <p class="text-gray-500 dark:text-gray-400 text-sm md:text-base mt-0.5">
                                        {{ $career['duration'] }} • {{ $career['employment-type'] }} •
                                        {{ $career['location-type'] }}
                                    </p>

                                    {{-- Responsibilities --}}
                                    <div x-data="{ open: false }" class="mt-3">
                                        {{-- Tombol toggle (tetap di tempat) --}}
                                        <button @click="open = !open"
                                            class="flex items-center gap-1 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 text-sm md:text-base focus:outline-none transition">
                                            <svg :class="{ 'rotate-90': open }"
                                                class="w-4 h-4 transform transition-transform duration-300"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                            <span x-text="open ? 'Hide Responsibilities' : 'View Responsibilities'"></span>
                                        </button>

                                        {{-- List jobdesk (expand / collapse) --}}
                                        <ul x-show="open" x-collapse
                                            class="list-disc pl-5 mt-2 space-y-1 leading-relaxed text-gray-600 dark:text-gray-300 text-sm md:text-base">
                                            @foreach ($career['responsibilities'] ?? [] as $task)
                                                <li>{{ $task }}</li>
                                            @endforeach
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        @empty
                            <div class="text-center text-gray-600 dark:text-gray-300">No career data found.</div>
                        @endforelse
                    </div>
                </section>

                {{-- Education --}}
                <section id="education" class="mt-10">
                    <h2 class="text-2xl md:text-3xl font-medium text-gray-800 dark:text-gray-100 mb-6 tracking-tight"
                        data-aos="fade-down">
                        Education
                    </h2>

                    <div class="space-y-2" data-aos="fade-right">
                        @forelse ($educations as $edu)
                            <div
                                class="flex flex-col md:flex-row items-start md:items-center bg-slate-100 dark:bg-gray-800 
                       rounded-xl transition p-5 md:p-6 border border-zinc-300 dark:border-gray-700">
                                {{-- Institution Logo --}}
                                <div
                                    class="flex-shrink-0 w-14 h-14 rounded-md flex items-center justify-center mr-5 mb-4 md:mb-0 shadow-sm bg-white p-2">
                                    <img src="{{ asset('storage/' . $edu['icon']) }}" alt="logo {{ $edu['institution'] }}"
                                        class="object-contain w-full h-full">
                                </div>

                                {{-- Details --}}
                                <div class="flex-1">
                                    <h3 class="text-lg md:text-xl font-medium text-gray-800 dark:text-gray-100">
                                        {{ $edu['institution'] }}
                                    </h3>
                                    <p class="text-gray-600 dark:text-gray-300 text-sm md:text-base mt-0.5">
                                        {{ $edu['degree'] }} • {{ $edu['Major'] }}
                                    </p>
                                    <p class="text-gray-500 dark:text-gray-400 text-sm md:text-base mt-0.5">
                                        {{ $edu['year'] }} • {{ $edu['location'] }}
                                    </p>
                                </div>
                            </div>
                        @empty
                            <div class="text-center text-gray-600 dark:text-gray-300">No education data found.</div>
                        @endforelse
                    </div>
                </section>

            </div>
        </main>
    </div>
@endsection
