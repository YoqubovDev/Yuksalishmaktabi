<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turin Akademik Litsey - Yutuqlar</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
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
                <p class="text-blue-100 max-w-2xl mx-auto">Iqtidorli talabalarimizning yuksak natijalari va a'lo
                    yutuqlarini e'tirof etamiz</p>
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
                <div
                    class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <div class="h-48 w-full">
                        @if($achievement->image)
                        <img src="{{ asset('storage/' . $achievement->image) }}" class="w-full h-full object-cover"
                            alt="{{ $achievement->name }}">
                        @else
                        <div
                            class="w-full h-full bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
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
                            <span
                                class="inline-block px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-xs font-medium">
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
    <x-footer></x-footer>


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