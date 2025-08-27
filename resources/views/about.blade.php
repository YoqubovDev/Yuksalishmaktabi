<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turin Akademik Litsey</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
            background: linear-gradient(to bottom, rgba(0,0,0,0.2) 0%, rgba(22,17,121,0.7) 100%);
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
        .slider2 .slides2 > div {
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

        .footer {
            background: linear-gradient(to bottom, #003366, #001830);
            color: white;
            position: relative;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 10px;
            background: linear-gradient(to right, #161179, #16A34A);
        }

        .footer-top {
            padding: 5rem 0 3rem;
        }

        .footer-logo {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .footer-logo-circle {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        .footer-heading {
            position: relative;
            margin-bottom: 1.5rem;
            padding-bottom: 0.75rem;
        }

        .footer-heading::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background-color: var(--accent-color);
        }

        .footer-nav-item {
            display: flex;
            align-items: center;
            transition: transform 0.3s ease;
        }

        .footer-nav-item:hover {
            transform: translateX(5px);
        }

        .footer-nav-item i {
            color: var(--accent-color);
            font-size: 12px;
            margin-right: 8px;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding: 2rem 0;
        }
    </style>
    <style>
        .stat-box {
            transition: transform 0.3s ease-in-out;
        }
        .stat-box:hover {
            transform: scale(1.05);
        }

        /* Team Slider Styles */
        .slider-container {
            overflow: hidden;
            position: relative;
            width: 100%;
            padding-top: 2rem;
            padding-bottom: 2rem;
        }

        .slider-images {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            padding: 2rem;
        }

        .slider-img {
            position: relative;
            height: 450px;
            width: 300px;
            border-radius: 20px;
            overflow: hidden;
            cursor: pointer;
            flex-shrink: 0;
            transition: all 0.5s ease;
            opacity: 0.6;
            transform: scale(0.9);
        }

        .slider-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .slider-img h1 {
            position: absolute;
            bottom: 20px;
            left: 20px;
            color: white;
            font-size: 24px;
            opacity: 0;
            transition: all 0.5s ease;
            z-index: 1;
        }

        .slider-img .details {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: all 0.5s ease;
        }

        .slider-img.active {
            opacity: 1;
            transform: scale(1);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
        }

        .slider-img.active h1 {
            opacity: 1;
        }

        .slider-img:hover .details {
            opacity: 1;
        }

        .slider-controls {
            position: absolute;
            bottom: 30px;
            left: 0;
            right: 0;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .slider-controls button {
            background: transparent;
            border: 2px solid white;
            color: white;
            padding: 10px 20px;
            border-radius: 30px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .slider-controls button:hover {
            background: white;
            color: black;
        }

        .slider-dots {
            display: flex;
            gap: 8px;
            margin-top: 20px;
        }

        .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .dot.active {
            background: white;
            transform: scale(1.3);
        }

        .spoon-icon {
            width: 24px;
            height: 24px;
            margin-right: 8px;
            display: inline-block;
            vertical-align: middle;
        }

        .favorite-spoon {
            background: rgba(255, 255, 255, 0.1);
            padding: 6px 12px;
            border-radius: 20px;
            margin-top: 8px;
            font-size: 14px;
            display: flex;
            align-items: center;
        }

        .spoon-collection {
            position: absolute;
            bottom: 80px;
            left: 0;
            right: 0;
            text-align: center;
        }

        .spoon-collection img {
            display: inline-block;
            height: 40px;
            margin: 0 5px;
            filter: drop-shadow(0 0 5px rgba(255, 255, 255, 0.7));
            transition: all 0.3s ease;
        }

        .spoon-collection img:hover {
            transform: rotate(30deg) scale(1.2);
        }

        @media (max-width: 768px) {
            .slider-img {
                height: 350px;
                width: 250px;
            }
        }
    </style>
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

        .gallery-section {
            padding: 3rem 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 2rem;
            color: var(--primary-color);
            font-size: 2rem;
            position: relative;
        }

        .section-title:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background-color: var(--secondary-color);
        }

        .main-slider {
            margin-bottom: 1.5rem;
            box-shadow: var(--shadow);
            border-radius: 8px;
            overflow: hidden;
        }

        .main-slider .slide {
            position: relative;
            height: 500px;
        }

        .main-slider img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .slide-info {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
            color: white;
            padding: 1.5rem;
        }

        .slide-info h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .nav-slider .slide {
            height: 100px;
            margin: 0 10px;
            cursor: pointer;
            border-radius: 4px;
            overflow: hidden;
            opacity: 0.6;
            transition: all 0.3s ease;
        }

        .nav-slider .slide:hover,
        .nav-slider .slick-current .slide {
            opacity: 1;
            transform: scale(1.05);
        }

        .nav-slider img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .gallery-categories {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin: 2rem 0;
        }

        .category-btn {
            background-color: var(--white);
            border: 1px solid var(--primary-color);
            color: var(--primary-color);
            padding: 0.5rem 1rem;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .category-btn:hover,
        .category-btn.active {
            background-color: var(--primary-color);
            color: var(--white);
        }

        .slick-prev, .slick-next {
            z-index: 1;
            width: 40px;
            height: 40px;
        }

        .slick-prev {
            left: 15px;
        }

        .slick-next {
            right: 15px;
        }

        .slick-prev:before, .slick-next:before {
            font-size: 30px;
        }

        @media (max-width: 768px) {
            .main-slider .slide {
                height: 350px;
            }

            .nav-slider .slide {
                height: 70px;
            }

            .header-content {
                flex-direction: column;
                gap: 1rem;
            }

            nav ul {
                gap: 1rem;
            }
        }
    </style>
</head>
<body class="font-sans bg-gray-100">
    <!-- Navigation -->
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

    <!-- Hero Section -->
    <section class="bg-blue-900 text-white text-center py-20">
        <h1 class="text-5xl font-bold">Turin Akademik litseyiga xush kelibsiz!</h1>
        <p class="text-lg mt-4">Turin litseyi innovatsiya ta'limning mukammalligiga javob beradi</p>
    </section>

    <!-- Statistics Section -->
    <section class="container mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-md stat-box text-center">
            <h2 class="text-4xl font-bold text-blue-900">422+</h2>
            <p class="text-gray-600">Litsey Tahsil Oladigan O'qituvchilar</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md stat-box text-center">
            <h2 class="text-4xl font-bold text-blue-900">37+</h2>
            <p class="text-gray-600">Malakali O'qituvchilar</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md stat-box text-center">
            <h2 class="text-4xl font-bold text-blue-900">100%</h2>
            <p class="text-gray-600">Bitiruv Darajasi</p>
        </div>
    </section>

    <!-- Latest News Section -->
    <section class="container mx-auto px-6 py-12">
        <h2 class="text-3xl font-bold text-center text-blue-900 mb-6">Oxirgi Yangiliklar</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <h3 class="text-xl font-semibold">Yangi Ilmiy Laboratoriya Ochilishi</h3>
                <p class="text-gray-600 mt-2">Bizning zamonaviy ilmiy laboratoriyamiz endi talabalar uchun ochiq.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <h3 class="text-xl font-semibold">Yangi o‘quv yili uchun qabul ochiq</h3>
                <p class="text-gray-600 mt-2">Biz bilan birga bilim olishingiz uchun hoziroq ro‘yxatdan o‘ting va kelajak sari birinchi qadamni qo‘ying.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                <h3 class="text-xl font-semibold">Yangi ilgi Sport Kuni</h3>
                <p class="text-gray-600 mt-2">Qiziqarli sport kuni tadbir uchun bizga qo'shiling.</p>
            </div>
        </div>
    </section>

    <!-- Team Slider Section -->

    <section class="slider-container bg-gradient-to-br from-blue-900 to-indigo-900">
        <div class="slider-images">
            <!-- Team Member 1 -->
            @foreach ($sliders as $slider)
            <div class="slider-img active">
                <img src="{{ asset('storage/' . $slider->image) }}" alt="Faculty member 1">
                <div class="details">
                    <h2 class="text-2xl font-bold mb-2">{{ $slider->title }}</h2>
                    <p class="text-sm text-center px-4">{{ $slider->description }}</p>
                </div>
            </div>
            @endforeach
        </div>

        <div class="slider-controls">
            <button id="prev-btn">Orqaga</button>
            <div class="slider-dots">
                <!-- Dots will be added by JavaScript -->
            </div>
            <button id="next-btn">Keyingisi</button>
        </div>
    </section>

    <!-- Spoon Collection Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center text-blue-900">Turin Akademik Litseyi Ta’lim Koleksiyasi</h2>
            <p class="text-center mb-12 max-w-2xl mx-auto text-gray-600">
                Bizning o‘qituvchilarimiz faqat bilim beruvchilar emas — ular innovatorlar, murabbiylar va umrboqiy o‘rganuvchilardir.
                Har biri o‘zining akademik bilimlari, amaliy tajribasi va talaba muvaffaqiyatiga bo‘lgan ishtiyoqi bilan ajralib turadi.
                Ularning hamkorlik ruhi va a’lo darajadagi mehnati bilim rivojlanadigan, ijodiy fikrlash rag‘batlantiriladigan,
                har bir talabaga o‘z imkoniyatlarini to‘liq ro‘yobga chiqarishga ko‘mak beradigan muhit yaratadi.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-4 text-blue-900">Matematika Qoshiqchasi</h3>
                    <p class="mb-4 text-gray-600">
                        Ushbu oltin qoshiqchacha aniqlik va mantiq ramzidir, matematiklarimiz tomonidan talabalarda tahliliy fikrlashni ilhomlantirish uchun ishlatiladi.
                    </p>
                    <div class="flex justify-center">
                        <svg height="80" viewBox="0 0 24 24" fill="gold" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.5 2C13 2 11 3.5 11 6.5C11 8.5 12 10.8 14 12L12.5 22H15.5L17 12C19 10.8 20 8.5 20 6.5C20 3.5 18 2 15.5 2Z"/>
                        </svg>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-4 text-blue-900">Fan Qoshiqchasi</h3>
                    <p class="mb-4 text-gray-600">
                        Ushbu yashil qoshiqchacha o‘sish va kashfiyot ramzidir, olimlarimiz laboratoriyada qiziquvchanlikni uyg‘otish uchun foydalanadi.
                    </p>
                    <div class="flex justify-center">
                        <svg height="80" viewBox="0 0 24 24" fill="#00FF00" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.5 2C13 2 11 3.5 11 6.5C11 8.5 12 10.8 14 12L12.5 22H15.5L17 12C19 10.8 20 8.5 20 6.5C20 3.5 18 2 15.5 2Z"/>
                        </svg>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-4 text-blue-900">Adabiyot Qoshiqchasi</h3>
                    <p class="mb-4 text-gray-600">
                        Ushbu pushti qoshiqchacha ijodkorlik va ifodaning ramzidir, adabiyot o‘qituvchilarimiz talabalarda tasavvur kuchini uyg‘otadi.
                    </p>
                    <div class="flex justify-center">
                        <svg height="80" viewBox="0 0 24 24" fill="#FF69B4" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.5 2C13 2 11 3.5 11 6.5C11 8.5 12 10.8 14 12L12.5 22H15.5L17 12C19 10.8 20 8.5 20 6.5C20 3.5 18 2 15.5 2Z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <!-- Footer with improved design -->
    <!-- Enhanced Footer -->
    <footer id="contact" class="bg-gradient-to-b from-turin-dark to-gray-900 text-white py-16">
        <!-- Top Footer Section with Logo and Quick Info -->
        <div class="container mx-auto px-6 mb-10">
            <div class="flex flex-col md:flex-row items-center justify-between border-b border-gray-700 pb-10">
                <!-- Logo Section -->
                <div class="flex items-center mb-6 md:mb-0">
                    <div class="mr-6">
                        <div class="w-16 h-16 rounded-full border-2 border-white flex items-center justify-center bg-white bg-opacity-10 backdrop-blur-sm">
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
                            <a href="tel:+13125550123" class="text-white hover:text-unipix-light transition-colors duration-300">(+99871) 246-23-31</a>
                        </div>
                    </div>

                    <div class="flex items-center bg-white bg-opacity-10 rounded-lg px-4 py-3">
                        <div class="bg-unipix-light p-2 rounded-full mr-3">
                            <i class="fas fa-envelope text-white"></i>
                        </div>
                        <div>
                            <div class="text-gray-400 text-xs">Email</div>
                            <a href="mailto:info@unipix.edu" class="text-white hover:text-unipix-light transition-colors duration-300">info@turinal.uz</a>
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
                    Turin akademik litseyi O'zbekiston va Italiya hamkorligidagi nufuzli ta'lim muassasasi bo'lib, zamonaviy ta'lim va innovatsion yondashuvlarga asoslangan.
                </p>
                <div class="flex space-x-3 mt-4">
                    <a href="#" class="w-10 h-10 rounded-full bg-white bg-opacity-10 flex items-center justify-center hover:bg-unipix-light transition-colors duration-300">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-white bg-opacity-10 flex items-center justify-center hover:bg-unipix-light transition-colors duration-300">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-white bg-opacity-10 flex items-center justify-center hover:bg-unipix-light transition-colors duration-300">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-white bg-opacity-10 flex items-center justify-center hover:bg-unipix-light transition-colors duration-300">
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
                        <a href="#" class="flex items-center text-gray-300 hover:text-white transition-colors duration-300 group">
                            <span class="w-2 h-2 bg-unipix-light rounded-full mr-3 group-hover:w-3 transition-all duration-300"></span>
                            Kompyuter texnologiyalari va muhandislik
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center text-gray-300 hover:text-white transition-colors duration-300 group">
                            <span class="w-2 h-2 bg-unipix-light rounded-full mr-3 group-hover:w-3 transition-all duration-300"></span>
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
                    Turin Politexnika Universitetining Toshkent shahridagi filiali haqida yangiliklar, tadbirlar va e’lonnardan xabardor bo‘lish uchun obuna bo‘ling.
                </p>
                <div class="flex justify-between items-center">
                    <p class="text-gray-400 text-sm">
                        <i class="fas fa-headset mr-2 text-unipix-light"></i> Yordam xizmati: 24/7 faol
                    </p>
                    <a href="tel:+998712462331" class="bg-unipix-light text-white px-4 py-2 rounded-lg hover:bg-unipix-blue transition-colors duration-300">
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
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300 text-sm">Maxfiylik siyosati</a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300 text-sm">Foydalanish shartlari</a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300 text-sm">Cookie siyosati</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript for menu toggle -->
    <script>
        $(document).ready(function() {
            $('#menuToggle').click(function() {
                $('#mainMenu').toggleClass('show');
                $(this).toggleClass('active');
            });
        });
    </script>

    <!-- JavaScript for Slider -->
    <script>
        jQuery(document).ready(function($) {
            console.log("jQuery working!");

            // Slider functionality
            const $sliderImages = $('.slider-images');
            const $slides = $('.slider-img');
            const $prevBtn = $('#prev-btn');
            const $nextBtn = $('#next-btn');
            const slideWidth = $slides.first().outerWidth(true); // Including margins
            const totalSlides = $slides.length;
            let currentIndex = 0;

            // Dynamically add dots based on the number of slides
            for (let i = 0; i < totalSlides; i++) {
                $('.slider-dots').append(`<span class="dot ${i === 0 ? 'active' : ''}" data-index="${i}"></span>`);
            }


            const $dots = $('.dot');

            // Function to update slider position and active states
            function updateSlider() {
                $sliderImages.css('transform', `translateX(-${currentIndex * slideWidth}px)`);
                $slides.removeClass('active');
                $slides.eq(currentIndex).addClass('active');
                $dots.removeClass('active').eq(currentIndex).addClass('active');
            }

            // Next button click handler
            $nextBtn.on('click', function() {
                if (currentIndex < totalSlides - 1) {
                    currentIndex++;
                } else {
                    currentIndex = 0; // Loop back to the first slide
                }
                updateSlider();
            });

            // Previous button click handler
            $prevBtn.on('click', function() {
                if (currentIndex > 0) {
                    currentIndex--;
                } else {
                    currentIndex = totalSlides - 1; // Loop to the last slide
                }
                updateSlider();
            });

            // Dot click handler
            $dots.on('click', function() {
                currentIndex = parseInt($(this).data('index'));
                updateSlider();
            });

            // Auto-slide every 5 seconds
            setInterval(function() {
                if (currentIndex < totalSlides - 1) {
                    currentIndex++;
                } else {
                    currentIndex = 0;
                }
                updateSlider();
            }, 5000);

            // Initial update
            updateSlider();
        });
    </script>
    <script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'922f25ba8e57d684',t:'MTc0MjQxMDE0MS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script>
</body>
</html>
