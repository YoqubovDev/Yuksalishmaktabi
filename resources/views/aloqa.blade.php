<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turin Akademik Litsey</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'university-blue': '#161179',
                        'dark-blue': '#003366',
                        'light-blue': '#005599',
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #161179;
            --secondary-color: #1a6cb4;
            --accent-color: #16A34A;
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
            font-family: 'Poppins', sans-serif;
            background-color: var(--light-bg);
            color: var(--text-color);
        }

        /* Enhanced Header Styles */
        header {
            background-color: var(--primary-color);
            color: var(--white);
            padding: 0;
            box-shadow: var(--shadow);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header-container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.75rem 0;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 1rem;
            transition: transform 0.3s ease;
        }

        .logo:hover {
            transform: scale(1.03);
        }

        .logo img {
            height: 60px;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.2));
        }

        .logo-text {
            font-size: 1.5rem;
            font-weight: bold;
            letter-spacing: 0.5px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
        }

        /* Enhanced Navigation */
        nav {
            display: flex;
            align-items: center;
        }

        nav ul {
            display: flex;
            gap: 1.5rem;
            list-style: none;
        }

        nav li {
            position: relative;
        }

        nav a {
            color: var(--white);
            text-decoration: none;
            font-weight: 500;
            padding: 0.75rem 0.5rem;
            display: block;
            position: relative;
            transition: all 0.3s ease;
        }

        nav a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--accent-color);
            transition: width 0.3s ease;
        }

        nav a:hover {
            color: #b8d8ff;
        }

        nav a:hover::after {
            width: 100%;
        }

        /* Active nav item */
        nav a.active::after {
            width: 100%;
            background-color: var(--accent-color);
        }

        .lang-switcher {
            display: flex;
            gap: 0.5rem;
            margin-left: 1.5rem;
        }

        .lang-switcher a {
            color: var(--white);
            text-decoration: none;
            font-size: 0.9rem;
            padding: 0.3rem 0.6rem;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .lang-switcher a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        /* Mobile menu toggle */
        .menu-toggle {
            display: none;
            flex-direction: column;
            justify-content: space-between;
            width: 30px;
            height: 21px;
            cursor: pointer;
        }

        .menu-toggle span {
            display: block;
            height: 3px;
            width: 100%;
            background-color: white;
            border-radius: 3px;
            transition: all 0.3s ease;
        }

        /* Responsive adjustments */
        @media (max-width: 1024px) {
            nav ul {
                gap: 1rem;
            }

            .logo-text {
                font-size: 1.2rem;
            }
        }

        @media (max-width: 768px) {
            .menu-toggle {
                display: flex;
            }

            nav ul {
                position: absolute;
                flex-direction: column;
                background-color: var(--primary-color);
                width: 100%;
                top: 100%;
                left: 0;
                padding: 1rem 0;
                box-shadow: 0 10px 15px rgba(0,0,0,0.1);
                transform: translateY(-100%);
                opacity: 0;
                pointer-events: none;
                transition: all 0.3s ease;
                z-index: 1000;
            }

            nav ul.show {
                transform: translateY(0);
                opacity: 1;
                pointer-events: auto;
            }

            nav li {
                width: 100%;
                text-align: center;
            }

            nav a {
                padding: 1rem;
            }

            .lang-switcher {
                margin: 0;
                justify-content: center;
                padding: 1rem 0;
            }
        }

        /* Contact page styles */
        .contact-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .social-icon {
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .social-icon:hover {
            transform: translateY(-3px);
        }

        .map-container {
            position: relative;
            border-radius: 0.5rem;
            overflow: hidden;
            height: 400px;
            border: 4px solid white;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .map-container:hover {
            transform: scale(1.01);
        }

        /* Enhanced Footer Styles */
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
</head>
<body class="bg-gray-50">
<!-- Enhanced Header -->
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

<!-- Breadcrumb with enhanced styling -->
<div class="bg-white border-b py-4 shadow-sm">
    <div class="container mx-auto px-4">
        <div class="flex items-center text-gray-600">
            <a href="#" class="hover:text-university-blue transition-colors duration-300">
                <i class="fas fa-home mr-2"></i>Asosiy
            </a>
            <span class="mx-2 text-gray-400">/</span>
            <span class="text-university-blue font-medium">Aloqa</span>
        </div>
    </div>
</div>

<!-- Enhanced Main content -->
<main class="container mx-auto px-4 py-12">
    <div class="mb-10 text-center">
        <h1 class="text-4xl font-bold text-dark-blue mb-4">Biz bilan bog'laning</h1>
        <p class="text-gray-600 max-w-2xl mx-auto">Turin akademik litseyi bilan bog'lanish uchun quyidagi ma'lumotlardan foydalanishingiz mumkin</p>
        <div class="w-24 h-1 bg-university-blue mx-auto mt-4"></div>
    </div>

    <div class="bg-white rounded-xl shadow-elegant p-8 flex flex-col md:flex-row">
        <!-- Contact information with enhanced design -->
        <div class="md:w-1/2 mb-8 md:mb-0 md:pr-8">
            <h2 class="text-2xl font-bold text-dark-blue mb-8 relative inline-block">
                Bog'lanish ma'lumotlari
                <span class="absolute bottom-0 left-0 h-1 w-full bg-university-blue"></span>
            </h2>
            <p class="text-blue-600 font-medium">{{$contact}}</p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="contact-card bg-gray-50 rounded-lg p-6 shadow-sm">
                    <div class="w-12 h-12 bg-university-blue rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-map-marker-alt text-white text-xl"></i>
                    </div>
                    <h3 class="font-bold text-lg text-university-blue mb-2">Manzil:</h3>
                    <p class="text-gray-700">
                        O'zbekiston, Toshkent, Olmazor tumani, Umid ko'chasi 1A.
                    </p>
                </div>

                <div class="contact-card bg-gray-50 rounded-lg p-6 shadow-sm">
                    <div class="w-12 h-12 bg-university-blue rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-phone-alt text-white text-xl"></i>
                    </div>
                    <h3 class="font-bold text-lg text-university-blue mb-2">Telefon:</h3>
                    <p class="text-gray-700">(+99871) 246-23-31</p>
                    <p class="text-gray-700">Fax: (+99871) 246-23-31</p>
                </div>

                <div class="contact-card bg-gray-50 rounded-lg p-6 shadow-sm">
                    <div class="w-12 h-12 bg-university-blue rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-envelope text-white text-xl"></i>
                    </div>
                    <h3 class="font-bold text-lg text-university-blue mb-2">Email:</h3>
                    <p class="text-gray-700">
                        <a href="mailto:turinlitsey@polito.uz" class="text-blue-600 hover:underline">turinlitsey@polito.uz</a>
                    </p>
                </div>

                <div class="contact-card bg-gray-50 rounded-lg p-6 shadow-sm">
                    <div class="w-12 h-12 bg-university-blue rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-clock text-white text-xl"></i>
                    </div>
                    <h3 class="font-bold text-lg text-university-blue mb-2">Ish vaqti:</h3>
                    <p class="text-gray-700">
                        Dushanba - shanba (09:00 - 18:00)<br>
                        Tushlik vaqti: 13:00 - 14:00
                    </p>
                </div>
            </div>

            <div class="contact-card bg-gray-50 rounded-lg p-6 shadow-sm mt-6">
                <div class="w-12 h-12 bg-university-blue rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-bus text-white text-xl"></i>
                </div>
                <h3 class="font-bold text-lg text-university-blue mb-2">Transport:</h3>
                <p class="text-gray-700">
                    Avtobus: 88, 124 <br>
                    Marshut: M90 <br>
                    Bekat: Olmazor tumani hokimligi, 123
                </p>
            </div>

            <div class="mt-10">
                <h3 class="font-bold text-lg text-university-blue mb-4">Ijtimoiy tarmoqlar:</h3>
                <div class="flex space-x-4">
                    <a href="#" class="social-icon bg-blue-500 hover:bg-blue-600 text-white rounded-full w-12 h-12 flex items-center justify-center transition">
                        <i class="fab fa-telegram text-lg"></i>
                    </a>
                    <a href="#" class="social-icon bg-blue-600 hover:bg-blue-700 text-white rounded-full w-12 h-12 flex items-center justify-center transition">
                        <i class="fab fa-facebook-f text-lg"></i>
                    </a>
                    <a href="#" class="social-icon bg-red-600 hover:bg-red-700 text-white rounded-full w-12 h-12 flex items-center justify-center transition">
                        <i class="fab fa-youtube text-lg"></i>
                    </a>
                    <a href="#" class="social-icon bg-pink-600 hover:bg-pink-700 text-white rounded-full w-12 h-12 flex items-center justify-center transition">
                        <i class="fab fa-instagram text-lg"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Map with Google Maps embed -->
        <div class="md:w-1/2">
            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1497.5190681556148!2d69.224164!3d41.3515248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8c690928b343%3A0x95b56aea31384f98!2sAcademic%20Lyceum%20under%20Turin%20Polytechnic%20University!5e0!3m2!1sru!2s!4v1742761236770!5m2!1sru!2s"
                    width="100%"
                    height="100%"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <div class="mt-6 bg-gray-50 rounded-lg p-6 shadow-sm">
                <div class="flex flex-col md:flex-row md:justify-between items-start md:items-center">
                    <div class="flex items-center mb-4 md:mb-0">
                        <div class="bg-white shadow-md rounded-lg px-3 py-1 flex items-center mr-4">
                            <span class="text-yellow-500 mr-1">★</span>
                            <span class="font-bold">4.8</span>
                        </div>
                        <a href="#" class="text-blue-500 hover:underline text-sm">O'quvchilar bahosi (122 ta)</a>
                    </div>
                    <a href="https://goo.gl/maps/YourSpecificMapLink" target="_blank" class="text-white bg-university-blue hover:bg-blue-700 transition-colors duration-300 px-4 py-2 rounded-lg text-sm font-medium flex items-center">
                        <i class="fas fa-map-marked-alt mr-2"></i> Google Maps-da ko'rish
                    </a>
                </div>
            </div>

            <!-- Contact Form -->
        </div>
    </div>
</main>

<!-- Enhanced Footer -->
<footer class="footer">
    <div class="footer-top">
        <div class="container mx-auto px-6">
            <!-- Top Footer Section -->
            <div class="flex flex-col md:flex-row justify-between items-start mb-12 pb-12 border-b border-gray-700">
                <!-- Logo and Description -->
                <div class="mb-10 md:mb-0 md:w-1/3 pr-6">
                    <div class="footer-logo">
                        <div class="footer-logo-circle">
                            <span class="text-university-blue text-2xl font-bold">T</span>
                        </div>
                        <div>
                            <div class="text-2xl font-bold">TURIN</div>
                            <div class="text-sm text-gray-300">ACADEMIC LYCEUM</div>
                        </div>
                    </div>
                    <p class="text-gray-300 mb-6">
                        Turin akademik litseyi O'zbekiston va Italiya hamkorligidagi nufuzli ta'lim muassasasi bo'lib, zamonaviy ta'lim va innovatsion yondashuvlarga asoslangan.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-white bg-opacity-10 flex items-center justify-center hover:bg-university-blue transition-all duration-300">
                            <i class="fab fa-telegram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white bg-opacity-10 flex items-center justify-center hover:bg-university-blue transition-all duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white bg-opacity-10 flex items-center justify-center hover:bg-university-blue transition-all duration-300">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white bg-opacity-10 flex items-center justify-center hover:bg-university-blue transition-all duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Contact -->
                <div class="mb-10 md:mb-0 md:w-1/3">
                    <h3 class="footer-heading text-xl font-bold">Tezkor aloqa</h3>
                    <div class="space-y-6">
                        <div class="flex items-center">
                            <div class="bg-university-blue p-3 rounded-full mr-4">
                                <i class="fas fa-map-marker-alt text-white"></i>
                            </div>
                            <div>
                                <div class="text-gray-400 text-sm">Manzil</div>
                                <div class="text-white">O'zbekiston, Toshkent, Olmazor tumani, Umid ko'chasi 1A</div>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="bg-university-blue p-3 rounded-full mr-4">
                                <i class="fas fa-phone-alt text-white"></i>
                            </div>
                            <div>
                                <div class="text-gray-400 text-sm">Telefon</div>
                                <div class="text-white">(+99871) 246-23-31</div>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="bg-university-blue p-3 rounded-full mr-4">
                                <i class="fas fa-envelope text-white"></i>
                            </div>
                            <div>
                                <div class="text-gray-400 text-sm">Email</div>
                                <a href="mailto:turinlitsey@polito.uz" class="text-white hover:text-blue-300 transition-colors duration-300">turinlitsey@polito.uz</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="md:w-1/3">
                    <h3 class="footer-heading text-xl font-bold">Foydali havolalar</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <a href="#" class="footer-nav-item text-gray-300 hover:text-white transition-colors duration-300">
                            <i class="fas fa-chevron-right"></i> Asosiy sahifa
                        </a>
                        <a href="#" class="footer-nav-item text-gray-300 hover:text-white transition-colors duration-300">
                            <i class="fas fa-chevron-right"></i> Litsey haqida
                        </a>
                        <a href="#" class="footer-nav-item text-gray-300 hover:text-white transition-colors duration-300">
                            <i class="fas fa-chevron-right"></i> Yangiliklar
                        </a>
                        <a href="#" class="footer-nav-item text-gray-300 hover:text-white transition-colors duration-300">
                            <i class="fas fa-chevron-right"></i> Dars jarayonlari
                        </a>
                        <a href="#" class="footer-nav-item text-gray-300 hover:text-white transition-colors duration-300">
                            <i class="fas fa-chevron-right"></i> Yutuqlar
                        </a>
                        <a href="#" class="footer-nav-item text-gray-300 hover:text-white transition-colors duration-300">
                            <i class="fas fa-chevron-right"></i> Qabul
                        </a>
                        <a href="#" class="footer-nav-item text-gray-300 hover:text-white transition-colors duration-300">
                            <i class="fas fa-chevron-right"></i> O'qituvchilar
                        </a>
                        <a href="#" class="footer-nav-item text-gray-300 hover:text-white transition-colors duration-300">
                            <i class="fas fa-chevron-right"></i> Aloqa
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <p class="text-gray-300">&copy; 2025 Turin Academic Lyceum. Barcha huquqlar himoyalangan.</p>
                </div>
                <div class="flex items-center">
                    <a href="#" class="text-gray-300 hover:text-white mr-4 transition-colors duration-300">Maxfiylik siyosati</a>
                    <a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Foydalanish shartlari</a>
                </div>
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
</body>
</html>
