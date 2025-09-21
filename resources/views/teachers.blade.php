<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turin Akademik Litsey</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Swiper CSS -->
    <!-- Swiper CSS -->


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
            font-family: 'Poppins', sans-serif;
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

        /* Teacher slider styles */
        .teacher-slider {
            padding: 40px 0;
        }

        .teacher-slide {
            padding: 15px;
            outline: none;
        }

        .teacher-card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .teacher-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.15);
        }

        .teacher-image {
            height: 250px;
            overflow: hidden;
        }

        .teacher-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .teacher-card:hover .teacher-image img {
            transform: scale(1.05);
        }

        .teacher-info {
            padding: 20px;
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

        .slick-prev, .slick-next {
            z-index: 10;
            width: 40px;
            height: 40px;
        }

        .slick-prev {
            left: 25px;
        }

        .slick-next {
            right: 25px;
        }

        .slick-prev:before, .slick-next:before {
            font-size: 30px;
        }

        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 1rem;
            }

            nav ul {
                gap: 1rem;
                flex-wrap: wrap;
                justify-content: center;
            }
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
</head>
<body class="bg-gray-50">
    <!-- Header -->
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
            </div>
        </div>
    </header>

    <!-- Teachers Hero Section -->
    <section class="py-16 bg-gradient-to-b from-blue-900 to-blue-800">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-white mb-4">Muhtaram Ustozlarimiz</h2>
                <div class="w-24 h-1 bg-yellow-400 mx-auto mb-6"></div>
                <p class="text-blue-100 max-w-2xl mx-auto">Akademik mukammallikni va shaxsiy o'sish tomon bizning talabalarga hidoyat ko'rsatuvchi bizning maxsus fakultet a'zolari bilan tanishish</p>
            </div>
        </div>
    </section>

    <!-- Teachers Slider Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h3 class="text-3xl font-bold text-blue-900 mb-10 text-center">O‘qituvchilar jamoasi</h3>

            <div class="swiper teacherSwiper">
                <div class="swiper-wrapper">
                    @foreach($teachers as $teacher)
                        <div class="swiper-slide">
                            <div class="bg-white shadow-md rounded-2xl p-6 text-center max-w-sm mx-auto">
                                <div class="w-32 h-32 mx-auto mb-4">
                                    <img src="{{ asset('storage/' . $teacher->image) }}"
                                         class="w-full h-full object-cover rounded-full border-4 border-blue-200"
                                         alt="Teacher">
                                </div>
                                <h4 class="text-xl font-semibold text-blue-900">{{$teacher->name}}</h4>
                                <p class="text-blue-600 font-medium">{{$teacher->subject}}</p>
                                <p class="text-gray-600 text-sm mt-2">{{$teacher->bio}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Navigation buttons -->
                <div class=".swiper-button-next"></div>
                <div class=".swiper-button-prev"></div>
            </div>
        </div>
    </section>


    <!-- Teacher Statistics -->
    <section class="py-16 bg-gradient-to-b from-gray-50 to-gray-100">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-5xl font-bold text-blue-900 mb-2">37+</div>
                    <div class="text-gray-600">Asosiy O‘qituvchi</div>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-bold text-blue-900 mb-2">5+</div>
                    <div class="text-gray-600">Ilmiy darajasi bor o‘qituvchilar</div>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-bold text-blue-900 mb-2">14+</div>
                    <div class="text-gray-600">Bosh o‘qituvchi</div>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-bold text-blue-900 mb-2">4</div>
                    <div class="text-gray-600">Tashqi o‘rindosh o‘qituvchilar</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Department Information -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-blue-900 mb-4">Bo‘limlarimiz</h2>
                <div class="w-16 h-1 bg-blue-600 mx-auto mb-6"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Bo‘lim 1 -->
                @foreach($departments as $department)
                    <div class="bg-gray-50 rounded-xl p-6 shadow-md transition-all duration-300 hover:shadow-lg">
                        <div class="w-16 h-16 bg-blue-900 text-white rounded-full flex items-center justify-center mb-4 mx-auto">
                            <i class="{{ $department->icon }}"></i>
                        </div>
                        <h3 class="text-xl font-bold text-center text-blue-900 mb-3">{{ $department->name }}</h3>
                        <p class="text-gray-600 text-center mb-4">{{ $department->description }}</p>
                        <div class="text-center">
                            <span class="text-blue-600 font-medium">{{ $department->teachers_count }} nafar o‘qituvchi</span>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </section>
    <!-- Swiper JS -->
    <script>
        const swiper = new Swiper(".teacherSwiper", {
            loop: true, // Bu juda muhim
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            slidesPerView: 1,
            spaceBetween: 30,
            breakpoints: {
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
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
</body>
</html>
