<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turin Akademik Litsey - Yutuqlar</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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

        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 1rem;
            }

            nav ul {
                gap: 1rem;
            }
        }

        .badge-oltin {
            background-color: #fef3c7;
            color: #92400e;
        }

        .badge-kumush {
            background-color: #f3f4f6;
            color: #374151;
        }

        .badge-bronza {
            background-color: #fef3c7;
            color: #78350f;
        }

        .badge-default {
            background-color: #dbeafe;
            color: #1e40af;
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
                        <li><a href="{{route('teachers')}}">O'qituvchilar</a></li>
                        <li><a href="{{route('subject')}}">Dars jarayonlari</a></li>
                        <li><a href="{{route('achievements')}}">Yutuqlar</a></li>
                        <li><a href="{{route('contact')}}">Aloqa</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Achievements Section Header -->
    <section id="achievements" class="py-16 bg-gradient-to-b from-blue-900 to-blue-800">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-white mb-4">Talabalar yutuqlari</h2>
                <div class="w-24 h-1 bg-yellow-400 mx-auto mb-6"></div>
                <p class="text-blue-100 max-w-2xl mx-auto">Iqtidorli talabalarimizning yuksak natijalari va a'lo yutuqlarini e'tirof etamiz</p>
            </div>
        </div>
    </section>

    <!-- Achievements Cards - Database dan ma'lumotlar -->
    <section class="py-16 -mt-24">
        <div class="container mx-auto px-4">
            @if($achievements->isEmpty())
                <div class="text-center py-12">
                    <p class="text-gray-600 text-xl">Hozircha yutuqlar qo'shilmagan</p>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($achievements as $achievement)
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                            <div class="h-48 w-full">
                                @if($achievement->image)
                                    <img src="{{ asset('storage/' . $achievement->image) }}" 
                                         class="w-full h-full object-cover" 
                                         alt="{{ $achievement->name }}">
                                @else
                                    <div class="w-full h-full bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                                        <i class="fas fa-trophy text-white text-6xl"></i>
                                    </div>
                                @endif
                            </div>
                            <div class="p-6">
                                <div class="flex justify-between items-center mb-4">
                                    <h3 class="text-xl font-bold text-gray-800">{{ $achievement->name }}</h3>
                                    @if($achievement->badge)
                                        <span class="px-3 py-1 rounded-full text-sm font-medium
                                            @if(stripos($achievement->badge, 'oltin') !== false || stripos($achievement->badge, 'gold') !== false)
                                                badge-oltin
                                            @elseif(stripos($achievement->badge, 'kumush') !== false || stripos($achievement->badge, 'silver') !== false)
                                                badge-kumush
                                            @elseif(stripos($achievement->badge, 'bronza') !== false || stripos($achievement->badge, 'bronze') !== false)
                                                badge-bronza
                                            @else
                                                badge-default
                                            @endif
                                        ">
                                            {{ $achievement->badge }}
                                        </span>
                                    @endif
                                </div>
                                <p class="text-gray-600 mb-4">{{ $achievement->description }}</p>
                                @if($achievement->category)
                                    <div class="mt-4">
                                        <span class="inline-block px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-xs font-medium">
                                            <i class="fas fa-tag mr-1"></i>{{ $achievement->category }}
                                        </span>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <!-- Achievements Counter -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-5xl font-bold text-blue-600 mb-2 counter" data-target="22">0</div>
                    <div class="text-gray-600 font-medium">CEFR sertifikatlari</div>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-bold text-blue-600 mb-2 counter" data-target="97">0</div>
                    <div class="text-gray-600 font-medium">Universitetlarga qabul %</div>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-bold text-blue-600 mb-2 counter" data-target="62">0</div>
                    <div class="text-gray-600 font-medium">IELTS yuqori balllar</div>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-bold text-blue-600 mb-2 counter" data-target="14">0</div>
                    <div class="text-gray-600 font-medium">SAT yuqori balllar</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="bg-gradient-to-b from-turin-dark to-gray-900 text-white py-16">
        <div class="container mx-auto px-6 mb-10">
            <div class="flex flex-col md:flex-row items-center justify-between border-b border-gray-700 pb-10">
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

                <div class="flex flex-wrap justify-center gap-6">
                    <div class="flex items-center bg-white bg-opacity-10 rounded-lg px-4 py-3">
                        <div class="bg-unipix-light p-2 rounded-full mr-3">
                            <i class="fas fa-phone-alt text-white"></i>
                        </div>
                        <div>
                            <div class="text-gray-400 text-xs">Telefon</div>
                            <a href="tel:+998712462331" class="text-white hover:text-unipix-light transition-colors duration-300">(+99871) 246-23-31</a>
                        </div>
                    </div>

                    <div class="flex items-center bg-white bg-opacity-10 rounded-lg px-4 py-3">
                        <div class="bg-unipix-light p-2 rounded-full mr-3">
                            <i class="fas fa-envelope text-white"></i>
                        </div>
                        <div>
                            <div class="text-gray-400 text-xs">Email</div>
                            <a href="mailto:info@turinal.uz" class="text-white hover:text-unipix-light transition-colors duration-300">info@turinal.uz</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-10 px-6">
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

            <div>
                <h3 class="text-xl font-bold mb-6 relative">
                    <span class="bg-unipix-light h-1 w-8 absolute -bottom-2 left-0"></span>
                    Aloqada qoling
                </h3>
                <p class="text-gray-300 mb-6">
                    Turin Politexnika Universitetining Toshkent shahridagi filiali haqida yangiliklar, tadbirlar va e'lonlardan xabardor bo'lish uchun obuna bo'ling.
                </p>
                <div class="flex justify-between items-center">
                    <p class="text-gray-400 text-sm">
                        <i class="fas fa-headset mr-2 text-unipix-light"></i> Yordam xizmati: 24/7 faol
                    </p>
                    <a href="tel:+998712462331" class="bg-unipix-light text-white px-4 py-2 rounded-lg hover:bg-unipix-blue transition-colors duration-300">
                        Bog'lanish
                    </a>
                </div>
            </div>
        </div>

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

    <!-- Counter Animation Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const counters = document.querySelectorAll('.counter');
            const speed = 200;

            const animateCounter = (counter) => {
                const target = +counter.getAttribute('data-target');
                const increment = target / speed;
                let count = 0;

                const updateCount = () => {
                    count += increment;
                    if (count < target) {
                        counter.innerText = Math.ceil(count);
                        setTimeout(updateCount, 10);
                    } else {
                        counter.innerText = target;
                    }
                };

                updateCount();
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounter(entry.target);
                        observer.unobserve(entry.target);
                    }
                });
            });

            counters.forEach(counter => observer.observe(counter));
        });
    </script>
</body>
</html>