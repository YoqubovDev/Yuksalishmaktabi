<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turin Akademik Litsey</title>
    <!-- Include Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
    :root {
        --primary-color: #0a4480;
        --secondary-color: #1a6cb4;
        --text-color: #333;
        --light-bg: #f5f7fa;
        --white: #ffffff;
        --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: var(--light-bg);
        color: var(--text-color);
    }

    header {
        background-color: var(--primary-color);
        color: var(--white);
        padding: 1rem 0;
        box-shadow: var(--shadow);
    }

    .container {
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
    }

    .header-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .logo {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .logo img {
        height: 60px;
    }

    .logo-text {
        font-size: 1.5rem;
        font-weight: bold;
    }

    nav ul {
        display: flex;
        gap: 2rem;
        list-style: none;
    }

    nav a {
        color: var(--white);
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    nav a:hover {
        color: #b8d8ff;
    }

    .lang-switcher {
        display: flex;
        gap: 0.5rem;
    }

    .lang-switcher a {
        color: var(--white);
        text-decoration: none;
        font-size: 0.9rem;
    }

    .glass-effect {
        background: rgba(255, 255, 255, 0.25);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.18);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
    }

    .group-card {
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .group-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    .student-avatar {
        transition: all 0.3s ease;
    }

    .student-avatar:hover {
        transform: scale(1.1);
        z-index: 10;
    }

    .timeline {
        position: relative;
    }

    .timeline::after {
        content: '';
        position: absolute;
        width: 4px;
        background-color: #3b82f6;
        top: 0;
        bottom: 0;
        left: 50%;
        margin-left: -2px;
    }
    </style>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    'unipix-blue': '#161179',
                    'unipix-light': '#2a2a9e',
                    'unipix-dark': '#0c0950',
                    'turin-green': '#16A34A',
                    'turin-dark': '#003366',
                },
                fontFamily: {
                    'serif': ['Playfair Display', 'serif'],
                    'sans': ['Poppins', 'sans-serif'],
                },
                boxShadow: {
                    'elegant': '0 10px 15px -3px rgba(0, 0, 0, 0.08), 0 4px 6px -2px rgba(0, 0, 0, 0.05)',
                }
            }
        }
    }
    </script>
    <style>
    body {
        font-family: 'Poppins', sans-serif;
    }

    .hero-text-shadow {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .gradient-overlay {
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.2) 0%, rgba(22, 17, 121, 0.7) 100%);
    }

    .btn-glow:hover {
        box-shadow: 0 0 15px rgba(22, 17, 121, 0.6);
    }

    .nav-indicator::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 3px;
        background-color: #161179;
        transition: width 0.3s ease;
    }

    .nav-indicator:hover::after {
        width: 70%;
    }

    .active-nav::after {
        width: 70%;
    }

    /* Team slider styles */
    .slides2 {
        display: flex;
        gap: 24px;
        width: max-content;
    }

    .slider2 {
        overflow: hidden;
    }

    .slider2 .slides2>div {
        flex-shrink: 0;
        min-width: auto;
        max-width: 240px;
    }

    /* Main Slider */
    .main-slider {
        position: relative;
        width: 100%;
        height: 100vh;
        overflow: hidden;
    }

    .main-slides {
        display: flex;
        width: 100%;
        height: 100%;
        transition: transform 0.5s ease-in-out;
    }

    .main-slide {
        flex: 0 0 100%;
        position: relative;
    }

    /* Footer styles */
    .footer {
        background-color: #003366;
        color: white;
    }

    .footer i {
        margin-right: 8px;
    }

    .footer a:hover {
        color: #cfcfcf;
    }
    </style>
</head>

<body>
    <!-- Header Section from galayera.html -->
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <img src="/image/turin-al-logo.png" alt="turin-al-logo.png">
                    <div class="logo-text">ACADEMIC LYCEUM</div>
                </div>
                <nav>
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('about')}}">Litsey haqida</a></li>
                        <li><a href="{{route('photo')}}">Yangiliklar</a></li>
                        <li><a href="{{route('teachers')}}">O'qituvchilar</a></li>
                        <li><a href="{{route('subject')}}">Dars jarayonlari</a></li>
                        <li><a href="{{route('achievements')}}">Yutuqlar</a></li>
                        <li><a href="{{route('contact')}}">Aloqa</a></li>
                    </ul>
                </nav>
                {{--              <div class="lang-switcher">--}}
                {{--                  <a href="#">RU</a>--}}
                {{--                  <a href="#">EN</a>--}}
                {{--                  <a href="#">UZ</a>--}}
                {{--              </div>--}}
            </div>
        </div>
    </header>
    <!-- Navigation Breadcrumb with modern style -->
    <div class="container mx-auto py-4 px-4">
        <div class="flex items-center text-gray-600 text-sm">
            <a href="#" class="hover:text-blue-800 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                Bosh sahifa
            </a>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mx-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <span>Darslar jadvali</span>
        </div>
    </div>

    <!-- Main Content -->
    <main class="container mx-auto p-4">
        <h2 class="text-3xl font-bold mb-8 text-blue-800 text-center">Akademik Guruhlar</h2>

        <!-- GROUP CARDS -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            @foreach($groups as $group)
            <!-- Group Card -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="bg-blue-700 p-4 text-white text-center">
                    <h3 class="text-2xl font-bold">{{ $group->name }}</h3>
                </div>
                <div class="p-4 text-center">
                    <div class="text-sm text-gray-500 mb-2">{{ $group->direction }}</div>
                    <div class="text-lg font-medium text-gray-800">{{ $group->schedule_image }} Students</div>
                    <button onclick="openModal({{ $group->id }})"
                        class="mt-3 px-4 py-2 bg-blue-600 text-white rounded-lg text-sm hover:bg-blue-700 transition-colors">
                        Tafsilotlarni Ko'rish
                    </button>
                </div>
            </div>

            <!-- MODAL -->
            <div id="group-modal-{{ $group->id }}"
                class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
                <div class="bg-white rounded-xl shadow-xl w-full max-w-6xl max-h-screen overflow-auto p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-bold text-blue-800">Group {{ $group->name }} - Tafsilotlar </h2>
                        <button onclick="closeModal({{ $group->id }})" class="text-gray-500 hover:text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <!-- TABS -->
                    <div class="border-b border-gray-200 mb-6">
                        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center">
                            <li class="mr-2">
                                <a href="#"
                                    class="tab-link active inline-block p-4 border-b-2 border-blue-600 rounded-t-lg text-blue-600"
                                    data-tab="schedule-{{ $group->id }}">
                                    Dars Jadvali
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="tab-link inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                                    data-tab="results-{{ $group->id }}">
                                    Natija
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Tab Contents -->
                    <div id="schedule-{{ $group->id }}" class="tab-content">
                        <h3 class="text-xl font-semibold mb-4 text-blue-700">Haftalik Jadval</h3>
                        <div class="bg-gray-50 rounded-lg p-4 overflow-x-auto">
                            <img src="{{ asset('storage/' . $group->image) }}" alt="Weekly Schedule"
                                class="w-full h-auto rounded shadow-sm">
                            <p class="text-sm text-gray-600 mt-2 text-center">Group {{ $group->name }} Haftalik Jadval
                            </p>
                        </div>
                    </div>

                    <div id="results-{{ $group->id }}" class="tab-content hidden">
                        <h3 class="text-xl font-semibold mb-4 text-blue-700">Baholash Natijalari</h3>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <h4 class="text-lg font-medium mb-4 text-blue-800 border-b pb-2">Qabul Qilish Natijalari
                                </h4>
                                <div class="h-64 bg-gray-100 rounded flex items-center justify-center">
                                    <div class="text-center">
                                        <div class="text-gray-500 mb-2">Guruh Natijalari</div>
                                        <div class="text-2xl font-bold text-blue-700">Imtihonlar Bo'yicha:
                                            {{ $group->result_percentage }}%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <section id="courses" class="py-20 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <span
                        class="inline-block mb-4 bg-violet-500/10 text-violet-500 border border-violet-500/20 px-3 py-1 rounded-full text-sm">
                        Ta'lim dasturlari
                    </span>
                    <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Bizning kurslar</h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Zamonaviy ta'lim dasturlari va yo'nalishlari bilan tanishing
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <!-- Course Card 1 -->
                    @foreach($courses as $course)
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 hover-lift">
                        <div class="p-6">
                            <div
                                class="w-12 h-12 bg-violet-500/10 text-violet-500 rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="{{ $course->icon }}">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-2">{{ $course->title }}</h3>
                            <div class="flex items-center justify-between text-sm text-gray-600 mb-4">
                                <div class="flex items-center gap-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    {{ $course->duration }} yil
                                </div>
                                <div class="flex items-center gap-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z">
                                        </path>
                                    </svg>
                                    {{ $course->student_count }} talaba
                                </div>
                            </div>
                            <button onclick="openModal({{ $course->id }})"
                                class="w-full border border-gray-300 text-gray-700 hover:bg-gray-50 px-4 py-2 rounded-lg transition-colors">
                                Batafsil ma'lumot
                            </button>
                        </div>
                    </div>

                    <!-- MODAL -->
                    <div id="group-modal-{{ $course->id }}"
                        class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
                        <div class="bg-white rounded-xl shadow-xl w-full max-w-6xl max-h-screen overflow-auto p-6">
                            <div class="flex justify-between items-center mb-6">
                                <h2 class="text-2xl font-bold text-blue-800">Kurs {{ $course->title }} - Tafsilotlar
                                </h2>
                                <button onclick="closeModal({{ $course->id }})"
                                    class="text-gray-500 hover:text-gray-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>

                            <!-- TABS -->
                            <div class="border-b border-gray-200 mb-6">
                                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center">
                                    <li class="mr-2">
                                        <a href="#"
                                            class="tab-link active inline-block p-4 border-b-2 border-blue-600 rounded-t-lg text-blue-600"
                                            data-tab="schedule-{{ $course->id }}">
                                            Batafsil Ma'lumot
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="tab-link inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                                            data-tab="results-{{ $course->id }}">
                                            Videos
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Tab Contents -->
                            <div id="schedule-{{ $course->id }}" class="tab-content">
                                <h3 class="text-xl font-semibold mb-4 text-blue-700">Batafsil ma'lumot</h3>
                                <div class="bg-gray-50 rounded-lg p-4 overflow-x-auto">
                                    <div class="w-full h-auto rounded shadow-sm">
                                        <p>{{ $course->description }}</p>
                                    </div>
                                    <p class="text-sm text-gray-600 mt-2 text-center">{{ $course->title }}</p>
                                </div>
                            </div>

                            <div id="results-{{ $course->id }}" class="tab-content hidden">
                                <h3 class="text-xl font-semibold mb-4 text-blue-700">Baholash Natijalari</h3>
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                                    <div class="bg-white p-6 rounded-lg shadow-md">
                                        <div class="h-64 bg-gray-100 rounded flex items-center justify-center">
                                            <div class="text-center">
                                                {{$course->url}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>


    </main>

    <script>
    function openModal(id) {
        document.getElementById(`group-modal-${id}`).classList.remove('hidden');
    }

    function closeModal(id) {
        document.getElementById(`group-modal-${id}`).classList.add('hidden');
    }

    document.querySelectorAll('.tab-link').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();

            const groupId = this.dataset.tab.split('-')[1];
            const allTabs = document.querySelectorAll(
                `[id^="schedule-${groupId}"], [id^="results-${groupId}"]`);
            allTabs.forEach(tab => tab.classList.add('hidden'));

            document.getElementById(this.dataset.tab).classList.remove('hidden');

            const tabLinks = this.closest('ul').querySelectorAll('.tab-link');
            tabLinks.forEach(link => {
                link.classList.remove('border-blue-600', 'text-blue-600', 'active');
                link.classList.add('border-transparent');
            });

            this.classList.add('border-blue-600', 'text-blue-600', 'active');
            this.classList.remove('border-transparent');
        });
    });
    </script>


    <!-- Footer -->
    <!-- Footer with improved design -->
    <footer id="contact" class="bg-gradient-to-b from-turin-dark to-gray-900 text-white py-16">
        <!-- Top Footer Section with Logo and Quick Info -->
        <div class="container mx-auto px-6 mb-10">
            <div class="flex flex-col md:flex-row items-center justify-between border-b border-gray-700 pb-10">
                <!-- Logo Section -->
                <div class="flex items-center mb-6 md:mb-0">
                    <div class="mr-6">
                        <div
                            class="w-16 h-16 rounded-full border-2 border-white flex items-center justify-center bg-white bg-opacity-10 backdrop-blur-sm">
                            <div class="text-2xl font-serif font-bold text-white">T</div>
                        </div>
                    </div>
                    <div>
                        <div class="text-3xl font-serif font-bold text-white">TTPU</div>
                        <div class="text-sm tracking-widest text-gray-300">Akademik Litsey</div>
                    </div>
                </div>

                <!-- Quick Contact -->
                <div class="flex flex-wrap justify-center gap-6">
                    <div class="flex items-center bg-white bg-opacity-10 rounded-lg px-4 py-3">
                        <div class="bg-unipix-light p-2 rounded-full mr-3">
                            <i class="fas fa-phone-alt text-white"></i>
                        </div>
                        <div>
                            <div class="text-gray-400 text-xs">Telefon</div>
                            <a href="tel:+13125550123"
                                class="text-white hover:text-unipix-light transition-colors duration-300">(+99871)
                                246-23-31</a>
                        </div>
                    </div>

                    <div class="flex items-center bg-white bg-opacity-10 rounded-lg px-4 py-3">
                        <div class="bg-unipix-light p-2 rounded-full mr-3">
                            <i class="fas fa-envelope text-white"></i>
                        </div>
                        <div>
                            <div class="text-gray-400 text-xs">Email</div>
                            <a href="mailto:info@unipix.edu"
                                class="text-white hover:text-unipix-light transition-colors duration-300">info@turinal.uz</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Footer Content -->
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-10 px-6">
            <!-- Column 1 - About -->
            <div>
                <h3 class="text-xl font-bold mb-6 relative">
                    <span class="bg-unipix-light h-1 w-8 absolute -bottom-2 left-0"></span>
                    Litsey haqida
                </h3>
                <p class="text-gray-300 mb-6 leading-relaxed">
                    Turin akademik litseyi O'zbekiston va Italiya hamkorligidagi nufuzli ta'lim muassasasi bo'lib,
                    zamonaviy ta'lim va innovatsion yondashuvlarga asoslangan.
                </p>
                <div class="flex space-x-3 mt-4">
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-white bg-opacity-10 flex items-center justify-center hover:bg-unipix-light transition-colors duration-300">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-white bg-opacity-10 flex items-center justify-center hover:bg-unipix-light transition-colors duration-300">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-white bg-opacity-10 flex items-center justify-center hover:bg-unipix-light transition-colors duration-300">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-white bg-opacity-10 flex items-center justify-center hover:bg-unipix-light transition-colors duration-300">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>

            <!-- Column 3 - Our Programs -->
            <div>
                <h3 class="text-xl font-bold mb-6 relative">
                    <span class="bg-unipix-light h-1 w-8 absolute -bottom-2 left-0"></span>
                    Ta'lim yo'nalishlari
                </h3>
                <ul class="space-y-3">
                    <li>
                        <a href="#"
                            class="flex items-center text-gray-300 hover:text-white transition-colors duration-300 group">
                            <span
                                class="w-2 h-2 bg-unipix-light rounded-full mr-3 group-hover:w-3 transition-all duration-300"></span>
                            Kompyuter texnologiyalari va muhandislik
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center text-gray-300 hover:text-white transition-colors duration-300 group">
                            <span
                                class="w-2 h-2 bg-unipix-light rounded-full mr-3 group-hover:w-3 transition-all duration-300"></span>
                            Iqtisodiyot va tabiy fanlar
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Column 4 - Newsletter Signup -->
            <div>
                <h3 class="text-xl font-bold mb-6 relative">
                    <span class="bg-unipix-light h-1 w-8 absolute -bottom-2 left-0"></span>
                    Aloqada qoling
                </h3>
                <p class="text-gray-300 mb-6">
                    Turin Politexnika Universitetining Toshkent shahridagi filiali haqida yangiliklar, tadbirlar va
                    e’lonnardan xabardor bo‘lish uchun obuna bo‘ling.
                </p>
                <div class="flex justify-between items-center">
                    <p class="text-gray-400 text-sm">
                        <i class="fas fa-headset mr-2 text-unipix-light"></i> Yordam xizmati: 24/7 faol
                    </p>
                    <a href="tel:+998712462331"
                        class="bg-unipix-light text-white px-4 py-2 rounded-lg hover:bg-unipix-blue transition-colors duration-300">
                        Bog‘lanish
                    </a>
                </div>
            </div>

        </div>

        <!-- Bottom Footer -->
        <div class="container mx-auto mt-12 pt-6 border-t border-gray-800 px-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 mb-4 md:mb-0">
                    © 2025 Turin Politexnika Universitetining Toshkent shahridagi filiali. Barcha huquqlar himoyalangan.
                </p>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300 text-sm">Maxfiylik
                        siyosati</a>
                    <a href="#"
                        class="text-gray-400 hover:text-white transition-colors duration-300 text-sm">Foydalanish
                        shartlari</a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300 text-sm">Cookie
                        siyosati</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
    // JavaScript to handle modal and tabs
    const groupCards = document.querySelectorAll('.group-card');
    const modal = document.getElementById('group-modal');
    const closeModal = document.getElementById('close-modal');
    const modalGroupName = document.getElementById('modal-group-name');
    const scheduleGroupName = document.getElementById('schedule-group-name');
    const tabLinks = document.querySelectorAll('.tab-link');
    const tabContents = document.querySelectorAll('.tab-content');

    groupCards.forEach(card => {
        card.addEventListener('click', () => {
            const group = card.getAttribute('data-group');
            modalGroupName.textContent = group;
            scheduleGroupName.textContent = group;
            modal.classList.remove('hidden');
            // Reset tabs
            tabLinks.forEach(link => link.classList.remove('active', 'text-blue-600',
                'border-blue-600'));
            tabContents.forEach(content => content.classList.add('hidden'));
            tabLinks[0].classList.add('active', 'text-blue-600', 'border-blue-600');
            document.getElementById('schedule-tab').classList.remove('hidden');
        });
    });

    closeModal.addEventListener('click', () => {
        modal.classList.add('hidden');
    });

    tabLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const tab = link.getAttribute('data-tab');
            tabLinks.forEach(l => l.classList.remove('active', 'text-blue-600', 'border-blue-600'));
            link.classList.add('active', 'text-blue-600', 'border-blue-600');
            tabContents.forEach(content => content.classList.add('hidden'));
            document.getElementById(`${tab}-tab`).classList.remove('hidden');
        });
    });
    </script>
</body>

</html>