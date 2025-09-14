@extends('app')

@section('content')
    <div class="flex min-h-screen w-full">

        {{-- Main Content --}}
        <main class="flex-1 w-full p-2 md:p-2 lg:p-4">
            <div class="w-full max-w-6xl mx-auto space-y-12">

                {{-- Hero Section --}}
                <section id="home" class="w-full text-center" data-aos="fade-up">
                    <div class="w-full max-w-6xl mx-auto">
                        <h1 class="text-3xl md:text-4xl font-bold mb-3 text-gray-800 dark:text-gray-100 text-left">Ridhan Al
                            Aufar</h1>
                        <p class="text-lg text-gray-600 dark:text-gray-300 text-left"> Living in Jakarta, Indonesia</p>
                        <hr class="my-6 border-t-4 border-gray-400 dark:border-gray-600 border-dotted">
                    </div>
                </section>

                {{-- About Me --}}
                <section id="about-me" data-aos="fade-up" class="w-full -mt-6">
                    <div>
                        <p class="text-gray-700 dark:text-gray-300 mb-4 leading-relaxed text-justify">
                            I am Ridhan Al Aufar, an IT enthusiast with a strong passion for technology and innovation. I
                            hold a
                            vocational degree in Computer and Network Engineering and I am currently pursuing my Bachelor's
                            in
                            Informatics
                            Engineering at Pamulang University.
                        </p>
                        <p class="text-gray-700 dark:text-gray-300 mb-4 leading-relaxed text-justify">
                            My professional journey encompasses roles such as a Network Engineer, Endpoint Device
                            Technician, NOC
                            Engineer, and
                            administrative staff. These experiences have refined my skills in IT networking, technical
                            support, data
                            analytics, and documentation. I have also developed a keen interest in bridging infrastructure
                            and
                            application
                            through software development.
                        </p>
                        <p class="text-gray-700 dark:text-gray-300 mb-6 leading-relaxed text-justify">
                            My current position is in business development within the ICT sector, where I specialize in
                            operational coordination, solution development, and facilitating cross-team technical
                            communication. I bring a unique blend of
                            technical expertise
                            and business insight to every project, always aiming to create scalable, efficient, and
                            user-friendly
                            solutions.
                        </p>
                    </div>
                </section>

                {{-- Expertise Section --}}
                <section id="about-me" data-aos="fade-up" class="w-full overflow-hidden">
                    <div class="w-full max-w-6xl mx-auto px-4 md:px-6">
                        <h2 class="mb-8 text-3xl font-bold text-center text-gray-800 dark:text-gray-100"
                            data-aos="fade-down">
                            Expertise
                        </h2>

                        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 gap-4">
                            <!-- Web Development -->
                            <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-sm text-center transition-all duration-300 hover:-translate-y-1 hover:shadow-md"
                                data-aos="fade-right">
                                <div
                                    class="w-14 h-14 mx-auto mb-3 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center overflow-hidden">
                                    <img src="/storage/logo/Logo_TechStack/programming.svg" alt="Programming"
                                        class="w-8 h-8 object-contain" />
                                </div>
                                <h4 class="font-semibold text-gray-800 dark:text-gray-100">Web Development</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Full Stack</p>
                            </div>

                            <!-- Networking -->
                            <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-sm text-center transition-all duration-300 hover:-translate-y-1 hover:shadow-md"
                                data-aos="fade-right">
                                <div
                                    class="w-14 h-14 mx-auto mb-3 bg-purple-100 dark:bg-purple-900/30 rounded-full flex items-center justify-center overflow-hidden">
                                    <img src="/storage/logo/Logo_TechStack/networking.svg" alt="Networking"
                                        class="w-8 h-8 object-contain" />
                                </div>
                                <h4 class="font-semibold text-gray-800 dark:text-gray-100">Networking</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Infrastructure</p>
                            </div>

                            <!-- Data Science -->
                            <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-sm text-center transition-all duration-300 hover:-translate-y-1 hover:shadow-md"
                                data-aos="fade-left">
                                <div
                                    class="w-14 h-14 mx-auto mb-3 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center overflow-hidden">
                                    <img src="/storage/logo/Logo_TechStack/data-science.png" alt="Data Science"
                                        class="w-8 h-8 object-contain" />
                                </div>
                                <h4 class="font-semibold text-gray-800 dark:text-gray-100">Data Science</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Analysis & ML</p>
                            </div>

                            <!-- Cloud -->
                            <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-sm text-center transition-all duration-300 hover:-translate-y-1 hover:shadow-md"
                                data-aos="fade-left">
                                <div
                                    class="w-14 h-14 mx-auto mb-3 bg-yellow-100 dark:bg-yellow-900/30 rounded-full flex items-center justify-center overflow-hidden">
                                    <img src="/storage/logo/Logo_TechStack/cloud.svg" alt="Cloud Computing"
                                        class="w-8 h-8 object-contain" />
                                </div>
                                <h4 class="font-semibold text-gray-800 dark:text-gray-100">Cloud</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">AWS & GCP</p>
                            </div>
                        </div>
                    </div>
                </section>


                {{-- Skills Section --}}
                <section id="skills" class="w-full pt-6" data-aos="fade-down">
                    <div class="w-full max-w-6xl mx-auto px-4 md:px-6">
                        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800 dark:text-gray-100">Tech Stack</h2>

                        <div
                            class="grid grid-cols-5 sm:grid-cols-6 md:grid-cols-8 lg:grid-cols-8 xl:grid-cols-10 gap-1 justify-items-center">
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
                            <x-tech-item name="TensorFlow" logo="tensorflow.png" color="orange" />

                            <!-- Pandas -->
                            <x-tech-item name="Pandas" logo="pandas.png" color="blue" />

                            <!-- Numpy -->
                            <x-tech-item name="Numpy" logo="numpy.svg" color="orange" />

                            <!-- Scikit-learn -->
                            <x-tech-item name="Scikit-learn" logo="scikit-learn.svg" color="blue" />

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

                            <!-- Adobe Photoshop -->
                            <x-tech-item name="Adobe Photoshop" logo="adobe_photoshop.png" color="blue" />

                            <!-- Artificial Intelegence -->
                            <x-tech-item name="Artificial Intelegence" logo="ai.png" color="gray" />

                            <!-- C++ -->
                            <x-tech-item name="C++" logo="cpp.png" color="blue" />

                            <!-- Canva -->
                            <x-tech-item name="Canva" logo="canva.png" color="purple" />

                            <!-- Codeigniter -->
                            <x-tech-item name="Codeigniter" logo="codeigniter.png" color="orange" />

                            <!-- colabs -->
                            <x-tech-item name="Colabs" logo="colabs.png" color="orange" />

                            <!-- cpanel -->
                            <x-tech-item name="Cpanel" logo="cpanel.png" color="orange" />

                            <!-- debian -->
                            <x-tech-item name="Debian" logo="debian.png" color="orange" />

                            <!-- Github -->
                            <x-tech-item name="Github" logo="github.png" color="orange" />

                            <!-- Java -->
                            <x-tech-item name="Java" logo="java.png" color="orange" />

                            <!-- jquery -->
                            <x-tech-item name="JQuery" logo="jquery.png" color="orange" />

                            <!-- Jupyter -->
                            <x-tech-item name="Jupyter" logo="Jupyter.png" color="orange" />

                            <!-- kaggle -->
                            <x-tech-item name="Kaggle" logo="kaggle.png" color="blue" />

                            <!-- keras -->
                            <x-tech-item name="Keras" logo="keras.png" color="blue" />

                            <!-- Matplotlib -->
                            <x-tech-item name="Matplotlib" logo="Matplotlib.png" color="blue" />

                            <!-- nginx -->
                            <x-tech-item name="Nginx" logo="nginx.png" color="green" />

                            <!-- nodejs -->
                            <x-tech-item name="Node js" logo="nodejs.png" color="green" />

                        </div>
                    </div>
                </section>




                {{-- Featured Highlights Section --}}
                <section id="featured" data-aos="fade-up" class="w-full overflow-hidden">
                    <div class="w-full max-w-6xl mx-auto px-4 md:px-6">
                        <h2 class="mb-8 text-4xl font-bold text-center text-gray-800 dark:text-gray-100"
                            data-aos="fade-down">
                            Featured Highlights
                        </h2>

                        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-2">
                            <!-- Career Highlights -->
                            <div class="relative group" x-data="{ cardHover: false }" data-aos="fade-right">
                                <div
                                    class="absolute inset-0 bg-gradient-to-r from-blue-600 to-purple-600 
                 rounded-xl blur-sm opacity-25 group-hover:opacity-50 transition duration-500 
                 pointer-events-none">
                                </div>
                                <div class="relative bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg h-full flex flex-col
                 transition-all duration-300 will-change-transform"
                                    @mouseenter="cardHover = true" @mouseleave="cardHover = false"
                                    :class="{ 'ring-2 ring-blue-500': cardHover }">
                                    <div class="flex items-center mb-6">
                                        <div
                                            class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center mr-4
                     transform transition-transform duration-300 group-hover:scale-105">
                                            <i class="fas fa-briefcase text-blue-600 dark:text-blue-400 text-lg"></i>
                                        </div>
                                        <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Career
                                            Highlights</h3>
                                    </div>
                                    <div class="space-y-4 flex-grow">
                                        <div class="flex hover:translate-x-1 transition-transform duration-300">
                                            <div
                                                class="flex-shrink-0 w-3 h-3 mt-1.5 bg-blue-600 rounded-full mr-3 animate-pulse">
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 dark:text-gray-100">Business
                                                    Development</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">PT. Global Abadi Inti
                                                    Nusantara · Current</p>
                                            </div>
                                        </div>
                                        <div class="flex hover:translate-x-1 transition-transform duration-300">
                                            <div class="flex-shrink-0 w-3 h-3 mt-1.5 bg-blue-600 rounded-full mr-3 animate-pulse"
                                                style="animation-delay:0.2s"></div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 dark:text-gray-100">Machine Learning
                                                    Cohort</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Bangkit Academy · 2024
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex hover:translate-x-1 transition-transform duration-300">
                                            <div class="flex-shrink-0 w-3 h-3 mt-1.5 bg-blue-600 rounded-full mr-3 animate-pulse"
                                                style="animation-delay:0.4s"></div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 dark:text-gray-100">Network
                                                    Operations Center</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">PT. Daya Sinergi
                                                    Telekomunikasi · 2023-2024</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ route('about') }}"
                                        class="mt-6 inline-flex items-center justify-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white
                    rounded-lg transition-all duration-300 transform hover:-translate-y-1 shadow-md hover:shadow-lg">
                                        <span>View Full Experience</span>
                                        <i
                                            class="fas fa-arrow-right ml-2 transition-transform duration-300 group-hover:translate-x-1"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Education -->
                            <div class="relative group" x-data="{ cardHover: false }" data-aos="fade-left">
                                <div
                                    class="absolute inset-0 bg-gradient-to-r from-green-600 to-teal-600 
                 rounded-xl blur-sm opacity-25 group-hover:opacity-50 transition duration-500 
                 pointer-events-none">
                                </div>
                                <div class="relative bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg h-full flex flex-col
                 transition-all duration-300 will-change-transform"
                                    @mouseenter="cardHover = true" @mouseleave="cardHover = false"
                                    :class="{ 'ring-2 ring-green-500': cardHover }">
                                    <div class="flex items-center mb-6">
                                        <div
                                            class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center mr-4
                     transform transition-transform duration-300 group-hover:scale-105">
                                            <i
                                                class="fas fa-graduation-cap text-green-600 dark:text-green-400 text-lg"></i>
                                        </div>
                                        <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Education</h3>
                                    </div>
                                    <div class="space-y-4 flex-grow">
                                        <div class="flex hover:translate-x-1 transition-transform duration-300">
                                            <div
                                                class="flex-shrink-0 w-3 h-3 mt-1.5 bg-green-600 rounded-full mr-3 animate-pulse">
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 dark:text-gray-100">Bachelor's
                                                    Degree</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Informatics Engineering · Pamulang University · 2021-2025
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex hover:translate-x-1 transition-transform duration-300">
                                            <div class="flex-shrink-0 w-3 h-3 mt-1.5 bg-green-600 rounded-full mr-3 animate-pulse"
                                                style="animation-delay:0.2s"></div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 dark:text-gray-100">Vocational High
                                                    School</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    Computer and Network Engineering · SMK Islamiyah Ciputat · 2017-2020
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ route('about') }}#education"
                                        class="mt-6 inline-flex items-center justify-center px-4 py-2 bg-green-600 hover:bg-green-700 text-white
                    rounded-lg transition-all duration-300 transform hover:-translate-y-1 shadow-md hover:shadow-lg">
                                        <span>View Education Details</span>
                                        <i
                                            class="fas fa-arrow-right ml-2 transition-transform duration-300 group-hover:translate-x-1"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Top Certifications -->
                            <div class="relative group" x-data="{ cardHover: false }" data-aos="fade-up">
                                <div
                                    class="absolute inset-0 bg-gradient-to-r from-purple-600 to-pink-600 
                 rounded-xl blur-sm opacity-25 group-hover:opacity-50 transition duration-500 
                 pointer-events-none">
                                </div>
                                <div class="relative bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg h-full flex flex-col
                 transition-all duration-300 will-change-transform"
                                    @mouseenter="cardHover = true" @mouseleave="cardHover = false"
                                    :class="{ 'ring-2 ring-purple-500': cardHover }">
                                    <div class="flex items-center mb-6">
                                        <div
                                            class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center mr-4
                     transform transition-transform duration-300 group-hover:scale-105">
                                            <i class="fas fa-certificate text-purple-600 dark:text-purple-400 text-lg"></i>
                                        </div>
                                        <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Top
                                            Certifications</h3>
                                    </div>
                                    <div class="space-y-4 flex-grow">
                                        <div class="flex hover:translate-x-1 transition-transform duration-300">
                                            <div
                                                class="flex-shrink-0 w-3 h-3 mt-1.5 bg-purple-600 rounded-full mr-3 animate-pulse">
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 dark:text-gray-100">Data Scientist
                                                    Expert</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">IDCamp x Dicoding ·
                                                    2025</p>
                                            </div>
                                        </div>
                                        <div class="flex hover:translate-x-1 transition-transform duration-300">
                                            <div class="flex-shrink-0 w-3 h-3 mt-1.5 bg-purple-600 rounded-full mr-3 animate-pulse"
                                                style="animation-delay:0.2s"></div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 dark:text-gray-100">Machine Learning
                                                    Specialization</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Bangkit Academy · 2024
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex hover:translate-x-1 transition-transform duration-300">
                                            <div class="flex-shrink-0 w-3 h-3 mt-1.5 bg-purple-600 rounded-full mr-3 animate-pulse"
                                                style="animation-delay:0.4s"></div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 dark:text-gray-100">Google IT
                                                    Support Professional</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Coursera · 2022</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ route('achievements') }}"
                                        class="mt-6 inline-flex items-center justify-center px-4 py-2 bg-purple-600 hover:bg-purple-700 text-white
                    rounded-lg transition-all duration-300 transform hover:-translate-y-1 shadow-md hover:shadow-lg">
                                        <span>View All Certifications</span>
                                        <i
                                            class="fas fa-arrow-right ml-2 transition-transform duration-300 group-hover:translate-x-1"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Recent Projects -->
                            <div class="relative group" x-data="{ cardHover: false }" data-aos="fade-up">
                                <div
                                    class="absolute inset-0 bg-gradient-to-r from-yellow-600 to-orange-600 
                 rounded-xl blur-sm opacity-25 group-hover:opacity-50 transition duration-500 
                 pointer-events-none">
                                </div>
                                <div class="relative bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg h-full flex flex-col
                 transition-all duration-300 will-change-transform"
                                    @mouseenter="cardHover = true" @mouseleave="cardHover = false"
                                    :class="{ 'ring-2 ring-yellow-500': cardHover }">
                                    <div class="flex items-center mb-6">
                                        <div
                                            class="w-12 h-12 rounded-full bg-yellow-100 dark:bg-yellow-900/30 flex items-center justify-center mr-4
                     transform transition-transform duration-300 group-hover:scale-105">
                                            <i class="fas fa-code-branch text-yellow-600 dark:text-yellow-400 text-lg"></i>
                                        </div>
                                        <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Recent Projects
                                        </h3>
                                    </div>
                                    <div class="space-y-4 flex-grow">
                                        <div class="flex hover:translate-x-1 transition-transform duration-300">
                                            <div
                                                class="flex-shrink-0 w-3 h-3 mt-1.5 bg-yellow-600 rounded-full mr-3 animate-pulse">
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 dark:text-gray-100">Machine Learning
                                                    Model</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Image classification
                                                    with TensorFlow</p>
                                            </div>
                                        </div>
                                        <div class="flex hover:translate-x-1 transition-transform duration-300">
                                            <div class="flex-shrink-0 w-3 h-3 mt-1.5 bg-yellow-600 rounded-full mr-3 animate-pulse"
                                                style="animation-delay:0.2s"></div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 dark:text-gray-100">Network
                                                    Infrastructure</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Enterprise network
                                                    design & implementation</p>
                                            </div>
                                        </div>
                                        <div class="flex hover:translate-x-1 transition-transform duration-300">
                                            <div class="flex-shrink-0 w-3 h-3 mt-1.5 bg-yellow-600 rounded-full mr-3 animate-pulse"
                                                style="animation-delay:0.4s"></div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800 dark:text-gray-100">Web Application
                                                </h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Laravel-based business
                                                    management system</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="/projects"
                                        class="mt-6 inline-flex items-center justify-center px-4 py-2 bg-yellow-600 hover:bg-yellow-700 text-white
                    rounded-lg transition-all duration-300 transform hover:-translate-y-1 shadow-md hover:shadow-lg">
                                        <span>View Project Portfolio</span>
                                        <i
                                            class="fas fa-arrow-right ml-2 transition-transform duration-300 group-hover:translate-x-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                {{-- Call to Action --}}
                {{-- <section id="contact" class="w-full py-2 text-center" data-aos="fade-up">
                    <div class="w-full max-w-6xl mx-auto px-4 md:px-6">
                        <h2 class="text-3xl font-bold mb-6 text-gray-800 dark:text-gray-100">Let's Work Together</h2>
                        <p class="text-xl text-gray-700 dark:text-gray-300 mb-8">
                            I'm always interested in new challenges and opportunities. Whether you have a project in mind or
                            just want
                            to connect, feel free to reach out.
                        </p>
                        <a href="#contact"
                            class="px-8 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition inline-flex items-center">
                            <i class="fas fa-envelope mr-2"></i>
                            Get In Touch
                        </a>
                    </div>
                </section> --}}

            </div>
        </main>
    </div>
@endsection
