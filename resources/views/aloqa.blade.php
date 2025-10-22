<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jizzax Shahar Yuksalish Maktabi - Aloqa</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

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
                    }
                }
            }
        }
    </script>

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
            height: 450px;
            border: 4px solid white;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .map-container:hover {
            transform: scale(1.01);
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

        @media (max-width: 768px) {
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
<body class="bg-gray-50">
<!-- Header -->
<header>
    <div class="header-container">
        <div class="header-content">
            <div class="logo">
                <img src="/image/turin-al-logo.png" alt="Turin Academic Lyceum Logo">
                <div class="logo-text">Jizzax Shahar Yuksalish Maktabi</div>
            </div>
            <nav>
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('about')}}">Litsey haqida</a></li>
                    <li><a href="{{route('teachers')}}">O'qituvchilar</a></li>
                    <li><a href="{{route('subject')}}">Dars jarayonlari</a></li>
                    <li><a href="{{route('achievements')}}">Yutuqlar</a></li>
                    <li><a href="{{route('contact')}}" class="active">Aloqa</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<!-- Breadcrumb -->
<div class="bg-white border-b py-4 shadow-sm">
    <div class="container mx-auto px-4">
        <div class="flex items-center text-gray-600">
            <a href="{{route('home')}}" class="hover:text-university-blue transition-colors duration-300">
                <i class="fas fa-home mr-2"></i>Asosiy
            </a>
            <span class="mx-2 text-gray-400">/</span>
            <span class="text-university-blue font-medium">Aloqa</span>
        </div>
    </div>
</div>

<!-- Main Content -->
<main class="container mx-auto px-4 py-12">
    <div class="mb-10 text-center">
        <h1 class="text-4xl font-bold text-dark-blue mb-4">Biz bilan bog'laning</h1>
        <p class="text-gray-600 max-w-2xl mx-auto">Turin akademik litseyi bilan bog'lanish uchun quyidagi ma'lumotlardan foydalanishingiz mumkin</p>
        <div class="w-24 h-1 bg-university-blue mx-auto mt-4"></div>
    </div>

    @if(isset($contact) && $contact)
        <div class="bg-white rounded-xl shadow-lg p-8 flex flex-col lg:flex-row gap-8">
            <!-- Contact Information -->
            <div class="lg:w-1/2">
                <h2 class="text-2xl font-bold text-dark-blue mb-8 relative inline-block">
                    Bog'lanish ma'lumotlari
                    <span class="absolute bottom-0 left-0 h-1 w-full bg-university-blue"></span>
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Address Card -->
                    <div class="contact-card bg-gray-50 rounded-lg p-6 shadow-sm">
                        <div class="w-12 h-12 bg-university-blue rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-map-marker-alt text-white text-xl"></i>
                        </div>
                        <h3 class="font-bold text-lg text-university-blue mb-2">Manzil:</h3>
                        <p class="text-gray-700">{{ $contact->address ?? 'Ma\'lumot kiritilmagan' }}</p>
                    </div>

                    <!-- Phone Card -->
                    <div class="contact-card bg-gray-50 rounded-lg p-6 shadow-sm">
                        <div class="w-12 h-12 bg-university-blue rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-phone-alt text-white text-xl"></i>
                        </div>
                        <h3 class="font-bold text-lg text-university-blue mb-2">Telefon:</h3>
                        <p class="text-gray-700">
                            @if($contact->phone)
                                <a href="tel:+998{{ $contact->phone }}" class="hover:text-university-blue">(+998) {{ $contact->phone }}</a>
                            @else
                                Ma'lumot kiritilmagan
                            @endif
                        </p>
                        @if($contact->fax)
                            <p class="text-gray-700 mt-1">Fax: (+998) {{ $contact->fax }}</p>
                        @endif
                    </div>

                    <!-- Email Card -->
                    <div class="contact-card bg-gray-50 rounded-lg p-6 shadow-sm">
                        <div class="w-12 h-12 bg-university-blue rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-envelope text-white text-xl"></i>
                        </div>
                        <h3 class="font-bold text-lg text-university-blue mb-2">Email:</h3>
                        <p class="text-gray-700">
                            @if($contact->email)
                                <a href="mailto:{{ $contact->email }}" class="text-blue-600 hover:underline">{{ $contact->email }}</a>
                            @else
                                Ma'lumot kiritilmagan
                            @endif
                        </p>
                    </div>

                    <!-- Work Time Card -->
                    <div class="contact-card bg-gray-50 rounded-lg p-6 shadow-sm">
                        <div class="w-12 h-12 bg-university-blue rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-clock text-white text-xl"></i>
                        </div>
                        <h3 class="font-bold text-lg text-university-blue mb-2">Ish vaqti:</h3>
                        <p class="text-gray-700">
                            Dushanba - Shanba<br>
                            {{ $contact->work_time ?? 'Ma\'lumot kiritilmagan' }}
                        </p>
                        @if($contact->lunch_time)
                            <p class="text-gray-700 mt-2">Tushlik vaqti: {{ $contact->lunch_time }}</p>
                        @endif
                    </div>
                </div>

                <!-- Transport Card -->
                @if($contact->bus || $contact->marshrut)
                    <div class="contact-card bg-gray-50 rounded-lg p-6 shadow-sm mt-6">
                        <div class="w-12 h-12 bg-university-blue rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-bus text-white text-xl"></i>
                        </div>
                        <h3 class="font-bold text-lg text-university-blue mb-2">Transport:</h3>
                        <p class="text-gray-700">
                            @if($contact->bus)
                                Avtobus: {{ $contact->bus }}<br>
                            @endif
                            @if($contact->marshrut)
                                Marshut: {{ $contact->marshrut }}<br>
                            @endif
                            @if($contact->stop)
                                Bekat: {{ $contact->stop }}
                            @else
                                Bekat: Yuksalish bekari
                            @endif
                        </p>
                    </div>
                @endif

                <!-- Social Media -->
                <div class="mt-10">
                    <h3 class="font-bold text-lg text-university-blue mb-4">Ijtimoiy tarmoqlar:</h3>
                    <div class="flex flex-wrap gap-4">
                        @if($contact->telegram)
                            <a href="{{ $contact->telegram }}" target="_blank" class="social-icon bg-blue-500 hover:bg-blue-600 text-white rounded-full w-12 h-12 flex items-center justify-center transition">
                                <i class="fab fa-telegram text-lg"></i>
                            </a>
                        @endif

                        @if($contact->facebook)
                            <a href="{{ $contact->facebook }}" target="_blank" class="social-icon bg-blue-600 hover:bg-blue-700 text-white rounded-full w-12 h-12 flex items-center justify-center transition">
                                <i class="fab fa-facebook-f text-lg"></i>
                            </a>
                        @endif

                        @if($contact->youtube)
                            <a href="{{ $contact->youtube }}" target="_blank" class="social-icon bg-red-600 hover:bg-red-700 text-white rounded-full w-12 h-12 flex items-center justify-center transition">
                                <i class="fab fa-youtube text-lg"></i>
                            </a>
                        @endif

                        @if($contact->instagram)
                            <a href="{{ $contact->instagram }}" target="_blank" class="social-icon bg-pink-600 hover:bg-pink-700 text-white rounded-full w-12 h-12 flex items-center justify-center transition">
                                <i class="fab fa-instagram text-lg"></i>
                            </a>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Map Section -->
            <div class="lg:w-1/2">
                <div class="map-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2996.7583976822157!2d69.24009631541753!3d41.311158179271494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b9a0a33281d%3A0x9c5015eab678e435!2sTashkent%2C%20Uzbekistan!5e0!3m2!1sen!2s!4v1234567890123"
                        width="100%"
                        height="450"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                <div class="mt-6 bg-gray-50 rounded-lg p-6 shadow-sm">
                    <div class="flex flex-col md:flex-row md:justify-between items-start md:items-center gap-4">
                        <div class="flex items-center">
                            <div class="bg-white shadow-md rounded-lg px-3 py-1 flex items-center mr-4">
                                <span class="text-yellow-500 mr-1">★</span>
                                <span class="font-bold">{{ $contact->rating ?? '4.8' }}</span>
                            </div>
                            <span class="text-gray-600 text-sm">O'quvchilar bahosi ({{ $contact->reviews_count ?? 0 }} ta)</span>
                        </div>
                        @if($contact->map_link)
                            <a href="{{ $contact->map_link }}" target="_blank" class="text-white bg-university-blue hover:bg-blue-700 transition-colors duration-300 px-4 py-2 rounded-lg text-sm font-medium flex items-center">
                                <i class="fas fa-map-marked-alt mr-2"></i> Google Maps-da ko'rish
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="bg-white rounded-xl shadow-lg p-12 text-center">
            <div class="max-w-md mx-auto">
                <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-exclamation-triangle text-4xl text-gray-400"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-700 mb-4">Aloqa ma'lumotlari topilmadi</h2>
                <p class="text-gray-600 mb-6">Iltimos, admin panel orqali aloqa ma'lumotlarini kiriting</p>
                <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 text-left">
                    <p class="text-sm text-blue-800 mb-2"><strong>Qanday qilish kerak:</strong></p>
                    <ol class="text-sm text-blue-700 list-decimal list-inside space-y-1">
                        <li>Admin panelga kiring</li>
                        <li>Contacts bo'limiga o'ting</li>
                        <li>Yangi contact ma'lumotlarini kiriting</li>
                    </ol>
                </div>
            </div>
        </div>
    @endif
</main>

<!-- Footer -->
{{--<footer class="footer">--}}
{{--    <div class="footer-top">--}}
{{--        <div class="container mx-auto px-6">--}}
{{--            <div class="flex flex-col md:flex-row justify-between items-start mb-12 pb-12 border-b border-gray-700">--}}
{{--                <!-- Logo and Description -->--}}
{{--                <div class="mb-10 md:mb-0 md:w-1/3 pr-6">--}}
{{--                    <div class="footer-logo">--}}
{{--                        <div class="footer-logo-circle">--}}
{{--                            <span class="text-university-blue text-2xl font-bold">T</span>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <div class="text-2xl font-bold">TURIN</div>--}}
{{--                            <div class="text-sm text-gray-300">ACADEMIC LYCEUM</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <p class="text-gray-300 mb-6">--}}
{{--                        Turin akademik litseyi O'zbekiston va Italiya hamkorligidagi nufuzli ta'lim muassasasi bo'lib, zamonaviy ta'lim va innovatsion yondashuvlarga asoslangan.--}}
{{--                    </p>--}}
{{--                    @if(isset($contact) && $contact)--}}
{{--                        <div class="flex space-x-4">--}}
{{--                            @if($contact->telegram)--}}
{{--                                <a href="{{ $contact->telegram }}" target="_blank" class="w-10 h-10 rounded-full bg-white bg-opacity-10 flex items-center justify-center hover:bg-university-blue transition-all duration-300">--}}
{{--                                    <i class="fab fa-telegram"></i>--}}
{{--                                </a>--}}
{{--                            @endif--}}
{{--                            @if($contact->facebook)--}}
{{--                                <a href="{{ $contact->facebook }}" target="_blank" class="w-10 h-10 rounded-full bg-white bg-opacity-10 flex items-center justify-center hover:bg-university-blue transition-all duration-300">--}}
{{--                                    <i class="fab fa-facebook-f"></i>--}}
{{--                                </a>--}}
{{--                            @endif--}}
{{--                            @if($contact->youtube)--}}
{{--                                <a href="{{ $contact->youtube }}" target="_blank" class="w-10 h-10 rounded-full bg-white bg-opacity-10 flex items-center justify-center hover:bg-university-blue transition-all duration-300">--}}
{{--                                    <i class="fab fa-youtube"></i>--}}
{{--                                </a>--}}
{{--                            @endif--}}
{{--                            @if($contact->instagram)--}}
{{--                                <a href="{{ $contact->instagram }}" target="_blank" class="w-10 h-10 rounded-full bg-white bg-opacity-10 flex items-center justify-center hover:bg-university-blue transition-all duration-300">--}}
{{--                                    <i class="fab fa-instagram"></i>--}}
{{--                                </a>--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                </div>--}}

{{--                <!-- Quick Contact -->--}}
{{--                @if(isset($contact) && $contact)--}}
{{--                    <div class="mb-10 md:mb-0 md:w-1/3">--}}
{{--                        <h3 class="footer-heading text-xl font-bold">Tezkor aloqa</h3>--}}
{{--                        <div class="space-y-6">--}}
{{--                            @if($contact->address)--}}
{{--                                <div class="flex items-center">--}}
{{--                                    <div class="bg-university-blue p-3 rounded-full mr-4">--}}
{{--                                        <i class="fas fa-map-marker-alt text-white"></i>--}}
{{--                                    </div>--}}
{{--                                    <div>--}}
{{--                                        <div class="text-gray-400 text-sm">Manzil</div>--}}
{{--                                        <div class="text-white">{{ $contact->address }}</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endif--}}

{{--                            @if($contact->phone)--}}
{{--                                <div class="flex items-center">--}}
{{--                                    <div class="bg-university-blue p-3 rounded-full mr-4">--}}
{{--                                        <i class="fas fa-phone-alt text-white"></i>--}}
{{--                                    </div>--}}
{{--                                    <div>--}}
{{--                                        <div class="text-gray-400 text-sm">Telefon</div>--}}
{{--                                        <div class="text-white">(+998) {{ $contact->phone }}</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endif--}}

{{--                            @if($contact->email)--}}
{{--                                <div class="flex items-center">--}}
{{--                                    <div class="bg-university-blue p-3 rounded-full mr-4">--}}
{{--                                        <i class="fas fa-envelope text-white"></i>--}}
{{--                                    </div>--}}
{{--                                    <div>--}}
{{--                                        <div class="text-gray-400 text-sm">Email</div>--}}
{{--                                        <a href="mailto:{{ $contact->email }}" class="text-white hover:text-blue-300 transition-colors duration-300">{{ $contact->email }}</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endif--}}

{{--                <!-- Quick Links -->--}}
{{--                <div class="md:w-1/3">--}}
{{--                    <h3 class="footer-heading text-xl font-bold">Foydali havolalar</h3>--}}
{{--                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">--}}
{{--                        <a href="{{route('home')}}" class="footer-nav-item text-gray-300 hover:text-white transition-colors duration-300">--}}
{{--                            <i class="fas fa-chevron-right"></i> Asosiy sahifa--}}
{{--                        </a>--}}
{{--                        <a href="{{route('about')}}" class="footer-nav-item text-gray-300 hover:text-white transition-colors duration-300">--}}
{{--                            <i class="fas fa-chevron-right"></i> Litsey haqida--}}
{{--                        </a>--}}
{{--                        <a href="{{route('teachers')}}" class="footer-nav-item text-gray-300 hover:text-white transition-colors duration-300">--}}
{{--                            <i class="fas fa-chevron-right"></i> O'qituvchilar--}}
{{--                        </a>--}}
{{--                        <a href="{{route('subject')}}" class="footer-nav-item text-gray-300 hover:text-white transition-colors duration-300">--}}
{{--                            <i class="fas fa-chevron-right"></i> Dars jarayonlari--}}
{{--                        </a>--}}
{{--                        <a href="{{route('achievements')}}" class="footer-nav-item text-gray-300 hover:text-white transition-colors duration-300">--}}
{{--                            <i class="fas fa-chevron-right"></i> Yutuqlar--}}
{{--                        </a>--}}
{{--                        <a href="{{route('contact')}}" class="footer-nav-item text-gray-300 hover:text-white transition-colors duration-300">--}}
{{--                            <i class="fas fa-chevron-right"></i> Aloqa--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <!-- Footer Bottom -->--}}
{{--    <div class="footer-bottom">--}}
{{--        <div class="container mx-auto px-6">--}}
{{--            <div class="flex flex-col md:flex-row justify-between items-center">--}}
{{--                <div class="mb-4 md:mb-0">--}}
{{--                    <p class="text-gray-300">&copy; 2025 Turin Academic Lyceum. Barcha huquqlar himoyalangan.</p>--}}
{{--                </div>--}}
{{--                <div class="flex items-center gap-4">--}}
{{--                    <a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Maxfiylik siyosati</a>--}}
{{--                    <a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Foydalanish shartlari</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</footer>--}}
<x-footer></x-footer>

</body>
</html>
