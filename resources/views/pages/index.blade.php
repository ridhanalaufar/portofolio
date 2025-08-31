@extends('app')

@section('content')
    {{-- Hero Section --}}
    <section id="home" class="text-center py-8" data-aos="fade-up">
        <div class="max-w-4xl mx-auto px-6">
            <h1 class="text-4xl md:text-5xl font-bold mb-6 text-gray-800 dark:text-gray-100">Ridhan Al Aufar</h1>
            <p class="text-xl text-gray-600 dark:text-gray-300 mb-8">IT Enthusiast & Full Stack Developer</p>
            <div class="flex justify-center gap-4">
                <a href="#contact"
                    class="px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition">
                    Get In Touch
                </a>
                <a href="{{ route('about') }}"
                    class="px-6 py-3 border border-blue-600 text-blue-600 dark:text-blue-400 font-medium rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/20 transition">
                    View My Work
                </a>
            </div>
        </div>
    </section>

    {{-- About Me --}}
    <section id="about-me" class="py-8 bg-gray-50 dark:bg-gray-800/50" data-aos="fade-up">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800 dark:text-gray-100">About Me</h2>

            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-2xl font-semibold mb-4 text-gray-800 dark:text-gray-100">Who I Am</h3>
                    <p class="text-gray-700 dark:text-gray-300 mb-6 leading-relaxed">
                        I am an IT enthusiast with a strong passion for technology and innovation. With expertise in both
                        networking and software development,
                        I enjoy creating solutions that bridge the gap between infrastructure and application.
                    </p>
                    <p class="text-gray-700 dark:text-gray-300 mb-8 leading-relaxed">
                        Currently pursuing my Bachelor's degree in Informatics Engineering while working as a Business
                        Development professional,
                        I bring a unique combination of technical knowledge and business acumen to every project.
                    </p>

                    <div class="grid grid-cols-2 gap-6">
                        <div class="flex items-center">
                            <div
                                class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center mr-4">
                                <i class="fas fa-graduation-cap text-blue-600 dark:text-blue-400"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800 dark:text-gray-100">Education</p>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Informatics Engineering</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div
                                class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center mr-4">
                                <i class="fas fa-briefcase text-green-600 dark:text-green-400"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800 dark:text-gray-100">Experience</p>
                                <p class="text-sm text-gray-600 dark:text-gray-400">3+ Years</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-sm text-center">
                        <div
                            class="w-14 h-14 mx-auto mb-3 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center">
                            <i class="fas fa-code text-xl text-blue-600 dark:text-blue-400"></i>
                        </div>
                        <h4 class="font-semibold text-gray-800 dark:text-gray-100">Web Development</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Full Stack</p>
                    </div>
                    <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-sm text-center">
                        <div
                            class="w-14 h-14 mx-auto mb-3 bg-purple-100 dark:bg-purple-900/30 rounded-full flex items-center justify-center">
                            <i class="fas fa-network-wired text-xl text-purple-600 dark:text-purple-400"></i>
                        </div>
                        <h4 class="font-semibold text-gray-800 dark:text-gray-100">Networking</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Infrastructure</p>
                    </div>
                    <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-sm text-center">
                        <div
                            class="w-14 h-14 mx-auto mb-3 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center">
                            <i class="fas fa-chart-line text-xl text-green-600 dark:text-green-400"></i>
                        </div>
                        <h4 class="font-semibold text-gray-800 dark:text-gray-100">Data Science</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Analysis & ML</p>
                    </div>
                    <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-sm text-center">
                        <div
                            class="w-14 h-14 mx-auto mb-3 bg-yellow-100 dark:bg-yellow-900/30 rounded-full flex items-center justify-center">
                            <i class="fas fa-cloud text-xl text-yellow-600 dark:text-yellow-400"></i>
                        </div>
                        <h4 class="font-semibold text-gray-800 dark:text-gray-100">Cloud</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400">AWS & GCP</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Skills Section --}}
    <section id="skills" class="py-6" data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-6 text-gray-800 dark:text-gray-100">Tech Stack</h2>

            <div
                class="grid grid-cols-3 sm:grid-cols-5 md:grid-cols-6 lg:grid-cols-6 xl:grid-cols-8 gap-1 justify-items-center">
                <!-- HTML -->
                <x-tech-item name="HTML" logo="html5.png" color="teal" />

                <!-- CSS -->
                <x-tech-item name="CSS" logo="css3.svg" color="purple" />

                <!-- Python -->
                <x-tech-item name="Python" logo="python.svg" color="blue" />

                <!-- JavaScript -->
                <x-tech-item name="JavaScript" logo="javascript.svg" color="yellow" />

                <!-- PHP -->
                <x-tech-item name="PHP" logo="php.png" color="purple" />

                <!-- Laravel -->
                <x-tech-item name="Laravel" logo="laravel.png" color="red" />

                <!-- React -->
                <x-tech-item name="React" logo="react.png" color="blue" />

                <!-- Arduino -->
                <x-tech-item name="Arduino" logo="arduino.png" color="teal" />

                <!-- Tailwind CSS -->
                <x-tech-item name="Tailwind" logo="tailwind.png" color="cyan" />

                <!-- TensorFlow -->
                <x-tech-item name="TensorFlow" logo="tensorflow.png" color="orange"
                    logoClass="dark:brightness-0 dark:invert dark:filter" />

                <!-- Pandas -->
                <x-tech-item name="Pandas" logo="pandas.png" color="blue" />

                <!-- Numpy -->
                <x-tech-item name="Numpy" logo="numpy.svg" color="orange" />

                <!-- Scikit-learn -->
                <x-tech-item name="Scikit-learn" logo="scikit-learn.png" color="blue"
                    logoClass="dark:brightness-0 dark:invert dark:filter" />

                <!-- Tableau -->
                <x-tech-item name="Tableau" logo="tableau.png" color="teal" />

                <!-- MySQL -->
                <x-tech-item name="MySQL" logo="mysql.png" color="blue" />

                <!-- Docker -->
                <x-tech-item name="Docker" logo="docker.png" color="blue" />

                <!-- Git -->
                <x-tech-item name="Git" logo="git.png" color="orange" />

                <!-- Cisco -->
                <x-tech-item name="Cisco" logo="cisco2.png" color="gray" />

                <!-- MikroTik -->
                <x-tech-item name="MikroTik" logo="mikrotik.svg" color="gray" />
            </div>
        </div>
    </section>


    {{-- Featured Highlights Section --}}
    <section id="featured" class="py-16 bg-gradient-to-br from-gray-50 to-blue-50 dark:from-gray-800 dark:to-gray-900">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-16 text-gray-800 dark:text-gray-100 relative">
                Featured Highlights
                <span
                    class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-20 h-1 bg-blue-600 rounded-full"></span>
            </h2>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Career Highlights -->
                <div class="relative group" x-data="{ cardHover: false }">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-purple-600 rounded-xl blur opacity-25 group-hover:opacity-50 transition duration-500"
                        :class="{ 'opacity-50': cardHover }"></div>
                    <div class="relative bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg h-full flex flex-col"
                        @mouseenter="cardHover = true" @mouseleave="cardHover = false"
                        :class="{ 'ring-2 ring-blue-500': cardHover }">
                        <div class="flex items-center mb-6">
                            <div
                                class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center mr-4 transform transition-transform duration-300 group-hover:scale-110">
                                <i class="fas fa-briefcase text-blue-600 dark:text-blue-400 text-lg"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Career Highlights</h3>
                        </div>
                        <div class="space-y-4 flex-grow">
                            <div class="flex transform transition-transform duration-300 hover:translate-x-1">
                                <div class="flex-shrink-0 w-3 h-3 mt-1.5 bg-blue-600 rounded-full mr-3 animate-pulse">
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800 dark:text-gray-100">Business Development</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">PT. Global Abadi Inti Nusantara ·
                                        Current</p>
                                </div>
                            </div>
                            <div class="flex transform transition-transform duration-300 hover:translate-x-1">
                                <div class="flex-shrink-0 w-3 h-3 mt-1.5 bg-blue-600 rounded-full mr-3 animate-pulse"
                                    style="animation-delay: 0.2s;"></div>
                                <div>
                                    <h4 class="font-semibold text-gray-800 dark:text-gray-100">Machine Learning Cohort</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Bangkit Academy · 2024</p>
                                </div>
                            </div>
                            <div class="flex transform transition-transform duration-300 hover:translate-x-1">
                                <div class="flex-shrink-0 w-3 h-3 mt-1.5 bg-blue-600 rounded-full mr-3 animate-pulse"
                                    style="animation-delay: 0.4s;"></div>
                                <div>
                                    <h4 class="font-semibold text-gray-800 dark:text-gray-100">Network Operations Center
                                    </h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">PT. Daya Sinergi Telekomunikasi ·
                                        2023-2024</p>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('about') }}"
                            class="mt-6 inline-flex items-center justify-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-all duration-300 transform hover:-translate-y-1 shadow-md hover:shadow-lg group/link">
                            <span>View Full Experience</span>
                            <i
                                class="fas fa-arrow-right ml-2 transform transition-transform duration-300 group-hover/link:translate-x-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Education -->
                <div class="relative group" x-data="{ cardHover: false }">
                    <div class="absolute inset-0 bg-gradient-to-r from-green-600 to-teal-600 rounded-xl blur opacity-25 group-hover:opacity-50 transition duration-500"
                        :class="{ 'opacity-50': cardHover }"></div>
                    <div class="relative bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg h-full flex flex-col"
                        @mouseenter="cardHover = true" @mouseleave="cardHover = false"
                        :class="{ 'ring-2 ring-green-500': cardHover }">
                        <div class="flex items-center mb-6">
                            <div
                                class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center mr-4 transform transition-transform duration-300 group-hover:scale-110">
                                <i class="fas fa-graduation-cap text-green-600 dark:text-green-400 text-lg"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Education</h3>
                        </div>
                        <div class="space-y-4 flex-grow">
                            <div class="flex transform transition-transform duration-300 hover:translate-x-1">
                                <div class="flex-shrink-0 w-3 h-3 mt-1.5 bg-green-600 rounded-full mr-3 animate-pulse">
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800 dark:text-gray-100">Bachelor's Degree</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Informatics Engineering · Pamulang
                                        University · 2021-2025</p>
                                </div>
                            </div>
                            <div class="flex transform transition-transform duration-300 hover:translate-x-1">
                                <div class="flex-shrink-0 w-3 h-3 mt-1.5 bg-green-600 rounded-full mr-3 animate-pulse"
                                    style="animation-delay: 0.2s;"></div>
                                <div>
                                    <h4 class="font-semibold text-gray-800 dark:text-gray-100">Vocational High School</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Computer and Network Engineering ·
                                        SMK Islamiyah Ciputat · 2017-2020</p>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('about') }}#education"
                            class="mt-6 inline-flex items-center justify-center px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg transition-all duration-300 transform hover:-translate-y-1 shadow-md hover:shadow-lg group/link">
                            <span>View Education Details</span>
                            <i
                                class="fas fa-arrow-right ml-2 transform transition-transform duration-300 group-hover/link:translate-x-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Certifications -->
                <div class="relative group" x-data="{ cardHover: false }">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-pink-600 rounded-xl blur opacity-25 group-hover:opacity-50 transition duration-500"
                        :class="{ 'opacity-50': cardHover }"></div>
                    <div class="relative bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg h-full flex flex-col"
                        @mouseenter="cardHover = true" @mouseleave="cardHover = false"
                        :class="{ 'ring-2 ring-purple-500': cardHover }">
                        <div class="flex items-center mb-6">
                            <div
                                class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center mr-4 transform transition-transform duration-300 group-hover:scale-110">
                                <i class="fas fa-certificate text-purple-600 dark:text-purple-400 text-lg"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Top Certifications</h3>
                        </div>
                        <div class="space-y-4 flex-grow">
                            <div class="flex transform transition-transform duration-300 hover:translate-x-1">
                                <div class="flex-shrink-0 w-3 h-3 mt-1.5 bg-purple-600 rounded-full mr-3 animate-pulse">
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800 dark:text-gray-100">Data Scientist Expert</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">IDCamp x Dicoding · 2025</p>
                                </div>
                            </div>
                            <div class="flex transform transition-transform duration-300 hover:translate-x-1">
                                <div class="flex-shrink-0 w-3 h-3 mt-1.5 bg-purple-600 rounded-full mr-3 animate-pulse"
                                    style="animation-delay: 0.2s;"></div>
                                <div>
                                    <h4 class="font-semibold text-gray-800 dark:text-gray-100">Machine Learning
                                        Specialization</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Bangkit Academy · 2024</p>
                                </div>
                            </div>
                            <div class="flex transform transition-transform duration-300 hover:translate-x-1">
                                <div class="flex-shrink-0 w-3 h-3 mt-1.5 bg-purple-600 rounded-full mr-3 animate-pulse"
                                    style="animation-delay: 0.4s;"></div>
                                <div>
                                    <h4 class="font-semibold text-gray-800 dark:text-gray-100">Google IT Support
                                        Professional</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Coursera · 2022</p>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('achievements') }}"
                            class="mt-6 inline-flex items-center justify-center px-4 py-2 bg-purple-600 hover:bg-purple-700 text-white rounded-lg transition-all duration-300 transform hover:-translate-y-1 shadow-md hover:shadow-lg group/link">
                            <span>View All Certifications</span>
                            <i
                                class="fas fa-arrow-right ml-2 transform transition-transform duration-300 group-hover/link:translate-x-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Recent Projects -->
                <div class="relative group" x-data="{ cardHover: false }">
                    <div class="absolute inset-0 bg-gradient-to-r from-yellow-600 to-orange-600 rounded-xl blur opacity-25 group-hover:opacity-50 transition duration-500"
                        :class="{ 'opacity-50': cardHover }"></div>
                    <div class="relative bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg h-full flex flex-col"
                        @mouseenter="cardHover = true" @mouseleave="cardHover = false"
                        :class="{ 'ring-2 ring-yellow-500': cardHover }">
                        <div class="flex items-center mb-6">
                            <div
                                class="w-12 h-12 rounded-full bg-yellow-100 dark:bg-yellow-900/30 flex items-center justify-center mr-4 transform transition-transform duration-300 group-hover:scale-110">
                                <i class="fas fa-code-branch text-yellow-600 dark:text-yellow-400 text-lg"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Recent Projects</h3>
                        </div>
                        <div class="space-y-4 flex-grow">
                            <div class="flex transform transition-transform duration-300 hover:translate-x-1">
                                <div class="flex-shrink-0 w-3 h-3 mt-1.5 bg-yellow-600 rounded-full mr-3 animate-pulse">
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800 dark:text-gray-100">Machine Learning Model</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Image classification with
                                        TensorFlow</p>
                                </div>
                            </div>
                            <div class="flex transform transition-transform duration-300 hover:translate-x-1">
                                <div class="flex-shrink-0 w-3 h-3 mt-1.5 bg-yellow-600 rounded-full mr-3 animate-pulse"
                                    style="animation-delay: 0.2s;"></div>
                                <div>
                                    <h4 class="font-semibold text-gray-800 dark:text-gray-100">Network Infrastructure</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Enterprise network design &
                                        implementation</p>
                                </div>
                            </div>
                            <div class="flex transform transition-transform duration-300 hover:translate-x-1">
                                <div class="flex-shrink-0 w-3 h-3 mt-1.5 bg-yellow-600 rounded-full mr-3 animate-pulse"
                                    style="animation-delay: 0.4s;"></div>
                                <div>
                                    <h4 class="font-semibold text-gray-800 dark:text-gray-100">Web Application</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Laravel-based business management
                                        system</p>
                                </div>
                            </div>
                        </div>
                        <a href="/projects"
                            class="mt-6 inline-flex items-center justify-center px-4 py-2 bg-yellow-600 hover:bg-yellow-700 text-white rounded-lg transition-all duration-300 transform hover:-translate-y-1 shadow-md hover:shadow-lg group/link">
                            <span>View Project Portfolio</span>
                            <i
                                class="fas fa-arrow-right ml-2 transform transition-transform duration-300 group-hover/link:translate-x-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Call to Action --}}
    <section id="contact" class="py-16 text-center" data-aos="fade-up">
        <div class="max-w-3xl mx-auto px-6">
            <h2 class="text-3xl font-bold mb-6 text-gray-800 dark:text-gray-100">Let's Work Together</h2>
            <p class="text-xl text-gray-700 dark:text-gray-300 mb-8">
                I'm always interested in new challenges and opportunities. Whether you have a project in mind or just want
                to connect, feel free to reach out.
            </p>
            <a href="#contact"
                class="px-8 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition inline-flex items-center">
                <i class="fas fa-envelope mr-2"></i>
                Get In Touch
            </a>
        </div>
    </section>
@endsection
