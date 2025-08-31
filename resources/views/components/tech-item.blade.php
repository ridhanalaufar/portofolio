@props(['name', 'logo', 'color' => '', 'logoClass' => 'brightness-1 dark:invert group-hover:filter-none'])

@php
    // Mapping warna ke kelas Tailwind yang sesuai
    $colorClasses = [
        'blue' => 'bg-indigo-500/90 dark:bg-blue-600/90',
        'red' => 'bg-red-500/90 dark:bg-red-600/90',
        'yellow' => 'bg-yellow-500/90 dark:bg-yellow-600/90',
        'green' => 'bg-green-500/90 dark:bg-green-600/90',
        'purple' => 'bg-purple-500/90 dark:bg-purple-600/90',
        'orange' => 'bg-orange-500/90 dark:bg-orange-600/90',
        'cyan' => 'bg-cyan-500/90 dark:bg-cyan-600/90',
        'gray' => 'bg-gray-500/90 dark:bg-gray-600/90',
        'teal' => 'bg-teal-500/90 dark:bg-teal-600/90',
    ];

    $bgClass = $colorClasses[$color] ?? $colorClasses['blue'];
@endphp

<div class="relative w-16 h-16 flex items-center justify-center mb-12 cursor-pointer group tech-item">
    <div
        class="absolute w-full h-full {{ $bgClass }} rounded-xl transition-all duration-300 group-hover:translate-x-3 group-hover:-translate-y-3 group-hover:rotate-10 group-hover:shadow-md z-10">
    </div>
    <div
        class="relative z-30 flex items-center justify-center w-14 h-14 bg-white/10 dark:bg-white/5 backdrop-blur rounded-xl border border-white/20 dark:border-white/10 transition-all duration-300 group-hover:scale-110">
        <div class="flex items-center justify-center w-10 h-10 transition-all duration-300 group-hover:scale-115">
            <img src="/storage/logo/Logo_TechStack/{{ $logo }}" alt="{{ $name }}"
                class="w-10 h-10 transition-all duration-300 group-hover:scale-105 {{ $logoClass }}" />
        </div>
    </div>
    <div
        class="absolute -bottom-6 left-1/2 transform -translate-x-1/2 bg-gray-800 dark:bg-gray-900 text-white dark:text-blue-100 px-3 py-1.5 rounded-md text-xs font-medium opacity-0 invisible transition-all duration-300 group-hover:opacity-100 group-hover:visible group-hover:-bottom-8 whitespace-nowrap shadow-lg dark:shadow-blue-500/20 border border-gray-700 dark:border-blue-500/30">
        {{ $name }}
    </div>
</div>
