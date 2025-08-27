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
            height: 600px;
        }

        .main-slider iframe {
            width: 100%;
            height: 100%;
            object-fit: contain;
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
                height: 400px;
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
<body>
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

<section class="gallery-section py-10">
    <div class="container mx-auto px-4">
        <h2 class="section-title text-3xl font-bold mb-6 text-center">Videogalereya</h2>

        @php
            function getYoutubeId($videolar) {
                if (str_contains($videolar, 'youtu.be/')) {
                    return \Illuminate\Support\Str::after($videolar, 'youtu.be/');
                } elseif (str_contains($videolar, 'watch?v=')) {
                    return \Illuminate\Support\Str::after($videolar, 'v=');
                } elseif (str_contains($videolar, 'embed/')) {
                    return \Illuminate\Support\Str::after($videolar, 'embed/');
                } else {
                    return '';
                }
            }
        @endphp

        <div class="main-slider space-y-10">
            @foreach ($videolar as $video)
                <div class="slide">
                    <iframe
                        src="https://www.youtube.com/embed/{{ getYoutubeId($video->url) }}"
                        title="{{ $video->title }}"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                    ></iframe>
                    <div class="slide-info">
                        <h3>{{ $video->title }}</h3>
                        <p>{{ \Carbon\Carbon::parse($video->created_at)->format('Y-m-d') }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="nav-slider mt-10 grid grid-cols-2 sm:grid-cols-4 gap-4">
            @foreach ($videolar as $video)
                <div class="slide cursor-pointer transition-transform transform hover:scale-105">
                    <img
                        class="rounded-lg shadow-md w-full h-auto"
                        src="https://img.youtube.com/vi/{{ getYoutubeId($video->url) }}/mqdefault.jpg"
                        alt="{{ $video->title }}">
                </div>
            @endforeach
        </div>
    </div>
</section>

<script>
    $(document).ready(function(){
        $('.main-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            asNavFor: '.nav-slider',
            autoplay: true,
            autoplaySpeed: 5000,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        dots: true
                    }
                }
            ]
        });

        $('.nav-slider').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '.main-slider',
            dots: false,
            centerMode: true,
            focusOnSelect: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2
                    }
                }
            ]
        });

        $('.category-btn').click(function(){
            $('.category-btn').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>
</body>
</html>
