<x-header></x-header>
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
        <p class="text-gray-600 max-w-2xl mx-auto">Jizzax Shahar Yuksalish maktabi bilan bog'lanish uchun quyidagi ma'lumotlardan foydalanishingiz mumkin</p>
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
<x-footer></x-footer>

</body>
</html>
